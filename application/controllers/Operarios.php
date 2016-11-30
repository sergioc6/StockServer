<?php
defined('BASEPATH') OR exit('No direct script access allowed');



include 'Controller_Base.php';

class Operarios extends Controller_Base {

    public function __construct() {
        parent::__construct();
    }

    public function Operarios_view() {
        $this->load->model('Operarios_model');
        $data['operarios'] = $this->Operarios_model->obtenerOperarios();
        $this->load->view('operarios/operarios_view', $data);
    }

    public function agregaroperario_view() {
        $this->load->view('operarios/agregaroperario_view');
    }

    public function agregarOperario() {

        $apellido = $this->input->post('apellido');
        $nombre = $this->input->post('nombre');
        $email = $this->input->post('email');
        $pass = $this->input->post('pass');

        // Validamos los inputs
        $this->form_validation->set_rules('apellido', 'Apellido del operario', 'required');
        $this->form_validation->set_rules('nombre', 'Nombre del operario', 'required');
        $this->form_validation->set_rules('email', 'Email del operario', 'required');
        $this->form_validation->set_rules('pass', 'Password del operario', 'required');

        // Mostramos los mensajes en un lenguaje adecuado
        $this->form_validation->set_message('required', '%s es obligatorio.');
        $this->form_validation->set_message('numeric', '%s debe ser numérico.');

        /*
         * Realizamos la validación de los inputs.
         * Si está todo ok, la operación de agregarOperario se realiza sin problemas
         * En caso contrario, se recargará el formulario con los mensajes de error pertinentes
         */

        if ($this->form_validation->run() == TRUE) {
            if ($_FILES["fotoOperario"]["error"] != 0) {

                $this->load->model('Operarios_model');
                $this->Operarios_model->insertarOperario($email, $pass, $apellido, $nombre, null);
                $data['nuevo_operario'] = $this->Operarios_model->obtenerOperarioPorEmail($email);
                $this->load->view('operarios/agregaroperario_success_view', $data);
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

                $this->load->view('operarios/agregaroperario_success_view', $data);
            }
        } else {
            $this->agregaroperario_view();
        }
    }

    public function verFichaOperario_view($id_operario) {

        $this->load->model('Operarios_model');
        $data['operario'] = $this->Operarios_model->obtenerOperarioPorID($id_operario);
        $this->load->view('operarios/verfichaoperario_view', $data);
    }

    public function editarOperario_view($id_operario) {
        $this->load->model('Operarios_model');

        $data['operario'] = $this->Operarios_model->obtenerOperarioPorID($id_operario);

        $this->load->view('operarios/editaroperario_view', $data);
    }

    public function editarOperario() {

        $id_operario = $this->input->post('id_operario');
        $apellido = $this->input->post('apellido');
        $nombre = $this->input->post('nombre');
        $email = $this->input->post('email');
        $pass = $this->input->post('pass');

        if ($_FILES["fotoOperario"]["error"] != 0) {

            $this->load->model('Operarios_model');
            $this->Operarios_model->editarOperario($id_operario, $email, $pass, $apellido, $nombre, null);
            $data['operario_edit'] = $this->Operarios_model->obtenerOperarioPorEmail($email);
            $this->load->view('operarios/editaroperario_success_view', $data);
        } else {
            $this->load->model('Operarios_model');
            $id_operario = $this->Operarios_model->editarOperario($id_operario, $email, $pass, $apellido, $nombre, null);

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
            $data['operario_edit'] = $this->Operarios_model->obtenerOperarioPorEmail($email);

            $this->load->view('operarios/editaroperario_success_view', $data);
        }
    }

}
