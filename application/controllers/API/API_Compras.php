<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of API_Compras
 *
 * @author SergioC
 */
include 'API_Base.php';

class API_Compras extends API_Base {

    public function confirmarRecepcionCompra() {
        $num_orden_compra = json_decode($this->security->xss_clean($this->input->raw_input_stream));

        $this->load->model('Compras_model');
        $compra = $this->Compras_model->obtenerCompraPorNumOC($num_orden_compra->numordencompra);
        if ($compra == NULL) {
            $this->output->set_status_header(404);
            exit("No existe Compra registrada con ese Numero de OC");
        } else {
            $this->Compras_model->confirmarRecepcionOC($num_orden_compra->numordencompra);
            $compra = $this->Compras_model->obtenerCompraPorNumOC($num_orden_compra->numordencompra);

            $compra_modificada = $this->Compras_model->obtenerCompraPorNumOC($num_orden_compra->numordencompra);
            $this->output->set_status_header(200);
            $this->output->set_content_type('application/json');
            $this->output->set_output(json_encode($compra_modificada));
        }
    }

}
