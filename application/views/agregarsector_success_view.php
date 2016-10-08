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

        <!-- GOOGLE FONTS-->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

    </head>
    <body>

        <?php include 'navbar.php'; ?>

        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Agregar Insumo</h2>   
                    </div>
                </div>              
                <!-- /. ROW  -->
                <hr />

                <div class="alert alert-success">
                    <strong>¡Sector agregado!</strong> El nuevo sector ya se encuentra registrado en el sistema.
                </div>

                <div class="panel panel-default">
                    <div class="panel-body">
                        <!-- Foto Socio-->
                        <div class="form-group">
                            <?php if ($nuevo_sector->foto_sector == NULL) { ?>
                            <img class="img-thumbnail center-block" src="<?php echo base_url('fotos/fotos_sectores/default.jpg'); ?>" width="250" height="250">  
                            <?php } else { ?>
                            <img class="img-thumbnail center-block" src="<?php echo base_url('fotos/fotos_sectores/' . $nuevo_sector->foto_sector); ?>" width="225" height="225">  
                            <?php } ?>
                        </div>
                        
                        <ul>
                            <li><b>Código del sector: </b><?php echo $nuevo_sector->id_sector; ?></li>
                            <li><b>Nombre del sector: </b><?php echo $nuevo_sector->sector_deposito; ?></li>
                            <li><b>Longitud: </b><?php echo $nuevo_sector->longitud; ?></li>
                            <li><b>Latitud: </b><?php echo $nuevo_sector->latitud; ?></li>
                        </ul>
                    </div>
                </div>

                <div class="btn-group btn-group-justified">
                    <a href="<?php echo base_url('Insumos/agregarsector_view'); ?>" class="btn btn-primary">Agregar otro sector</a>
                    <a href="<?php echo base_url('Insumos/sectoresinsumos_view'); ?>" class="btn btn-default">Ver sectores</a>
                </div>


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


    </body>
</html>

