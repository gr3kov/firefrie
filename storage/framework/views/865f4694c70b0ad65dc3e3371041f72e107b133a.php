<?php if(count($actions) > 0): ?>
    <form <?php echo $attributes; ?> id="action_form">
        <?php echo e(csrf_field()); ?>


        
        
        <div class="action_select">
            <select class="form-control sleepingOwlActionsStore" id="sleepingOwlActionsStore" name="action" tabindex="-1" aria-hidden="true">
                <option value="0"><?php echo e(trans('sleeping_owl::lang.table.no-action')); ?></option>
                <?php $__currentLoopData = $actions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $action): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php echo $action->render(); ?>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
        
        
        <div class="action_btn pl-2">
            <button type="submit" class="row-action btn btn-action btn-default" data-method="post">
                <?php echo e(trans('sleeping_owl::lang.table.make-action' )); ?>

            </button>
        </div>
        <div class="clearfix"></div>
    </form>
<?php endif; ?>
<?php /**PATH /var/www/html/laravelapp/vendor/laravelrus/sleepingowl/src/Providers/../../resources/views/default/display/extensions/actions.blade.php ENDPATH**/ ?>