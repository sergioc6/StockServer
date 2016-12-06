<?php
defined('BASEPATH') OR exit('No direct script access allowed');



include 'Controller_Base.php';

class Proveedores extends Controller_Base {

    public function __construct() {
        parent::__construct();
    }

    public function Proveedores_view() {
        $this->load->model('Proveedores_model');
        $data['proveedores'] = $this->Proveedores_model->obtenerProveedores();
        $this->load->view('proveedores/proveedores_view', $data);
    }

    public function agregarproveedor_view() {
        $this->load->view('proveedores/agregarproveedor_view');
    }

    public function agregarProveedor() {
        $nombre = $this->input->post('nombre');
        $localidad = $this->input->post('localidad');
        $email = $this->input->post('email');
        $direccion = $this->input->post('direccion');
        $telefono = $this->input->post('telefono');

        // Validamos los inputs
        $this->form_validation->set_rules('nombre', 'El nombre del proveedor', 'required');
        $this->form_validation->set_rules('localidad', 'La localidad del proveedor', 'required');
        $this->form_validation->set_rules('email', 'El email del proveedor', 'required');
        $this->form_validation->set_rules('direccion', 'La dirección del proveedor', 'required');
        $this->form_validation->set_rules('telefono', 'El teléfono del proveedor', 'required');


        // Mostramos los mensajes en un lenguaje adecuado
        $this->form_validation->set_message('required', '%s es obligatorio/a.');
        $this->form_validation->set_message('numeric', '%s debe ser numérico/a.');

        if ($this->form_validation->run() == TRUE) {
            $this->load->model('Proveedores_model');
            $this->Proveedores_model->insertarProveedor($nombre, $telefono, $localidad, $direccion, $email);
            $data['nuevo_proveedor'] = $this->Proveedores_model->obtenerProveedorPorNombre($nombre);

            $this->load->view('proveedores/agregarproveedor_success_view', $data);
        } else {
            $this->agregarproveedor_view();
        }
    }

    public function eliminarProveedor($id_prov) {
        $this->load->model('Proveedores_model');
        $this->Proveedores_model->deleteProveedorPorID($id_prov);

        redirect(base_url('Proveedores/Proveedores_view'));
    }

    public function selectProveedor_view() {
        $this->load->model('Proveedores_model');
        $data['proveedores'] = $this->Proveedores_model->obtenerProveedores();

        $this->load->view('proveedores/selectproveedor_view', $data);
    }

    public function seleccionarProveedor() {
        $id_prov = $this->input->post('proveedor');
        redirect(base_url('Proveedores/cargarInsumosProv_view/' . $id_prov));
    }

    public function cargarInsumosProv_view($id_prov) {

        $this->load->model('Proveedores_model');
        $this->load->model('Insumos_model');

        $data['proveedor'] = $this->Proveedores_model->obtenerProveedorPorID($id_prov);
        $data['insumos'] = $this->Insumos_model->obtenerInsumos();

        $this->load->view('proveedores/cargarinsumosproveedor_view', $data);
    }

    public function cargarInsumosProveedor() {


        $id_proveedor = $this->input->post('id_proveedor');
        $id_insumo = $this->input->post('insumo');
        $precio = $this->input->post('precio');
        $demora_dias = $this->input->post('dias_demora');

        // Validamos los inputs
        $this->form_validation->set_rules('insumo', 'El insumo del proveedor', 'required');
        $this->form_validation->set_rules('precio', 'El precio del proveedor', 'required|numeric');
        $this->form_validation->set_rules('dias_demora', 'Los días de demora del proveedor', 'required|numeric');

        // Mostramos los mensajes en un lenguaje adecuado
        $this->form_validation->set_message('required', '%s es obligatorio/a.');
        $this->form_validation->set_message('numeric', '%s debe ser numérico/a.');

        if ($this->form_validation->run() == TRUE) {
            $this->load->model('Proveedores_model');
            $this->Proveedores_model->cargarInsumoAProveedor($precio, $demora_dias, $id_insumo, $id_proveedor);

            redirect(base_url('Proveedores/cargarInsumosProvSucces_view/' . $id_proveedor));
        } else {
            $this->cargarInsumosProv_view($id_proveedor);
        }
    }

    public function cargarInsumosProvSucces_view($id_prov) {
        $this->load->model('Proveedores_model');
        $this->load->model('Insumos_model');

        $data['proveedor'] = $this->Proveedores_model->obtenerProveedorPorID($id_prov);
        $data['insumos'] = $this->Insumos_model->obtenerInsumos();

        $this->load->view('proveedores/cargarinsumosproveedor_success_view', $data);
    }

    public function editarProveedor_view($id_prov) {
        $this->load->model('Proveedores_model');
        $data['proveedor'] = $this->Proveedores_model->obtenerProveedorPorID($id_prov);

        $this->load->view('proveedores/editarproveedor_view', $data);
    }

    public function editarProveedor() {
        
        $id_proveedor = $this->input->post('id_proveedor');
        $nombre = $this->input->post('nombre');
        $localidad = $this->input->post('localidad');
        $email = $this->input->post('email');
        $direccion = $this->input->post('direccion');
        $telefono = $this->input->post('telefono');
        
        // Validamos los inputs
        $this->form_validation->set_rules('nombre', 'El nombre del proveedor', 'required');
        $this->form_validation->set_rules('localidad', 'La localidad del proveedor', 'required');
        $this->form_validation->set_rules('email', 'El email del proveedor', 'required');
        $this->form_validation->set_rules('direccion', 'La dirección del proveedor', 'required');
        $this->form_validation->set_rules('telefono', 'El teléfono del proveedor', 'required');


        // Mostramos los mensajes en un lenguaje adecuado
        $this->form_validation->set_message('required', '%s es obligatorio/a.');
        $this->form_validation->set_message('numeric', '%s debe ser numérico/a.');
        
        if ($this->form_validation->run() == TRUE) {
        $this->load->model('Proveedores_model');
        $this->Proveedores_model->editarProveedor($id_proveedor, $nombre, $telefono, $localidad, $direccion, $email);

        $data['proveedor_edit'] = $this->Proveedores_model->obtenerProveedorPorID($id_proveedor);

        $this->load->view('proveedores/editarproveedor_success_view', $data);
        }
        else
        {
            $this->editarProveedor_view($id_proveedor);
        }
    }
    
    public function verFichaProveedor_view($id_prov) {

        $this->load->model('Proveedores_model');
        $data['proveedor'] = $this->Proveedores_model->obtenerProveedorPorID($id_prov);
        $data['insumos_proveedor'] = $this->Proveedores_model->obtenerInsumosPorProveedor($id_prov);

        $this->load->view('proveedores/verfichaproveedor_view', $data);
        
        
        
    }

}
