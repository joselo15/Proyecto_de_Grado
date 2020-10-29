<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>bootstrap/css/bootstrap.css">

	 <title>Sistema Vivienda Social</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="Shortcut Icon" type="image/x-icon" href="<?php echo base_url(); ?>assets/icons/razer.ico" />
    <script src="<?php echo base_url(); ?>bootstrap/js/sweet-alert.min.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>bootstrap/css/sweet-alert.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>bootstrap/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>bootstrap/css/normalize.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>bootstrap/css/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>bootstrap/css/style.css">
    <script src="<?php echo base_url(); ?>//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="<?php echo base_url(); ?>bootstrap/js/jquery-1.11.2.min.js"><\/script>')</script>
    <script src="<?php echo base_url(); ?>bootstrap/js/modernizr.js"></script>
    <script src="<?php echo base_url(); ?>bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>bootstrap/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="<?php echo base_url(); ?>bootstrap/js/main.js"></script>
</head>
<body>
	<div class="navbar-lateral full-reset">
        <div class="visible-xs font-movile-menu mobile-menu-button"></div>
        <div class="full-reset container-menu-movile nav-lateral-scroll">
            <div class="logo full-reset all-tittles">
                <i class="visible-xs zmdi zmdi-close pull-left mobile-menu-button" style="line-height: 55px; cursor: pointer; padding: 0 10px; margin-left: 7px;"></i> 
                Sistema Vivienda Social
            </div>
            <div class="nav-lateral-divider full-reset" ></div>
            <div class="full-reset" style="padding: 10px 0; color:#fff;">
                <figure>
                    <img src="<?php echo base_url(); ?>assets/img/logoOf1.png" alt="Biblioteca" class="img-responsive center-box" style="width:55%;">
                </figure>
                <p class="text-center" style="padding-top: 15px;">INVITADO</p>
            </div>
            <div class="nav-lateral-divider full-reset"></div>
            <div class="full-reset nav-lateral-list-menu" >
                <ul class="list-unstyled">
                   <li><a href="<?php echo base_url(); ?>index.php/copropietarios/vistainvitado"><i class="zmdi zmdi-home zmdi-hc-fw"></i>&nbsp;&nbsp; Inicio</a></li>
                    <li>
                        <div class="dropdown-menu-button"><i class="zmdi zmdi-money zmdi-hc-fw"></i>&nbsp;&nbsp; Estado de Cuenta <i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw icon-sub-menu"></i></div>
                        <ul class="list-unstyled">
                            <li><a href=""><i class="zmdi zmdi-money zmdi-hc-fw"></i>&nbsp;&nbsp; Gasto Común</a></li>
                            <li><a href=""><i class="zmdi zmdi-money zmdi-hc-fw"></i>&nbsp;&nbsp; Gasto Común Comunidad</a></li>
                           <!-- <li><a href="catalog.html"><i class="zmdi zmdi-bookmark-outline zmdi-hc-fw"></i>&nbsp;&nbsp; Catálogo</a></li> -->
                        </ul>
                    </li>
                     
                    <li><a href=""><i class="zmdi zmdi-trending-up zmdi-hc-fw"></i>&nbsp;&nbsp; Reportes y estadísticas</a></li>
                    <li><a href=""><i class="zmdi zmdi-male-alt zmdi-hc-fw"></i>&nbsp;&nbsp; Perfil</a></li>
                    <!--  <li>
                        <div class="dropdown-menu-button"><i class="zmdi zmdi-case zmdi-hc-fw"></i>&nbsp;&nbsp; Administración <i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw icon-sub-menu"></i></div>
                        <ul class="list-unstyled">
                            <li><a href=""><i class="zmdi zmdi-balance zmdi-hc-fw"></i>&nbsp;&nbsp; Datos institución</a></li>
                            <li><a href=""><i class="zmdi zmdi-assignment-account zmdi-hc-fw"></i>&nbsp;&nbsp; Area Comun</a></li>
                            <li><a href=""><i class="zmdi zmdi-bookmark-outline zmdi-hc-fw"></i>&nbsp;&nbsp; Nuevo Tipo</a></li>
                            <li><a href=""><i class="zmdi zmdi-assignment-account zmdi-hc-fw"></i>&nbsp;&nbsp; Nuevo Tipo</a></li>
                        </ul>
                    </li> -->
                    <li><a href=""><i class="zmdi zmdi-plus zmdi-hc-fw"></i>&nbsp;&nbsp; Reserva Area Común</a></li>
                     <li>
                    <li><a href=""><i class="zmdi zmdi-volume-up zmdi-hc-fw"></i>&nbsp;&nbsp; Anuncios Sugerencias y Reclamos</a></li>
                     <li>
                </ul>
            </div>
        </div>
    </div>
    <div class="content-page-container full-reset custom-scroll-containers">   
        <nav class="navbar-user-top full-reset">
            <ul class="list-unstyled full-reset">

                <figure>
                   <img  src="<?php echo base_url(); ?>assets/img/user03.png" alt="user-picture" class="img-responsive img-circle center-box">
                </figure>
                <li style="color:#fff; cursor:default;">
                    <span class="all-tittles"><?php echo $this->session->userdata('usuario'); ?></span>
                </li>
                <li  class="tooltips-general exit-system-button" data-href="<?php echo base_url(); ?>index.php/usuarios/logout" data-placement="bottom" title="Salir del sistema">
                    <i class="zmdi zmdi-power"></i>
                </li>
               <!--  <li  class="tooltips-general search-book-button" data-href="" data-placement="bottom" title="Buscar ">
                    <i class="zmdi zmdi-search"></i>
                </li> -->
                <li  class="tooltips-general btn-help" data-placement="bottom" title="Ayuda">
                    <i class="zmdi zmdi-help-outline zmdi-hc-fw"></i>
                </li>
                <li class="mobile-menu-button visible-xs" style="float: left !important;">
                    <i class="zmdi zmdi-menu"></i>
                </li> 
                <li class="desktop-menu-button hidden-xs" style="float: left !important;">
                    <i class="zmdi zmdi-menu"></i>
                </li>             
               <!--  <li class="desktop-menu-button hidden-xs" style="float: left !important;">
                    <i class="zmdi zmdi-swap"></i>
                </li> -->
                
            </ul>
        </nav>
        

