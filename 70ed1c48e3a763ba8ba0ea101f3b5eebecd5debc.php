<?php /* D:\medforum\medforum\resources\views/frontend/_comments.blade.php */ ?>
<?php $__empty_1 = true; $__currentLoopData = $post->comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
    <div class="panel panel-default">
        <div class="panel-heading">
            <?php echo e($comment->user->name); ?> <span style="color:green">(<?php echo e(ucwords($comment->user->user_type)); ?>)</span> says...

            <span class="pull-right"><?php echo e($comment->created_at->diffForHumans()); ?></span>
        </div>

        <div class="panel-body">
            <p><?php echo e($comment->body); ?></p>
        </div>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
    <div class="panel panel-default">
        <div class="panel-heading">Not Found!!</div>

        <div class="panel-body">
            <p>Sorry! No comment found for this post.</p>
        </div>
    </div>
<?php endif; ?>
