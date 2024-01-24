<?php if(!empty($filter_title)): ?>
    <h4 class="page-title">
        <?php echo e($filter_title); ?>:
<?php endif; ?>

<?php $__currentLoopData = $filters; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $filter): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <small class="badge badge-info p-2 filter-badge">
        <?php echo e($filter->getTitle()); ?>


        <a href="<?php echo e(URL::current()); ?>?<?php echo http_build_query(request()->except($filter->getAlias())); ?>">
            <span aria-hidden="true">&times;</span>
        </a>
    </small>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php if(!empty($filter_title)): ?>
    </h4>
<?php endif; ?>
<?php /**PATH /var/www/html/laravelapp/vendor/laravelrus/sleepingowl/src/Providers/../../resources/views/default/display/extensions/filter_title.blade.php ENDPATH**/ ?>