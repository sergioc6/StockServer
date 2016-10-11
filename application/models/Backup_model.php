<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Backup_model
 *
 * @author SergioC
 */
class Backup_model extends CI_Model {

    public function obtenerUltimoBackup() {
        $query = $this->db->query('SELECT id_backup, MAX(fecha_hora) AS fecha_hora FROM backups');
        return $query->result()[0];
    }

    public function insertarBackup() {
        $datetime_now = date('Y-m-d H:i:s');
        $data = array(
            'id_backup' => 0,
            'fecha_hora' => $datetime_now
        );

        $this->db->insert('backups', $data);
    }

}
