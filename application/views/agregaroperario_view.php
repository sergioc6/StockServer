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
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

    </head>
    <body>

        <?php include 'navbar.php'; ?>

        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Agregar Operario</h2>   
                    </div>
                </div>              
                <!-- /. ROW  -->
                <hr />

                <form class="form-horizontal" method="post" action="<?php echo base_url('Operarios/agregarOperario'); ?>">
                    <fieldset>


                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="Apellido">Apellido:</label>  
                            <div class="col-md-4">
                                <input id="apellido" name="apellido" type="text" placeholder="Apellido" class="form-control input-md">

                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="Nombre">Nombre:</label>  
                            <div class="col-md-4">
                                <input id="nombre" name="nombre" type="text" placeholder="Nombre" class="form-control input-md">
                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="Email">Email:</label>  
                            <div class="col-md-4">
                                <input id="email" name="email" type="mail" placeholder="Email" class="form-control input-md">
                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="Password">Contraseña:</label>  
                            <div class="col-md-4">
                                <input id="pass" name="pass" type="password" placeholder="Contraseña" class="form-control input-md">
                            </div>
                        </div>


                        <!-- Button -->
                        <div class="form-group">
                            <div class="col-md-4 center-block">
                                <button id="singlebutton" name="singlebutton" class="btn btn-primary">Agregar Usuario</button>
                            </div>
                        </div>



                    </fieldset>
                </form>







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


    </body>
</html>
