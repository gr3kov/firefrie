<form action="<?php echo e($url); ?>" method="POST" style="display:inline-block;">
    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>" />
    <input type="hidden" name="_method" value="<?php echo e($method); ?>" />
    <button <?php echo $attributes; ?>>
        <?php if($icon): ?>
            <i class="<?php echo e($icon); ?>"></i>
        <?php endif; ?>

        <?php if($image): ?>
            <img src="<?php echo e($image); ?>">
        <?php endif; ?>

        <?php if(!$hideText): ?>
            <?php echo $text; ?>

        <?php endif; ?>
    </button>
</form>
<?php /**PATH /var/www/html/laravelapp/vendor/laravelrus/sleepingowl/src/Providers/../../resources/views/default/column/control_button.blade.php ENDPATH**/ ?>