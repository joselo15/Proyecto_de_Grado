 <div class="container">
            <div class="page-header">
              <h1 class="all-tittles">Sistema vivienda social <small>Administración Copropietarios</small></h1>
            </div>
        </div>
        <div class="conteiner-fluid">
            <ul class="nav nav-tabs nav-justified"  style="font-size: 17px;">
                <li role="presentation" class="active"><a href="">Copropietarios</a></li>
                <li role="presentation"><a href="">Departamentos</a></li>
            </ul>
        </div>
        <div class="container-fluid"  style="margin: 50px 0;">
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <img src="<?php echo base_url(); ?>assets/img/user05.png" alt="user" class="img-responsive center-box" style="max-width: 110px;">
                </div>
                <div class="col-xs-12 col-sm-8 col-md-8 text-justify lead">
                    Bienvenido a la sección de registro de Copropietarios. Para registrar al Copropietario debes de llenar los campos del siguiente formulario, recuerda que hay algunos campos que son Obligatorios  .
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 lead">
                    <ol class="breadcrumb">
                      <li class="active">Nuevo copropietario</li>
                      <li><a href="<?php echo base_url(); ?>index.php/copropietarios/index">Listado de Copropietarios</a></li>
                    </ol>
                </div>
            </div>
        </div>


        <div class="container-fluid">
            <div class="container-flat-form">
                <div class="title-flat-form title-flat-blue">REGISTRAR NUEVO COPROPIETARIO</div>
<div class="container-fluid">
    <?php
    $atributos = array('class' => 'form-group', 'id' => 'myform');
    echo form_open_multipart('copropietarios/agregarbd',$atributos);
    ?>



                    <div class="row">
                        <div class="col-xs-12">
                            <legend><i class="zmdi zmdi-account-box"></i> &nbsp; Datos básicos</legend><br>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" placeholder="Escribe aquí los nombres del Copropietario" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,50}" required="" maxlength="50" data-toggle="tooltip" data-placement="top" title="Escribe los nombres del Copropietario, solamente letras" name="nombre">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Nombres</label>
                            </div>
                        </div>
                         <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" placeholder="Escribe aquí los apellidos del Copropietario" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,50}" required="" maxlength="50" data-toggle="tooltip" data-placement="top" title="Escribe los apellidos del Copropietario, solamente letras" name="apellidos">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Apellidos</label>
                            </div>
                        </div>
                         <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" placeholder="Escribe aquí el numero de cedula de identidad del Copropietario" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ-0-9 ]{1,50}" required="" maxlength="50" data-toggle="tooltip" data-placement="top" title="Escribe la cedulade identidad del Copropietario" name="ci">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Cedula de Identidad</label>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <input type="correo" class="material-control tooltips-general" placeholder="Escribe aquí el correo del Copropietario" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ-0-9-@-. ]{1,50}" required="" maxlength="50" data-toggle="tooltip" data-placement="top" title="Escribe el correo del Copropietario" name="correo">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Correo</label>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" placeholder="Escribe aquí el número de teléfono del Copropietario" pattern="[0-9]{8,8}" required="" maxlength="8" data-toggle="tooltip" data-placement="top" title="Solamente 8 números" name="telefono"> 
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Teléfono</label>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" placeholder="Escribe aquí el nombre de Usuario" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ-0-9 ]{1,50}" required="" maxlength="15" data-toggle="tooltip" data-placement="top" title="Escribe el nombre de usuario" name="usuario">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Usuario</label>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <input type="password" class="material-control tooltips-general" placeholder="Escribe aquí la Contraseña" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ-0-9-@ ]{1,50}" required="" maxlength="50" data-toggle="tooltip" data-placement="top" title="Escribe la contraseña" name="contrasenia">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Contraseña</label>
                            </div>
                        </div>
                       <div class="col-xs-12">
                            <p class="text-center">
                                <button type="reset" class="btn btn-info" style="margin-right: 20px;"><i class="zmdi zmdi-roller"></i> &nbsp;&nbsp; LIMPIAR</button>
                                <button type="submit" class="btn btn-primary"><i class="zmdi zmdi-floppy"></i> &nbsp;&nbsp; AGREGAR</button>
                            </p> 
                        </div>
                    </div>
                      <?php
    echo form_close();
    ?>

        </div>
        </div>
        </div>