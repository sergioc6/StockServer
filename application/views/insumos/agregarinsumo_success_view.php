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
        <link href='assets/css/open_sans.css' rel='stylesheet' type='text/css' />

    </head>
    <body>

        <?php include $_SERVER['DOCUMENT_ROOT'].'/StockServer/application/views/navbar.php'; ?>

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
                    <strong>Insumo agregado!</strong> El nuevo insumo ya se encuentra registrado en el sistema.
                </div>

                <div class="panel panel-default">
                    <div class="panel-body">
                        <ul>
                            <li><b>Código del Insumo: </b><?php echo $nuevo_insumo->id_insumo; ?></li>
                            <li><b>Nombre del Insumo: </b><?php echo $nuevo_insumo->nombre_insumo; ?></li>
                            <li><b>Descripción: </b><?php echo $nuevo_insumo->descripcion; ?></li>
                            <li><b>Stock mínimo: </b><?php echo $nuevo_insumo->stock_min; ?></li>
                            <li><b>Stock màximo: </b><?php echo $nuevo_insumo->stock_max; ?></li>
                            <li><b>Tipo de Insumo: </b><?php echo $nuevo_insumo->tipo; ?></li>
                            <li><b>Sector en depósito: </b><?php echo $nuevo_insumo->sector_deposito; ?></li>
                        </ul>
                    </div>
                </div>

                <div class="btn-group btn-group-justified">
                    <a href="<?php echo base_url('Insumos/agregarinsumo_view'); ?>" class="btn btn-primary">Agregar otro insumo</a>
                    <a href="<?php echo base_url('Insumos/Insumos_view'); ?>" class="btn btn-default">Ver Insumos</a>
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
