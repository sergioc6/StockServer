<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Login_model
 *
 * @author PC 27
 */
class Login_model extends CI_Model {

    public function existeEmailUsuarioRegistrado($email_usuario) {
        $query = $this->db->query("SELECT * FROM usuarios u WHERE u.email='" . $email_usuario . "'");
        if (count($query->result()) == 0) {
            return false;
        } else {
            return true;
        }
    }

    public function validarContraseniaUsuario($email_usuario, $contrasenia) {
        $query = $this->db->query("SELECT * FROM usuarios u WHERE u.email= '" . $email_usuario . "' AND u.contrasenia= '" . $contrasenia . "'");
        if (count($query->result()) == 0) {
            return false;
        } else {
            return true;
        }
    }

    public function obtenerUsuarioPorEmail($email_usuario) {
        $query = $this->db->query("SELECT * FROM usuarios u WHERE u.email='" . $email_usuario . "'");
        return $query->result()[0];
    }

    public function existeEmailOperarioRegistrado($email_operario) {
        $query = $this->db->query("SELECT * FROM operarios o WHERE o.email= '" . $email_operario . "'");
        if (count($query->result()) == 0) {
            return false;
        } else {
            return true;
        }
    }

    public function existeOperario($email_operario, $pass) {
        $query = $this->db->query("SELECT * FROM operarios o WHERE o.email= '" . $email_operario . "' AND o.pass= '" . $pass . "'");
        if (count($query->result()) == 0) {
            return false;
        } else {
            return true;
        }
    }

}
