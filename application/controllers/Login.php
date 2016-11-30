<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Login
 *
 * @author SergioC
 */
class Login extends CI_Controller {

    public function index() {
        $this->load->view('login_view');
    }

    public function iniciarSesion() {
        //Reglas de validación para el formulario
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|callback_existeEmail', array(
            'required' => 'Debe ingresar su Email',
            'valid_email' => 'Debe ingresar un email válido.',
            'existeEmail' => 'No existe un usuario registrado con ese email.'));
        $this->form_validation->set_rules('contrasenia', 'Contraseña', 'required|min_length[8]', array(
            'required' => 'Debe ingresar su contraseña.',
            'min_length' => 'Su contraseña es muy corta.'));

        //Si la validación es FALSA -> recargo la página con los errores.
        if ($this->form_validation->run() == FALSE) {
            $this->index();
        }
        // Si la validación es VERDADERA creo la Session.
        else {
            $email = $this->input->post('email');
            $contrasenia = $this->input->post('contrasenia');
            //Valido la contrasenia
            if ($this->validarContrasenia($email, $contrasenia) == TRUE) {
                $this->load->library('session');
                $this->load->model('Login_model');
                $usuario = $this->Login_model->obtenerUsuarioPorEmail($email);

                $userdata = array(
                    'id_usuario' => $usuario->id_usuario,
                    'nombre_usuario' => $usuario->nombre_usuario,
                    'apellido_usuario' => $usuario->apellido_usuario,
                    'enail' => $usuario->email,
                    'logged_in' => TRUE
                );
                $this->session->set_userdata($userdata);

                redirect(base_url('Inicio'));
            } else {
                $this->loginFailed();
            }
        }
    }

    public function loginFailed() {
        $this->output->set_status_header(401);
        $this->load->view('loginfailed_view');
    }

    public function cerrarSesion() {
        $this->session->sess_destroy();
        redirect(base_url('Login'));
    }

    /**
     * Método que devuelve TRUE si el email del Usuario se encuntra registrado y FALSE en caso contrario.
     * @param string $email
     * @return bool
     */
    public function existeEmail($email) {
        $this->load->model('Login_model');
        return ($this->Login_model->existeEmailUsuarioRegistrado($email));
    }

    /**
     * Método que devuelve TRUE si la contrasenia y el email son válidos y FALSE en caso contrario.
     * @param string $email
     * @param string $contrasenia
     * @return bool
     */
    private function validarContrasenia($email, $contrasenia) {
        $this->load->model('Login_model');
        return $this->Login_model->validarContraseniaUsuario($email, $contrasenia);
    }

}
