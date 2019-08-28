<?php /* D:\medforum\medforum\resources\views/admin/posts/_form.blade.php */ ?>
<div class="form-group<?php echo e($errors->has('title') ? ' has-error' : ''); ?>">
    <?php echo Form::label('title', 'Title', ['class' => 'col-md-2 control-label']); ?>


    <div class="col-md-8">
        <?php echo Form::text('title', null, ['class' => 'form-control', 'required', 'autofocus']); ?>


        <span class="help-block">
            <strong><?php echo e($errors->first('title')); ?></strong>
        </span>
    </div>
</div>

<div class="form-group<?php echo e($errors->has('body') ? ' has-error' : ''); ?>">
    <?php echo Form::label('body', 'Body', ['class' => 'col-md-2 control-label']); ?>


    <div class="col-md-8">
        <?php echo Form::textarea('body', null, ['class' => 'form-control', 'required']); ?>


        <span class="help-block">
            <strong><?php echo e($errors->first('body')); ?></strong>
        </span>
    </div>
</div>

<div class="form-group<?php echo e($errors->has('category_id') ? ' has-error' : ''); ?>">
    <?php echo Form::label('category_id', 'Category', ['class' => 'col-md-2 control-label']); ?>


    <div class="col-md-8">
        <?php echo Form::select('category_id', $categories, null, ['class' => 'form-control', 'required']); ?>


        <span class="help-block">
            <strong><?php echo e($errors->first('category_id')); ?></strong>
        </span>
    </div>
</div>

<?php $types = ['doctor','patient']; ?>

<div class="form-group<?php echo e($errors->has('user_type') ? ' has-error' : ''); ?>">
    <?php echo Form::label('user_type', 'Type', ['class' => 'col-md-2 control-label']); ?>


    <div class="col-md-8">
        <?php echo Form::select('user_type', $types, null, ['class' => 'form-control', 'required']); ?>


        <span class="help-block">
            <strong><?php echo e($errors->first('user_type')); ?></strong>
        </span>
    </div>
</div>

<?php
    if(isset($post)) {
        $tag = $post->tags->pluck('name')->all();
    } else {
        $tag = null;
    }
?>

<div class="form-group<?php echo e($errors->has('tags') ? ' has-error' : ''); ?>">
    <?php echo Form::label('tags', 'Tag', ['class' => 'col-md-2 control-label']); ?>


    <div class="col-md-8">
        <?php echo Form::select('tags[]', $tags, $tag, ['class' => 'form-control select2-tags', 'required', 'multiple']); ?>


        <span class="help-block">
            <strong><?php echo e($errors->first('tags')); ?></strong>
        </span>
    </div>
</div>
