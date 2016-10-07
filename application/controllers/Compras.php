<?php

class Compras extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function Compras_view() {
        $this->load->view('compras_view');
    }

}
