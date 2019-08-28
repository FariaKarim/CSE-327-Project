<?php /* D:\medforum\medforum\resources\views/admin/posts/index.blade.php */ ?>
<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2>
                            Posts

                            <a href="<?php echo e(url('admin/posts/create')); ?>" class="btn btn-default pull-right">Create New</a>
                        </h2>
                    </div>

                    <div class="panel-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Body</th>
                                    <th>Author</th>
                                    <th>Category</th>
                                    <th>Tags</th>
                                    <th>Published</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__empty_1 = true; $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <tr>
                                        <td><?php echo e($post->title); ?></td>
                                        <td><?php echo e(str_limit($post->body, 60)); ?></td>
                                        <td><?php echo e($post->user->name); ?></td>
                                        <td><?php echo e($post->category->name); ?></td>
                                        <td><?php echo e($post->tags->implode('name', ', ')); ?></td>
                                        <td><?php echo e($post->published); ?></td>
                                        <td>
                                            
                                            <a href="<?php echo e(url("/admin/posts/{$post->id}")); ?>" class="btn btn-xs btn-success">Show</a>
                                            <a href="<?php echo e(url("/admin/posts/{$post->id}/edit")); ?>" class="btn btn-xs btn-info">Edit</a>
                                            <a href="<?php echo e(url("/admin/posts/{$post->id}")); ?>" data-method="DELETE" data-token="<?php echo e(csrf_token()); ?>" data-confirm="Are you sure?" class="btn btn-xs btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    <tr>
                                        <td colspan="5">No post available.</td>
                                    </tr>
                                <?php endif; ?>
                            </tbody>
                        </table>

                        <?php echo $posts->links(); ?>


                    </div>
                </div>
            </div>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>