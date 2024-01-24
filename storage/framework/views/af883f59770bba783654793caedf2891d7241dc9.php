<div <?php echo $attributes; ?>>
  <?php if($visibled): ?>
    <?php if(!empty($value)): ?>
      <?php echo HTML::mailto($value, $value); ?>

    <?php endif; ?>
    <?php echo $append; ?>


    <?php if($small): ?>
      <small class="clearfix"><?php echo $small; ?></small>
    <?php endif; ?>
  <?php endif; ?>
</div>
<?php /**PATH /var/www/html/laravelapp/vendor/laravelrus/sleepingowl/src/Providers/../../resources/views/default/column/email.blade.php ENDPATH**/ ?>