<nav class="page__navigation">
    <?php $__currentLoopData = $pageNavigation; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pageNavigationItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <button class="page__tab-btn <?php if($pageNavigationItem['active']): ?> ?? is-active <?php endif; ?>" for="<?php echo e($pageNavigationItem['slug']); ?>"><?php echo e($pageNavigationItem['title']); ?> <?php if(count($pageNavigationItem['auctionItems'])): ?> <span><?php echo e(count($pageNavigationItem['auctionItems'])); ?></span> <?php endif; ?></button>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</nav>
<?php /**PATH /var/www/html/laravelapp/resources/views/partial/auction/pageNavigation.blade.php ENDPATH**/ ?>