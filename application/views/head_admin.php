<?php /**@author : Israel A. Flores García <Isxflogar> <isflogar0103@gmail.com>**/ ?>
<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title><?php echo $title ?></title>
      <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
      <link href="<?php echo base_url('public/lib/assets/vendor/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">
      <!-- MetisMenu CSS -->
      <link href="<?php echo base_url('public/lib/assets/vendor/metisMenu/metisMenu.min.css')?>" rel="stylesheet">
      <!-- DataTables CSS -->
      <link href="<?php echo base_url('public/lib/assets/vendor/datatables-plugins/dataTables.bootstrap.css')?>" rel="stylesheet">
      <!-- DataTables Responsive CSS -->
      <link href="<?php echo base_url('public/lib/assets/vendor/datatables-responsive/dataTables.responsive.css')?>" rel="stylesheet">
      <link href="<?php echo base_url('public/lib/assets/animate.min.css')?>" rel="stylesheet">
       <!-- Custom CSS -->
      <link href="<?php echo base_url('public/lib/assets/dist/css/sb-admin-2.css')?>" rel="stylesheet">
      <!-- Custom Fonts -->
      <link href="<?php echo base_url('public/lib/assets/vendor/font-awesome/css/font-awesome.min.css')?>" rel="stylesheet" type="text/css">
      <link href="<?php echo base_url('public/lib/assets/vendor/select2/css/select2.min.css')?>" rel="stylesheet" type="text/css">
      <link href="<?php echo base_url('public/lib/datepicker/css/bootstrap-datepicker.css')?>" rel="stylesheet" type="text/css">
      <link href="<?php echo base_url('public/lib/assets/vendor/toast/css/jquery.toast.css')?>" rel="stylesheet" type="text/css">
      <?php foreach($lib_css as $value): ?>
      <link rel="stylesheet" href="<?php echo $value ?>">
      <?php endforeach; ?>
      <link href="<?php echo base_url('public/css/main.css')?>" rel="stylesheet" type="text/css">
</head>

<body>
	<div id="wrapper">
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="javascript:void(0)"><?php echo NAME_SYSTEM ?></a>
          </div>

          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
               <li class="dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                     <i class="fa fa-user fa-fw"></i>
                     <?php echo $fullname_usu; ?>
                     <i class="fa fa-caret-down"></i>
                  </a>
               </li>
            </ul>
          </div>
        </div>
      </nav>

      <div class="container-fluid">
         <div class="row">
            <div class="col-lg-12">
            <br><br>
