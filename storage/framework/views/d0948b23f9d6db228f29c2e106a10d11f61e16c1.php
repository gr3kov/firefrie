<?php $__env->startPush('styles'); ?>
    <link href="<?php echo asset('css/news.css'); ?>" rel="stylesheet">
<?php $__env->stopPush(); ?>

<?php $__env->startPush('scripts'); ?>
    <script src="<?php echo asset('js/script.js'); ?>" type="text/javascript"></script>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
    <section class="page" id="news">
        <h1 class="page__heading"><?php echo $title; ?></h1>
        <div class="news-wrapper">

            <?php $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $newsItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <article class="news-card-wrapper">
                <div class="news-card">
                    <div class="news-card-img">
                        <img src="<?php if(!empty($newsItem->image)): ?> <?php echo e(asset($newsItem->image)); ?> <?php else: ?> /img/news.jpg <?php endif; ?>" alt="">
                    </div>
                    <div class="news-card-heading">
                        <p class="news-card-title"><?php echo e($newsItem->title); ?></p>
                        <p class="news-card-date"><?php echo e(date('d/m/Y H:i', strtotime($newsItem->created_at))); ?></p>
                    </div>
                    <p class="news-card-text"><?php echo $newsItem->text; ?></p>
                </div>
            </article>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.auction', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/laravelapp/resources/views/news/list.blade.php ENDPATH**/ ?>