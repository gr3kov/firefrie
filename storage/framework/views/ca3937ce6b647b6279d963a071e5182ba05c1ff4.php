<?php if($visibled): ?>
    <div class="form-group form-element-date <?php echo e($errors->has($name) ? 'has-error' : ''); ?>">
        <label for="<?php echo e($name); ?>" class="control-label <?php echo e($required ? 'required' : ''); ?>">
            <?php echo e($label); ?>


            <?php if($required): ?>
                <span class="form-element-required">*</span>
            <?php endif; ?>
        </label>

        <div class="input-date input-group datetime">
            <input
                    <?php echo $attributes; ?>

                    class="form-control"
                    value="<?php echo e($value); ?>"
                    <?php if($readonly): ?> readonly <?php endif; ?>
            >
            <span class="input-group-prepend input-group-addon">
				<div class="input-group-text">
					<span class="far fa-calendar-alt"></span>
				</div>
			</span>
        </div>

        <?php echo $__env->make(AdminTemplate::getViewPath('form.element.partials.helptext'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make(AdminTemplate::getViewPath('form.element.partials.errors'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
<?php endif; ?>
<?php /**PATH /var/www/html/laravelapp/vendor/laravelrus/sleepingowl/src/Providers/../../resources/views/default/form/element/datetime.blade.php ENDPATH**/ ?>