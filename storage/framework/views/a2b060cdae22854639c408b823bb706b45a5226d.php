<?php $__env->startSection('htmlheader_title'); ?>
  BRTA - regDrivers
<?php $__env->stopSection(); ?>

<?php $__env->startSection('htmlheader'); ?>
##parent-placeholder-5a28aaffcd404e78f33089f625f7f94a2c921dbd##
<style>

</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main-content'); ?>



     

<!--  -->
<div class="box">
  <div class="box-header">
    <h3 class="box-title">List of Registered Drivers</h3>
  </div>

  <!-- /.box-header -->
  <div class="box-body">
    <table id="vehiclelist" class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>SL. No</th>
          <th>License No.</th>
          <th>Fit</th>
          <th>Police Verified</th>
          <th>Action</th>
        
        </tr>
      </thead>
      <tbody>
       <?php $__currentLoopData = $reg_drivers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $reg_driver): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
        <tr>
          <td><?php echo e($key+1); ?></td>
          <td><?php echo e($reg_driver->driving_licence_no); ?></td>
          <td><?php echo e($reg_driver->driverInformation->fit); ?> </td>
          <td><?php echo e($reg_driver->driverInformation->police_verified); ?> </td>
          <td><a href="<?php echo e(route('driver.info',['driving_licence' => $reg_driver->driving_licence_no])); ?>" class="btn btn-success" role="button">view</a></td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </tbody>
    </table>
  </div>
</div>
          
<?php $__env->stopSection(); ?>

<!-- <?php $__env->startSection('scripts'); ?>
##parent-placeholder-16728d18790deb58b3b8c1df74f06e536b532695##
<script type="text/javascript">
$(document).ready(function(){
  $('#vehiclelist').DataTable();
});
</script>
<?php $__env->stopSection(); ?> -->
<?php echo $__env->make('adminlte::layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>