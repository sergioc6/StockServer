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

    </head>
    <body>

        <?php include $_SERVER['DOCUMENT_ROOT'] . '/StockServer/application/views/navbar.php'; ?>

        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Realizar compra a proveedor</h2>   
                    </div>
                </div>              
                <!-- /. ROW  -->
                <hr />


                <ul class="nav nav-tabs">
                    <li><a class="btn btn-link disabled" href="#">Seleccionar Proveedor</a></li>
                    <li><a class="btn btn-link disabled" data-toggle="tab" href="#">Cargar Insumos</a></li>
                    <li class="active"><a class="btn btn-link disabled" href="#">Confirmar Compra</a></li>
                </ul>

                <div class="container">

                    <div class="row">
                        <div class="col-xs-10">
                            <div class="text-center">
                                <h2>Orden de Compra #33221</h2>
                            </div>
                            <hr>

                                <!-- Datos del Proveedor -->    
                                <div class="row">
                                    <div class="col-xs-12 col-md-12 col-lg-12 pull-left">
                                        <div class="panel panel-default height">
                                            <div class="panel-heading"><b>Datos Proveedor</b></div>
                                            <div class="panel-body">
                                                <strong>David Peere:</strong><br>
                                                    1111 Army Navy Drive<br>
                                                        Arlington<br>
                                                            VA<br>
                                                                <strong>22 203</strong><br>
                                                                    </div>
                                                                    </div>
                                                                    </div>
                                                                    </div>


                                                                    </div>
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
                                                                                                    <td><strong>Item Name</strong></td>
                                                                                                    <td class="text-center"><strong>Item Price</strong></td>
                                                                                                    <td class="text-center"><strong>Item Quantity</strong></td>
                                                                                                    <td class="text-right"><strong>Total</strong></td>
                                                                                                </tr>
                                                                                            </thead>
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td>Samsung Galaxy S5</td>
                                                                                                    <td class="text-center">$900</td>
                                                                                                    <td class="text-center">1</td>
                                                                                                    <td class="text-right">$900</td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td>Samsung Galaxy S5 Extra Battery</td>
                                                                                                    <td class="text-center">$30.00</td>
                                                                                                    <td class="text-center">1</td>
                                                                                                    <td class="text-right">$30.00</td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td>Screen protector</td>
                                                                                                    <td class="text-center">$7</td>
                                                                                                    <td class="text-center">4</td>
                                                                                                    <td class="text-right">$28</td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td class="emptyrow"></td>
                                                                                                    <td class="emptyrow"></td>
                                                                                                    <td class="emptyrow text-center"><strong>Total</strong></td>
                                                                                                    <td class="emptyrow text-right">$978.00</td>
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    </div>


                                                                    <ul class="pager">
                                                                        <li><a href="<?php echo base_url('Compras/cargarInsumosCompraProv_view/'); ?>">Volver</a></li>
                                                                    </ul>



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
