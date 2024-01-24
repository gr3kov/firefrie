<?php $__env->startPush('styles'); ?>
    <link href="<?php echo asset('css/static.css'); ?>" rel="stylesheet">
<?php $__env->stopPush(); ?>


<?php $__env->startPush('styles'); ?>
    <link href="<?php echo asset('https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo asset('css/jquery-ui.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo asset('css/styles.css'); ?>" rel="stylesheet">
    <link href="<?php echo asset('css/profile.css'); ?>" rel="stylesheet">
    <link href="<?php echo asset('css/slick.css'); ?>" rel="stylesheet">
    <link href="<?php echo asset('css/swiper-bundle.min.css'); ?>" rel="stylesheet">
<?php $__env->stopPush(); ?>

<?php $__env->startPush('scripts'); ?>
    <script src="<?php echo asset('./js/jquery-3.6.2.min.js'); ?>" type="text/javascript"></script>
    <script src="<?php echo asset('js/swiper-bundle.min.js'); ?>" type="text/javascript"></script>
    <script src="<?php echo asset('./js/itc__slider.js'); ?>" type="text/javascript"></script>
    <script src="<?php echo asset('./js/jquery-ui.min.js'); ?>" type="text/javascript"></script>
    <script src="<?php echo asset('./js/script.js'); ?>" type="text/javascript"></script>
    <script src="<?php echo asset('./js/slick.min.js'); ?>" type="text/javascript"></script>
    <script src="<?php echo asset('./js/profile.js'); ?>" type="text/javascript"></script>

<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
    <section class="page" id="publicoffer">
        <h1 class="page__heading"><?php echo $title; ?></h1>

        <div class="row__col">
            <?php echo $docs->description; ?>

        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.auction', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/laravelapp/resources/views/pages/static.blade.php ENDPATH**/ ?>