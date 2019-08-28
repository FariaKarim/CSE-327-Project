<?php $__env->startSection('htmlheader_title'); ?>
  Owner - Register Driver
<?php $__env->stopSection(); ?>

<?php $__env->startSection('htmlheader'); ?>
##parent-placeholder-5a28aaffcd404e78f33089f625f7f94a2c921dbd##
<style type="text/css">
  
</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main-content'); ?>

<?php if(count($errors) > 0): ?>
<div class="row">
<div class="col-xs-12">
    <div class="alert alert-danger">
    <ul>
      <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li><?php echo e($error); ?></li>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
    </div>
</div>    
</div>
<?php endif; ?>


<?php if(Session::has('success')): ?>
<div class="row">
<div class="col-xs-12">
    <div class="alert alert-success">
        <p> <?php echo Session::get('success'); ?> </p>
    </div>
</div>
</div>
<?php endif; ?>


<div class="row">
    <div class="col-xs-12">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Register Driver</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form action="" method="post">
       <?php echo csrf_field(); ?>

          <div class="box-body">
             <div class="form-group">
              <label for="driver"><b>Driver ID : </b></label>
              <select class="form-control" name="driver" >
                <option value="">Select Driver ID</option>
              <?php $__currentLoopData = $unreg_drivers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $unreg_driver): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($unreg_driver->id); ?>"><?php echo e($unreg_driver->id); ?> </option>
                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </select>
            </div>
            <div class="form-group">
              <label for="license"><b>License Number : </b></label>
              <input type="text" name="license">
            </div>
            
          </div>
          <!-- /.box-body -->

          <div class="box-footer">
            <button type="submit" class="btn btn-primary assign">Submit</button>
          </div>
        </form>
      </div>         
    </div>
</div>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
##parent-placeholder-16728d18790deb58b3b8c1df74f06e536b532695##
<script type="text/javascript">
  
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>