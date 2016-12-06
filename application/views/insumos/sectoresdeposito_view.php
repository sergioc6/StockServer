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
                        <h2>Sectores de Insumos</h2>   
                    </div>
                </div>              
                <!-- /. ROW  -->
                <hr />
                <div class="row text-center pad-top" style="margin-bottom: 20px;">

                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                        <div class="div-square">
                            <a href="<?php echo base_url('Insumos/agregarsector_view'); ?>" >
                                <i class="fa fa-plus fa-3x"></i>
                                <h5>Agregar Sector</h5>
                            </a>
                        </div>
                    </div>

                </div>

                <table id="sectores" class="display" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>Sector</th>
                            <th>Latitud</th>
                            <th>Longitud</th>
                            <th>Foto del Sector</th>
                            <th><i class="fa fa-cogs" aria-hidden="true"></i></th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Sector</th>
                            <th>Latitud</th>
                            <th>Longitud</th>
                            <th>Foto del Sector</th>
                            <th><i class="fa fa-cogs" aria-hidden="true"></i></th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php foreach ($sectores as $sector) { ?>
                            <tr>
                                <td><?php echo $sector->sector_deposito; ?></td>
                                <td><?php echo $sector->latitud; ?></td>
                                <td><?php echo $sector->longitud; ?></td>
                                <?php if ($sector->foto_sector == NULL) { ?>
                                    <td><img src="<?php echo base_url('fotos/fotos_sectores/default.jpg'); ?>" class="img-thumbnail" alt="<?php echo $sector->sector_deposito; ?>" width="200" height="200"></td>
                                <?php } else { ?>
                                    <td><img src="<?php echo base_url('fotos/fotos_sectores/' . $sector->foto_sector); ?>" class="img-thumbnail" alt="<?php echo $sector->sector_deposito; ?>" width="200" height="200"></td>
                                <?php } ?>
                                <td class="text-center">
                                    <a title="Ver Sector" class='btn btn-default btn-xs' href="<?php echo base_url('Insumos/verFichaSectorDeposito/'.$sector->id_sector); ?>"><span class="fa fa-icon fa-truck"></span></a> 
                                    <a title="Editar Sector" class='btn btn-info btn-xs' href="#"><span class="glyphicon glyphicon-edit"></span></a> 
                                    <a title="Eliminar Sector" href="<?php echo base_url('Insumos/eliminarSectorDeposito/' . $sector->id_sector); ?>" class="btn btn-danger btn-xs confirm"><span class="glyphicon glyphicon-remove"></span></a>
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

        <!-- CONFIRM JS-->
        <script src="<?php echo base_url('assets/js/jquery.confirm.min.js'); ?>"></script>

        <script type="text/javascript">
            $(".confirm").confirm({
                text: "¿Estás seguro que deseas eliminar el Sector de Depósito?",
                title: "Confirmación requerida",
                confirmButton: "Si, eliminar Sector",
                cancelButton: "No",
                confirmButtonClass: "btn-danger",
                cancelButtonClass: "btn-default",
                dialogClass: "modal-dialog header-danger modal-lg" // Bootstrap classes for large modal
            });
        </script>

        <!-- CUSTOM SCRIPTS -->
        <script src="<?php echo base_url('assets/js/custom.js'); ?>"></script>

        <!-- DATATABLES SCRIPTS -->
        <script src="<?php echo base_url('assets/js/jquery.dataTables.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/js/dataTableSectores.js'); ?>"></script>


    </body>
</html>
