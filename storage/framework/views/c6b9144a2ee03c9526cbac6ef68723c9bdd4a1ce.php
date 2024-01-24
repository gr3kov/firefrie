<?php $__env->startPush('styles'); ?>
    <link href="<?php echo asset('css/slick.css'); ?>" rel="stylesheet">
    <link href="<?php echo asset('css/styles.css'); ?>" rel="stylesheet">
    <link href="<?php echo asset('css/auctions.css'); ?>" rel="stylesheet">
    <link href="<?php echo asset('css/swiper-bundle.min.css'); ?>" rel="stylesheet">
<?php $__env->stopPush(); ?>

<?php $__env->startPush('scripts'); ?>
    <script src="<?php echo asset('js/thirdParty/jquery-3.6.4.min.js'); ?>" type="text/javascript"></script>
    <script src="<?php echo asset('js/script.js'); ?>" type="text/javascript"></script>
    <script src="<?php echo asset('js/swiper-bundle.min.js'); ?>" type="text/javascript"></script>
    <script src="<?php echo asset('js/auctions.js'); ?>" type="text/javascript"></script>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
    <section class="page" id="auctions">
        <h1 class="page__heading"><?php echo e($title); ?></h1>
        <div class="auction">
            <section class="auction__main">

                <?php echo $__env->make('partial.auction.search', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                <?php echo $__env->make('partial.auction.categories', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                <article class="auction__content">
                    <h3 class="auction__title">Ожидаемые анонсы</h3>

                    <?php echo $__env->make('partial.auction.cards', [
                        'auctionItems' => $auctionItems,
                        'active' => true,
                    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                </article>
            </section>


        </div>
    </section>

    <?php echo $__env->make('partial.modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.auction', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/laravelapp/resources/views/auction/auction.blade.php ENDPATH**/ ?>