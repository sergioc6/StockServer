<?php

class Compras extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function Compras_view() {
        $this->load->view('compras_view');
    }
    
    public function selectProveedorCompra_view() {
        $this->load->model('Proveedores_model');
        $data['proveedores'] = $this->Proveedores_model->obtenerProveedores();

        $this->load->view('selectproveedorcompra_view', $data);
    }
    
    public function seleccionarProveedorCompra() {
        $id_prov = $this->input->post('proveedor');
        redirect(base_url('Compras/cargarInsumosProv_view/' . $id_prov));
    }
    
    public function cargarInsumosProv_view($id_prov) {
        $this->load->model('Proveedores_model');
        $this->load->model('Insumos_model');

        $data['proveedor'] = $this->Proveedores_model->obtenerProveedorPorID($id_prov);
        $data['insumos'] = $this->Insumos_model->obtenerInsumos();

        $this->load->view('cargarinsumosproveedorcompra_view', $data);
    }
    
    public function cargarInsumosProveedorAComprar() {
        $id_proveedor = $this->input->post('id_proveedor');
        $id_insumo = $this->input->post('insumo');
        $cantidad = $this->input->post('cantidad');

        $this->load->model('Proveedores_model');
        $this->Proveedores_model->cargarInsumoAProveedor($precio, $demora_dias, $id_insumo, $id_proveedor);

        redirect(base_url('Compras/cargarInsumosProvSucces_view/' . $id_proveedor));
    }
    
    public function cargarInsumosProvSucces_view($id_prov) {
        $this->load->model('Proveedores_model');
        $this->load->model('Insumos_model');

        $data['proveedor'] = $this->Proveedores_model->obtenerProveedorPorID($id_prov);
        $data['insumos'] = $this->Insumos_model->obtenerInsumos();

        $this->load->view('cargarinsumosproveedorcompra_success_view', $data);
    }
    
}