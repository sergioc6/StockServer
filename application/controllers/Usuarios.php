<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Usuarios
 *
 * @author SergioC
 */
include 'Controller_Base.php';

class Usuarios extends Controller_Base {

    public function __construct() {
        parent::__construct();
    }

    public function Usuarios_view() {
        $this->load->model('Usuarios_model');
        $data['usuarios'] = $this->Usuarios_model->obtenerUsuarios();
        $this->load->view('usuarios/usuarios_view', $data);
    }

    public function agregarUsuario_view() {
        $this->load->view('usuarios/agregarusuario_view');
    }

    public function agregarUsuario() {
        //Reglas de validación para el formulario
        $this->form_validation->set_rules('apellido', 'Apellido', 'required', array(
            'required' => 'Debe ingresar el apellido del usuario.'));
        $this->form_validation->set_rules('nombres', 'Nombres', 'required', array(
            'required' => 'Debe ingresar los nombres del usuario.'));
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[usuarios.email]', array(
            'required' => 'Debe ingresar el email del usuario.',
            'valid_email' => 'Debe ingresar un email válido.',
            'is_unique' => 'Ya existe un usuario registrado con ese email.'));
        $this->form_validation->set_rules('contrasenia', 'Contraseña', 'required|min_length[8]|alpha_numeric', array(
            'required' => 'Debe ingresar la contraseña.',
            'min_length' => 'La contraseña es muy corta.',
            'alpha_numeric' => 'La contraseña debe contener letras y números.'));
        $this->form_validation->set_rules('contrasenia2', 'Contraseña Repetida', 'required|min_length[8]|alpha_numeric|matches[contrasenia]', array(
            'required' => 'Debe reescribir la contraseña.',
            'min_length' => 'La contraseña es muy corta.',
            'alpha_numeric' => 'La contraseña debe contener letras y números.',
            'matches' => 'La contraseña no coincide con la anterior.'));

        //Si la validación es FALSA -> recargo la página con los errores.
        if ($this->form_validation->run() == FALSE) {
            $this->agregarUsuario_view();
        }
        // Si la validación es VERDADERA creo la Session.
        else {
            $apellido = $this->input->post('apellido');
            $nombres = $this->input->post('nombres');
            $email = $this->input->post('email');
            $contrasenia = $this->input->post('contrasenia');

            $this->load->model('Usuarios_model');
            $id_usuario = $this->Usuarios_model->insertarUsuario($apellido, $nombres, $email, $contrasenia);
            $data['nuevo_usuario'] = $this->Usuarios_model->obtenerUsuarioPorID($id_usuario);
            
            $this->load->view('usuarios/agregarusuario_success_view', $data);
        }
    }
    
    
    public function eliminarUsuario($id_usuario) {
        $this->load->model('Usuarios_model');
        $this->Usuarios_model->deleteUsuarioPorID($id_usuario);
        
        redirect(base_url('Usuarios/Usuarios_view'));
    }

}
