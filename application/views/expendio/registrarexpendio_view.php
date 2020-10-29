<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css" />
<script type="text/javascript">
$(function() {
            $("#curso").autocomplete({
                source: "<?php echo base_url(); ?>index.php/expedios/agregar",
                minLength: 2,
                select: function(event, ui) {
                    event.preventDefault();
                    $('#curso').val(ui.item.Nombres);
                    $('#idx').val(ui.item.idx);
                    
                    $("#curso").focus();
                 }
            });
        });
</script>
<div class="container">
            <div class="page-header">
              <h1 class="all-tittles">Sistema vivienda social <small>Administración Expendios</small></h1>
            </div>
        </div>
        <div class="conteiner-fluid">
            <ul class="nav nav-tabs nav-justified"  style="font-size: 17px;">
                <li role="presentation" class="active"><a href="">Expendios</a></li>
            </ul>
        </div>
        <div class="container-fluid"  style="margin: 50px 0;">
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <img  src="<?php echo base_url(); ?>assets/img/user05.png" alt="user" class="img-responsive center-box" style="max-width: 110px;">
                </div>
                <div class="col-xs-12 col-sm-8 col-md-8 text-justify lead">
                    Bienvenido a la sección de Lista de Pago Expendios. Aqui puedes realizar las acciones de Modificar Datos, Cambiar el Estado y Eliminar.
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 lead">
                    <ol class="breadcrumb">
                      <li  class="active">Registrar Pago</li>
                      <li> <a  href="<?php echo base_url(); ?>index.php/expedios/index">Listado de Pagos </a></li>                
                    </ol>
                </div>
            </div>
        </div>



        <div class="container-fluid">
            
            <div class="container-flat-form">
                <div class="title-flat-form title-flat-blue">REGISTRAR NUEVO PAGO</div>
<div class="container-fluid">

    <?php
    $atributos = array('class' => 'form-group', 'id' => 'myform');
    echo form_open_multipart('expendios/agregarbd',$atributos);
    ?>
   

                    <div class="row">
                        <div class="col-xs-12">
                            <legend><i class="zmdi zmdi-account-box"></i> &nbsp; Datos básicos</legend><br>
                        </div>

<input autofocus class="form-control input-medium ui-autocomplete-input" value="" style="width:300px; text-align:center; font-size:12px; margin-right:10px; text-transform:uppercase" autocomplete="off" id="curso" name="curso" type="text">
                        

                        <div class="col-xs-12 col-sm-3">
                          <div class="form-group">
                            <label for="exampleFormControlSelect1">Departamento</label>
                            <select class="form-control" name="idDepartamento" id="idDepartamento"  required="">
                                <option value="" disabled="" selected="">Selecciona un Departamento</option>
                                 <?php foreach ($departamento->result() as $row) {  ?>                                           
                                 <option value="<?php echo $row->idDepartamento; ?>"><?php echo $row->numero; ?></option>
                                 <?php  }  ?>
                            </select>
                         </div>
                         </div>
                         

                         <div class="col-xs-12 col-sm-6">
                          <div class="form-group">
                            <label for="exampleFormControlSelect1">Propietario</label>
                            <select class="form-control" name="idUsuario" id="idUsuario">
                              <option value="" disabled="" selected="">Selecciona un Copropietario</option>
                              <?php foreach ($copropietario->result() as $row) {  ?>                                           
                                 <option value="<?php echo $row->idUsuario; ?>"><?php echo $row->nombres,' ',$row->apellidoPaterno,' ',$row->apellidoMaterno; ?></option>
                                 <?php  }  ?> 
                            </select>
                           </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" placeholder="Escribe aquí el número del departamento"  required="" data-toggle="tooltip" data-placement="top" title="Escribe el número" name="idUsuario" id="idUsuario">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Propietario</label>
                                <?php echo form_error('numero'); ?>
                            </div>
                        </div>
                         <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" placeholder="Escribe aquí el número del departamento"  required="" data-toggle="tooltip" data-placement="top" title="Escribe el número" name="numero">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Importe</label>
                                <?php echo form_error('numero'); ?>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" placeholder="Escribe aquí una descripción"  data-toggle="tooltip" required="" data-placement="top" title="Escribe la descripcion del departamento" name="descripcion">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Tipo Pago</label>
                                <?php echo form_error('descripcion'); ?>
                            </div>
                        </div>
                         <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" placeholder="Escribe aquí una descripción"  data-toggle="tooltip" required="" data-placement="top" title="Escribe la descripcion del departamento" name="descripcion">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Mes</label>
                                <?php echo form_error('descripcion'); ?>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" placeholder="Escribe aquí el número del departamento"  required="" data-toggle="tooltip" data-placement="top" title="Escribe el número" name="numero">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Año</label>
                                <?php echo form_error('numero'); ?>
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
