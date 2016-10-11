<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Backup
 *
 * @author SergioC
 */
class Backup extends CI_Controller {

    public function Backup_view() {
        $this->load->model('Backup_model');
        $data['backup'] = $this->Backup_model->obtenerUltimoBackup();

        $this->load->view('backup_view', $data);
    }

    public function realizarBackup() {
        //Cargo el ultimo Backup en DB
        $this->load->model('Backup_model');
        $this->Backup_model->insertarBackup();

        //Ralizo el Backup
        $this->load->dbutil();
        $backup = $this->dbutil->backup();
        $this->load->helper('file');
        write_file('/path/to/mybackup.gz', $backup);

        $this->load->helper('download');
        force_download('mybackup.gz', $backup);
        
        //Redirecciono
        redirect(base_url('Backup/Backup_view'));
    }

}
