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

}
