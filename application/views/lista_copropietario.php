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
                    <img  src="<?php echo base_url(); ?>assets/img/user05.png" alt="user" class="img-responsive center-box" style="max-width: 110px;">
                </div>
                <div class="col-xs-12 col-sm-8 col-md-8 text-justify lead">
                    Bienvenido a la sección de Lista de Copropietarios. Aqui puedes realizar las acciones de Modificar Datos, Cambiar el Estado y Eliminar.
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 lead">
                    <ol class="breadcrumb">
                      <li> <a  href="<?php echo base_url(); ?>index.php/copropietarios/vercopropietario">Nuevo Copropietario</a></li>
                      <li  class="active">Listado de copropietarios</li>
                    </ol>
                </div>
            </div>
        </div>


<div class="container-fluid">
         <!-- <a  href="<?php echo base_url(); ?>index.php/copropietarios/vercopropietario"><button type="submit" class="btn btn-primary btn"> << Volver</button></a> -->
         <?php 
          $atributos=array('target'=>'blank');
          echo form_open_multipart('copropietarios/listacopropietariospdf',$atributos);
         ?>
        <button type="submit" class="btn btn-success">Generar PDF</button>
        <?php echo form_close(); ?>  

      <div class="table-responsive">        
        
      <!-- <h1 class="text-center all-tittles">Lista de Copropietarios</h1>
            <div class="div-table">
                <div class="div-table-row div-table-head">
                    <div class="div-table-cell">No.</div>
                    <div class="div-table-cell">Nombre</div>
                    <div class="div-table-cell">Apellidos</div>
                    <div class="div-table-cell">Ci</div>
                    <div class="div-table-cell">Email</div>
                    <div class="div-table-cell">Telefono</div>
                    <div class="div-table-cell">Usuario</div>
                    <div class="div-table-cell">Contraseña</div>
                    <div class="div-table-cell">Estado</div>
                    <div class="div-table-cell">Cambiar E.</div>
                    <div class="div-table-cell">Actualizar</div>
                    <div class="div-table-cell">Eliminar</div>
                </div>  
               <?php
            $indice=1;
            foreach ($copropietarios->result() as $row)
            {
                ?>
                <div class="div-table-row">
                    <div class="div-table-cell"><?php echo $indice; ?></div>
                    <div class="div-table-cell"><?php echo $row->Nombres; ?></div>
                    <div class="div-table-cell"><?php echo $row->Apellidos; ?></div>
                    <div class="div-table-cell"><?php echo $row->Ci; ?></div>
                    <div class="div-table-cell"><?php echo $row->Email; ?></div>
                    <div class="div-table-cell"><?php echo $row->Telefono; ?></div>
                    <div class="div-table-cell"><?php echo $row->Usuario; ?></div>
                    <div class="div-table-cell"><?php echo $row->Contrasenia; ?></div>
                    <div class="div-table-cell"><?php echo $row->Estado; ?></div>
                    <div class="div-table-cell">
                        <?php
                        $atributos = array('class' => 'form-group', 'id' => 'myform');
                        echo form_open_multipart('copropietarios/cambiarestadobd',$atributos);?>
                        <input type="hidden" name="id" value="<?php echo $row->idPropietario;?>">
                        <input type="hidden" name="estado" value="<?php echo $row->Estado;?>">
                        <button type="submit" class="btn btn-info tooltips-general" data-toggle="tooltip" data-placement="top" title="pulsa el botón para cambia el estado de la Cuenta"><i class="zmdi zmdi-swap"></i></button>
                        <?php echo form_close(); ?>
                    </div>
                    <div class="div-table-cell">
                        <?php
                        $atributos = array('class' => 'form-group', 'id' => 'myform');
                        echo form_open_multipart('copropietarios/modificar',$atributos); ?>
                        <input type="hidden" name="id" value="<?php echo $row->idPropietario; ?>">
                        <button type="submit" class="btn btn-success tooltips-general"  title="Desea Modificar este Copropietario ?"><i class="zmdi zmdi-refresh"></i></button>
                        <?php echo form_close(); ?>
                    </div>
                    <div class="div-table-cell">
                        <?php
                        $atributos = array('class' => 'form-group', 'id' => 'myform');
                        echo form_open_multipart('copropietarios/eliminarbd',$atributos); ?>
                        <input type="hidden" name="id" value="<?php echo $row->idPropietario; ?>">
                        <button type="submit" class="btn btn-danger tooltips-general" title="Desea Eliminar este Copropietario ?"><i class="zmdi zmdi-delete"></i></button>
                        <?php echo form_close(); ?>
                    </div>
                </div>
                <?php       
                $indice++;
            }
        ?>
            </div>  -->

            
             

<!-- Content Wrapper. Contains page content   -->
    <!-- Content Header (Page header) -->
      
    <div class="div-table">
    <section class="content-header">    
    <h1>
       TABLA DE DATOS
        <small>JL</small>     
    </h1>
     <ol class="breadcrumb">
        <li><a href="<?php echo base_url(); ?>index.php/copropietarios/index1"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <!-- <li><a href="<?php echo base_url(); ?>index.php/copropietarios/vercopropietario">Copropietarios</a></li> -->
        <li class="active">Lista de Copropietarios</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">      
          <!-- /.box -->         
        </div>
        <div class="box">
            <div class="box-header">
              <h3 class="box-title">Lista de Copropietarios</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No.</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Ci</th>
                    <th>Email</th>
                    <th>Telefono</th>
                    <th>Usuario</th>
                    <th>Contraseña</th>
                    <th>Estado</th>
                    <th>Cambiar E.</th>
                    <th>Actualizar</th>
                    <th>Eliminar</th>
                </tr>
                </thead>
                <tbody>
                 <?php
            $indice=1;
            foreach ($copropietarios->result() as $row)
            {
        ?>
                
                <tr>
                  <td><?php echo $indice; ?></td>
                  <td><?php echo $row->Nombres; ?></td>
                  <td><?php echo $row->Apellidos; ?></td>
                  <td><?php echo $row->Ci; ?></td>
                  <td><?php echo $row->Email; ?></td>
                  <td><?php echo $row->Telefono; ?></td>
                  <td><?php echo $row->Usuario; ?></td>
                  <td><?php echo $row->Contrasenia; ?></td>
                  <td><?php echo $row->Estado; ?></td>
                  <td><?php
                        $atributos = array('class' => 'form-group', 'id' => 'myform');
                        echo form_open_multipart('copropietarios/cambiarestadobd',$atributos);?>
                        <input type="hidden" name="id" value="<?php echo $row->idPropietario;?>">
                        <input type="hidden" name="estado" value="<?php echo $row->Estado;?>">
                        <button type="submit" class="btn btn-info tooltips-general" data-toggle="tooltip" data-placement="top" title="pulsa el botón para cambia el estado de la Cuenta"><i class="zmdi zmdi-swap"></i></button>
                        <?php echo form_close(); ?> </td>
                  <td><?php
                        $atributos = array('class' => 'form-group', 'id' => 'myform');
                        echo form_open_multipart('copropietarios/modificar',$atributos); ?>
                        <input type="hidden" name="id" value="<?php echo $row->idPropietario; ?>">
                        <button type="submit" class="btn btn-success tooltips-general"  title="Desea Modificar este Copropietario ?"><i class="zmdi zmdi-refresh"></i></button>
                        <?php echo form_close(); ?></td>
                  <td> <?php $atributos = array('class' => 'form-group', 'id' => 'myform');
                        echo form_open_multipart('copropietarios/eliminarbd',$atributos); ?>
                        <input type="hidden" name="id" value="<?php echo $row->idPropietario; ?>">
                        <button type="submit" class="btn btn-danger tooltips-general" title="Desea Eliminar este Copropietario ?"><i class="zmdi zmdi-delete"></i></button>
                        <?php echo form_close(); ?></td>
                </tr>            

                 <?php       
                $indice++;
            }
        ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>No.</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Ci</th>
                    <th>Email</th>
                    <th>Telefono</th>
                    <th>Usuario</th>
                    <th>Contraseña</th>
                    <th>Estado</th>
                    <th>Cambiar E.</th>
                    <th>Actualizar</th>
                    <th>Eliminar</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
        <!-- /.col -->
      
      <!-- /.row -->
    </section>
    <!-- /.content -->
  <!-- /.content-wrapper -->
            </div> 


</div>

</div>



