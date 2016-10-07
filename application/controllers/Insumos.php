<?php

class Insumos extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function Insumos_view() {
        $this->load->model('Insumos_model');
        $data['insumos'] = $this->Insumos_model->obtenerInsumos();

        $this->load->view('insumos_view', $data);
    }

    public function agregarinsumo_view() {
        $this->load->model('Insumos_model');
        $data['sectores'] = $this->Insumos_model->obtenerSectoresDeInsumos();
        $data['tipos_insumos'] = $this->Insumos_model->obtenerTiposDeInsumos();

        $this->load->view('agregarinsumo_view', $data);
    }

    public function agregarInsumo() {
        $nombre = $this->input->post('nombre');
        $descripcion = $this->input->post('descripcion');
        $sector = $this->input->post('sector');
        $tipo = $this->input->post('tipo');

        $this->load->model('Insumos_model');
        $this->Insumos_model->insertarInsumo($nombre, $descripcion, $sector, $tipo);

        $data['nuevo_insumo'] = $this->Insumos_model->obtenerInsumoPorNombre($nombre);
        $this->load->view('agregarinsumo_success_view', $data);
    }

    public function eliminarInsumo($id_insumo) {
        $this->load->model('Insumos_model');
        $this->Insumos_model->deleteInsumo($id_insumo);

        redirect(base_url('Insumos/Insumos_view'));
    }
    
    
    public function sectoresinsumos_view() {
        $this->load->model('Insumos_model');
        $data['sectores'] = $this->Insumos_model->obtenerSectoresDeInsumos();
        
        $this->load->view('sectoresdeposito_view', $data);
    }
    
    public function agregarsector_view() {
        $this->load->view('agregarsector_view');        
    }
    
    public function agregarSector() {
        $nombre_sector = $this->input->post('nombre_sector');
        $latitud = $this->input->post('latitud');
        $longitud = $this->input->post('longitud');
        
        $this->load->model('Insumos_model');
        $this->Insumos_model->agregarSector($nombre_sector, $latitud, $longitud);
        
        $data['nuevo_sector'] = $this->Insumos_model->obtenerSectorPorNombre($nombre_sector);
        $this->load->view('agregarsector_success_view', $data);
        
        
    }

}
