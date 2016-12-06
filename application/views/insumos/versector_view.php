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

        <?php include $_SERVER['DOCUMENT_ROOT'] . '/StockServer/application/views/navbar.php'; ?>

        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Ficha de Sector de Depósito</h2>   
                    </div>
                </div>              
                <!-- /. ROW  -->
                <hr />
                
                <?php if ($sector->foto_sector == NULL) { ?>
                    <img src="<?php echo base_url('fotos/fotos_sectores/default.jpg'); ?>" class="img-thumbnail" alt="<?php echo $sector->sector_deposito; ?>" width="200" height="200">
                <?php } else { ?>
                    <img src="<?php echo base_url('fotos/fotos_sectores/' . $sector->foto_sector); ?>" class="img-thumbnail" alt="<?php echo $sector->sector_deposito; ?>" width="200" height="200">
                <?php } ?>
                    
                <div class="panel panel-default">
                    <div class="panel-body">
                        <ul>
                            <li><b>Nombre del Sector: </b><?php echo $sector->sector_deposito; ?></li>
                            <li><b>Latitud: </b><?php echo $sector->latitud; ?></li>
                            <li><b>Longitud: </b><?php echo $sector->longitud; ?></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-12 center-block center-block">
                    <div class="text-center">
                        <a href="<?php echo base_url('Insumos/sectoresinsumos_view'); ?>" class="btn btn-default">Volver</a>
                    </div>
                </div>


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


    </body>
</html>