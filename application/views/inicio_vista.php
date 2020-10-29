<!DOCTYPE html>
<html lang="en">
<head>

	 <title>Inicio de sesión</title>
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
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- <script src="<?php //echo base_url(); ?>ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script> -->
    <script>window.jQuery || document.write('<script src="<?php echo base_url(); ?>bootstrap/js/jquery-1.11.2.min.js"><\/script>')</script>
    <script src="<?php echo base_url(); ?>bootstrap/js/modernizr.js"></script>
    <script src="<?php echo base_url(); ?>bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>bootstrap/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="<?php echo base_url(); ?>bootstrap/js/main.js"></script>
</head>
<body>

  <div class="login-container full-cover-background">
    <div class="form-container">
    <?php 
  switch ($msg) {  
  case '1':
    echo "USUARIO O CONTRASEÑA INCORRECTOS";
    break;
    case '2':
      echo "ACCESO NO VALIDO";
      break;
      case '3':
        echo "GRACIAS POR USAR EL SISTEMA :)";
        break;
        default:
        echo "INGRESO AL SISTEMA BIENVENIDO";
          break;
  
}?>
        <p class="text-center" style="margin-top: 17px;">
           <i class="zmdi zmdi-account-circle zmdi-hc-5x"></i>
       </p>
       
       <h4 class="text-center all-tittles" style="margin-bottom: 30px;">inicia sesión con tu cuenta</h4>

       <form action="<?php echo base_url(); ?>index.php/usuarios/validarusuario " method="POST" autocomplete="off">
            <div class="group-material-login">
              <input type="text" class="material-login-control" required=""  maxlength="10" name="usuario" autocomplete="off">
              <span class="highlight-login"></span>
              <span class="bar-login"></span>
              <label><i class="zmdi zmdi-account"></i> &nbsp; Usuario </label>
            </div><br>
            <div class="group-material-login">
              <input type="password" class="material-login-control" required="" maxlength="15" name="contrasenia" autocomplete="off">
              <span class="highlight-login"></span>
              <span class="bar-login"></span>
              <label><i class="zmdi zmdi-lock"></i> &nbsp; Contraseña</label>
            </div>
            <div class="row">
           
            <button class="btn-login" type="submit" name="entrar">INGRESAR AL SISTEMA &nbsp; <i class="zmdi zmdi-arrow-right"></i></button>
            </div>
            
       </form> 
       <!-- <form action="<?php //echo base_url(); ?>index.php/usuarios/index3 " method="POST">
            <button type="submit" class="btn btn-success">Nuevo Usuario</button>
            </form> -->   


    </div>   
  </div>
</body>
</html>