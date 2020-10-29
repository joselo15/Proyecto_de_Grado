 <footer class="footer full-reset">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-12 col-sm-6">
                        <h4 class="all-tittles">Acerca de</h4>
                        <p>
                            Estamos dedicados a la Adminstracion de Edificios y Condominios Residenciales, realizando todas las actividades  para que todos los habitantes vivan en completa armonia. 
                        </p>
                    </div>
                    <!-- <div class="col-xs-12 col-sm-6">
                        <h4 class="all-tittles">Desarrollador</h4>
                        <ul class="list-unstyled">
                            <li><i class="zmdi zmdi-check zmdi-hc-fw"></i>&nbsp; Jose Luis Rodriguez Choque <i class="zmdi zmdi-facebook zmdi-hc-fw footer-social"></i><i class="zmdi zmdi-twitter zmdi-hc-fw footer-social"></i></li>
                        </ul>
                    </div> -->
                </div>
            </div>
            <div class="footer-copyright full-reset all-tittles">© 2020 JL Rodriguez</div>
        </footer>

        
<script src="<?php echo base_url(); ?>bootstrap/js/bootstrap.js"></script>





<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url(); ?>AdminLTE/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url(); ?>AdminLTE/bootstrap/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url(); ?>AdminLTE/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>AdminLTE/plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url(); ?>AdminLTE/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url(); ?>AdminLTE/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App    -cambia el formato de pie de pagina-->
<!-- <script src="<?php echo base_url(); ?>AdminLTE/dist/js/app.min.js"></script> -->
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url(); ?>AdminLTE/dist/js/demo.js"></script>
<!-- page script -->

<script>
//Idiomas con el 1er método   
$(document).ready(function() {
    $('#example1').DataTable({ 
        "language": {
           "url": "https://cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
        }
        
        });
});
</script>

<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false        
    });
  });
</script>

<!-- 
  2 forma de cambiar el idioma de las tablas pero no funciona
<script>
  $(function () {
     $("#example1").DataTable();
    $('#example2').DataTable({
    "language":  {
    "sProcessing":     "Procesando...",
    "sLengthMenu":     "Mostrar _MENU_ registros",
    "sZeroRecords":    "No se encontraron resultados",
    "sEmptyTable":     "Ningún dato disponible en esta tabla",
    "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
    "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
    "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
    "sInfoPostFix":    "",
    "sSearch":         "Buscar:",
    "sUrl":            "",
    "sInfoThousands":  ",",
    "sLoadingRecords": "Cargando...",
    "oPaginate": {
        "sFirst":    "Primero",
        "sLast":     "Último",
        "sNext":     "Siguiente",
        "sPrevious": "Anterior"
    },
    "oAria": {
        "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
    },
    "buttons": {
        "copy": "Copiar",
        "colvis": "Visibilidad"
    }
}    
     }); 
  });

</script>
 -->



</body>
</html>



 