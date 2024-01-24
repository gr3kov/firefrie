<?php $__env->startPush('styles'); ?>
    <link href="<?php echo asset('css/swiper-bundle.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo asset('css/winners.css'); ?>" rel="stylesheet">
<?php $__env->stopPush(); ?>

<?php $__env->startPush('scripts'); ?>
    <script src="<?php echo asset('js/thirdParty/jquery-3.6.4.min.js'); ?>" type="text/javascript"></script>
    <script src="<?php echo asset('js/script.js'); ?>" type="text/javascript"></script>
    <script src="<?php echo asset('js/swiper-bundle.min.js'); ?>" type="text/javascript"></script>
    <script src="<?php echo asset('js/winners.js'); ?>" type="text/javascript"></script>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
    <section class="page" id="winners">
        <h1 class="page__heading"><?php echo e($title); ?></h1>
        <div class="winners-ribbon">

            <?php $__currentLoopData = $auctionItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $auctionItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <article class="winner-card-wrapper">
                    <div class="winner-card">
                        <div class="winner-card-heading">
                            <p class="winner-card-nickname"><?php echo e($auctionItem->leader->email); ?></p>
                            <p class="winner-card-date"><?php echo date('d/m/Y H:i', strtotime($auctionItem->updated_at)); ?></p>
                        </div>






                        <div class="winner-card-award">
                            <div class="winner-card-award-visual">
                                <?php if($auctionItem->preview_image != null): ?>
                                    <img src="<?php echo e(asset($auctionItem->preview_image)); ?>" alt="">
                                <?php else: ?>
                                    <img src="<?php echo e(asset('/img/icons/auction.svg')); ?>" alt="">
                                <?php endif; ?>
                            </div>
                            <h3 class="winner-card-award-name"><?php echo e($auctionItem->name); ?></h3>
                        </div>




                    </div>
                </article>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.auction', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/laravelapp/resources/views/auction/winners.blade.php ENDPATH**/ ?>