<?php if($visibled): ?>
    <div class="form-group form-element-image<?php echo e($class ? ' ' . $class : ''); ?> <?php echo e($errors->has($name) ? 'has-error' : ''); ?>">
        <label for="<?php echo e($name); ?>" class="control-label<?php echo e($required ? ' required' : ''); ?>">
            <?php echo $label; ?>


            <?php if($required): ?>
                <span class="form-element-required">*</span>
            <?php endif; ?>
        </label>

        <?php echo $__env->make(AdminTemplate::getViewPath('form.element.partials.helptext'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <element-image
                url="<?php echo e(route('admin.form.element.image', [
				'adminModel' => AdminSection::getModel($model)->getAlias(),
				'field' => $path,
				'id' => $model->getKey()
			], false)); ?>"
                value="<?php echo e($value); ?>"
                asset_prefix="<?php echo e($asset_prefix); ?>"
                :readonly="<?php echo e($readonly ? 'true' : 'false'); ?>"
                :onlylink="<?php echo e($paste_only_link ? 'true' : 'false'); ?>"
                name="<?php echo e($name); ?>"
                inline-template
        >
            <div>
                <div v-if="errors.length" class="alert alert-warning" v-show="errors.length" style="display:none;">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close" @click="closeAlert()">
                        <span aria-hidden="true">&times;</span>
                    </button>

                    <p v-for="error in errors" v-show="errors">
                        <i class="fa-fw fas fa-image" aria-hidden="true"></i> {{ error }}
                    </p>
                </div>

                <div class="form-element-files clearfix" v-if="has_value" v-show="has_value" style="display:none;">
                    <div class="form-element-files__item">
                        <a :href="createdimage" class="form-element-files__image" data-toggle="lightbox">
                            <img :src="createdimage"/>
                        </a>
                        <div class="form-element-files__info">
                            <a :href="createdimage" class="btn btn-default btn-sm pull-right" download target="_blank" title="<?php echo e(trans('sleeping_owl::lang.button.download')); ?>" data-toggle="tooltip">
                                <i class="fa-fw fas fa-cloud-upload-alt"></i>
                            </a>
                            <button type="button" v-if="!readonly" @click.prevent="insert(val)" class="btn btn-default btn-sm pull-right mr-1" title="<?php echo e(trans('sleeping_owl::lang.file.insert_link')); ?>" data-toggle="tooltip">
                                <i class="fa-fw fas fa-link"></i>
                            </button>

                            <button type="button" v-if="has_value && !readonly" class="btn btn-danger btn-xs" @click.prevent="remove()" title="<?php echo e(trans('sleeping_owl::lang.image.remove')); ?>" data-toggle="tooltip">
                                <i class="fa-fw fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <div v-if="!readonly">
                    <div class="btn btn-primary upload-button btn-sm" v-if="!onlylink">
                        <i :class="uploadClass"></i> <?php echo e(trans('sleeping_owl::lang.image.browse')); ?>

                    </div>
                    <button type="button" @click.prevent="insert($event.target.value)" class="btn btn-default btn-sm" title="<?php echo e(trans('sleeping_owl::lang.file.insert_link')); ?>" data-toggle="tooltip">
                        <i class="fa-fw fas fa-link"></i>
                    </button>


                </div>

                <input :name="name" type="hidden" :value="val">
            </div>
        </element-image>


        <div class="errors">
            <?php echo $__env->make(AdminTemplate::getViewPath('form.element.partials.errors'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>
<?php endif; ?>
<?php /**PATH /var/www/html/laravelapp/vendor/laravelrus/sleepingowl/src/Providers/../../resources/views/default/form/element/image.blade.php ENDPATH**/ ?>