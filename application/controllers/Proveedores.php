<?php

class Proveedores extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function Proveedores_view() {
        $this->load->model('Proveedores_model');
        $data['proveedores'] = $this->Proveedores_model->obtenerProveedores();
        $this->load->view('proveedores_view', $data);
    }

    public function agregarproveedor_view() {
        $this->load->view('agregarproveedor_view');
    }

    public function agregarProveedor() {
        $nombre = $this->input->post('nombre');
        $localidad = $this->input->post('localidad');
        $email = $this->input->post('email');
        $direccion = $this->input->post('direccion');
        $telefono = $this->input->post('telefono');

        $this->load->model('Proveedores_model');
        $this->Proveedores_model->insertarProveedor($nombre, $telefono, $localidad, $direccion, $email);
        $data['nuevo_proveedor'] = $this->Proveedores_model->obtenerProveedorPorNombre($nombre);

        $this->load->view('agregarproveedor_success_view', $data);
    }

    public function eliminarProveedor($id_prov) {
        $this->load->model('Proveedores_model');
        $this->Proveedores_model->deleteProveedorPorID($id_prov);

        redirect(base_url('Proveedores/Proveedores_view'));
    }

    public function selectProveedor_view() {
        $this->load->model('Proveedores_model');
        $data['proveedores'] = $this->Proveedores_model->obtenerProveedores();

        $this->load->view('selectproveedor_view', $data);
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

        $this->load->view('cargarinsumosproveedor_view', $data);
    }

    public function cargarInsumosProveedor() {
        $id_proveedor = $this->input->post('id_proveedor');
        $id_insumo = $this->input->post('insumo');
        $precio = $this->input->post('precio');
        $demora_dias = $this->input->post('dias_demora');

        $this->load->model('Proveedores_model');
        $this->Proveedores_model->cargarInsumoAProveedor($precio, $demora_dias, $id_insumo, $id_proveedor);
        
        redirect(base_url('Proveedores/cargarInsumosProvSucces_view/'.$id_proveedor));
    }

    public function cargarInsumosProvSucces_view($id_prov) {
        $this->load->model('Proveedores_model');
        $this->load->model('Insumos_model');

        $data['proveedor'] = $this->Proveedores_model->obtenerProveedorPorID($id_prov);
        $data['insumos'] = $this->Insumos_model->obtenerInsumos();

        $this->load->view('cargarinsumosproveedor_success_view', $data);
    }

}
