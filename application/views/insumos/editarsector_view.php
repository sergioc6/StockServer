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

        <!-- JQuery-latitude-longitude-picker-gmaps STYLES -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/jquery-gmaps-latlon-picker.css'); ?>"/>
    </head>

    <body>

        <?php include $_SERVER['DOCUMENT_ROOT'] . '/StockServer/application/views/navbar.php'; ?>

        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Editar Sector</h2>   
                    </div>
                </div>              
                <!-- /. ROW  -->
                <hr />

                <form class="form-horizontal" method="post" enctype="multipart/form-data" action="<?php echo base_url('Insumos/editarSector'); ?>">
                    <fieldset>
                        <input id="id_sector" name="id_sector" type="hidden" placeholder="" class="form-control input-md" value="<?php echo $sectores->id_sector; ?>">


                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="nombre">Nombre del sector:</label>  
                            <div class="col-md-4">
                                <input id="nombre_sector" name="nombre_sector" type="text" placeholder="Nombre sector" class="form-control input-md" value="<?php echo $sectores->sector_deposito; ?>">
                                    <span style="color: red;"><?php echo form_error('nombre_sector'); ?></span>
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="col-md-4 control-label" for="nombre">Seleccione la posición geográfica del sector:</label>  
                            <fieldset class="gllpLatlonPicker">
                                <div class="gllpMap">Google Maps</div>
                                Latitud: <input id="latitud" name="latitud" type="text" class="gllpLatitude" value="<?php echo $sectores->latitud; ?>" readonly=""/>
                                <?php echo form_error('latitud'); ?>
                                Longitud: <input id="longitud" name="longitud" type="text" class="gllpLongitude" value="<?php echo $sectores->longitud; ?>" readonly=""/>
                                <?php echo form_error('longitud'); ?>
                                <input type="hidden" class="gllpZoom" value="15"/>
                            </fieldset>
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

                                        <!-- Button Submit-->
                                        <div class="form-group">
                                            <div class="col-md-4 col-md-offset-4">
                                                <button id="singlebutton" name="singlebutton" class="btn btn-primary btn-block">Editar Sector</button>
                                            </div>
                                        </div>

                                        <!-- Button Volver -->
                                        <div class="form-group">
                                            <div class="col-md-4 col-md-offset-4">
                                                <a class="btn btn-default btn-block" href="<?php echo base_url('Insumos/sectoresinsumos_view'); ?>">Volver</a>    
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
                                        <script src="<?php echo base_url('assets/js/jquery-2.1.1.min.js'); ?>"></script>

                                        <!-- BOOTSTRAP SCRIPTS -->
                                        <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>

                                        <!-- CUSTOM SCRIPTS -->
                                        <script src="<?php echo base_url('assets/js/custom.js'); ?>"></script>

                                        <script src="<?php echo base_url('assets/js/showMyImage.js'); ?>"></script>

                                        <!-- DATATABLE SCRIPTS -->
                                        <script src="<?php echo base_url('assets/js/jquery.dataTables.min.js'); ?>"></script>

                                        <!-- Google Maps API -->
                                        <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyCaZzZhbgl1EI29tIkNBYgNfacz5K6ryao"></script>

                                        <!-- Google Maps API -->
                                        <script src="<?php echo base_url('assets/js/jquery-gmaps-latlon-picker.js'); ?>"></script>


                                        </body>
                                        </html>