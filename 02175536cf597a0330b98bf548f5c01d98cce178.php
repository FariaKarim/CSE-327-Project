<?php /* G:\University\medforum\resources\views/frontend/_search.blade.php */ ?>
<div class="row form-search">
    <?php echo Form::open(['method' => 'GET', 'role' => 'form']); ?>

            <div class="col-md-10">
                <?php echo Form::text('search', request()->get('search'), ['class' => 'form-control', 'placeholder' => 'Search...']); ?>

            </div>
            <div class="col-md-2">
                <?php echo Form::submit('Submit', ['class' => 'btn btn-block btn-default']); ?>

            </div>
    <?php echo Form::close(); ?>

</div>
