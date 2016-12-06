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
        <link href="<?php echo base_url('assets/css/open_sans.css'); ?>" rel='stylesheet' type='text/css' />

    </head>
    <body>

        <?php include $_SERVER['DOCUMENT_ROOT'].'/StockServer/application/views/navbar.php'; ?>

        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Ficha del Operario</h2>   
                    </div>
                </div>              
                <!-- /. ROW  -->
                <hr />

                <div class="panel panel-default">
                    <div class="panel-body">
                        
                        <!-- Foto Operario-->
                        <div class="form-group">
                            <?php if ($operario->foto_operario == NULL) { ?>
                            <img class="img-thumbnail center-block" src="<?php echo base_url('fotos/fotos_operarios/default.png'); ?>" width="250" height="250">  
                            <?php } else { ?>
                            <img class="img-thumbnail center-block" src="<?php echo base_url('fotos/fotos_operarios/' . $operario->foto_operario); ?>" width="225" height="225">  
                            <?php } ?>
                        </div>
                        
                        <ul>
                            <li><b>Apellido: </b><?php echo $operario->apellido; ?></li>
                            <li><b>Nombre: </b><?php echo $operario->nombre; ?></li>
                            <li><b>Email: </b><?php echo $operario->email; ?></li>
                        </ul>
                    </div>
                </div>

                <div class="btn-group btn-group-justified">
                    <a href="<?php echo base_url('Operarios/operarios_view'); ?>" class="btn btn-default">Volver</a>
                </div>


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


    </body>
</html>
