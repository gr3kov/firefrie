<div <?php echo $attributes; ?>>
    <?php $__currentLoopData = $links; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $link): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($link instanceof \SleepingOwl\Admin\Display\Link): ?>
            <a <?php echo $link->attributes(); ?> href="<?php echo $link->getUrl(); ?>"><?php echo $link->getTitle(); ?></a>
        <?php elseif($link instanceof \Illuminate\Contracts\Support\Renderable): ?>
            <?php echo $link->render(); ?>

        <?php elseif(is_string($link)): ?>
            <?php echo $link; ?>

        <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php /**PATH /var/www/html/laravelapp/vendor/laravelrus/sleepingowl/src/Providers/../../resources/views/default/display/extensions/links.blade.php ENDPATH**/ ?>