<?php /* D:\medforum\medforum\resources\views/layouts/_admin_menu.blade.php */ ?>
<ul class="nav navbar-nav">
    <li><a href="<?php echo e(url('admin/posts')); ?>">Posts</a></li>
    <li><a href="<?php echo e(url('admin/categories')); ?>">Categories</a></li>
    <li><a href="<?php echo e(url('admin/comments')); ?>">Comments</a></li>
    <li><a href="<?php echo e(url('admin/tags')); ?>">Tags</a></li>

    <?php if(Auth::user()->is_admin): ?>
        <li><a href="<?php echo e(url('admin/users')); ?>">Users</a></li>
    <?php endif; ?>
</ul>
