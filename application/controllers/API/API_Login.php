<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of API_Login
 *
 * @author PC 27
 */
class API_Login extends CI_Controller {

    
    /**
     * Función login()
     * Se crea el JSON que contiene el usuario y la contraseña desde la vista del Login.
     * Luego, mediante el método existeOperario del modelo Login_model, se controla que
     * el usuario y la contraseña ingresados en los inputs sean correctos y existan en 
     * la base de datos.
     * En caso correcto, primero se crea un array con el token y se le asigna el usuario
     * encriptado ($this->encrypt->encode($login->usuario)), y luego construimos el
     * objeto JSON con el usuario encriptado, y ese token es enviado al cliente de Android
     * para que lo administre.
     * En caso contrario, establecemos el header con el error 401 (Acceso no autorizado)
     * y se devuelve el mensaje "Token inválido".
     */
    
    
    
    public function login() {
        $login = json_decode($this->security->xss_clean($this->input->raw_input_stream));

        $this->load->model('Login_model');
        //var_dump($login);

        if($this->Login_model->existeOperario($login->usuario, $login->pass) === false)
        {
            $this->output->set_status_header(401);
        }
        else
        {
            $token = array('token' => $this->encrypt->encode($login->usuario));
            
            $this->output->set_content_type('application/json');
            $this->output->set_output(json_encode($token));
        }
    }

}
