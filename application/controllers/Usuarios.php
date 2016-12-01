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

}
