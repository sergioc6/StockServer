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

        <!-- SELECT2 STYLES-->
        <link href="<?php echo base_url('assets/css/select2.min.css'); ?>" rel="stylesheet" />

        <!-- GOOGLE FONTS-->
        <link href="<?php echo base_url('assets/css/open_sans.css'); ?>" rel='stylesheet' type='text/css' />

        <!-- STEPWIZARD -->
        <link href="<?php echo base_url('assets/css/stepwizard.css'); ?>" rel='stylesheet' type='text/css' />

    </head>
    <body>

        <?php include $_SERVER['DOCUMENT_ROOT'] . '/StockServer/application/views/navbar.php'; ?>

        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Realizar Compra a proveedor</h2>   
                    </div>
                </div>              
                <!-- /. ROW  -->
                <hr />

                <div class="alert alert-success">
                    <strong>Compra realizada con éxito!</strong> La compra ya figura registrada en el sistema.
                </div>

                <div class="container">

                    <div class="row">
                        <div class="col-xs-10">
                            <div class="text-center">
                                <h2>Orden de Compra #<?php echo $compra->numero_oc; ?></h2>
                            </div>
                            <hr>
                        </div>


                        <!-- Detalle de compra -->               
                        <div class="row">
                            <div class="col-md-10">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="text-center"><strong>Detalle de compra</strong></h3>
                                    </div>
                                    <div class="panel-body">
                                        <div class="table-responsive">
                                            <table class="table table-condensed">
                                                <thead>
                                                    <tr>
                                                        <td><strong>Insumo</strong></td>
                                                        <td class="text-center"><strong>Cantidad</strong></td>
                                                        <td class="text-center"><strong>Precio U.</strong></td>
                                                        <td class="text-right"><strong>Precio Total</strong></td>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($insumos as $insumo) { ?>
                                                        <tr>
                                                            <th><?php echo $insumo->nombre_insumo; ?></th>
                                                            <th class="text-center"><?php echo $insumo->cantidad; ?></th>
                                                            <th class="text-center">$<?php echo $insumo->precio; ?></th>
                                                            <th class="text-right">$<?php echo $insumo->precio * $insumo->cantidad; ?></th>
                                                        </tr>
                                                    <?php } ?>
                                                    <tr>
                                                        <th></th>
                                                        <th></th>
                                                        <th class="text-center"><strong>TOTAL:</strong></th>
                                                        <th class="text-right">$<?php echo $this->cart->format_number($this->cart->total()); ?></th>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        
                        
                        <div class='col-md-4 text-center container'>
                            <a href="<?php echo base_url('Compras/Compras_view'); ?>" class="btn btn-default btn-block" role="button">Ver Compras</a>
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

            <!-- SELECT2 SCRIPTS-->
            <script src="<?php echo base_url('assets/js/select2.min.js'); ?>"></script>
            <script type="text/javascript">
                $(document).ready(function () {
                    $(".proveedor-select2").select2();
                });
            </script>

    </body>
</html>
