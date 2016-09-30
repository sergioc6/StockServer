<?php

/**
 * Description of Insumos_model
 *
 * @author SergioC
 */
class Insumos_model extends CI_Model {

    public function obtenerTiposDeInsumos() {
        $query = $this->db->query('SELECT * FROM tipo_insumo');
        return $query->result();
    }

    public function obtenerSectoresDeInsumos() {
        $query = $this->db->query('SELECT * FROM sector_insumos');
        return $query->result();
    }

}
