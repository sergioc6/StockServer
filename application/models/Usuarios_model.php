<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Usuarios_model
 *
 * @author SergioC
 */
class Usuarios_model extends CI_Model {

    public function obtenerUsuarios() {
        $query = $this->db->query('SELECT * FROM usuarios');
        return $query->result();
    }

    public function insertarUsuario($apellido, $nombres, $email, $contrasenia) {
        $hash_contrasenia = password_hash($contrasenia, PASSWORD_DEFAULT);
        $data = array(
            'id_usuario' => 0,
            'apellido_usuario' => $apellido,
            'nombres_usuario' => $nombres,
            'email' => $email,
            'contrasenia' => $hash_contrasenia
        );
        $this->db->insert('usuarios', $data);
        return $this->db->insert_id();
    }

    public function obtenerUsuarioPorID($id_usuario) {
        $query = $this->db->query('SELECT * FROM usuarios u WHERE u.id_usuario=' . $id_usuario);
        return $query->result()[0];
    }

    public function deleteUsuarioPorID($id_usuario) {
        $this->db->where('id_usuario', $id_usuario);
        $this->db->delete('usuarios');
    }

}
