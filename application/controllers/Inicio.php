<?php
defined('BASEPATH') OR exit('No direct script access allowed');


include 'Controller_Base.php';


class Inicio extends Controller_Base {

    public function index() {
        $this->load->view('inicio_view');
    }

}
