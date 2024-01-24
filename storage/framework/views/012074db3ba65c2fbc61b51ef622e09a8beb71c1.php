<div class="auction__categories-wrapper swiper">
    <h3 class="auction__title">Категории</h3>
    <div class="auction__categories swiper-wrapper">
        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="auction__category swiper-slide">
                <ul class="auction__category-top">
                    <?php $__currentLoopData = $category['auctionItems']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $auctionItems): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


                        <a href="<?php echo e(route('item', ['id' => $auctionItems->id])); ?>">
                            <li class="auction__category-top-item">


                                    <?php if($auctionItems->preview_image != null): ?>
                                        <img style="max-width: 94px;" src="<?php echo asset($auctionItems->preview_image); ?>"
                                             alt="<?php echo e($auctionItems->name); ?>"/>
                                    <?php else: ?>
                                    <img style="max-width: 94px; max-height: 66px;" src="<?php echo e(asset('/img/icons/auction.svg')); ?>" alt="<?php echo e($auctionItems->name); ?>">

                                <?php endif; ?>


                            </li>
                        </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
                <div class="auction__category-bot">
                    <p><?php echo e($category['auctionCategory']->headline); ?></p>
                    <a href="<?php echo e(route('category', $category['auctionCategory']->slug)); ?>"
                       class="auction__category-change-btn">Перейти</a>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <div class="auction__categories-pagination"></div>
</div>
<?php /**PATH /var/www/html/laravelapp/resources/views/partial/auction/categories.blade.php ENDPATH**/ ?>