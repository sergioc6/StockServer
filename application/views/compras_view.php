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
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

    </head>
    <body>

        <?php include 'navbar.php'; ?>

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
                        <a href="#" >
                        <i class="fa fa-shopping-cart fa-3x"></i>
                        <h5>Realizar Compra</h5>
                        </a>
                    </div>
                </div> 
                 
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                    <div class="div-square">
                        <a href="#" >
                        <i class="fa fa-envelope-o fa-3x"></i>
                        <h5>Listado de insumos</h5>
                        </a>
                    </div>
                </div>
                
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                    <div class="div-square">
                        <a href="blank.html" >
                        <i class="fa fa-lightbulb-o fa-3x"></i>
                        <h5>Imprimir</h5>
                        </a>
                    </div>                   
                </div>
            </div>

        <table id="example" class="display" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>Proveedor</th>
                    <th>Insumos que provee</th>
                    <th>Dirección</th>
                    <th>Teléfono</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>Proveedor</th>
                    <th>Insumos que provee</th>
                    <th>Dirección</th>
                    <th>Teléfono</th>
                </tr>
            </tfoot>
            <tbody>
                <tr>
                    <td>Acindar SA</td>
                    <td>Chapas, metales</td>
                    <td>9 de julio 357</td>
                    <td>03442 - 435589</td>
                </tr>
                <tr>
                    <td>Pirelli Cubiertas SRL</td>
                    <td>Cubiertas, plásticos</td>
                    <td>Santa María de Oro 1902</td>
                    <td>03444 - 443344</td>
                </tr>
                <tr>
                    <td>Autopartes Johnson</td>
                    <td>Autopartes metálicas/mecánicas</td>
                    <td>Córdoba 1200</td>
                    <td>011 - 43556659</td>
                </tr>
            </tbody>
        </table>

            <!-- /. ROW  -->           
        </div>
        <!-- /. PAGE INNER  -->
        </div>

        <?php include 'footer.php'; ?>

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
        <script src="<?php echo base_url('assets/js/activar_datatables.js'); ?>"></script>


    </body>
</html>
