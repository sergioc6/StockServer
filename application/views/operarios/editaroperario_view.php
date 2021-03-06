﻿<!DOCTYPE html>
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
                        <h2>Editar Operario</h2>   
                    </div>
                </div>              
                <!-- /. ROW  -->
                <hr />

                <form class="form-horizontal" enctype="multipart/form-data" method="post" action="<?php echo base_url('Operarios/editarOperario'); ?>">
                    <fieldset>


                        <input id="id_operario" name="id_operario" type="hidden" placeholder="" class="form-control input-md" value="<?php echo $operario->id_operario; ?>">


                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="nombre">Apellido del operario:</label>  
                                <div class="col-md-4">
                                    <input id="apellido" name="apellido" type="text" placeholder="" class="form-control input-md" value="<?php echo $operario->apellido; ?>">
                                    <span style="color: red;"><?php echo form_error('apellido'); ?></span>

                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="localidad">Nombre del operario:</label>  
                                <div class="col-md-4">
                                    <input id="nombre" name="nombre" type="text" placeholder="" class="form-control input-md" value="<?php echo $operario->nombre; ?>">
                                    <span style="color: red;"><?php echo form_error('nombre'); ?></span>
                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="email">Email:</label>  
                                <div class="col-md-4">
                                    <input id="email" name="email" type="email" placeholder="" class="form-control input-md" value="<?php echo $operario->email; ?>">
                                    <span style="color: red;"><?php echo form_error('email'); ?></span>
                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="password">Contraseña nueva:</label>  
                                <div class="col-md-4">
                                    <input id="password" name="password" type="password" placeholder="" class="form-control input-md" value="">
                                    <span style="color: red;"><?php echo form_error('password'); ?></span>

                                </div>
                            </div>

                            <!-- File Button Foto Operario --> 
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="fotoButton">Foto del Operario:</label>
                                <div class="col-md-6 center-block">
                                    <input id="fotoOperario" name="fotoOperario" onChange="showMyImage(this)" class="input-file" accept="image/*" type="file">
                                </div>
                                <div>
                                    <br>
                                        <br>
                                            </div>
                                            <div class="form-group text-center">
                                                <img src="<?php echo base_url('fotos/fotos_operarios/default.png'); ?>" class="form-group" id="thumbnil" style="width:20%; margin: 0 auto" alt="image"/>
                                            </div>
                                            </div>


                                            <!-- Button Submit-->
                                            <div class="form-group">
                                                <div class="col-md-4 col-md-offset-4">
                                                    <button id="singlebutton" name="singlebutton" class="btn btn-primary btn-block">Editar Operario</button>
                                                </div>
                                            </div>

                                            <!-- Button Volver-->
                                            <div class="form-group">
                                                <div class="col-md-4 col-md-offset-4">
                                                    <a class="btn btn-default btn-block" href="<?php echo base_url('Operarios/Operarios_view'); ?>">Volver</a>
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
