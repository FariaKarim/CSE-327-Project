<?php /* G:\University\medforum\vendor\laracasts\flash\src\Laracasts\Flash/../../views/message.blade.php */ ?>
<?php if(session()->has('flash_notification.message')): ?>
    <?php if(session()->has('flash_notification.overlay')): ?>
        <?php echo $__env->make('flash::modal', [
            'modalClass' => 'flash-modal',
            'title'      => session('flash_notification.title'),
            'body'       => session('flash_notification.message')
        ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php else: ?>
        <div class="alert
                    alert-<?php echo e(session('flash_notification.level')); ?>

                    <?php echo e(session()->has('flash_notification.important') ? 'alert-important' : ''); ?>"
        >
            <?php if(session()->has('flash_notification.important')): ?>
                <button type="button"
                        class="close"
                        data-dismiss="alert"
                        aria-hidden="true"
                >&times;</button>
            <?php endif; ?>

            <?php echo session('flash_notification.message'); ?>

        </div>
    <?php endif; ?>
<?php endif; ?>
