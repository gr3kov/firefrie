<?php if(count($action_form) > 0): ?>
    <div <?php echo $attributes; ?>>
        <?php $__currentLoopData = $action_form; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $action_form_element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php echo $action_form_element->render(); ?>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php endif; ?>
<?php /**PATH /var/www/html/laravelapp/vendor/laravelrus/sleepingowl/src/Providers/../../resources/views/default/display/extensions/actions_form.blade.php ENDPATH**/ ?>