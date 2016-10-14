<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Compras_model extends CI_Model {
    
    public function cargarInsumoAProveedorCompra($id_insumo, $cantidad, $id_proveedor) {
        $data = array(
            'id_compra' => 0,
            'cantidad' => $cantidad,
            'id_insumo' => $id_insumo,
            'id_proveedor' => $id_proveedor
        );

        $this->db->insert('compras', $data);
    }
    
    
    
    
    
    
}