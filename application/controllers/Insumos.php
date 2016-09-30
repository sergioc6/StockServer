<?php

class Insumos extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function Insumos_view() {
        $this->load->view('insumos_view');
    }
    
    public function agregarinsumo_view() {
        $this->load->view('agregarinsumo_view');
    }
    
    
    
    

}
