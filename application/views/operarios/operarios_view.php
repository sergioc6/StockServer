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
                        <h2>Operarios</h2>   
                    </div>
                </div>              
                <!-- /. ROW  -->
                <hr />
                <div class="row text-center pad-top" style="margin-bottom: 20px;">
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                        <div class="div-square">
                            <a href="<?php echo base_url('Operarios/agregaroperario_view'); ?>" >
                                <i class="fa fa-plus fa-3x"></i>
                                <h5>Agregar Operario</h5>
                            </a>
                        </div>
                    </div> 

                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                        <div class="div-square">
                            <a href="<?php echo base_url('Operarios/agregaroperario_view'); ?>" >
                                <i class="fa fa-tasks fa-3x"></i>
                                <h5>Controles realizados</h5>
                            </a>
                        </div>
                    </div> 



                </div>

                <table id="operarios" class="display" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>Apellido y nombre</th>
                            <th>Email</th>
                            <th>Foto del Operario</th>
                            <th><i class="fa fa-cogs" aria-hidden="true"></i></th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Apellido y nombre</th>
                            <th>Email</th>
                            <th>Foto del Operario</th>
                            <th><i class="fa fa-cogs" aria-hidden="true"></i></th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php foreach ($operarios as $operario) { ?>
                            <tr>
                                <td><?php echo $operario->apellido; ?> <?php echo $operario->nombre; ?></td>
                                <td><?php echo $operario->email; ?></td>
                                <?php if ($operario->foto_operario == NULL) { ?>
                                    <td><img src="<?php echo base_url('fotos/fotos_operarios/default.png'); ?>" class="img-thumbnail" alt="<?php echo $operario->apellido . ' ' . $operario->nombre; ?>" width="150" height="150"></td>
                                <?php } else { ?>
                                    <td><img src="<?php echo base_url('fotos/fotos_operarios/' . $operario->foto_operario); ?>" class="img-thumbnail" alt="<?php echo $operario->apellido . ' ' . $operario->nombre; ?>" width="150" height="150"></td>
                                <?php } ?>
                                <td class="text-center">
                                    <a title="Ver Operario" class='btn btn-default btn-xs' href="<?php echo base_url('Operarios/verFichaOperario_view/' . $operario->id_operario); ?>"><span class="fa fa-icon fa-truck"></span></a> 
                                    <a title="Editar Operario" class='btn btn-info btn-xs' href="<?php echo base_url('Operarios/editarOperario_view/' . $operario->id_operario); ?>"><span class="glyphicon glyphicon-edit"></span></a> 
                                    <a title="Eliminar Operario" href="<?php echo base_url('Operarios/eliminarOperario/') . $operario->id_operario ?>" class="btn btn-danger btn-xs confirm"><span class="glyphicon glyphicon-remove"></span></a>
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
                text: "¿Estás seguro que deseas eliminar al operario?",
                title: "Confirmación requerida",
                confirmButton: "Si, eliminar operario",
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
        <script src="<?php echo base_url('assets/js/dataTableOperarios.js'); ?>"></script>


    </body>
</html>