<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<title>:: Sazón Web-Login ::</title>

<link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url();?>https://fonts.googleapis.com/icon?family=Material+Icons">

  <!-- Theme style -->

<link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
<link rel="icon" href="favicon.ico" type="image/x-icon">
<!-- Custom Css -->
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/main.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/login.css">

<!-- Swift Themes. You can choose a theme from css/themes instead of get all themes -->
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/themes/all-themes.css">

</head>
<body class="theme-cyan login-page authentication">

<div class="container">
    <div class="card-top"></div>
    <div class="card">
        <h1 class="title"><span>Sazón Web</span>Inicio de Sesión<span class="msg"></span></h1>
        <div class="col-md-12">
        <?php if($this->session->flashdata("error")):?>
              <div class="alert alert-danger">
                <p><?php echo $this->session->flashdata("error")?></p>
              </div>
            <?php endif; ?>
            <form id="sign_in" method="POST" action="<?php echo base_url();?>auth/login">
                
                <div class="input-group"> <span class="input-group-addon"> <i class="zmdi zmdi-account"></i> </span>
                    <div class="form-line">
                        <input type="text" class="form-control" name="username" placeholder="E-mail" required autofocus>
                    </div>
                </div>
                <div class="input-group"> <span class="input-group-addon"> <i class="zmdi zmdi-lock"></i> </span>
                    <div class="form-line">
                        <input type="password" class="form-control" name="password" placeholder="Contraseña" required>
                    </div>
                </div>
                <div>
                    <div class="">
                        <input type="checkbox" name="rememberme" id="rememberme" class="filled-in chk-col-pink">
                        <label for="rememberme">Recordar Contraseña</label>
                    </div>
                    <div class="text-center">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Ingresar</button>
                        <a href="sign-up.html" class="btn btn-raised waves-effect">Registrar</a>
                    </div>
                    <div class="text-center"> <a href="forgot-password.html">¿Has olvidado tu contraseña?</a></div>
                </div>
            </form>
        </div>
    </div>    
</div>
<div class="theme-bg"></div>

<!-- Jquery Core Js -->
<script src="<?php echo base_url();?>assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->
<script src="<?php echo base_url();?>assets/bundles/vendorscripts.bundle.js"></script><!-- Lib Scripts Plugin Js -->
<script src="<?php echo base_url();?>assets/bundles/mainscripts.bundle.js"></script><!-- Custom Js -->
</body>
</html>