<div <?php echo $attributes; ?>>
  <?php $__currentLoopData = $buttons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $button): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php echo $button->render(); ?>

  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  <?php if($model && $model->deleted_at): ?>
    <span class="model_deleted" style="display:none"></span>
  <?php endif; ?>
</div>
<?php /**PATH /var/www/html/laravelapp/vendor/laravelrus/sleepingowl/src/Providers/../../resources/views/default/column/control.blade.php ENDPATH**/ ?>