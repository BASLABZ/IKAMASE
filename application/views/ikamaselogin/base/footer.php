
</div>
<div class="row">
            <div class="col-lg-12">
                <div class="footer">
                    <div class="pull-right">
                       Develope By <strong>ahmad bastiar</strong> || <span class="fa fa-envelope"></span> : ahmad.bastiar@gin.co.id
                    </div>
                    <div>
                        <strong>Copyright</strong> Ikatan Mahasiswa Se Sulawesi [IKAMASE] &copy; 2014 - <?php echo date('Y'); ?>
                    </div>
                </div>
            </div>
        </div>
   <!-- Mainly scripts -->
   
    <script src="<?php echo base_url('resource/themes/admin/js/bootstrap.min.js'); ?>"></script>
    <script src="<?php echo base_url('resource/themes/admin/js/plugins/metisMenu/jquery.metisMenu.js'); ?>"></script>
    <script src="<?php echo base_url('resource/themes/admin/js/plugins/slimscroll/jquery.slimscroll.min.js'); ?>"></script>
    <!-- Flot -->
    <script src="<?php echo base_url('resource/themes/admin/js/plugins/flot/jquery.flot.js'); ?>"></script>
    <script src="<?php echo base_url('resource/themes/admin/js/plugins/flot/jquery.flot.tooltip.min.js'); ?>"></script>
    <script src="<?php echo base_url('resource/themes/admin/js/plugins/flot/jquery.flot.spline.js'); ?>"></script>
    <script src="<?php echo base_url('resource/themes/admin/js/plugins/flot/jquery.flot.resize.js'); ?>"></script>
    <script src="<?php echo base_url('resource/themes/admin/js/plugins/flot/jquery.flot.pie.js'); ?>"></script>
    <!-- Peity -->
    <script src="<?php echo base_url('resource/themes/admin/js/plugins/peity/jquery.peity.min.js'); ?>"></script>
    <script src="<?php echo base_url('resource/themes/admin/js/demo/peity-demo.js'); ?>"></script>
    <!-- Custom and plugin javascript -->
    <script src="<?php echo base_url('resource/themes/admin/js/inspinia.js'); ?>"></script>
    <script src="<?php echo base_url('resource/themes/admin/js/plugins/pace/pace.min.js'); ?>"></script>
    <!-- GITTER -->
    <script src="<?php echo base_url('resource/themes/admin/js/plugins/gritter/jquery.gritter.min.js'); ?>"></script>
    <!-- Sparkline -->
    <script src="<?php echo base_url('resource/themes/admin/js/plugins/sparkline/jquery.sparkline.min.js'); ?>"></script>
    <!-- Sparkline demo data  -->
    <script src="<?php echo base_url('resource/themes/admin/js/demo/sparkline-demo.js'); ?>"></script>
    <!-- Toastr -->
    <script src="<?php echo base_url('resource/themes/admin/js/plugins/toastr/toastr.min.js'); ?>"></script>
    <script src="<?php echo base_url('resource/themes/admin/js/plugins/dataTables/datatables.min.js'); ?>"></script>
    <script src="<?php echo base_url('resource/themes/admin/js/plugins/select2/select2.full.min.js'); ?>"></script>
    <script src="<?php echo base_url('resource/themes/admin/js/plugins/summernote/summernote.min.js'); ?>"></script>

    <script type="text/javascript">
        $(document).ready(function(){
            $('.summernote').summernote();
        });
    </script>

    
    <script type="text/javascript">
      $(function(){
          $('.dataTables').DataTable({
                        "paging":   true,
                        "ordering": true,
                        "info":     true,
                        buttons: []});
           $(".select2").select2();
      })
    </script>
    <script type="text/javascript">
        $("#logout").click(function(e) {
          e.preventDefault()
            swal( {
                title : "",
                text : "Apa anda yakin akan keluar dari sistem ?",
                type : "warning",
                showCancelButton: true,
                confirmButtonColor: "orange",
                confirmButtonText: "Yes",
           },
        function(isConfirm){
          if (isConfirm) {
              window.location="<?php echo base_url('login/auth/logout'); ?>"; 
          } 
            })
        });
    </script>
</body>
</html>
