
 <div class="container-fluid">
            <div class="container-flat-form">
                <div class="title-flat-form title-flat-blue">MODIFICAR DATOS DEL USUARIO</div>
<div class="container">
    <?php
    $atributos = array('class' => 'form-group', 'id' => 'myform');
    echo form_open_multipart('usuarios/modificarbd',$atributos);
    foreach ($infousuario->result() as $row)
    {
    ?>
     <div class="row">
        <div class="col-xs-12">
            <legend><i class="zmdi zmdi-account-box"></i> &nbsp; Datos básicos</legend><br>
        </div>
        <input type="hidden" name="id" value="<?php echo $row->idUsuario; ?>">
        <div class="col-xs-12 col-sm-6">
            <div class="group-material">
                <input type="text" class="material-control tooltips-general" placeholder="Escribe aquí los nombres del Copropietario"  required=""  data-toggle="tooltip" data-placement="top" title="Escribe los nombres del Copropietario, solamente letras" name="nombres" value="<?php echo $row->nombres; ?>">
                <span class="highlight"></span>
                <span class="bar"></span>
                <label>Nombres</label>
            </div>
        </div>
         <div class="col-xs-12 col-sm-6">
            <div class="group-material">
                <input type="text" class="material-control tooltips-general" placeholder="Escribe aquí los apellidos del Copropietario" required="" maxlength="20" data-toggle="tooltip" data-placement="top" title="Escribe los apellidos del Copropietario, solamente letras" name="apellidoPaterno" value="<?php echo $row->apellidoPaterno; ?>">
                <span class="highlight"></span>
                <span class="bar"></span>
                <label>Apellido Paterno</label>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6">
            <div class="group-material">
                <input type="text" class="material-control tooltips-general" placeholder="Escribe aquí los apellidos del Copropietario" required=""  data-toggle="tooltip" data-placement="top" title="Escribe los apellidos del Copropietario, solamente letras" name="apellidoMaterno" value="<?php echo $row->apellidoMaterno; ?>">
                <span class="highlight"></span>
                <span class="bar"></span>
                <label>Apellido Materno</label>
            </div>
        </div>
         <div class="col-xs-12 col-sm-6">
            <div class="group-material">
                <input type="text" class="material-control tooltips-general" placeholder="Escribe aquí el numero de cedula de identidad del Copropietario"  required="" maxlength="10" data-toggle="tooltip" data-placement="top" title="Escribe la cedulade identidad del Copropietario" name="ci" value="<?php echo $row->ci; ?>">
                <span class="highlight"></span>
                <span class="bar"></span>
                <label>Cedula de Identidad</label>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6">
            <div class="group-material">
                <input type="correo" class="material-control tooltips-general" placeholder="Escribe aquí el correo del Copropietario"  required=""  data-toggle="tooltip" data-placement="top" title="Escribe el correo del Copropietario" name="email" value="<?php echo $row->email; ?>">
                <span class="highlight"></span>
                <span class="bar"></span>
                <label>Correo</label>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6">
            <div class="group-material">
                <input type="text" class="material-control tooltips-general" placeholder="Escribe aquí el número de teléfono del Copropietario"  required=""  data-toggle="tooltip" data-placement="top" title="Solamente 8 números" name="telefono" value="<?php echo $row->telefono; ?>"> 
                <span class="highlight"></span>
                <span class="bar"></span>
                <label>Teléfono</label>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6">
            <div class="group-material">
                <input type="text" class="material-control tooltips-general" placeholder="Escribe aquí el número de teléfono del Copropietario"  required=""  data-toggle="tooltip" data-placement="top" title="Solamente 8 números" name="fechaNacimiento" value="<?php echo $row->fechaNacimiento; ?>"> 
                <span class="highlight"></span>
                <span class="bar"></span>
                <label>Fecha Nacimiento</label>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6">
            <div class="group-material">
                <input type="text" class="material-control tooltips-general" placeholder="Escribe aquí el nombre de Usuario"  required="" maxlength="12" data-toggle="tooltip" data-placement="top" title="Escribe el nombre de usuario" name="usuario" value="<?php echo $row->usuario; ?>">
                <span class="highlight"></span>
                <span class="bar"></span>
                <label>Usuario</label>
            </div>
        </div>
        <!-- <div class="col-xs-12 col-sm-6">
            <div class="group-material">
                <input type="password" readonly="readonly" class="material-control tooltips-general" placeholder="Escribe aquí la Contraseña" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ-0-9-@ ]{1,50}" required="" maxlength="50" data-toggle="tooltip" data-placement="top" title="Escribe la contraseña" name="contrasenia" value="<?php echo $row->contrasenia; ?>">
                <span class="highlight"></span>
                <span class="bar"></span>
                <label>Contraseña</label>
            </div>
        </div> -->
        <div class="col-xs-12 col-sm-3">
          <div class="form-group">
            <label for="exampleFormControlSelect1">Rol</label>
            <select class="form-control" name="idRol"> 
                <option value="<?php echo $row->idRol; ?>"  ><?php echo $row->descripcion; ?></option>
                 <?php foreach ($rol->result() as $row1) {  ?>                                           
                 <option value="<?php echo $row1->idRol; ?>"><?php echo $row1->descripcion; ?></option>
                 <?php  }  ?>                                        
            </select>
           </div>
        </div>
        <div class="col-xs-12 col-sm-3">
          <div class="form-group">
            <label for="exampleFormControlSelect1">Edificio</label>
            <select class="form-control" name="idEdificio">                            
                  <option value="<?php echo $row->idEdificio; ?>" ><?php echo $row->razonSocial; ?></option>
                 <?php foreach ($edificio->result() as $row1) {  ?>                                           
                 <option value="<?php echo $row1->idEdificio; ?>"><?php echo $row1->razonSocial; ?></option>
                 <?php  }  ?>
            </select>
           </div>
        </div>
       <div class="col-xs-12">
            <p class="text-center">
             <button type="submit" class="btn btn-primary"><i class="zmdi zmdi-floppy"></i> &nbsp;&nbsp; MODIFICAR</button>
            </p> 
        </div>
    </div>

    <?php
    }
    echo form_close();
    ?>
    <div class="col-xs-12">
            <p class="text-center">
    <a  href="<?php echo base_url(); ?>index.php/usuarios/listar"><button type="buton" class="btn btn-danger" style="margin-right: 20px;"><i class="zmdi zmdi-close"></i> &nbsp;&nbsp; CANCELAR</button></a>
             
            </p> 
        </div>




        </div>
        </div>
        </div>




         