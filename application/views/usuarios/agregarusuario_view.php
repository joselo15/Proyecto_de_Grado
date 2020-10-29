 <div class="container">
            <div class="page-header">
              <h1 class="all-tittles">Sistema vivienda social <small>Administración Usuarios</small></h1>
            </div>
        </div>
        <div class="conteiner-fluid">
            <ul class="nav nav-tabs nav-justified"  style="font-size: 17px;">
                <li role="presentation" class="active"><a href="">Usuarios</a></li>
            </ul>
        </div>
        <div class="container-fluid"  style="margin: 50px 0;">
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <img src="<?php echo base_url(); ?>assets/img/user05.png" alt="user" class="img-responsive center-box" style="max-width: 110px;">
                </div>
                <div class="col-xs-12 col-sm-8 col-md-8 text-justify lead">
                    Bienvenido a la sección de registro de usuarios. Para registrar al Usuario debes de llenar los campos del siguiente formulario, recuerda que hay algunos campos que son Obligatorios  .
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 lead">
                    <ol class="breadcrumb">
                      <li class="active">Nuevo Usuario</li>
                      <li><a href="<?php echo base_url(); ?>index.php/usuarios/listar">Listado de Usuarios</a></li>
                    </ol>
                </div>
            </div>
        </div>


        <div class="container-fluid">
            <div class="container-flat-form">
                <div class="title-flat-form title-flat-blue">REGISTRAR NUEVO USUARIO</div>
<div class="container-fluid">
    <?php
    $atributos = array('class' => 'form-group', 'id' => 'myform');
    echo form_open_multipart('usuarios/crearusuario',$atributos);
    ?>

                    <div class="row">
                        <div class="col-xs-12">
                            <legend><i class="zmdi zmdi-account-box"></i> &nbsp; Datos básicos</legend><br>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" placeholder="Escribe aquí los nombres del Usuario"  required="" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,50}" data-toggle="tooltip" data-placement="top" title="Escribe los nombres del Usuario, solamente letras" name="nombres">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Nombres</label>
                                <?php echo form_error('nombres'); ?>
                            </div>
                        </div>
                         <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" placeholder="Escribe aquí los apellidos del usuario" required="" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,50}" data-toggle="tooltip" data-placement="top" title="Escribe los apellidos del Usuario, solamente letras" name="apellidoPaterno">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Apellido Paterno</label>
                                <?php echo form_error('apellidoPaterno'); ?>
                            </div>

                        </div>

                        <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" placeholder="Escribe aquí los apellidos del usuario" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,50}" data-toggle="tooltip" data-placement="top" title="Escribe los apellidos del Usuario, solamente letras" name="apellidoMaterno">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Apellido Materno</label>
                                <?php echo form_error('apellidoMaterno'); ?>
                            </div>
                        </div>
                         <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" placeholder="Escribe aquí el numero de cedula de identidad del Usuario"  required="" pattern="[0-9-A-B- ]{1,11}" maxlength="11" data-toggle="tooltip" data-placement="top" title="Escribe la cedula de identidad del Usuario" name="ci">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Cedula de Identidad</label>
                                <?php echo form_error('ci'); ?>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <input type="correo" class="material-control tooltips-general" placeholder="Escribe aquí el correo del Usuario"  required=""  data-toggle="tooltip" data-placement="top" title="Escribe el correo del Usuario" name="correo">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Correo</label>
                                <?php echo form_error('correo'); ?>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" placeholder="Escribe aquí el número de teléfono del Usuario"  required=""   required="" pattern="[0-9 ]{8}" maxlength="8"  data-toggle="tooltip" data-placement="top" title="Solamente 8 números" name="telefono"> 
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Teléfono</label>
                                <?php echo form_error('telefono'); ?>
                            </div>
                        </div>
                         <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <input type="date" class="material-control tooltips-general" placeholder="Escribe aquí el número de teléfono del Usuario" required=""  data-toggle="tooltip" data-placement="top" min="1930-01-01" max="2020-12-31" value="2020-10-01" name="fechaNacimiento"> 
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Fecha Nacimiento</label>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" placeholder="Escribe aquí el nombre de Usuario" required="" data-toggle="tooltip" data-placement="top" title="Escribe el nombre de Usuario" name="usuario">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Usuario</label>
                                <?php echo form_error('usuario'); ?>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <input type="password" class="material-control tooltips-general" placeholder="Escribe aquí la Contraseña" required="" data-toggle="tooltip" data-placement="top" title="Escribe la contraseña" name="contrasenia">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Contraseña</label>
                                <?php echo form_error('contrasenia'); ?>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-3">
                      <div class="form-group">
                        <label for="exampleFormControlSelect1">Rol</label>
                        <select class="form-control" name="idRol" required=""> 
                            <option value="" disabled="" selected="">Selecciona un Rol</option>
                             <?php foreach ($rol->result() as $row1) {  ?>                                           
                             <option value="<?php echo $row1->idRol; ?>"><?php echo $row1->descripcion; ?></option>
                             <?php  }  ?>                                        
                        </select>
                       </div>
                    </div>
                    <div class="col-xs-12 col-sm-3">
                      <div class="form-group">
                        <label for="exampleFormControlSelect1">Edificio</label>
                        <select class="form-control" name="idEdificio" required="">                            
                              <option value="" disabled="" selected="">Selecciona un Edificio</option>
                             <?php foreach ($edificio->result() as $row1) {  ?>                                           
                             <option value="<?php echo $row1->idEdificio; ?>"><?php echo $row1->razonSocial; ?></option>
                             <?php  }  ?>
                        </select>
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