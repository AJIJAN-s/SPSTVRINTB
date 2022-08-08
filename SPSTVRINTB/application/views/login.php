<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="<?php echo base_url()?>asset/img/TVRI4-1.jpg">

  <title>LOGIN SPS TVRI NTB</title>

  <!-- Bootstrap CSS -->
  <link href="<?php echo base_url()?>asset/css/bootstrap.min2.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="<?php echo base_url()?>asset/css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="<?php echo base_url()?>asset/css/elegant-icons-style.css" rel="stylesheet" />
  <link href="<?php echo base_url()?>asset/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles -->
  <link href="<?php echo base_url()?>asset/css/style2.css" rel="stylesheet">
  <link href="<?php echo base_url()?>asset/css/style-responsive.css" rel="stylesheet" />

  <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>asset/css/plugins/font-awesome.min.css"/>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>asset/css/plugins/simple-line-icons.css"/>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>asset/css/plugins/animate.min.css"/>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>asset/css/plugins/icheck/skins/flat/aero.css"/>
  <link href="<?php echo base_url()?>asset/css/style.css" rel="stylesheet">

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->

    <!-- =======================================================
      Theme Name: NiceAdmin
      Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
      Author: BootstrapMade
      Author URL: https://bootstrapmade.com
    ======================================================= -->
    <!-- <script type="text/javascript">
      function cekform(){
        alert("coba");
      }
    </script> -->
</head>

<body class="login-img3-body">

<div class="text-center">
  <p style="font-size: 400%; margin: auto; position: absolute; top: 3%; left: 5%; right: 5%; bottom: 97%;">SPS TVRI NTB</p>
  <p style="font-size: 350%; color: white; margin: auto; position: absolute; top: 15%; left: 5%; right: 5%; bottom: 85%; text-shadow: 2px 2px gray;">SISTEM PENJADWALAN SIARAN TVRI STASIUN NTB</p>
</div>

  <div class="container">

    <form class="login-form" method="POST" action="<?php echo base_url();?>index.php/login/getlogin" onsubmit="return cekform();">
      <div class="login-wrap">
        <p class="login-img"><i class="icon_lock_alt"></i></p>
<!--         <div class="input-group">
          <span class="input-group-addon"><i class="icon_profile"></i></span>
          <input type="text" name="username" id="username" class="form-control" placeholder="Username" autofocus required="true" value="admin">
        </div>
        <div class="input-group">
          <span class="input-group-addon"><i class="icon_key_alt"></i></span>
          <input type="password" name="password" id="password" class="form-control" placeholder="Password" required="true" value="admintvri">
        </div> -->
        <div class="form-group form-animate-text" style="margin-top:40px !important;">
          <input style="color: #2196f3;" type="text" class="form-text" name="username" id="username" value="admin" autofocus required>
          <span class="bar"></span>
          <label><i class="icon_profile"></i> Username</label>
        </div>
        <div class="form-group form-animate-text" style="margin-top:40px !important;">
          <input style="color: #2196f3;" type="password" class="form-text" name="password" id="password" value="admintvri" required>
          <span class="bar"></span>
          <label><i class="icon_key_alt"></i> Password</label>
        </div>        
        <label class="checkbox">
          <!-- <input type="checkbox" value="remember-me"> Remember me -->
          <span class="pull-right"> <a href="#"> Forgot Password?</a></span>
        </label>
        <p style="color: #2196f3;">
        <?php
          $info = $this->session->flashdata('info');
          if (!empty($info)) {
            echo $info;
          }
        ?>
        </p>
        <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>
        <!-- <button class="btn btn-info btn-lg btn-block" type="submit">Signup</button> -->
      </div>
    </form>
    <div class="text-right">
      <div class="credits">
          <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version form: https://bootstrapmade.com/buy/?theme=NiceAdmin
          -->
<!--           <a href="https://bootstrapmade.com/">Free Bootstrap Templates</a> by <a href="https://bootstrapmade.com/">BootstrapMade</a> -->
        </div>
    </div>
  </div>

</body>

      <!-- start: Javascript -->
      <script src="<?php echo base_url();?>asset/js/jquery.min.js"></script>
      <script src="<?php echo base_url();?>asset/js/jquery.ui.min.js"></script>
      <script src="<?php echo base_url();?>asset/js/bootstrap.min.js"></script>

      <script src="<?php echo base_url();?>asset/js/plugins/moment.min.js"></script>
      <script src="<?php echo base_url();?>asset/js/plugins/icheck.min.js"></script>

      <!-- custom -->
      <script src="<?php echo base_url();?>asset/js/main.js"></script>
      <script type="text/javascript">
       $(document).ready(function(){
         $('input').iCheck({
          checkboxClass: 'icheckbox_flat-aero',
          radioClass: 'iradio_flat-aero'
        });
       });
     </script>
     <!-- end: Javascript -->

</html>
