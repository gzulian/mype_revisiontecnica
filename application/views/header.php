<!DOCTYPE html>
<html>
<head>
  <title>CD MYPE - RENCA</title>
  <script type="text/javascript" src="<?=base_url()?>resources/js/jquery-1.11.3.min.js"></script>
  <link rel="shortcut icon" type="image/x-icon" href="<?= base_url()?>resources/images/favicon.ico">
  <script type="text/javascript" src="<?= base_url()?>resources/js/vendor.js"></script>




  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <link rel="stylesheet" href="<?= base_url()?>resources/js/jquery-ui/jquery-ui.css">
  <link href="<?= base_url()?>resources/css/vendor.css" rel="stylesheet"/>
  <link href="<?= base_url()?>resources/css/flat-admin.css" rel="stylesheet"/>
  <link href="<?= base_url()?>resources/css/red.css" rel="stylesheet"/>


  
  <link href="<?= base_url()?>resources/js/select2-4.0.3/dist/css/select2.min.css"/>

  <!-- DateTimePicker   -->

  
  <!-- Compiled and minified JavaScript -->



  <script type="text/javascript" src="<?= base_url()?>resources/js/select2-4.0.3/dist/js/select2.min.js"></script>
  <style type="text/css">
    #loading {
   width: 100%;
   height: 100%;
   top: 0;
   left: 0;
   position: fixed;
   display: block;
   opacity: 0.7;
   background-color: #fff;
   z-index: 999999;
   text-align: center;
}

#loading-image {
  position: absolute;
  top: 50mm;
  left: 120mm;
  z-index: 9999999;
}
  </style>

  
</head>
<body>


<div class="app app-red">
  <aside class="app-sidebar" id="sidebar">
    <div class="sidebar-header">
      <a class="sidebar-brand" href="#"><span class="highlight">RENCA</span>CD MYPE</a>
      <button type="button" class="sidebar-toggle">
        <i class="fa fa-times"></i>
      </button>
    </div>
    <div class="sidebar-menu">
      <ul class="sidebar-nav">
        <li class="active" >
          <a href="<?php echo site_url('Mantecion/index/') ?>">
            <div class="icon">
              <i class="fa fa-stethoscope" aria-hidden="true"></i>
            </div>
            <div class="title">Revisión Técnica</div>
          </a>
        </li>
      </ul>
    </div>

  </aside>

<div class="app-container">

  <nav class="navbar navbar-default" id="navbar">
  <div class="container-fluid">
    <div class="navbar-collapse collapse in">

      <ul class="nav navbar-nav navbar-mobile">
        <li>
          <button type="button" class="sidebar-toggle">
          <i class="fa fa-bars"></i>
          </button>
        </li>
        <li class="logo">
          <a class="navbar-brand" href="#"><span class="highlight">CENTRO DE DESARROLLO</span> MYPE</a>
        </li>
        <li>
          <button type="button" class="navbar-toggle">
            <img class="profile-img" src="<?= base_url()?>resources/images/Clinica.png">
          </button>
        </li>
      </ul>

      <ul class="nav navbar-nav navbar-left">
        <li class="navbar-title">Bienvenido - <?//=$user["nombre"];?></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown profile">
        <a href="/html/pages/profile.html" class="dropdown-toggle"  data-toggle="dropdown">
        <img class="profile-img" src="<?= base_url()?>resources/images/Clinica.png">
        <div class="title">Perfil</div>
        </a>

        <div class="dropdown-menu">
          <div class="profile-info">
            <h4 class="username"><?//=$user["nombre"];?></h4>
          </div>
          <ul class="action">
            <li> <a href="<?=site_url('Usuario/perfil')?>" >Mis Datos</a> </li>
            <li> <a href="<?= site_url('Login/logout') ?>">Salir</a></li>
          </ul>
        </div>
        </li>
      </ul>
    </div>
  </div>
  </nav>