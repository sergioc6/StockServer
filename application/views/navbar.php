<div id="wrapper">
    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="adjust-nav">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a class="navbar-brand" href="<?php echo base_url('Inicio'); ?>">
                    <img src="<?php echo base_url('assets/img/logo.png'); ?>" width="90" height="60"/>
                </a>
            </div>

            <span class="logout-spn" >
                <a href="<?php echo base_url('Login/cerrarSesion'); ?>" style="color:#fff;">SALIR</a>  

            </span>
        </div>
    </div>


    <!-- /. NAV TOP  -->
    <nav class="navbar-default navbar-side" role="navigation">
        <div class="sidebar-collapse navbar-collapse">
            <ul class="nav" id="side-menu">


                <li>
                    <a href="<?php echo base_url('Proveedores/Proveedores_view'); ?>" ><i class="fa fa-truck "></i> Proveedores</a>
                </li>


                <li>
                    <a href="<?php echo base_url('Insumos/Insumos_view'); ?>"><i class="fa fa-wrench "></i> Insumos</a>
                </li>

                <li>
                    <a href="<?php echo base_url('Compras/Compras_view'); ?>"><i class="fa fa-shopping-cart"></i> Compras</a>
                </li>

                <li>
                    <a href="<?php echo base_url('Operarios/Operarios_view'); ?>"><i class="fa fa-users"></i> Operarios</a>
                </li>

                <li>
                    <a href="<?php echo base_url('Backup/Backup_view'); ?>"><i class="fa fa-download"></i> Backup</a>
                </li>

            </ul>
        </div>

    </nav>
</div>