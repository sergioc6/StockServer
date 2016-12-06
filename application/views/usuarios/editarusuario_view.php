<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Control de Stock</title>

        <!-- BOOTSTRAP STYLES-->
        <link href="<?php echo base_url('assets/css/bootstrap.css'); ?>" rel="stylesheet" />

        <!-- FONT-AWESOME STYLES-->
        <link href="<?php echo base_url('assets/css/font-awesome.min.css'); ?>" rel="stylesheet" type="text/css"/>

        <!-- CUSTOM STYLES-->
        <link href="<?php echo base_url('assets/css/custom.css'); ?>" rel="stylesheet" />

        <!-- CUSTOM STYLES-->
        <link href="<?php echo base_url('assets/css/jquery.dataTables.min.css'); ?>" rel="stylesheet" />

        <!-- GOOGLE FONTS-->
        <link href="<?php echo base_url('assets/css/open_sans.css'); ?>" rel='stylesheet' type='text/css' />

    </head>
    <body>

        <?php include $_SERVER['DOCUMENT_ROOT'] . '/StockServer/application/views/navbar.php'; ?>

        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Editar Usuario</h2>   
                    </div>
                </div>              
                <!-- /. ROW  -->
                <hr />

                <form class="form-horizontal" method="post" action="<?php echo base_url('Usuarios/editarUsuario'); ?>">
                    <fieldset>


                        <input id="id_usuario" name="id_usuario" type="hidden" placeholder="" class="form-control input-md" value="<?php echo $usuario_edit->id_usuario; ?>">


                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="nombre">Apellido del usuario:</label>  
                                <div class="col-md-4">
                                    <input id="apellido" name="apellido" type="text" placeholder="" class="form-control input-md" value="<?php echo $usuario_edit->apellido_usuario; ?>">
                                        <span style="color: red;"><?php echo form_error('apellido'); ?></span>
                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="localidad">Nombre del usuario:</label>  
                                <div class="col-md-4">
                                    <input id="nombres" name="nombres" type="text" placeholder="" class="form-control input-md" value="<?php echo $usuario_edit->nombres_usuario; ?>">
                                        <span style="color: red;"><?php echo form_error('nombres'); ?></span>
                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="email">Email:</label>  
                                <div class="col-md-4">
                                    <input id="email" name="email" type="email" placeholder="" class="form-control input-md" value="<?php echo $usuario_edit->email; ?>">
                                        <span style="color: red;"><?php echo form_error('email'); ?></span>
                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="password">Contraseña nueva:</label>  
                                <div class="col-md-4">
                                    <input id="contrasenia" name="contrasenia" type="password" placeholder="" class="form-control input-md" value="">
                                        <span style="color: red;"><?php echo form_error('contrasenia'); ?></span>
                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="password">Reescriba la contraseña:</label>  
                                <div class="col-md-4">
                                    <input id="contrasenia2" name="contrasenia2" type="password" placeholder="" class="form-control input-md" value="">
                                        <span style="color: red;"><?php echo form_error('contrasenia2'); ?></span>
                                </div>
                            </div>


                            <!-- Button Submit-->
                            <div class="form-group">
                                <div class="col-md-4 col-md-offset-4">
                                    <button id="singlebutton" name="singlebutton" class="btn btn-primary btn-block">Editar Usuario</button>
                                </div>
                            </div>

                            <!-- Button Volver-->
                            <div class="form-group">
                                <div class="col-md-4 col-md-offset-4">
                                    <a class="btn btn-default btn-block" href="<?php echo base_url('Usuarios/Usuarios_view'); ?>">Volver</a>
                                </div>
                            </div>



                    </fieldset>
                </form>







                <!-- /. ROW  -->           
            </div>
            <!-- /. PAGE INNER  -->
        </div>

        <?php include $_SERVER['DOCUMENT_ROOT'] . '/StockServer/application/views/footer.php'; ?>

        <!-- /. WRAPPER  -->
        <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->

        <!-- JQUERY SCRIPTS -->
        <script src="<?php echo base_url('assets/js/jquery-1.10.2.js'); ?>"></script>

        <!-- BOOTSTRAP SCRIPTS -->
        <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>

        <!-- CUSTOM SCRIPTS -->
        <script src="<?php echo base_url('assets/js/custom.js'); ?>"></script>

        <!-- DATATABLE SCRIPTS -->
        <script src="<?php echo base_url('assets/js/jquery.dataTables.min.js'); ?>"></script>

        <script>
            $(document).ready(function () {
                $('#tabla_insumos').dataTable();
                $('#addbtn').click(addrow);
            });

            function addrow() {
                $('#tabla_insumos').dataTable().fnAddData([
                    $('#fname').val(),
                    $('#lname').val(),
                    $('#email').val(),
                    $('#email').val(),
                    $('#email').val(),
                    $('#email').val()
                ]);

            }
        </script>
    </body>
</html>
