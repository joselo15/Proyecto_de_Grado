 <div class="container">
            <div class="page-header">
              <h1 class="all-tittles">Sistema vivienda social <small>Administración Dpartamentos</small></h1>
            </div>
        </div>
        <div class="conteiner-fluid">
            <ul class="nav nav-tabs nav-justified"  style="font-size: 17px;">
                <li role="presentation"><a href="">Copropietarios</a></li>
                <li role="presentation" class="active"><a href="">Departamentos</a></li>
            </ul>
        </div>
        <div class="container-fluid"  style="margin: 50px 0;">
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <img src="<?php echo base_url(); ?>assets/img/user05.png" alt="user" class="img-responsive center-box" style="max-width: 110px;">
                </div>
                <div class="col-xs-12 col-sm-8 col-md-8 text-justify lead">
                    Bienvenido a la sección de registro de Departamentos. Para registrar al Departamento debes de llenar los campos del siguiente formulario, recuerda que hay algunos campos que son obligatorios.
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 lead">
                    <ol class="breadcrumb">
                      <li class="active">Nuevo Departamento</li>
                      <li><a href="<?php echo base_url(); ?>index.php/departamentos/index">Listado de Departamentos</a></li>
                    </ol>
                </div>
            </div>
        </div>



        <div class="container-fluid">
            
            <div class="container-flat-form">
                <div class="title-flat-form title-flat-blue">REGISTRAR NUEVO DEPARTAMENTO</div>
<div class="container-fluid">

    <?php
    $atributos = array('class' => 'form-group', 'id' => 'myform');
    echo form_open_multipart('departamentos/agregarbd',$atributos);
    ?>
   

                    <div class="row">
                        <div class="col-xs-12">
                            <legend><i class="zmdi zmdi-account-box"></i> &nbsp; Datos básicos</legend><br>
                        </div>

                        <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" placeholder="Escribe aquí el piso del departamento"  required="" maxlength="2"  data-placement="top" title="Escribe el piso" name="piso" >
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Piso</label>
                                <?php echo form_error('piso'); ?>
                            </div>

                        </div>
                         <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" placeholder="Escribe aquí el número del departamento"  required="" data-toggle="tooltip" data-placement="top" title="Escribe el número" name="numero">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Número</label>
                                <?php echo form_error('numero'); ?>
                            </div>
                        </div>
                         <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" placeholder="Escribe aquí una descripción"  data-toggle="tooltip" required="" data-placement="top" title="Escribe la descripcion del departamento" name="descripcion">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Descripción</label>
                                <?php echo form_error('descripcion'); ?>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-3">
                          <div class="form-group">
                            <label for="exampleFormControlSelect1">Tipo Deparartamento</label>
                            <select class="form-control" name="idTipo"  required="">
                                <option value="" disabled="" selected="">Selecciona un Tipo</option>
                                 <?php foreach ($tipoDepartamento->result() as $row) {  ?>                                           
                                 <option value="<?php echo $row->idTipo; ?>"><?php echo $row->nombre; ?></option>
                                 <?php  }  ?>
                            </select>
                           </div>
                        </div>
                        <div class="col-xs-12 col-sm-3">
                          <div class="form-group">
                            <label for="exampleFormControlSelect1">Edificio</label>
                            <select class="form-control" name="idEdificio" required="">
                              <option value="" disabled="" selected="">Selecciona un Edificio</option>
                              <?php foreach ($edificio->result() as $row) {  ?>                                           
                                 <option value="<?php echo $row->idEdificio; ?>"><?php echo $row->razonSocial; ?></option>
                                 <?php  }  ?>
                            </select>
                           </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                          <div class="form-group">
                            <label for="exampleFormControlSelect1">Propietario</label>
                            <select class="form-control" name="idUsuario" required="">
                              <option value="" disabled="" selected="">Selecciona un Copropietario</option>
                              <?php foreach ($copropietario->result() as $row) {  ?>                                           
                                 <option value="<?php echo $row->idUsuario; ?>"><?php echo $row->nombres,' ',$row->apellidoPaterno,' ',$row->apellidoMaterno; ?></option>
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
