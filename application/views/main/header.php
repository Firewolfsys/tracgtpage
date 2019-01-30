<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="img/fav-icon.png" type="image/x-icon" />
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Transportes de Carga</title>
    
    <!-- Icon css link -->
    <link href="<?= base_url('css/font-awesome.min.css')?>" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="<?= base_url('css/bootstrap.min.css')?>" rel="stylesheet">
    <!-- Rev slider css -->
    <link href="<?= base_url('vendors/revolution/css/settings.css')?>" rel="stylesheet">
    <link href="<?= base_url('vendors/revolution/css/layers.css')?>" rel="stylesheet">
    <link href="<?= base_url('vendors/revolution/css/navigation.css')?>" rel="stylesheet">
    <link href="<?= base_url('vendors/animate-css/animate.css')?>" rel="stylesheet">
    <!-- Extra plugin css -->
    <link href="<?= base_url('vendors/owl-carousel/assets/owl.carousel.min.css')?>" rel="stylesheet">
    <link href="<?= base_url('vendors/magnific-popup/magnific-popup.css')?>" rel="stylesheet">
    <link href="<?= base_url('css/style.css')?>" rel="stylesheet">


  <!-- DataTables -->
  <link rel="stylesheet" href="<?= base_url('plugins/datatables/dataTables.bootstrap4.min.css')?>">

   <!-- Select2 -->
  <link rel="stylesheet" href="<?= base_url('plugins/select2/select2.min.css')?>">

</head>


<body>
    <!--================Header Area =================-->
    <header class="main_header_area">
        <div class="header_top">
            <div class="container">
                <div class="pull-left">
                    <a href="<?= base_url()?>">
                        <img src="<?= base_url('img/logo.png')?>" class="img-fluid" alt="Responsive image">
                    </a>
                </div>
                <div class="pull-right">
                    <div class="header_c_text">
                        <h5><img src="<?= base_url('img/telefono.png')?>" class="img-fluid" alt="Responsive image"> Contacto Telefónico</h5>
                        <h4>(502) 2209-4242</h4>
                    </div>
                    <div class="header_c_text">
                        <h5><img src="<?= base_url('img/reloj.png')?>" class="img-fluid" alt="Responsive image"> Horario de Atención</h5>
                        <h4>Lun-Vie 6:00 AM a 6:00 PM</h4>
                    </div>
                    <div class="header_c_text">
                        <h5><img src="<?= base_url('img/email.png')?>" class="img-fluid" alt="Responsive image"> Correo Electrónico</h5>
                        <h4>info@transportesdecarga.com.gt</h4>
                    </div>
                     <?php 
                     if (!isset($_SESSION['user_id'])) {
                        ?>
                    <div class="header_c_text">
                        <a class="quote_btn" href="" data-toggle="modal" data-target="#myModal">Logueo</a>
                    </div>

                     <?php  
                                }
                             ?>
                </div>
            </div>
        </div>
        <div class="main_menu_area">
            <nav class="navbar navbar-default">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Navegación Móvil</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            </button>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li class="dropdown submenu">
                                <a href="<?php echo base_url() ?>" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Sobre Nosotros<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                <ul class="dropdown-menu">
                                    <li><a href="<?php echo base_url() ?>">Quienes Somos?</a></li>
                                    <li><a href="<?php echo base_url() ?>">Misión</a></li>
                                    <li><a href="<?php echo base_url() ?>">Visión</a></li>
                                </ul>
                            </li>
                            <li class="dropdown submenu">
                                <a href="<?php echo base_url() ?>" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Servicios<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                <ul class="dropdown-menu">
                                    <li><a href="<?php echo base_url() ?>">Logística de Transporte</a></li>
                                    <li><a href="<?php echo base_url() ?>">Día Siguiente</a></li>
                                </ul>
                            </li>
                            <li class="dropdown submenu">
                                <a href="<?php echo base_url() ?>" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Atención al Cliente<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                <ul class="dropdown-menu">
                                    <li><a href="<?php echo base_url() ?>">Cómo Solicitar un Servicio?</a></li>
                                    <li><a href="<?php echo base_url() ?>">Lista de Artículos Prohibidos</a></li>
                                    <li><a href="<?php echo base_url() ?>">Solicitud de Reportes</a></li>
                                    <li><a href="<?php echo base_url() ?>">Proceso de Reclamos</a></li>
                                </ul>
                            </li>
                            <li><a href="<?php echo base_url('tracking') ?>">Tracking</a></li>
                            <li><a href="about.html">Contacto</a></li>
                            <?php 
                             if (isset($_SESSION['user_id'])) {
                                ?>
                                <li class="dropdown submenu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo($_SESSION['username']);  ?> <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                <ul class="dropdown-menu">
                                    <li><a href="<?php echo base_url('guias') ?>">Mis Guias</a></li>
                                    <li><a href="<?php echo base_url('nuevaguia') ?>">Ingreso de Guias</a></li>
                                    <li><a href="<?php echo base_url('tracking') ?>">Tracking individual</a></li>
                                    <li><a href="contact2.html">Mi perfil</a></li>
                                    <li><a href="<?php echo base_url('logout') ?>">Salir</a></li>
                                </ul>
                            </li>
                             <?php  
                                }
                             ?>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Buscar...">
                                    <span class="input-group-btn">
                                            <button class="btn btn-default" type="button"><i class="fa fa-search" aria-hidden="true"></i></button>
                                        </span>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </div>
                <!-- /.container -->
            </nav>
        </div>
    </header>
    <!--================End Header Area =================-->