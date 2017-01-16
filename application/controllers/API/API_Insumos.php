<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of API_Insumos
 *
 * @author SergioC
 */
include 'API_Base.php';

class API_Insumos extends API_Base {

    /**
     * Función obtenerProveedores.
     * Obtiene todos los proveedores de la base de datos.
     * Devuelve un paquete JSON para que sea tratado por la app del
     * celular.
     */
    public function insertarInsumo() {
        $insumos = json_decode($this->security->xss_clean($this->input->raw_input_stream));

        $this->load->model('Insumos_model');
        $id_tipo_insumo = $this->Insumos_model->obtenerIDTipoInsumoPorNombre($insumos->tipo_insumo);
        $id_sector_insumo = $this->Insumos_model->obtenerIDSectorPorNombre($insumos->sector);
        
        $this->Insumos_model->insertarInsumo($insumos->nombre_insumo, $insumos->descripcion, $insumos->stock_min, $insumos->stock_max, $id_tipo_insumo, $id_sector_insumo);
    }

    public function obtenerInsumos() {
        $this->load->model('Insumos_model');
        $lista_insumos = $this->Insumos_model->obtenerInsumos();

        $this->output->set_content_type('application/json');
        $this->output->set_output(json_encode($lista_insumos));
    }
    
    public function obtenerSectores()
    {
        $this->load->model('Insumos_model');
        $lista_sectores = $this->Insumos_model->obtenerSectoresDeInsumos();

        $this->output->set_content_type('application/json');
        $this->output->set_output(json_encode($lista_sectores));
    }
    
    public function obtenerTiposInsumos()
    {
        $this->load->model('Insumos_model');
        $lista_tipos_insumos = $this->Insumos_model->obtenerTiposDeInsumos();
        
        $this->output->set_content_type('application/json');
        $this->output->set_output(json_encode($lista_tipos_insumos));
    }
    
    public function buscarInsumo($id_insumo)
    {
        $this->load->model('Insumos_model');
        $insumo = $this->Insumos_model->obtenerInsumoPorID($id_insumo);
        
        $this->output->set_content_type('application/json');
        $this->output->set_output(json_encode($insumo));
    }

}
