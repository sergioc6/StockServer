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
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

    </head>
    <body>

        <?php include 'navbar.php'; ?>

        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Agregar Sector</h2>   
                    </div>
                </div>              
                <!-- /. ROW  -->
                <hr />

                <form class="form-horizontal" method="post" enctype="multipart/form-data" action="<?php echo base_url('Insumos/agregarSector'); ?>">
                    <fieldset>


                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="nombre">Nombre del sector:</label>  
                            <div class="col-md-4">
                                <input id="nombre_sector" name="nombre_sector" type="text" placeholder="Nombre sector" class="form-control input-md">

                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="localidad">Latitud:</label>  
                            <div class="col-md-4">
                                <input id="latitud" name="latitud" type="number" placeholder="" class="form-control input-md">

                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="direccion">Longitud:</label>  
                            <div class="col-md-4">
                                <input id="longitud" name="longitud" type="number" placeholder="" class="form-control input-md">

                            </div>
                        </div>
                        
                        <!-- File Button Foto Sector --> 
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="fotoButton">Foto del Sector:</label>
                            <div class="col-md-6 center-block">
                                <input id="fotoSector" name="fotoSector" onchange="showMyImage(this)" class="input-file" accept="image/*" type="file">
                            </div>
                            <div>
                                <br>
                                <br>
                            </div>
                            <div class="form-group text-center">
                                <img src="<?php echo base_url('fotos/fotos_sectores/default.jpg'); ?>" class="form-group" id="thumbnil" style="width:20%; margin: 0 auto" alt="image"/>
                            </div>
                        </div>

                        <!-- Button -->
                        <div class="form-group">
                            <div class="col-md-4 col-md-offset-4">
                                <button id="singlebutton" name="singlebutton" class="btn btn-primary btn-block">Agregar Sector</button>
                            </div>
                        </div>



                    </fieldset>
                </form>







                <!-- /. ROW  -->           
            </div>
            <!-- /. PAGE INNER  -->
        </div>

        <?php include 'footer.php'; ?>

        <!-- /. WRAPPER  -->
        <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->

        <!-- JQUERY SCRIPTS -->
        <script src="<?php echo base_url('assets/js/jquery-1.10.2.js'); ?>"></script>

        <!-- BOOTSTRAP SCRIPTS -->
        <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>

        <!-- CUSTOM SCRIPTS -->
        <script src="<?php echo base_url('assets/js/custom.js'); ?>"></script>
        
        <script src="<?php echo base_url('assets/js/showMyImage.js'); ?>"></script>

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