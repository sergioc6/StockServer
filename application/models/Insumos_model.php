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

    /**
     * Inserta un nuevo insumo en la BD.
     * @param type $nombre_insumo
     * @param type $descripcion
     * @param type $sector
     * @param type $tipo_insumo
     */
    public function insertarInsumo($nombre_insumo, $descripcion, $stock_min, $stock_max, $sector, $tipo_insumo) {
        $data = array(
            'id_insumo' => 0,
            'nombre_insumo' => $nombre_insumo,
            'descripcion' => $descripcion,
            'stock_min' => $stock_min,
            'stock_max' => $stock_max,
            'id_tipoinsumo' => $sector,
            'id_sector' => $tipo_insumo
        );

        $this->db->insert('insumos', $data);
        return $this->db->insert_id();
    }

    public function obtenerInsumoPorID($id_insumo) {
        $query = $this->db->query('SELECT i.id_insumo, i.nombre_insumo, i.descripcion, i.stock_min, i.stock_max, i.id_tipoinsumo, t.tipo, i.id_sector, s.sector_deposito '
                . '                 FROM insumos i '
                . '                 LEFT JOIN tipo_insumo t ON t.id_tipoinsumo=i.id_tipoinsumo '
                . '                 LEFT JOIN sector_insumos s ON s.id_sector=i.id_sector '
                . '                 WHERE i.id_insumo="' . $id_insumo . '"');
        return $query->result()[0];
    }

    public function obtenerInsumoPorNombre($nombre_insumo) {
        $query = $this->db->query('SELECT i.id_insumo, i.nombre_insumo, i.descripcion, i.stock_min, i.stock_max, i.id_tipoinsumo, t.tipo, i.id_sector, s.sector_deposito '
                . '                 FROM insumos i '
                . '                 LEFT JOIN tipo_insumo t ON t.id_tipoinsumo=i.id_tipoinsumo '
                . '                 LEFT JOIN sector_insumos s ON s.id_sector=i.id_sector '
                . '                 WHERE i.nombre_insumo="' . $nombre_insumo . '"');
        return $query->result()[0];
    }

    public function obtenerInsumos() {
        $query = $this->db->query('SELECT i.id_insumo, i.nombre_insumo, i.descripcion, i.id_tipoinsumo, t.tipo, i.id_sector, s.sector_deposito '
                . '                 FROM insumos i '
                . '                 LEFT JOIN tipo_insumo t ON t.id_tipoinsumo=i.id_tipoinsumo '
                . '                 LEFT JOIN sector_insumos s ON s.id_sector=i.id_sector');
        return $query->result();
    }

    public function deleteInsumo($id_insumo) {
        $this->db->query('DELETE FROM insumos WHERE id_insumo=' . $id_insumo);
    }

    public function agregarSector($sector_deposito, $latitud, $longitud) {
        $data = array(
            'id_sector' => 0,
            'sector_deposito' => $sector_deposito,
            'latitud' => $latitud,
            'longitud' => $longitud
        );
        $this->db->insert('sector_insumos', $data);
        return $this->db->insert_id();
    }

    public function obtenerSectorPorNombre($nombre_sector) {
        $query = $this->db->query('SELECT * FROM sector_insumos WHERE sector_deposito=\'' . $nombre_sector . '\'');
        return $query->result()[0];
    }

    public function cargarFotoASector($id_sector, $foto_path) {
        $data = array(
            'foto_sector' => $foto_path
        );
        $this->db->where('id_sector', $id_sector);
        $this->db->update('sector_insumos', $data);
    }

    public function editarInsumo($id_insumo, $nombre_insumo, $descripcion, $stock_min, $stock_max, $sector, $tipo_insumo) {
        $data = array(
            'nombre_insumo' => $nombre_insumo,
            'descripcion' => $descripcion,
            'stock_min' => $stock_min,
            'stock_max' => $stock_max,
            'id_tipoinsumo' => $tipo_insumo,
            'id_sector' => $sector
        );

        $this->db->where('id_insumo', $id_insumo);
        $this->db->update('insumos', $data);
    }

}
