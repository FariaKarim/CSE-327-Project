<!-- REQUIRED JS SCRIPTS -->

<!-- JQuery and bootstrap are required by Laravel 5.3 in resources/assets/js/bootstrap.js-->
<!-- Laravel App -->
<!-- jQuery 2.1.4 -->

<script src="<?php echo e(asset('/js/app.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('/js/jquery.maskedinput.min.js')); ?>"></script>
<script src="<?php echo e(asset('/js/jquery-ui.min.js')); ?>"></script>
<script src="<?php echo e(asset('/js/MonthPicker.min.js')); ?>"></script>
<script src="<?php echo e(asset('/plugins/moment.min.js')); ?>"></script>
<script src="<?php echo e(asset('/plugins/fullcalendar.min.js')); ?>"></script>
<script src="<?php echo e(asset('/plugins/jquery.dataTables.min.js')); ?>"></script>
<script src="<?php echo e(asset('/plugins/dataTables.bootstrap.min.js')); ?>"></script>



<!-- Optionally, you can add Slimscroll and FastClick plugins.
      Both of these plugins are recommended to enhance the
      user experience. Slimscroll is required when using the
      fixed layout. -->
<script>
    window.Laravel = <?php echo json_encode([
        'csrfToken' => csrf_token(),
    ]); ?>;
</script>


