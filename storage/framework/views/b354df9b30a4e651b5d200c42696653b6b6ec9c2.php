<a href="<?php echo e($url); ?>" <?php echo $attributes; ?>>
    <?php if($icon): ?>
        <i class="<?php echo e($icon); ?>"></i>
    <?php endif; ?>

    <?php if($image): ?>
        <img src="<?php echo e($image); ?>">
    <?php endif; ?>

    <?php if(!$hideText): ?>
        <?php echo $text; ?>

    <?php endif; ?>
</a>
<?php /**PATH /var/www/html/laravelapp/vendor/laravelrus/sleepingowl/src/Providers/../../resources/views/default/column/control_link.blade.php ENDPATH**/ ?>