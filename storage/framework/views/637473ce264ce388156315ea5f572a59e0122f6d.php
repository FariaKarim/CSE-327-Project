<?php $__env->startSection('htmlheader_title'); ?>
  Home
<?php $__env->stopSection(); ?>

<?php $__env->startSection('htmlheader'); ?>
##parent-placeholder-5a28aaffcd404e78f33089f625f7f94a2c921dbd##
<style>

</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div clss="row centered" style="margin-top: 30px;">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header text-center">
                <h1 class="box-title">Daily Vehicles</h1>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table id="vehiclelist" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                          <th>SL. No</th>
                          <th>Vehicle Licence No</th>
                          <th>Driver Name</th>
                          <th>Driver Licence</th>
                          <th>Issued Date</th>
                          <th>Issued Month</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $daily_vehicles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $daily_vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($key+1); ?></td>
                        <td><a href="<?php echo e(route('vehicle.info', ['vehicle_no' => $daily_vehicle->vehicle->vehicle_registration_no])); ?>" target="_blank"><?php echo e($daily_vehicle->vehicle->vehicle_registration_no); ?></a></td>
                        <td><a href="<?php echo e(route('driver.info', ['diving_licence' => $daily_vehicle->driver->driving_licence_no])); ?>" target="_blank"><?php echo e($daily_vehicle->driver->driverInformation->information->first_name); ?> <?php echo e($daily_vehicle->driver->driverInformation->information->last_name); ?></a></td>
                        <td><?php echo e($daily_vehicle->driver->driving_licence_no); ?></td>
                        <td><?php echo e($daily_vehicle->issued_date); ?></td>
                        <td><?php echo e(Carbon\Carbon::parse($daily_vehicle->issued_date)->format('F')); ?></td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
##parent-placeholder-16728d18790deb58b3b8c1df74f06e536b532695##
<script type="text/javascript">
$(document).ready(function(){
  $('#vehiclelist').DataTable();
});
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::layouts.landing', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>