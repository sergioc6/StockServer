<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Controller_Base
 *
 * @author SergioC
 */
class Controller_Base extends CI_Controller {

    public function __construct() {
        parent::__construct();
        //Aqui abajo se validará la Session
        if ($this->session->userdata('logged_in') !== TRUE) {
            $this->output->set_status_header(401);
            $this->load->view('loginnecessary_view');
            exit();
        }
    }

}
