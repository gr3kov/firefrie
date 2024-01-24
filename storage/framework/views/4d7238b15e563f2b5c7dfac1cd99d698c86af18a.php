<?php if(count($errors->get($path = str_replace([']', '['], ['', '.'], $name)))> 0): ?>
    <ul class="form-element-errors">
        <?php $__currentLoopData = $errors->get($path); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo $error; ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
<?php endif; ?><?php /**PATH /var/www/html/laravelapp/vendor/laravelrus/sleepingowl/src/Providers/../../resources/views/default/form/element/partials/errors.blade.php ENDPATH**/ ?>