<?php
defined('BASEPATH') OR exit('No direct script access allowed');

include 'Controller_Base.php';

class Compras extends Controller_Base {

    public function __construct() {
        parent::__construct();
    }

    public function Compras_view() {
        $this->load->view('compras/compras_view');
    }

    public function selectProveedorCompra_view() {
        $this->cart->destroy();
        $this->load->model('Proveedores_model');
        $data['proveedores'] = $this->Proveedores_model->obtenerProveedores();

        $this->load->view('compras/selectproveedorcompra_view', $data);
    }

    public function seleccionarProveedorCompra() {
        $id_prov = $this->input->post('proveedor');
        redirect(base_url('Compras/cargarInsumosCompraProv_view/' . $id_prov));
    }

    public function cargarInsumosCompraProv_view($id_prov) {
        $this->load->model('Proveedores_model');
        $this->load->model('Insumos_model');

        $data['proveedor'] = $this->Proveedores_model->obtenerProveedorPorID($id_prov);
        $data['insumos'] = $this->Insumos_model->obtenerInsumosDeProv($id_prov);


        $this->load->view('compras/cargarinsumosproveedorcompra_view', $data);
    }

    public function cargarInsumoACompra() {
        $id_proveedor = $this->input->post('id_proveedor');
        $id_insumo = $this->input->post('insumo');
        $cantidad = $this->input->post('cantidad');

        
        // Validamos los inputs
        $this->form_validation->set_rules('cantidad', 'La cantidad del insumo', 'required|numeric');
        
        // Mostramos los mensajes en un lenguaje adecuado
        $this->form_validation->set_message('required', '%s es obligatorio/a.');
        $this->form_validation->set_message('numeric', '%s debe ser numérico/a.');
        
        if ($this->form_validation->run() == TRUE) {        
        //Busco el INSUMO en la BD
        $this->load->model('Insumos_model');
        $insumo = $this->Insumos_model->obtenerPrecioDeInsumoYProv($id_insumo, $id_proveedor);
        $this->agregarInsumoACarrito($insumo, $cantidad, $id_proveedor);

        //var_dump($this->cart->contents());

        redirect(base_url('Compras/cargarInsumosProvSucces_view/' . $id_proveedor));
        }
        else
        {
            $this->cargarInsumosCompraProv_view($id_proveedor);
        }
    }

    private function agregarInsumoACarrito($insumo, $cantidad, $id_proveedor) {
        $data = array(
            'id' => $insumo->id_insumo,
            'name' => $insumo->nombre_insumo,
            'id_proveedor' => $id_proveedor,
            'qty' => $cantidad,
            'price' => $insumo->precio,
            'precio_tot' => $cantidad * $insumo->precio
        );
        $this->cart->insert($data);
    }

    public function cargarInsumosProvSucces_view($id_prov) {
        $this->load->model('Proveedores_model');
        $this->load->model('Insumos_model');

        $data['proveedor'] = $this->Proveedores_model->obtenerProveedorPorID($id_prov);
        $data['insumos'] = $this->Insumos_model->obtenerInsumosDeProv($id_prov);

        $this->load->view('compras/cargarinsumosproveedorcompra_success_view', $data);
    }
    
    public function confirmarCompra_view($id_prov) {
        $this->load->model('Proveedores_model');
        $this->load->model('Compras_model');

        $data['numero_oc'] = $this->Compras_model->obtenerSiguienteNumeroOC();
        $data['proveedor'] = $this->Proveedores_model->obtenerProveedorPorID($id_prov);
        $this->load->view('compras/confirmarcompra_view', $data);
    }
    
    public function realizarCompra() {
        $this->load->model('Compras_model');
        
        //Agrego la Compra a la DB
        $numero_oc = $this->input->post('numero_oc');
        $id_proveedor = $this->input->post('id_proveedor');
        $monto = $this->cart->total();
        $id_compra = $this->Compras_model->agregarCompra($numero_oc, $id_proveedor, $monto);
        
        //Cargo los Insumos a la compra
        foreach ($this->cart->contents() as $item){
            $cant = $item['qty'];
            $id_insumo = $item['id'];
            for ($index = 0; $index < $cant; $index++) {
                $this->Compras_model->agregarInsumoACompra($id_compra, $id_insumo);
            }
        }
        
        $data['compra'] = $this->Compras_model->obtenerCompraPorIDCompra($id_compra);
        
    }

    
    

}
