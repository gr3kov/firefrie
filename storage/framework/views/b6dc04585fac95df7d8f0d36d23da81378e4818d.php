<?php if($visibled): ?>
    <div class="form-group form-element-checkbox <?php echo e($class ? ' ' . $class : ''); ?> <?php echo e($errors->has($name) ? 'has-error' : ''); ?>"<?php echo $style ? ' style="' . $style . '"' : ''; ?>>
        <div class="checkbox">
            <label class="<?php echo e($required ? 'required' : ''); ?>">
                <input <?php echo $attributes; ?> <?php if($readonly): ?> disabled <?php endif; ?> type="checkbox" value="1" <?php echo $value ? 'checked="checked"' : ''; ?> />

                <?php echo $label; ?>

                <?php if($required): ?>
                    <span class="form-element-required">*</span>
                <?php endif; ?>
            </label>

            <?php echo $__env->make(AdminTemplate::getViewPath('form.element.partials.helptext'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>

        <?php echo $__env->make(AdminTemplate::getViewPath('form.element.partials.errors'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
<?php endif; ?>
<?php /**PATH /var/www/html/laravelapp/vendor/laravelrus/sleepingowl/src/Providers/../../resources/views/default/form/element/checkbox.blade.php ENDPATH**/ ?>