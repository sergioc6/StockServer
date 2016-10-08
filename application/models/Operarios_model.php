<?php

/**
 * Description of Proveedores_model
 *
 * @author SergioC
 */
class Operarios_model extends CI_Model {

    /**
     * Inserta un nuevo operario en la BD
     * @param type $email_op: email del operario que va ser usado como entrada para el login.
     * @param type $pass_op: contraseña del operario para ingresar al sistema.
     * @param type $apellido_op: apellido del operario.
     * @param type $nombre_op: nombre del operario.
     */
    public function insertarOperario($email_op, $pass_op, $apellido_op, $nombre_op) {
        $data = array(
            'id_operario' => 0,
            'email' => $email_op,
            'pass' => $pass_op,
            'apellido' => $apellido_op,
            'nombre' => $nombre_op
        );

        $this->db->insert('operarios', $data);
        return $this->db->insert_id();
    }

    /**
     * Retorna los proveedores de la DB
     * @return type
     */
    public function obtenerOperarios() {
        $query = $this->db->query('SELECT * FROM operarios');
        return $query->result();
    }

    public function obtenerOperarioPorID($id_operario) {
        $query = $this->db->query('SELECT * FROM operarios WHERE id_operario=' . $id_operario);
        return $query->result()[0];
    }

    public function obtenerOperarioPorEmail($email) {
        $query = $this->db->query('SELECT * FROM operarios WHERE email="' . $email.'"');
        return $query->result()[0];
    }
    
    public function cargarFotoAOperario($id_operario, $foto_path) {
        $data = array(
            'foto_operario' => $foto_path
        );
        $this->db->where('id_operario', $id_operario);
        $this->db->update('operarios', $data);
    }
}