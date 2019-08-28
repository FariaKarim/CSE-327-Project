<?php /* G:\University\medforum\resources\views/admin/categories/_form.blade.php */ ?>
<div class="form-group<?php echo e($errors->has('name') ? ' has-error' : ''); ?>">
    <?php echo Form::label('name', 'Name', ['class' => 'col-md-2 control-label']); ?>


    <div class="col-md-8">
        <?php echo Form::text('name', null, ['class' => 'form-control', 'required', 'autofocus']); ?>


        <span class="help-block">
            <strong><?php echo e($errors->first('name')); ?></strong>
        </span>
    </div>
</div>
