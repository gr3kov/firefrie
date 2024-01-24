<<?php echo e($tag); ?> <?php echo $attributes; ?>>
    <tr>
        <?php $__currentLoopData = $elements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <td <?php echo $element->htmlAttributesToString(); ?>>
                <?php if($element instanceof SleepingOwl\Admin\Display\Link): ?>
                    <a  <?php echo $element->attributes(); ?> href="<?php echo $element->getUrl(); ?>"><?php echo $element->getTitle(); ?></a>
                <?php else: ?>
                    <<?php echo $element->getTag(); ?> <?php echo $element->attributes(); ?>><?php echo $element->getText(); ?></<?php echo $element->getTag(); ?>>
                <?php endif; ?>
            </td>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tr>
</<?php echo e($tag); ?>>
<?php /**PATH /var/www/html/laravelapp/vendor/laravelrus/sleepingowl/src/Providers/../../resources/views/default/display/extensions/columns_total.blade.php ENDPATH**/ ?>