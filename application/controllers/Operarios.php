<?php

class Operarios extends CI_Controller {

	public function __construct() {
        parent::__construct();
    }

	
	public function Operarios_view()
	{
		$this->load->model('Operarios_model');
        $data['operarios'] = $this->Operarios_model->obtenerOperarios();
		$this->load->view('operarios_view',$data);
	}

	public function agregaroperario_view() {
            $this->load->view('agregaroperario_view');
        }
        
        public function agregarOperario() {

            $apellido = $this->input->post('apellido');
            $nombre = $this->input->post('nombre');
            $email = $this->input->post('email');
            $pass = $this->input->post('pass');
                        
            if ($_FILES["fotoOperario"]["error"] != 0) {
                
                $this->load->model('Operarios_model');
                $this->Operarios_model->insertarOperario($email, $pass, $apellido, $nombre, null);
                
            } else {
                $this->load->model('Operarios_model');
                $id_operario = $this->Operarios_model->insertarOperario($email, $pass, $apellido, $nombre, null);
                
                $config['upload_path'] = './fotos/fotos_operarios/';
                $config['allowed_types'] = 'gif|jpg|jpeg|png|bmp';
                $config['file_name'] = $id_operario;
                $config['overwrite'] = TRUE;

                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('fotoOperario')) {
                    $error = array('error' => $this->upload->display_errors());
                } else {
                    $data = array('upload_data' => $this->upload->data());
                    $foto_path = $id_operario . $this->upload->data('file_ext');
                    $this->Operarios_model->cargarFotoAOperario($id_operario, $foto_path);
                }
                $data['nuevo_operario'] = $this->Operarios_model->obtenerOperarioPorEmail($email);
                
                $this->load->view('agregaroperario_success_view', $data);
        }
        }
}