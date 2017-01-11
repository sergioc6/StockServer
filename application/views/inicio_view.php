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
        <link href="<?php echo base_url('assets/css/open_sans.css'); ?>" rel='stylesheet' type='text/css' />

    </head>
    <body>

        <?php include 'navbar.php'; ?>

        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Inicio</h2>   
                    </div>
                </div>              
                <!-- /. ROW  -->
                <hr />

                <div class="row text-center" style="float: right; margin-right: 20px;">
                        <img src="<?php echo base_url('fotos/dep-inicio.png'); ?>" class="img-thumbnail" width="400" height="400">
                </div>

                <div style="float: left; margin-top: 10px;">
                    <p style="text-align:justify; font-size:140%">© 2016 Sistema de Control de Stock</p>
                    <p style="text-align:justify; font-size:140%"><B>Autores:</B> <li style="font-size:150%;">Cabral, Sergio</li>
                        <li style="font-size:140%;">Leiva, Nahuel</li></p>
                    <p style="text-align:justify; font-size:140%"><B>Contacto:</B> 
                        <li style="font-size:140%;"><a target="_blank" href="https://www.facebook.com/scabral6"><i class="fa fa-facebook-square fa-fw" style="font-size:20px; color:blue;"></i>Sergio Cabral</a></li>
                        <li style="font-size:140%;"><B>Email:</B> sergiocabral.1990@gmail.com</li>
                        <li style="font-size:140%;"><a target="_blank" href="https://www.facebook.com/nahuel.leiva.10"><i class="fa fa-facebook-square fa-fw" style="font-size:20px; color:blue;"></i>Nahuel Leiva</a></li>
                        <li style="font-size:140%;"><B>Email:</B> educmack@gmail.com</li></p>
                </div>

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
