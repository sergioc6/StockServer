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

        <?php include $_SERVER['DOCUMENT_ROOT'].'/StockServer/application/views/navbar.php'; ?>

        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Editar Proveedor</h2>   
                    </div>
                </div>              
                <!-- /. ROW  -->
                <hr />

                <form class="form-horizontal" method="post" action="<?php echo base_url('Proveedores/editarProveedor'); ?>">
                    <fieldset>


                        <input id="id_proveedor" name="id_proveedor" type="hidden" placeholder="" class="form-control input-md" value="<?php echo $proveedor->id_proveedor; ?>">




                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="nombre">Nombre del proveedor:</label>  
                                <div class="col-md-4">
                                    <input id="nombre" name="nombre" type="text" placeholder="" class="form-control input-md" value="<?php echo $proveedor->nombre_proveedor; ?>">
                                    <span style="color: red;"><?php echo form_error('nombre'); ?></span>    
                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="localidad">Localidad:</label>  
                                <div class="col-md-4">
                                    <input id="localidad" name="localidad" type="text" placeholder="" class="form-control input-md" value="<?php echo $proveedor->localidad; ?>">
                                    <span style="color: red;"><?php echo form_error('localidad'); ?></span>    
                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="email">Email:</label>  
                                <div class="col-md-4">
                                    <input id="email" name="email" type="email" placeholder="" class="form-control input-md" value="<?php echo $proveedor->email; ?>">
                                    <span style="color: red;"><?php echo form_error('email'); ?></span>

                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="direccion">Dirección:</label>  
                                <div class="col-md-4">
                                    <input id="direccion" name="direccion" type="text" placeholder="" class="form-control input-md" value="<?php echo $proveedor->direccion; ?>">
                                    <span style="color: red;"><?php echo form_error('direccion'); ?></span>

                                </div>
                            </div>



                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="telefono">Teléfono:</label>  
                                <div class="col-md-4">
                                    <input id="telefono" name="telefono" type="text" placeholder="" class="form-control input-md" value="<?php echo $proveedor->telefono; ?>">
                                    <span style="color: red;"><?php echo form_error('telefono'); ?></span>

                                </div>
                            </div>


                            <!-- Button Submit-->
                            <div class="form-group">
                                <div class="col-md-4 col-md-offset-4">
                                    <button id="singlebutton" name="singlebutton" class="btn btn-primary btn-block">Editar Proveedor</button>
                                </div>
                            </div>

                            <!-- Button Volver-->
                            <div class="form-group">
                                <div class="col-md-4 col-md-offset-4">
                                    <a class="btn btn-default btn-block" href="<?php echo base_url('Proveedores/Proveedores_view'); ?>">Volver</a>
                                </div>
                            </div>



                    </fieldset>
                </form>







                <!-- /. ROW  -->           
            </div>
            <!-- /. PAGE INNER  -->
        </div>

        <?php include $_SERVER['DOCUMENT_ROOT'].'/StockServer/application/views/footer.php'; ?>

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
