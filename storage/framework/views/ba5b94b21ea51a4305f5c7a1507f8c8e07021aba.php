<?php if($visibled): ?>
    <div class="form-group form-element-images<?php echo e($class ? ' ' . $class : ''); ?> <?php echo e($errors->has($name) ? 'has-error' : ''); ?>"<?php echo $style ? ' style="' . $style . '"' : ''; ?>>
        <label for="<?php echo e($name); ?>" class="control-label <?php echo e($required ? 'required' : ''); ?>">
            <?php echo $label; ?>


            <?php if($required): ?>
                <span class="form-element-required">*</span>
            <?php endif; ?>
        </label>

        <?php echo $__env->make(AdminTemplate::getViewPath('form.element.partials.helptext'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <element-images
                url="<?php echo e(route('admin.form.element.image', [
				'adminModel' => AdminSection::getModel($model)->getAlias(),
				'field' => $path,
				'id' => $model->getKey()
			], false)); ?>"
                :values="<?php echo e(json_encode($value)); ?>"
                :readonly="<?php echo e($readonly ? 'true' : 'false'); ?>"
                :onlylink="<?php echo e($paste_only_link ? 'true' : 'false'); ?>"
                :draggable="<?php echo e($draggable ? 'true' : 'false'); ?>"
                name="<?php echo e($name); ?>"
                inline-template
        >
            <div>
                <div v-if="errors.length" class="alert alert-warning" v-show="errors.length" style="display:none;">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close" @click="closeAlert()">
                      <i class="fa-fw fas fa-times"></i>
                        
                    </button>

                    <p v-for="error in errors">
                        <i class="fa-fw fas fa-images" aria-hidden="true"></i> {{ error }}
                    </p>
                </div>

                <div data-disable="<?php echo e(!$readonly); ?>" class="form-element-files dropzone clearfix<?php echo e($readonly ? ' dropzone-disabled': ''); ?>">
                    <draggable class="draggable" v-model="vals" :disabled="<?php echo e(!$readonly && $draggable ? 'false': 'true'); ?>">

                        <div class="form-element-files__item" v-for="(uri, index) in vals">
                            <a :href="image(uri)" class="form-element-files__image" data-toggle="images">
                                <img :src="image(uri)"/>
                            </a>

                            <div class="form-element-files__info">
                                <a class="btn btn-clear btn-sm pull-right drag-cursor" v-if="!readonly && draggable">
                                    <i class="fa-fw fas fa-arrows-alt"></i>
                                </a>
                                <a :href="image(uri)" class="btn btn-default btn-sm pull-right" download target="_blank" title="<?php echo e(trans('sleeping_owl::lang.button.download')); ?>" data-toggle="tooltip">
                                    <i class="fa-fw fas fa-cloud-upload-alt"></i>
                                </a>
                                <button type="button" v-if="!readonly" @click.prevent="insert(index)" class="btn btn-default btn-sm pull-right mr-1" title="<?php echo e(trans('sleeping_owl::lang.file.insert_link')); ?>" data-toggle="tooltip">
                                    <i class="fa-fw fas fa-link"></i>
                                </button>

                                <button type="button" @click.prevent="remove(index)" v-if="!readonly" class="btn btn-danger btn-xs" title="<?php echo e(trans('sleeping_owl::lang.image.remove')); ?>" data-toggle="tooltip">
                                    <i class="fa-fw fas fa-times"></i>
                                </button>
                            </div>
                        </div>

                    </draggable>

                </div>

                <div class="form-element-button-add w-100 order-2 mt-2" v-if="!readonly">
                    <div class="btn btn-primary upload-button btn-sm" v-if="!onlylink">
                        <i :class="uploadClass"></i> <?php echo e(trans('sleeping_owl::lang.image.browseMultiple')); ?>

                    </div>
                    <button type="button" @click.prevent="insert()" class="btn btn-default btn-sm" title="<?php echo e(trans('sleeping_owl::lang.file.insert_link')); ?>" data-toggle="tooltip">
                        <i class="fa-fw fas fa-link"></i>
                    </button>
                </div>

                <input :name="name" type="hidden" :value="serializedValues">
            </div>
        </element-images>

        <div class="errors">
            <?php echo $__env->make(AdminTemplate::getViewPath('form.element.partials.errors'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>
<?php endif; ?>
<?php /**PATH /var/www/html/laravelapp/vendor/laravelrus/sleepingowl/src/Providers/../../resources/views/default/form/element/images.blade.php ENDPATH**/ ?>