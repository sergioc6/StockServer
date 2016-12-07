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
        $query = $this->db->query('SELECT MAX(numero_oc)+1 AS siguiente FROM compras');
        $resultado = $query->result();
        if ($resultado[0]->siguiente == NULL) {
            return 1;
        } else {
            return ($resultado[0]->siguiente);
        }
    }

    public function obtenerCompraPorID($id_compra) {
        $query = $this->db->query('SELECT * FROM compras c '
                . '                 LEFT JOIN proveedores p ON c.id_prov=p.id_proveedor'
                . '                 WHERE c.id_compra=' . $id_compra);
        return $query->result()[0];
    }

    public function obtenerInsumosDeCompra($id_compra) {
        $query = $this->db->query('SELECT id.id_insumo, i.nombre_insumo ,ip.precio, COUNT(id.id_insumo) AS cantidad  '
                . '                 FROM insumo_deposito id '
                . '                 LEFT JOIN insumoxproveedor ip ON id.id_insumo=ip.id_insumo'
                . '                 LEFT JOIN insumos i ON i.id_insumo=id.id_insumo'
                . '                 WHERE id.id_compra=' . $id_compra . ''
                . '                 GROUP BY id.id_insumo');
        return $query->result();
    }

    public function obtenerCompras() {
        $query = $this->db->query('SELECT c.id_compra, c.numero_oc, c.estado, p.nombre_proveedor, c.fecha, c.monto, COUNT(c.id_compra) AS cant_insumos
                                    FROM compras c 
                                    LEFT JOIN proveedores p ON c.id_prov=p.id_proveedor
                                    LEFT JOIN insumo_deposito id ON id.id_compra=c.id_compra
                                    GROUP BY c.id_compra');
        return $query->result();
    }

    public function deleteCompra($id_compra) {
        $this->db->where('id_compra', $id_compra);
        $this->db->delete('compras');
    }

}
