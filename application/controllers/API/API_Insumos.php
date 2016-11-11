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


class API_Insumos extends API_Base{
   
    
    /**
     * Función obtenerProveedores.
     * Obtiene todos los proveedores de la base de datos.
     * Devuelve un paquete JSON para que sea tratado por la app del
     * celular.
     */
    
    
    public function insertarInsumo() {
        
        $insumos = json_decode($this->security->xss_clean($this->input->raw_input_stream));
        
        
        $this->load->model('Insumos_model');
        $this->Insumos_model->insertarInsumo($insumos->nombre_insumo, $insumos->descripcion, $insumos->stock_min, $insumos->stock_max, $insumos->sector, $insumos->tipo_insumo);
    }
    
    public function obtenerInsumos()
    {
        $this->load->model('Insumos_model');
        $lista_insumos = $this->Insumos_model->obtenerInsumos();

        $this->output->set_content_type('application/json');
        $this->output->set_output(json_encode($lista_insumos));
    }
    
    
    
}
