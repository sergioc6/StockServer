<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of API_Proveedores
 *
 * @author SergioC
 */
include 'API_Base.php';

class API_Proveedores extends API_Base {
        
    
    public function obtenerProveedores() {
        $this->load->model('Proveedores_model');
        $proveedores = $this->Proveedores_model->obtenerProveedores();

        $this->output->set_content_type('application/json');
        $this->output->set_output(json_encode($proveedores));
    }

}
