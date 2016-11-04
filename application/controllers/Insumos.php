<?php

class Insumos extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function Insumos_view() {
        $this->load->model('Insumos_model');
        $data['insumos'] = $this->Insumos_model->obtenerInsumos();

        $this->load->view('insumos/insumos_view', $data);
    }

    public function agregarinsumo_view() {
        $this->load->model('Insumos_model');
        $data['sectores'] = $this->Insumos_model->obtenerSectoresDeInsumos();
        $data['tipos_insumos'] = $this->Insumos_model->obtenerTiposDeInsumos();

        $this->load->view('insumos/agregarinsumo_view', $data);
    }

    public function agregarInsumo() {
        $nombre = $this->input->post('nombre');
        $descripcion = $this->input->post('descripcion');
        $stock_min = $this->input->post('stock_min');
        $stock_max = $this->input->post('stock_max');
        $sector = $this->input->post('sector');
        $tipo = $this->input->post('tipo');

        $this->load->model('Insumos_model');
        $this->Insumos_model->insertarInsumo($nombre, $descripcion, $stock_min, $stock_max, $sector, $tipo);

        $data['nuevo_insumo'] = $this->Insumos_model->obtenerInsumoPorNombre($nombre);
        $this->load->view('insumos/agregarinsumo_success_view', $data);
    }

    public function eliminarInsumo($id_insumo) {
        $this->load->model('Insumos_model');
        $this->Insumos_model->deleteInsumo($id_insumo);

        redirect(base_url('Insumos/Insumos_view'));
    }

    public function sectoresinsumos_view() {
        $this->load->model('Insumos_model');
        $data['sectores'] = $this->Insumos_model->obtenerSectoresDeInsumos();

        $this->load->view('insumos/sectoresdeposito_view', $data);
    }

    public function agregarsector_view() {
        $this->load->view('insumos/agregarsector_view');
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
            $this->load->view('insumos/agregarsector_success_view', $data);
        }
    }

    public function editarInsumo_view($id_insumo) {
        $this->load->model('Insumos_model');
        $data['insumo'] = $this->Insumos_model->obtenerInsumoPorID($id_insumo);
        $data['sectores'] = $this->Insumos_model->obtenerSectoresDeInsumos();
        $data['tipos_insumos'] = $this->Insumos_model->obtenerTiposDeInsumos();

        $this->load->view('insumos/editarinsumo_view', $data);
    }

    public function editarInsumo() {
        $id_insumo = $this->input->post('id_insumo');
        $nombre_insumo = $this->input->post('nombre');
        $descripcion = $this->input->post('descripcion');
        $stock_min = $this->input->post('stock_min');
        $stock_max = $this->input->post('stock_max');
        $tipo_insumo = $this->input->post('tipo');
        $sector = $this->input->post('sector');

        $this->load->model('Insumos_model');
        $this->Insumos_model->editarInsumo($id_insumo, $nombre_insumo, $descripcion, $stock_min, $stock_max, $sector, $tipo_insumo);

        $data['insumo_edit'] = $this->Insumos_model->obtenerInsumoPorID($id_insumo);
        $this->load->view('insumos/editarinsumo_success_view', $data);
    }

}
