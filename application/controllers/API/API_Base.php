<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of API_Base
 *
 * @author SergioC
 */
class API_Base extends CI_Controller {

    public function __construct() {
        parent::__construct();
        //Aqui abajo se validará el token
        //Se carga la libreria Encrypt y el modelo Login_model
        $this->load->library('encrypt');
        $this->load->model('Login_model');

        //Se obtiene el token encriptado del header
        $token_encrypt = $this->input->get_request_header('token', TRUE);
        //Se desencripta el token
        $token_decrypt = $this->encrypt->decode($token_encrypt);

        //Si el Token es inválido, entonces se devuelve el HTTP STATUS 401
        if ($this->Login_model->existeEmailOperarioRegistrado($token_decrypt) === false) {
            $this->output->set_status_header(401);
            exit("Token inválido");
        }
    }

}
