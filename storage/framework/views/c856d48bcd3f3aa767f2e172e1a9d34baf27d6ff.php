<?php $__env->startSection('htmlheader_title'); ?>
  BRTA - regVehicles
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
    <h3 class="box-title">List of Registered Vehicles</h3>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <table id="vehiclelist" class="table table-bordered table-striped">
      <thead>
             <tr>
          <th>SL. No</th>
          <th>Registration No.</th>
          <th>Fit</th>
          <th>Action</th>
        
        </tr>
      </thead>
      <tbody>
        <?php $__currentLoopData = $reg_vehicles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $reg_vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        
        <tr>
          <td><?php echo e($key+1); ?></td>
          <td><?php echo e($reg_vehicle->vehicle_registration_no); ?></td>
          <td>
            <?php if($reg_vehicle->vehicleInformation->fit==1): ?>
              Yes
            <?php else: ?>
              No
            <?php endif; ?>
          </td>
          <td><a href="<?php echo e(route('vehicle.info',['vehicle_no' => $reg_vehicle->vehicle_registration_no])); ?>" class="btn btn-success" target="_blank" role="button">view</a>&nbsp &nbsp<!-- <a href="#" class="btn btn-info" role="button" onclick="return alert('are you sure?')">fit</a></td> -->
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