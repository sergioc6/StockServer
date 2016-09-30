<!DOCTYPE html>
<!--
Copyright (C) 2016 Usuario

This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Sistema de Gestión de Stock</title>

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

    </head>


    <body>
        <div class="container">  
            <div class="row">
                <div class="col-md-4 col-md-offset-4">



                    <div class="login-panel panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">Por favor inicie sesión:</h3>
                        </div>
                        <div class="panel-body">
                            <form role="form" id="login_form" method="post" action="<?php echo site_url("Login_controller/do_login") ?>">
                                <fieldset>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Usuario" name="usuario" id="email" type="email" autofocus>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Contraseña" name="Password" id="password" type="password">
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input name="remember" type="checkbox" value="Recordarme">Recordarme
                                        </label>
                                    </div>

                                    <input class="btn btn-block btn-primary center-block" type="submit" value="Ingresar" />
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
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
