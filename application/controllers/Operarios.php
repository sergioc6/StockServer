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
            
            $this->load->model('Operarios_model');
            $this->Operarios_model->insertarOperario($email, $pass, $apellido, $nombre);
            $data['nuevo_operario'] = $this->Operarios_model->obtenerOperarioPorEmail($email);
                    
            $this->load->view('agregaroperario_success_view', $data);
        }
}