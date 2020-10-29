
 <div class="container-fluid">
            <div class="container-flat-form">
                <div class="title-flat-form title-flat-blue">MODIFICAR DATOS DEL DEPARTAMENTO</div>
<div class="container">
    <?php
    $atributos = array('class' => 'form-group', 'id' => 'myform');
    echo form_open_multipart('departamentos/modificarbd',$atributos);
    foreach ($infodepartamento->result() as $row)
    {
    ?>

                    <div class="row">
                        <div class="col-xs-12">
                            <legend><i class="zmdi zmdi-account-box"></i> &nbsp; Datos básicos</legend><br>
                        </div>
                        <input type="hidden" name="id" value="<?php echo $row->idDepartamento; ?>">

                        <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" placeholder="Escribe aquí el piso del departamento"  required="" maxlength="2"  data-toggle="tooltip" data-placement="top" title="Escribe el piso" name="piso" value="<?php echo $row->piso; ?>">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Piso</label>
                                <?php echo form_error('piso'); ?>
                            </div>
                        </div>
                         <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" placeholder="Escribe aquí el número del departamento" required="" maxlength="4" data-toggle="tooltip" data-placement="top" title="Escribe el número" name="numero" value="<?php echo $row->numero; ?>">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Número</label>
                                <?php echo form_error('numero'); ?>
                            </div>
                        </div>
                         <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" placeholder="Escribe aquí una descripción"  required=""  data-toggle="tooltip" data-placement="top" title="Escribe la descripcion del departamento" name="descripcion" value="<?php echo $row->descripcion; ?>">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Descripción</label>
                                <?php echo form_error('descripcion'); ?>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-3">
                          <div class="form-group">
                            <label for="exampleFormControlSelect1">Tipo Deparartamento</label>
                            <select class="form-control" name="idTipo"> 
                                <option value="<?php echo $row->idTipo; ?> "   ><?php echo $row->nombre; ?></option>
                                 <?php foreach ($tipoDepartamento->result() as $row1) {  ?>                                           
                                 <option value="<?php echo $row1->idTipo; ?>"><?php echo $row1->nombre; ?></option>
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
                        <div class="col-xs-12 col-sm-3">
                          <div class="form-group">
                            <label for="exampleFormControlSelect1">Copropietario</label>
                            <select class="form-control" name="idUsuario">                            
                                  <option value="<?php echo $row->idUsuario; ?>" ><?php echo $row->nombres,' ',$row->apellidoPaterno,' ',$row->apellidoMaterno; ?></option>
                                 <?php foreach ($copropietario->result() as $row1) {  ?>                                           
                                 <option value="<?php echo $row1->idUsuario; ?>"><?php echo $row1->nombres,' ',$row1->apellidoPaterno,' ',$row1->apellidoMaterno; ?></option>
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
                    <a  href="<?php echo base_url(); ?>index.php/departamentos/index"><button type="buton" class="btn btn-danger" style="margin-right: 20px;"><i class="zmdi zmdi-close"></i> &nbsp;&nbsp; CANCELAR</button></a>
                   </div>


         </div>
        </div>
        </div>




         