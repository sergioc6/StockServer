<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ficha de proveedor</title>

        <!-- BOOTSTRAP STYLES-->
        <link href="<?php echo base_url('assets/css/bootstrap.css'); ?>" rel="stylesheet" />

        <!-- FONT-AWESOME STYLES-->
        <link href="<?php echo base_url('assets/css/font-awesome.min.css'); ?>" rel="stylesheet" type="text/css"/>

        <!-- CUSTOM STYLES-->
        <link href="<?php echo base_url('assets/css/custom.css'); ?>" rel="stylesheet" />

        <!-- DATATABLES STYLES -->
        <link href="<?php echo base_url('assets/css/jquery.dataTables.min.css'); ?>" rel="stylesheet" />

        <!-- GOOGLE FONTS-->
        <link href="<?php echo base_url('assets/css/open_sans.css'); ?>" rel='stylesheet' type='text/css' />
    </head>
    <body>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/StockServer/application/views/navbar.php'; ?>




        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Ficha del Proveedor</h2>   
                    </div>
                </div>              
                <!-- /. ROW  -->
                <hr />

                <div class="panel panel-default">
                    <div class="panel-body">
                        <ul>
                            <li><b>Nombre del Proveedor: </b><?php echo $proveedor->nombre_proveedor; ?></li>
                            <li><b>Localidad: </b><?php echo $proveedor->localidad; ?></li>
                            <li><b>Dirección: </b><?php echo $proveedor->direccion; ?></li>
                            <li><b>Teléfono: </b><?php echo $proveedor->telefono; ?></li>
                            <li><b>Email: </b><?php echo $proveedor->email; ?></li>
                        </ul>
                    </div>
                </div>

                <table id="proveedores" class="display" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>Nombre insumo</th>
                            <th>Precio insumo</th>
                            <th>Días de demora</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Nombre insumo</th>
                            <th>Precio insumo</th>
                            <th>Días de demora</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php foreach ($insumos_proveedor as $insumo) { ?>
                            <tr>
                                <td><?php echo $insumo->nombre_insumo; ?></td>
                                <td><?php echo $insumo->precio; ?></td>
                                <td><?php echo $insumo->demora_dias; ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>

                <div class="btn-group btn-group-justified" style="margin-top: 10px">
                    <a href="<?php echo base_url('Proveedores/Proveedores_view'); ?>" class="btn btn-default">Ver Proveedores</a>
                </div>


                <!-- /. ROW  -->           
            </div>
            <!-- /. PAGE INNER  -->
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

<!-- DATATABLES SCRIPTS -->
<script src="<?php echo base_url('assets/js/jquery.dataTables.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/dataTableProveedores.js'); ?>"></script>
</body>
</html>