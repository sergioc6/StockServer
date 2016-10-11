<?php

/**
 * Description of Proveedores_model
 *
 * @author SergioC
 */
class Proveedores_model extends CI_Model {

    /**
     * Inserta un nuevo proveedor en la BD
     * @param type $nombre_prov
     * @param type $telefono
     * @param type $localidad
     * @param type $direccion
     * @param type $email
     */
    public function insertarProveedor($nombre_prov, $telefono, $localidad, $direccion, $email) {
        $data = array(
            'id_proveedor' => 0,
            'nombre_proveedor' => $nombre_prov,
            'telefono' => $telefono,
            'localidad' => $localidad,
            'direccion' => $direccion,
            'email' => $email
        );

        $this->db->insert('proveedores', $data);
    }

    /**
     * Retorna los proveedores de la DB
     * @return type
     */
    public function obtenerProveedores() {
        $query = $this->db->query('SELECT * FROM proveedores');
        return $query->result();
    }

    /**
     * Retorna el proveedor del ID pasado como parametro
     * @param type $id_prov
     * @return type
     */
    public function obtenerProveedorPorID($id_prov) {
        $query = $this->db->query('SELECT * FROM proveedores WHERE id_proveedor=' . $id_prov);
        return $query->result()[0];
    }

    /**
     * Retorna el proveedor del nombre pasado como parametro
     * @param type $nom_prov
     * @return type
     */
    public function obtenerProveedorPorNombre($nom_prov) {
        $query = $this->db->query('SELECT * FROM proveedores WHERE nombre_proveedor="' . $nom_prov . '"');
        return $query->result()[0];
    }

    /**
     * Elimina de la BD el proveedor de ID pasado como parametro.
     * @param int $id_prov
     */
    public function deleteProveedorPorID($id_prov) {
        $this->db->query('DELETE FROM proveedores WHERE id_proveedor=' . $id_prov);
    }

    /**
     * Devuelve los insumos asignados a un determinado ID de proveedor.
     * @param type $id_prov
     * @return type
     */
    public function obtenerInsumosPorProveedor($id_prov) {
        $query = $this->db->query('SELECT * FROM insumoxproveedor ip '
                . '         LEFT JOIN insumos i ON ip.id_insumo=i.id_insumo '
                . '         WHERE id_proveedor=' . $id_prov);
        return $query->result();
    }

    public function cargarInsumoAProveedor($precio, $demora_dias, $id_insumo, $id_proveedor) {
        $data = array(
            'id_insumoxprov' => 0,
            'precio' => $precio,
            'demora_dias' => $demora_dias,
            'id_insumo' => $id_insumo,
            'id_proveedor' => $id_proveedor
        );

        $this->db->insert('insumoxproveedor', $data);
    }

    public function editarProveedor($id_proveedor, $nombre_proveedor, $telefono, $localidad, $direccion, $email) {
        $data = array(
            'nombre_proveedor' => $nombre_proveedor,
            'telefono' => $telefono,
            'localidad' => $localidad,
            'direccion' => $direccion,
            'email' => $email
        );

        $this->db->where('id_proveedor', $id_proveedor);
        $this->db->update('proveedores', $data);
    }

}
