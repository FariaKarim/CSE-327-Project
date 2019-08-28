<?php $__env->startSection('htmlheader_title'); ?>
  Vehicle Information
<?php $__env->stopSection(); ?>

<?php $__env->startSection('htmlheader'); ?>
##parent-placeholder-5a28aaffcd404e78f33089f625f7f94a2c921dbd##
<style>
.image{
  margin-bottom: 20px;
}
</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<?php if($vehicle!=null): ?>
<div class="row">
  <div class="col-md-6">
    <img src="<?php echo e($vehicle->vehicleInformation->information->image); ?>" class="img-responsive image">
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">Personal Information</h3>
        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fa fa-minus"></i></button>
          <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fa fa-times"></i></button>
        </div>
      </div>
      <div class="box-body">
        <b>Name:</b> <?php echo e($vehicle->vehicleInformation->information->first_name); ?> <?php echo e($vehicle->vehicleInformation->information->last_name); ?>

      </div><!-- /.box-body -->
       
      <!-- /.box-footer-->
      <div class="box-footer">
        <b>Father's name:</b> <?php echo e($vehicle->vehicleInformation->information->father_name); ?>

      </div>
       <div class="box-footer">
        <b>Mother's name:</b> <?php echo e($vehicle->vehicleInformation->information->mother_name); ?>

      </div>
       <div class="box-footer">
        <b>Spouse name:</b> <?php echo e($vehicle->vehicleInformation->information->spouse_name); ?>

      </div>
       <div class="box-footer">
        <b>Date of birth:</b> <?php echo e($vehicle->vehicleInformation->information->birth_date); ?>

      </div>
       <div class="box-footer">
        <b>Email:</b> <?php echo e($vehicle->vehicleInformation->information->email); ?>

      </div>
       <div class="box-footer">
        <b>Permanent address:</b> <?php echo e($vehicle->vehicleInformation->information->permanent_address); ?>

      </div>
       <div class="box-footer">
        <b>Present address:</b> <?php echo e($vehicle->vehicleInformation->information->present_address); ?>

      </div>
       <div class="box-footer">
        <b>Phone number:</b> <?php echo e($vehicle->vehicleInformation->information->phone_number); ?>

      </div>
       <div class="box-footer">
        <b>Citizenship:</b> <?php echo e($vehicle->vehicleInformation->information->citizen); ?>

      </div>
       <div class="box-footer">
        <b>National ID number:</b> <?php echo e($vehicle->vehicleInformation->information->nid); ?>

      </div>
       <div class="box-footer">
        <b>Passport:</b> <?php echo e($vehicle->vehicleInformation->information->passport); ?>

      </div>
    </div>
  </div>
  
  <div class="col-md-6">
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">Application Information</h3>

        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fa fa-minus"></i></button>
          <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fa fa-times"></i></button>
        </div>
      </div>
      
      <div class="box-footer">
        <b>Tyre Size:</b> <?php echo e($vehicle->vehicleInformation->tyre_size); ?> 
      </div>
       <div class="box-footer">
        <b>Vehicle class:</b> <?php echo e($vehicle->vehicleInformation->class); ?> 
      </div>
       <div class="box-footer">
        <b>Chasis No:</b> <?php echo e($vehicle->vehicleInformation->chasis_no); ?> 
      </div>
      <div class="box-footer">
        <b>Fuel used:</b> <?php echo e($vehicle->vehicleInformation->fuel_used); ?> 
      </div>
       <div class="box-footer">
        <b>Horse power:</b> <?php echo e($vehicle->vehicleInformation->horse_power); ?> 
      </div>
      <div class="box-footer">
        <b>RPM:</b> <?php echo e($vehicle->vehicleInformation->rpm); ?> 
      </div>
      <div class="box-footer">
        <b>Seats:</b> <?php echo e($vehicle->vehicleInformation->seats); ?> 
      </div>
      <div class="box-footer">
        <b>Cubic capacity:</b> <?php echo e($vehicle->vehicleInformation->cubic_capacity); ?> 
      </div>
      <div class="box-footer">
        <b>Standee no:</b> <?php echo e($vehicle->vehicleInformation->standee_no); ?> 
      </div>
      <div class="box-footer">
        <b>No of cylinders:</b> <?php echo e($vehicle->vehicleInformation->no_of_cylinders); ?> 
      </div>
      <div class="box-footer">
        <b>Weight:</b> <?php echo e($vehicle->vehicleInformation->weight); ?> 
      </div>
      <div class="box-footer">
        <b>Engine no:</b> <?php echo e($vehicle->vehicleInformation->engine_no); ?> 
      </div>
      <div class="box-footer">
        <b>Body type:</b> <?php echo e($vehicle->vehicleInformation->body_type); ?> 
      </div>
      <div class="box-footer">
        <b>Manufacture year:</b> <?php echo e($vehicle->vehicleInformation->year_of_manufacture); ?>

      </div>
      <div class="box-footer">
        <b>Made by:</b> <?php echo e($vehicle->vehicleInformation->maker_name); ?> (<?php echo e($vehicle->vehicleInformation->makers_country); ?>)
      </div>
      <div class="box-footer">
        <b>Fit:</b> <?php echo e($vehicle->vehicleInformation->fit ? 'OK' : 'Not OK'); ?> 
      </div><!-- /.box-footer-->
    </div>
  </div>

  <div class="col-md-6">
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">Registration Information</h3>

        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fa fa-minus"></i></button>
          <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fa fa-times"></i></button>
        </div>
      </div>
      <div class="box-body">
        <b>Vehicle Registration No:</b> <?php echo e($vehicle->vehicle_registration_no); ?>

      </div>
      <!-- /.box-body -->
      <div class="box-footer">
        <b>Issued date:</b> <?php echo e($vehicle->issued_date); ?>

      </div>
      <div class="box-footer">
        <b>Expired date:</b> <?php echo e($vehicle->expired_date); ?>

      </div>
      
      <!-- /.box-footer-->
    </div>
  </div>
</div>
<?php else: ?>
<div class="row">
  <div class="col-md-12">
    <div class="box box-solid box-danger">
      <div class="box-header with-border text-center">
        <h3 class="box-title ">There is no such vehicle</h3>
      </div>
    </div>
  </div>
</div>
<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::layouts.landing', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>