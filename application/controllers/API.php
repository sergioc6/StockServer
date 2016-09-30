<?php

/**
 * Description of API
 *
 * @author SergioC
 */
class API extends CI_Controller {

    public function obtenerProveedores() {
        $this->load->model('Proveedores_model');
        $proveedores = $this->Proveedores_model->obtenerProveedores();

        $this->output->set_content_type('application/json');
        $this->output->set_output(json_encode($proveedores));
    }

}
