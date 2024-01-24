<?php if($visibled): ?>
    <div class="form-group form-element-select <?php echo e($errors->has($name) ? 'has-error' : ''); ?>">
        <label for="<?php echo e($name); ?>" class="control-label <?php echo e($required ? 'required' : ''); ?>">
            <?php echo $label; ?>


            <?php if($required): ?>
                <span class="form-element-required">*</span>
            <?php endif; ?>
        </label>

        <deselect
            :value="<?php echo e((ctype_digit(strval($value)) ? $value : json_encode($value))); ?>"
            :id="'<?php echo e($id); ?>'"
            :multiple="false"
            :options="<?php echo e(json_encode($options)); ?>"
            inline-template
        >
            <div>
                <multiselect
                    <?php if($readonly): ?>
                      :disabled="true"
                    <?php endif; ?>
                    v-model="val"
                    track-by="id"
                    label="text"
                    :multiple="multiple"
                    :searchable="true"
                    :options="options"
                    <?php if(count($options)): ?>
                      placeholder="<?php echo e(trans('sleeping_owl::lang.select.placeholder')); ?>"
                    <?php else: ?>
                      placeholder="<?php echo e(trans('sleeping_owl::lang.select.no_items')); ?>"
                    <?php endif; ?>
                    select-label="<?php echo e(trans('sleeping_owl::lang.select.init')); ?>"
                    selected-label="<?php echo e(trans('sleeping_owl::lang.select.selected')); ?>"
                    <?php if($required): ?>
                      :allow-empty="false"
                      deselect-label=""
                    <?php else: ?>
                      deselect-label="<?php echo e(trans('sleeping_owl::lang.select.deselect')); ?>"
                    <?php endif; ?>
                >
                <span slot="noResult"><?php echo e(trans('sleeping_owl::lang.select.no_items')); ?></span>
                </multiselect>

                <input type="hidden"
                    <?php echo $attributes; ?>

                    id="<?php echo e($id); ?>"
                    name="<?php echo e($name); ?>"
                    v-model="preparedVal"
                >
            </div>
        </deselect>

        <?php echo $__env->make(AdminTemplate::getViewPath('form.element.partials.helptext'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make(AdminTemplate::getViewPath('form.element.partials.errors'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
<?php endif; ?>
<?php /**PATH /var/www/html/laravelapp/vendor/laravelrus/sleepingowl/src/Providers/../../resources/views/default/form/element/select.blade.php ENDPATH**/ ?>