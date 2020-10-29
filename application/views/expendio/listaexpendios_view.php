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
                      <li> <a  href="<?php echo base_url(); ?>index.php/expendios/agregar">Registrar Pago</a></li>
                      <li  class="active">Listado de Pagos</li>
                    </ol>
                </div>
            </div>
        </div>


<div class="container-fluid">

<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalok">
  Modal
</button> -->

<!-- Modal -->
<!-- <div class="modal fade" id="modalok" tabindex="1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary">OK</button>
      </div>
    </div>
  </div>
</div> -->
<!-- Modal -->


         <!-- <a  href="<?php echo base_url(); ?>index.php/copropietarios/vercopropietario"><button type="submit" class="btn btn-primary btn"> << Volver</button></a> -->
         <?php 
         // $atributos=array('target'=>'blank');
         // echo form_open_multipart('copropietarios/listacopropietariospdf',$atributos);
         ?>
        <!-- <button type="submit" class="btn btn-success">Generar PDF </button> -->
        <?php echo form_close(); ?>  

      <div class="table-responsive">        
                    
<!-- Content Wrapper. Contains page content   -->
    <!-- Content Header (Page header) -->
      
    <div class="div-table">
    <section class="content-header">    
    <h1>
       TABLA DE DATOS
        <small>JL</small>     
    </h1>
     <ol class="breadcrumb">
        <!-- <li><a href="<?php echo base_url(); ?>index.php/copropietarios/index1"><i class="fa fa-dashboard"></i> Inicio</a></li>
             <li><a href="<?php echo base_url(); ?>index.php/copropietarios/vercopropietario">Copropietarios</a></li> -->
        <li class="active">Lista de Expendios</li>
      </ol>
    </section>
    
<!-- <a href="#" onclick="return confirm('Estás seguro que deseas eliminar el registro?');">Eliminar registro</a> -->
    <!-- Main content -->
    <section class="content">
        <div class="row">      
          <!-- /.box -->         
        </div>
        <div class="box">
            <div class="box-header">
              <h3 class="box-title">Lista de Expendios</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>No.</th>
                    <th>Departamento</th>
                    <th>Copropietario</th>
                    <th>Importe</th>
                    <th>Tipo de Pago</th>
                    <th>Mes</th>
                    <th>Año</th>
                    <th>Fecha de Pago</th>
                    <th>Acciones</th>
                    
                </tr>
                </thead>
                <tbody>
                 <?php
            $indice=1;
            foreach ($expendio->result() as $row)
            {
            
        ?>
                
                <tr>
                  <td><?php echo $indice; ?></td>
                  <td><?php echo $row->numero; ?></td>
                  <td><?php echo $row->nombres; ?></td>
                  <td><?php echo $row->importe; ?></td>
                  <td><?php echo $row->tipoPago; ?></td>
                  <td><?php echo $row->mes; ?></td>
                <!--   <td><?php echo $row->nombres,' ',$row->apellidoPaterno,' ',$row->apellidoMaterno ?></td> -->
                  <td><?php echo $row->anio; ?></td>
                  <td><?php echo $row->fechaPago; ?></td>
                  <td>
                        <?php $atributos = array('class' => 'form-group', 'id' => 'myform');
                        echo form_open_multipart('departamentos/modificar',$atributos); ?>
                        <input type="hidden" name="id" value="<?php echo $row->idExpendio; ?>">
                        <button type="submit" class="btn btn-success tooltips-general"  title="Desea Modificar este Departamento ?"><i class="zmdi zmdi-edit"></i></button>
                        <?php echo form_close(); ?>
                        
                        <?php $atributos = array('class' => 'form-group', 'id' => 'myform');
                        echo form_open_multipart('departamentos/cambiarestadobd',$atributos); ?>
                        <input type="hidden" name="id" value="<?php echo $row->idExpendio; ?>">
                        <button type="submit" class="btn btn-danger tooltips-general" title="Desea Eliminar este Departamento ?"><i class="zmdi zmdi-delete"></i></button>

                       <!--  <button type="submit"  title="Desea Eliminar este Copropietario ?"  class="tooltips-general exit-system-button"  data-placement="bottom" title="Salir del sistema">
                         <i class="zmdi zmdi-power"></i>
                         </button> -->
                      
                        <?php echo form_close(); ?>  </td>
                         

                </tr>            

                 <?php       
                $indice++;
            }  
        ?>
                </tbody>
                <tfoot>
                <tr>
                    <th>No.</th>
                    <th>Departamento</th>
                    <th>Copropietario</th>
                    <th>Importe</th>
                    <th>Tipo de Pago</th>
                    <th>Mes</th>
                    <th>Año</th>
                    <th>Fecha de Pago</th>
                    <th>Acciones</th>
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



