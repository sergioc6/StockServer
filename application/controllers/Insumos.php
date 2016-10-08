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
        
        if ($_FILES["fotoSector"]["error"] != 0) {
                
                $this->load->model('Insumos_model');
                $this->Insumos_model->agregarSector($nombre_sector, $latitud, $longitud, null);
                
            } else {
                $this->load->model('Insumos_model');
                $id_sector = $this->Insumos_model->agregarSector($nombre_sector, $latitud, $longitud, null);
                
                $config['upload_path'] = './fotos/fotos_operarios/';
                $config['allowed_types'] = 'gif|jpg|jpeg|png|bmp';
                $config['file_name'] = $id_sector;
                $config['overwrite'] = TRUE;

                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('fotoOperario')) {
                    $error = array('error' => $this->upload->display_errors());
                } else {
                    $data = array('upload_data' => $this->upload->data());
                    $foto_path = $id_sector . $this->upload->data('file_ext');
                    $this->Operarios_model->cargarFotoASector($id_sector, $foto_path);
                }
                $data['nuevo_sector'] = $this->Insumos_model->obtenerSectorPorNombre($nombre_sector);
                $this->load->view('agregarsector_success_view', $data);
        }
        
    }

}
