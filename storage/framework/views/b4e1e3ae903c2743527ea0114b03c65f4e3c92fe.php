<form <?php echo $attributes; ?>>

  <?php echo $__env->make(AdminTemplate::getViewPath('form.partials.elements'), ['items' => $items], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <input type="hidden" name="_method" value="post" />
  <input type="hidden" name="_redirectBack" value="<?php echo e($backUrl); ?>" />
  <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>" />
  
  <?php echo $buttons->render(); ?>


</form>
<?php /**PATH /var/www/html/laravelapp/vendor/laravelrus/sleepingowl/src/Providers/../../resources/views/default/form/card.blade.php ENDPATH**/ ?>