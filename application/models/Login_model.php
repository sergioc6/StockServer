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

    public function existeEmailUsuarioRegistrado($email) {
        $query = $this->db->query("SELECT * FROM operarios o WHERE o.email= '" . $email . "'");
        if (count($query->result()) == 0) {
            return false;
        } else {
            return true;
        }
    }
    
    public function existeOperario($email, $pass) {
        $query = $this->db->query("SELECT * FROM operarios o WHERE o.email= '" . $email . "' AND o.pass= '" . $pass . "'");        
        if (count($query->result()) == 0) {
            return false;
        } else {
            return true;
        }
        
    }

}
