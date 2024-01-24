<?php if($visibled): ?>
    <div class="form-group form-element-multiselect <?php echo e($errors->has($name) ? 'has-error' : ''); ?>">
        <label for="<?php echo e($id); ?>" class="control-label <?php echo e($required ? 'required' : ''); ?>">
            <?php echo $label; ?>


            <?php if($required): ?>
                <span class="form-element-required">*</span>
            <?php endif; ?>
        </label>

        <deselect
            :value="<?php echo e(json_encode($value)); ?>"
            :id="'<?php echo e($id); ?>'"
            :multiple="true"
            :options="<?php echo e(json_encode($options)); ?>"
            inline-template
        >
            <div>
                <multiselect
                    <?php if($readonly): ?>
                      :disabled="true"
                    <?php endif; ?>
                    <?php if($required): ?>
                      :allow-empty="false"
                    <?php endif; ?>
                    v-model="val"
                    track-by="id"
                    label="text"
                    :multiple="multiple"
                    <?php if($limit): ?>
                     :limit="<?php echo $limit; ?>"
                    <?php endif; ?>
                    :searchable="true"
                    :options="options"
                    <?php if(count($options)): ?>
                      placeholder="<?php echo e(trans('sleeping_owl::lang.select.placeholder')); ?>"
                    <?php else: ?>
                      placeholder="<?php echo e(trans('sleeping_owl::lang.select.no_items')); ?>"
                    <?php endif; ?>
                    @tag="addTag"
                    :taggable="<?php echo e($taggable ? 'true' : 'false'); ?>"
                    select-label="<?php echo e(trans('sleeping_owl::lang.select.init')); ?>"
                    selected-label="<?php echo e(trans('sleeping_owl::lang.select.selected')); ?>"
                    deselect-label="<?php echo e(trans('sleeping_owl::lang.select.deselect')); ?>"
                >
                <span slot="noResult"><?php echo e(trans('sleeping_owl::lang.select.no_items')); ?></span>
                <span slot="noOptions"><?php echo e(trans('sleeping_owl::lang.select.no_items')); ?></span>
                </multiselect>

                <select v-show="true == false"
                    id="<?php echo e($id); ?>"
                    multiple
                    name="<?php echo e($name); ?>"
                    <?php echo $attributes; ?>

                >
                    <option
                        :selected="hasOption(opt.id)"
                        :value="opt.id"
                        v-for="opt in options">
                        {{ opt.text }}
                    </option>
                </select>

                <?php if($required): ?>
                  <div class="text-danger pt-2 pb-3" v-show="!val.length">
                    <?php echo e(trans('sleeping_owl::validation.required', ['attribute' => $label])); ?>

                  </div>
                <?php endif; ?>
            </div>
        </deselect>




        <?php echo $__env->make(AdminTemplate::getViewPath('form.element.partials.helptext'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make(AdminTemplate::getViewPath('form.element.partials.errors'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
<?php endif; ?>
<?php /**PATH /var/www/html/laravelapp/vendor/laravelrus/sleepingowl/src/Providers/../../resources/views/default/form/element/multiselect.blade.php ENDPATH**/ ?>