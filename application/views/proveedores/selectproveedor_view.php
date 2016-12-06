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
                        <h2>Cargar Insumos a Proveedor</h2>   
                    </div>
                </div>              
                <!-- /. ROW  -->
                <hr />


                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#">Seleccionar Proveedor</a></li>
                    <li><a class="btn btn-link disabled" href="#">Cargar Insumos</a></li>
                </ul>

                <form class="form-horizontal" method="post" action="<?php echo base_url('Proveedores/seleccionarProveedor'); ?>">
                    <fieldset>

                        <!-- Select input Proveedores-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="localidad">Seleccionar proveedor:</label>  
                        </div>
                        
                        <div class="form-group">
                            <div class="col-md-7">
                                <select name="proveedor" class="proveedor-select2">
                                    <?php foreach ($proveedores as $proveedor) { ?>
                                        <option value="<?php echo $proveedor->id_proveedor; ?>"><?php echo $proveedor->nombre_proveedor; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>

                        <ul class="pager">
                            <li><input type="submit" value="Siguiente"></li>
                        </ul>

                    </fieldset>
                </form>


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