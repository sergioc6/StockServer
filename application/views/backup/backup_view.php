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
                        <h2>Backup</h2>   
                    </div>
                </div>              
                <!-- /. ROW  -->
                <hr />

                <div class="alert alert-info">
                    <strong>Atención!</strong> Se recomienda hacer backups de la Base de Datos periódicamente, de modo de garantizar la seguridad de los datos.
                </div>

                <div class="panel panel-default">
                    <div class="panel-body">
                        <ul>
                            <?php if ($backup->id_backup == NULL) { ?>
                                <li><b>Fecha y hora del último Backup:</b> NUNCA.</li>
                                <li><b>Realizado por: </b></li>
                            <?php } else { ?>
                                <li><b>Fecha y hora del último Backup: </b><?php echo $backup->fecha_hora; ?></li>
                                <li><b>Realizado por: </b></li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>

                <!-- Button -->
                <div class="form-group">
                    <div class="col-md-4 col-md-offset-4">
                        <a class="btn btn-primary btn-block" href="<?php echo base_url('Backup/realizarBackup'); ?>">Realizar Backup</a>
                    </div>
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