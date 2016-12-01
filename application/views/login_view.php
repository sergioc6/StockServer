<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<!doctype html>
<html>
    <head>
        <title>Login</title>

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

        <!--Pulling Awesome Font -->
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

        <!-- Bootstrap Core CSS -->
        <link href= "<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="<?php echo base_url('assets/css/metisMenu.min.css'); ?>" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="<?php echo base_url('assets/css/sb-admin-2.css'); ?>" rel="stylesheet">

        <!-- Labels Validation -->
        <link href="<?php echo base_url('assets/css/color_labels_validation.css'); ?>" rel="stylesheet" type="text/css">

        <!-- Custom Fonts -->
        <link href="<?php echo base_url('assets/css/font-awesome.min.css'); ?>" rel="stylesheet" type="text/css">

        <!-- Login styles -->
        <link href="<?php echo base_url('assets/css/style-login2.css'); ?>" rel="stylesheet" type="text/css">

    </head>
    <body>
        <div class="content">
            <h1><b>Ingresar al Sistema</b></h1>
            <form action="<?php echo base_url('Login/iniciarSesion'); ?>" autocomplete="off" method="POST">

                <div class="content1">
                    <input type="text" name="email" value="Email" onfocus="this.value = '';" onblur="if (this.value === '') {
                                this.value = 'Email';
                            }">
                </div>

                <div class="email-login-error">
                    <?php echo form_error('email'); ?>
                </div>

                <div class="content2">
                    <input type="password" name="contrasenia" value="Contraseña" onfocus="this.value = '';" onblur="if (this.value === '') {
                                this.value = 'Email';
                            }">
                </div>

                <div class="password-login-error">
                    <?php echo form_error('contrasenia'); ?>
                </div>

                <div class="form-group">
                    <div>
                        <button type="submit">Iniciar Sesión</button>
                    </div>    
                </div>

            </form>
        </div>

        <!-- jQuery -->
        <script src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/js/jquery.validate.min.js'); ?>"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="<?php echo base_url('assets/js/metisMenu.min.js'); ?>"></script>

        <!-- Custom Theme JavaScript -->
        <script src="<?php echo base_url('assets/js/sb-admin-2.js'); ?>"></script>      

        <!-- Validar Login JavaScript -->
        <script src="<?php echo base_url('assets/js/ValidarLogin.js'); ?>"></script>

    </body>
</html>
