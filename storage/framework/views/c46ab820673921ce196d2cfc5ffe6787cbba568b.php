<?php if($visibled): ?>
    <div class="form-group form-element-text <?php echo e($errors->has($name) ? 'has-error' : ''); ?>">
        <label for="<?php echo e($name); ?>" class="control-label <?php echo e($required ? 'required' : ''); ?>">
            <?php echo $label; ?>


            <?php if($required): ?>
                <span class="form-element-required">*</span>
            <?php endif; ?>
        </label>
        <input v-pre <?php echo $attributes; ?> value="<?php echo e($value); ?>"
               <?php if($readonly): ?> readonly <?php endif; ?>
        >

        <?php echo $__env->make(AdminTemplate::getViewPath('form.element.partials.helptext'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make(AdminTemplate::getViewPath('form.element.partials.errors'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
<?php endif; ?>
<?php /**PATH /var/www/html/laravelapp/vendor/laravelrus/sleepingowl/src/Providers/../../resources/views/default/form/element/text.blade.php ENDPATH**/ ?>