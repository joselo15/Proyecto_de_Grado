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
    <script src="<?php echo base_url(); ?>//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="<?php echo base_url(); ?>bootstrap/js/jquery-1.11.2.min.js"><\/script>')</script>
    <script src="<?php echo base_url(); ?>bootstrap/js/modernizr.js"></script>
    <script src="<?php echo base_url(); ?>bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>bootstrap/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="<?php echo base_url(); ?>bootstrap/js/main.js"></script>
</head>
<body>

  <div class="login-container full-cover-background">
    <div class="form-container">
        <p class="text-center" style="margin-top: 17px;">
           <i class="zmdi zmdi-account-circle zmdi-hc-5x"></i>
       </p>
       
       <h4 class="text-center all-tittles" style="margin-bottom: 30px;">Ingresa tus datos</h4>

       <form action="<?php echo base_url(); ?>index.php/usuarios/crearusuario " method="POST" autocomplete="off">
            <div class="group-material-login">
              <input type="text" class="material-login-control"required=""  maxlength="70" name="nombre" autocomplete="off">
              <span class="highlight-login"></span>
              <span class="bar-login"></span>
              <label><i class="zmdi zmdi-account"></i> &nbsp; Nombre </label>
            </div><br>
            <div class="group-material-login">
              <input type="text" class="material-login-control"required=""  maxlength="70" name="apellidos" autocomplete="off">
              <span class="highlight-login"></span>
              <span class="bar-login"></span>
              <label><i class="zmdi zmdi-account"></i> &nbsp; Apellido </label>
            </div><br>
            <div class="group-material-login">
              <input type="text" class="material-login-control"required=""  maxlength="70" name="ci" autocomplete="off">
              <span class="highlight-login"></span>
              <span class="bar-login"></span>
              <label><i class="zmdi zmdi-account"></i> &nbsp; Ci </label>
            </div><br>
            <div class="group-material-login">
              <input type="correo" class="material-login-control"required=""  maxlength="70" name="correo" autocomplete="off">
              <span class="highlight-login"></span>
              <span class="bar-login"></span>
              <label><i class="zmdi zmdi-account"></i> &nbsp; Email </label>
            </div><br>
            <div class="group-material-login">
              <input type="text" class="material-login-control"required=""  maxlength="8" name="telefono" autocomplete="off">
              <span class="highlight-login"></span>
              <span class="bar-login"></span>
              <label><i class="zmdi zmdi-account"></i> &nbsp; Telefono </label>
            </div><br>
            <div class="group-material-login">
              <input type="text" class="material-login-control"required=""  maxlength="70" name="direccion" autocomplete="off">
              <span class="highlight-login"></span>
              <span class="bar-login"></span>
              <label><i class="zmdi zmdi-account"></i> &nbsp; Direccion </label>
            </div><br>
            <div class="group-material-login">
              <input type="text" class="material-login-control"required=""  maxlength="15" name="usuario" autocomplete="off">
              <span class="highlight-login"></span>
              <span class="bar-login"></span>
              <label><i class="zmdi zmdi-account"></i> &nbsp; Usuario </label>
            </div><br>
            <div class="group-material-login">
              <input type="password" class="material-login-control" required="" maxlength="70" name="contrasenia" autocomplete="off">
              <span class="highlight-login"></span>
              <span class="bar-login"></span>
              <label><i class="zmdi zmdi-lock"></i> &nbsp; Contraseña</label>
            </div>          
             <button class="btn-login" type="submit" name="entrar">Crear Usuario &nbsp; <i class="zmdi zmdi-arrow-right"></i></button>           
       </form> 
       <form action="<?php echo base_url(); ?>index.php/usuarios/index " method="POST">
            <button type="submit" class="btn btn-danger">Cancelar</button>
        </form>   


    </div>   
  </div>
</body>
</html>