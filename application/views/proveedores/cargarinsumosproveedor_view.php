﻿<!DOCTYPE html>
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
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

    </head>
    <body>

        <?php include $_SERVER['DOCUMENT_ROOT'].'/StockServer/application/views/navbar.php'; ?>

        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Cargar Insumos a Proveedor</h2>   
                    </div>
                </div>              
                <!-- /. ROW  -->
                <hr />


                <ul class="nav nav-tabs">
                    <li><a class="btn btn-link disabled" href="#">Seleccionar Proveedor</a></li>
                    <li class="active"><a data-toggle="tab" href="#">Cargar Insumos</a></li>
                </ul>

                <form class="form-horizontal" method="post" action="<?php echo base_url('Proveedores/cargarInsumosProveedor'); ?>">
                    <fieldset>

                        <input id="id_proveedor" name="id_proveedor" type="hidden" placeholder="" class="form-control input-md" readonly="" value="<?php echo $proveedor->id_proveedor; ?>">

                            <!-- Text input-->
                            <div class="form-group" style="margin-top: 10px;">
                                <label class="col-md-4 control-label" for="nombre">Proveedor:</label>  
                                <div class="col-md-4">
                                    <input id="proveedor" name="proveedor" type="text" placeholder="" class="form-control input-md" readonly="" value="<?php echo $proveedor->nombre_proveedor; ?>">

                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="nombre">Seleccione el insumo:</label>  
                                <div class="col-md-4">
                                    <select name="insumo">
                                        <?php foreach ($insumos as $insumo) { ?>
                                            <option value="<?php echo $insumo->id_insumo; ?>"><?php echo $insumo->nombre_insumo; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="precio">Precio del Insumo ($):</label>  
                                <div class="col-md-4">
                                    <input id="precio" name="precio" type="number" placeholder="" class="form-control input-md" min="0">
                                        <span style="color: red;"><?php echo form_error('precio'); ?></span>
                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="dias_demora">Días de demora:</label>  
                                <div class="col-md-4">
                                    <input id="dias_demora" name="dias_demora" type="number" placeholder="" class="form-control input-md" value="0" min="0">
                                        <span style="color: red;"> <?php echo form_error('dias_demora'); ?> </span>
                                </div>
                            </div>


                            <ul class="pager">
                                <li><a href="<?php echo base_url('Proveedores/selectProveedor_view'); ?>">Volver</a></li>
                                <li><input type="submit" value="Cargar Insumo"></li>
                                <li><a href="<?php echo base_url('Proveedores/Proveedores_view'); ?>">Finalizar Carga</a></li>
                            </ul>

                    </fieldset>
                </form>


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

        <!-- SELECT2 SCRIPTS-->
        <script src="<?php echo base_url('assets/js/select2.min.js'); ?>"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                $(".proveedor-select2").select2();
            });
        </script>

    </body>
</html>
