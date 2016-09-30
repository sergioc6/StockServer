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
    
    
    public function deleteProveedorPorID($id_prov) {
        $this->db->query('DELETE FROM proveedores WHERE id_proveedor='.$id_prov);
    }

}
