        </div>
               <!-- /.col-lg-12 -->
      </div>
    <!-- /.row -->
    </div>
    <!-- /#page-wrapper -->
  </div>
	<div id="carga">
    <i class="fa fa-refresh fa-spin"></i> Loading....
  </div>
   <?php
   if(is_array($modal)):
      foreach($modal as $key=>$value):
         $this->load->view($value);
      endforeach;
   endif
   ?>

  <table class="hide">
    <tbody>
      <tr>
        <td id="GlobalCrudButtons">
            <button type='button' class='btn btn-sm btn-warning edit' onclick="">
              <i class='fa fa-pencil'></i> Editar
            </button>
            <button type='button' class='btn btn-sm btn-danger delete' onclick="">
              <i class='fa fa-trash'></i> Eliminar
            </button>
        </td>
      </tr>
    </tbody>
  </table>
	</body>
  <script>
    var url_aplication = "<?php echo base_url();?>";
  </script>
	<script src="<?php echo base_url('public/lib/assets/vendor/jquery/jquery.min.js')?>"></script>
   <script src="<?php echo base_url('public/lib/assets/vendor/bootstrap/js/bootstrap.min.js')?>"></script>
   <script src="<?php echo base_url('public/lib/assets/vendor/metisMenu/metisMenu.min.js')?>"></script>
   <script src="<?php echo base_url('public/lib/assets/dist/js/sb-admin-2.js')?>"></script>
   <script src="<?php echo base_url('public/lib/assets/vendor/datatables/js/jquery.dataTables.min.js')?>"></script>
   <script src="<?php echo base_url('public/lib/assets/vendor/datatables-plugins/dataTables.bootstrap.min.js')?>"></script>
   <script src="<?php echo base_url('public/lib/assets/vendor/datatables-responsive/dataTables.responsive.js')?>"></script>
   <script src="<?php echo base_url('public/lib/assets/js/fnReloadAjax.js')?>"></script>
   <script src="<?php echo base_url('public/lib/assets/js/jquery.dataTables.columnFilter.js')?>"></script>
   <script src="<?php echo base_url('public/lib/assets/vendor/select2/js/select2.full.min.js')?>"></script>
   <script src="<?php echo base_url('public/lib/assets/vendor/toast/js/jquery.toast.js')?>"></script>
   <script src="<?php echo base_url('public/lib/highcharts/highcharts.js')?>"></script>
   <script src="<?php echo base_url('public/lib/highcharts/modules/exporting.js')?>"></script>
   <script src="<?php echo base_url('public/lib/jquery.numeric.js');?>"></script>
   <script src="<?php echo base_url('public/lib/datepicker/js/bootstrap-datepicker.js');?>"></script>
   <script src="<?php echo base_url('public/lib/datepicker/locales/bootstrap-datepicker.es.min.js');?>"></script>
   <script src="<?php echo base_url('public/lib/functions.js');?>"></script>

   <?php
   if( !empty($alerta) ):
   ?>
   <script>
     Alerta('<?php echo $alerta["message"];?>', '<?php echo $alerta["type"];?>');
   </script>
   <?php
   endif;
   foreach($lib_js as $key => $value):
   ?>
	 <script type="text/javascript" src="<?php echo $value; ?>"></script>
	 <?php
   endforeach;
   ?>

</html>