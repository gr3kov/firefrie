<?php if($visibled): ?>
    <?php $__env->startPush('footer-scripts'); ?>
        
    <?php $__env->stopPush(); ?>

    <div class="form-group form-element-wysiwyg <?php echo e($errors->has($name) ? 'has-error' : ''); ?>">
        <label for="<?php echo e($name); ?>" class="control-label <?php echo e($required ? 'required' : ''); ?>">
            <?php echo $label; ?>


            <?php if($required): ?>
                <span class="form-element-required">*</span>
            <?php endif; ?>
        </label>

        <?php echo $__env->make(AdminTemplate::getViewPath('form.element.partials.helptext'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <?php echo Form::textarea($name, $value, $attributesArray); ?>


        <?php echo $__env->make(app('sleeping_owl.template')->getViewPath('form.element.partials.errors'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
<?php endif; ?>
<?php /**PATH /var/www/html/laravelapp/vendor/laravelrus/sleepingowl/src/Providers/../../resources/views/default/form/element/wysiwyg_without_card.blade.php ENDPATH**/ ?>