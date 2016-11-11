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
        // Validar Token aqui abajo
        $this->load->library('encrypt');
        $this->load->model('Login_model');
        $token_encrypt = $this->input->get_request_header('token', FALSE);
        
              
        $token_decrypt = $this->encrypt->decode($token_encrypt);
        
        
        if ($this->Login_model->existeEmailUsuarioRegistrado($token_decrypt) === false) {
            
            $this->output->set_content_type('application/json');
            $this->output->set_output(json_encode("Token Invalido"));
        }
    }

}
