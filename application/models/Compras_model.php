<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Compras_model extends CI_Model {

    public function agregarCompra($numero_oc, $id_proveedor, $monto) {
        $data = array(
            'id_compra' => 0,
            'numero_oc' => $numero_oc,
            'estado' => 'Enviada',
            'fecha' => date("Y-m-d"),
            'id_prov' => $id_proveedor,
            'monto' => $monto
        );
        $this->db->insert('compras', $data);
        return $this->db->insert_id();
    }

    public function agregarInsumoACompra($id_compra, $id_insumo) {
        $data = array(
            'id_ins_dep' => 0,
            'id_compra' => $id_compra,
            'id_insumo' => $id_insumo
        );
        $this->db->insert('insumo_deposito', $data);
    }

    public function obtenerSiguienteNumeroOC() {
        $query = $this->db->query('SELECT MAX(numero_oc) as mayor FROM compras');
        $resultado = $query->result();
        if ($resultado[0]->mayor == NULL) {
            return 1;
        } else {
            return $resultado[0]->mayor++;
        }
    }

}
