
 <div class="container-fluid">
            <div class="container-flat-form">
                <div class="title-flat-form title-flat-blue">MODIFICAR DATOS DEL COPROPIETARIO</div>
<div class="container">
    <?php
    $atributos = array('class' => 'form-group', 'id' => 'myform');
    echo form_open_multipart('copropietarios/modificarbd',$atributos);
    foreach ($infocopropietario->result() as $row)
    {
    ?>

                    <div class="row">
                        <div class="col-xs-12">
                            <legend><i class="zmdi zmdi-account-box"></i> &nbsp; Datos básicos</legend><br>
                        </div>
                        <input type="hidden" name="id" value="<?php echo $row->idPropietario; ?>">

                        <div class="col-xs-12 col-sm-6">
                            <div class="group-material">                              
                                <input type="text" class="material-control tooltips-general" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,50}" required="" maxlength="50" data-toggle="tooltip" data-placement="top" title="Escribe los nombres del Copropietario, solamente letras" name="nombre" value="<?php echo $row->Nombres; ?>">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Nombres</label>
                                
                            </div>
                        </div>
                         <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general"  pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,50}" required="" maxlength="50" data-toggle="tooltip" data-placement="top" title="Escribe los apellidos del Copropietario, solamente letras" name="apellidos" value="<?php echo $row->Apellidos; ?>">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Apellidos</label>
                            </div>
                        </div>
                         <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general"  pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ-0-9 ]{1,50}" required="" maxlength="50" data-toggle="tooltip" data-placement="top" title="Escribe la cedulade identidad del Copropietario" name="ci" value="<?php echo $row->Ci; ?>">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Cedula de Identidad</label>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <input type="correo" class="material-control tooltips-general"  pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ-0-9-@-. ]{1,50}" required="" maxlength="50" data-toggle="tooltip" data-placement="top" title="Escribe el correo del Copropietario" name="correo" value="<?php echo $row->Email; ?>">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Correo</label>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" pattern="[0-9]{8,8}" required="" maxlength="8" data-toggle="tooltip" data-placement="top" title="Solamente 8 números" name="telefono" value="<?php echo $row->Telefono; ?>"> 
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Teléfono</label>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ-0-9 ]{1,50}" required="" maxlength="15" data-toggle="tooltip" data-placement="top" title="Escribe el nombre de usuario" name="usuario" value="<?php echo $row->Usuario; ?>">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Usuario</label>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <input type="password" class="material-control tooltips-general"  pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ-0-9-@ ]{1,50}" required="" maxlength="50" data-toggle="tooltip" data-placement="top" title="Escribe la contraseña" name="contrasenia" value="<?php echo $row->Contrasenia; ?>">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Contraseña</label>
                            </div>
                        </div>
                       <div class="col-xs-12">
                            <p class="text-center">
                                <a  href="<?php echo base_url(); ?>index.php/copropietarios/vercopropietario"><button type="submit" class="btn btn-danger" style="margin-right: 20px;"><i class="zmdi zmdi-close"></i> &nbsp;&nbsp; CANCELAR</button></a>
                                <button type="submit" class="btn btn-primary"><i class="zmdi zmdi-floppy"></i> &nbsp;&nbsp; MODIFICAR</button>
                            </p> 
                        </div>
                    </div>
                      <?php
                  }
    echo form_close();
    ?>

        </div>
        </div>
        </div>




         