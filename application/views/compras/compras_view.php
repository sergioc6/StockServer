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
                        <h2>Compras</h2>   
                    </div>
                </div>              
                <!-- /. ROW  -->
                <hr />

                <div class="row text-center pad-top" style="margin-bottom: 20px;">
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                        <div class="div-square">
                            <a href="<?php echo base_url('Compras/selectProveedorCompra_view'); ?>" >
                        <i class="fa fa-shopping-cart fa-3x"></i>
                                <h5>Realizar Compra</h5>
                            </a>
                        </div>
                    </div> 
                </div>

                <table id="compras" class="display" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th class="col-md-1">Nº OC</th>
                            <th>Proveedor</th>
                            <th>Estado</th>
                            <th>Fecha</th>
                            <th class="col-md-1">Cantidad insumos</th>
                            <th>Monto</th>
                            <th><i class="fa fa-cogs" aria-hidden="true"></i></th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th class="col-md-1">Nº OC</th>
                            <th>Proveedor</th>
                            <th>Estado</th>
                            <th>Fecha</th>
                            <th class="col-md-1">Cantidad insumos</th>
                            <th>Monto</th>
                            <th><i class="fa fa-cogs" aria-hidden="true"></i></th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php foreach ($compras as $compra) { ?>
                            <tr>
                                <td><?php echo $compra->numero_oc; ?></td>
                                <td><?php echo $compra->nombre_proveedor; ?></td>
                                <?php if ($compra->estado == 'Enviada') { ?>
                                    <td class="text-warning"><?php echo $compra->estado; ?></td>
                                <?php } elseif ($compra->estado == 'Recibida') { ?>
                                    <td class="text-success"><?php echo $compra->estado; ?></td>
                                <?php } elseif ($compra->estado == 'Cancelada') { ?>
                                    <td class="text-danger"><?php echo $compra->estado; ?></td>
                                <?php } ?>
                                <td><?php echo $compra->fecha; ?></td>
                                <td><?php echo $compra->cant_insumos; ?></td>
                                <td>$<?php echo $compra->monto; ?></td>
                                <td class="text-center">
                                    <a title="Ver Orden de Compra" class='btn btn-default btn-xs' href="<?php echo base_url('Insumos/verInsumos_view/' . $compra->id_compra); ?>"><span class="fa fa-icon fa-shopping-cart"></span></a> 
                                    <a title="Cancelar OC" href="<?php echo base_url('Compras/cancelarCompra/' . $compra->id_compra); ?>" class="btn btn-default btn-xs"><span class="fa fa-icon fa-ban"></span></a>
                                    <a title="Eliminar OC" href="<?php echo base_url('Compras/eliminarCompra/' . $compra->id_compra); ?>" class="btn btn-danger btn-xs confirm"><span class="glyphicon glyphicon-remove"></span></a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>

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

        <!-- CONFIRM JS-->
        <script src="<?php echo base_url('assets/js/jquery.confirm.min.js'); ?>"></script>

        <script type="text/javascript">
            $(".confirm").confirm({
                text: "¿Estás seguro que deseas eliminar la orden de compra?",
                title: "Confirmación requerida",
                confirmButton: "Si, eliminar OC",
                cancelButton: "No",
                confirmButtonClass: "btn-danger",
                cancelButtonClass: "btn-default",
                dialogClass: "modal-dialog header-danger modal-lg" // Bootstrap classes for large modal
            });
        </script>


        <!-- DATATABLES SCRIPTS -->
        <script src="<?php echo base_url('assets/js/jquery.dataTables.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/js/dataTableCompras.js'); ?>"></script>


    </body>
</html>
