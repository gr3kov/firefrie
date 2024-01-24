<?php if(!$url): ?>
    <button <?php echo $attributes; ?> value="<?php echo e($name); ?>">
        <?php if($iconClass): ?><i class="<?php echo e($iconClass); ?>"></i><?php endif; ?> <?php echo e($text); ?>

    </button>
<?php else: ?>
    <a href="<?php echo e($url); ?>" <?php echo $attributes; ?>>
        <?php if($iconClass): ?><i class="<?php echo e($iconClass); ?>"></i><?php endif; ?> <?php echo e($text); ?>

    </a>
<?php endif; ?>
<?php if($groupElements): ?>
    <div class="btn-group">
        <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false">
        </button>
        <div class="dropdown-menu btn-actions">
            <div class="btn-group-vertical">
                <?php $__currentLoopData = $groupElements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $groupButton): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($groupButton instanceof \SleepingOwl\Admin\Form\Buttons\FormButton && $groupButton->getShow()): ?>
                        <?php echo $groupButton->render(); ?>

                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
<?php endif; ?>
<?php /**PATH /var/www/html/laravelapp/vendor/laravelrus/sleepingowl/src/Providers/../../resources/views/default/form/button.blade.php ENDPATH**/ ?>