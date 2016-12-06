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
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

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


                <div class="stepwizard">
                    <div class="stepwizard-row">
                        <div class="stepwizard-step">
                            <button type="button" class="btn btn-default btn-circle" disabled="disabled">1</button>
                            <p>Seleccionar Proveedor</p>
                        </div>
                        <div class="stepwizard-step">
                            <button type="button" class="btn btn-primary btn-circle" disabled="disabled">2</button>
                            <p>Cargar Insumos</p>
                        </div>
                        <div class="stepwizard-step">
                            <button type="button" class="btn btn-default btn-circle" disabled="disabled">3</button>
                            <p>Confirmar compra</p>
                        </div> 
                    </div>
                </div>


                <form class="form-horizontal" method="post" action="<?php echo base_url('Compras/cargarInsumoACompra'); ?>">
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
                                <label class="col-md-4 control-label" for="nombre">Cantidad:</label>  
                                <div class="col-md-4">
                                    <input id="cantidad" name="cantidad" type="number" placeholder="" class="form-control input-md" min="0">
                                        <?php echo form_error('cantidad'); ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-4 col-md-offset-4">
                                    <input type="submit" value="Cargar Insumo al carrito">
                                </div>
                            </div>

                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th class="col-md-1">Cod. Insumo</th>
                                        <th>Insumo</th>
                                        <th class="col-md-1">Cantidad</th>
                                        <th class="col-md-1">Precio U.</th>
                                        <th class="col-md-1">Precio Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($this->cart->contents() as $item) { ?>
                                        <tr>
                                            <th><?php echo $item['id']; ?></th>
                                            <th><?php echo $item['name']; ?></th>
                                            <th><?php echo $item['qty']; ?></th>
                                            <th>$<?php echo $item['price']; ?></th>
                                            <th>$<?php echo $item['precio_tot']; ?></th>
                                        </tr>
                                    <?php } ?>
                                    <tr>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th><strong>TOTAL:</strong></th>
                                        <th>$<?php echo $this->cart->format_number($this->cart->total()); ?></th>
                                    </tr>
                                </tbody>    
                            </table>




                            <ul class="pager">
                                <li><a href="<?php echo base_url('Compras/selectProveedorCompra_view'); ?>">Volver</a></li>
                                <?php if (count($this->cart->contents()) == 0) { ?>
                                    <li class="disabled">Siguiente</a></li>
                                    <?php } else { ?>
                                    <li><a href="<?php echo base_url('Compras/confirmarCompra_view/' . $proveedor->id_proveedor); ?>">Siguiente</a></li>
                                <?php } ?>
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
