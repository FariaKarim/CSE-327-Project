<?php $__env->startSection('htmlheader_title'); ?>
  BRTA - Vehicles
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
    <h3 class="box-title">List of Unregistered Vehicles</h3>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <table id="vehiclelist" class="table table-bordered table-striped">
      <thead>

        <tr>
          <th>SL. No</th>
          <th>Vehicle ID</th>
          <th>Vehicle Owner Name</th>
          <th>Action</th>
      
        </tr>
      </thead>
      <tbody>
        <?php  
          $i=0;
        ?>
      <?php $__currentLoopData = $unreg_vehicles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $unreg_vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
        <tr>
          <?php 
               $i=$i+1;
           ?>
          <td><?php echo e($i); ?></td>
          <td><?php echo e($unreg_vehicle->id); ?></td>
          <td><?php echo e($unreg_vehicle->information->first_name); ?> <?php echo e($unreg_vehicle->information->last_name); ?></td>
          <td><a href="<?php echo e(route('unreg.vehicle.info',['vehicle_id' => $unreg_vehicle->id])); ?>" class="btn btn-success" role="button">view</a>&nbsp &nbsp<a href="<?php echo e(route('regFormVehicles',['vehicle_id' => $unreg_vehicle->id])); ?>" class="btn btn-info" role="button">register</a></td>
        
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