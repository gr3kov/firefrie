<?php $__env->startPush('styles'); ?>
    <link href="<?php echo asset('css/styles.css'); ?>" rel="stylesheet">
    <link href="<?php echo asset('css/tockens.css'); ?>" rel="stylesheet">
<?php $__env->stopPush(); ?>

<?php $__env->startPush('scripts'); ?>
    <script src="<?php echo asset('./js/jquery-3.6.2.min.js'); ?>" type="text/javascript"></script>
    <script src="<?php echo asset('js/script.js'); ?>" type="text/javascript"></script>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
    <section class="page" id="tockens">
        <h1 class="page__heading"><?php echo e($title); ?></h1>
        <div class="tockens__grid">
            <?php $__currentLoopData = $token; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tokenItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <article class="tockens__card">
                    <p class="tockens__card-roto"><?php echo e(number_format($tokenItem->value, 0, '.', ' ')); ?> FLAMES</p>
                    <div class="tockens__card-img">
                        <img src="<?php echo e(asset($tokenItem->image)); ?>" alt="">
                    </div>

                        <div class="tockens__card-bottom">
                            <p class="tockens__card-rubble"><?php echo e(number_format($tokenItem->price, 0, '.', ' ')); ?> $</p>
                            <button class="tockens__card-btn submit-btn is-active"
                                    onclick="window.location='<?php echo route('payment', ['type' => 'token', 'id' => $tokenItem->id]); ?>'">
                                Купить
                            </button>
                        </div>

                </article>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.auction', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/laravelapp/resources/views/token/list.blade.php ENDPATH**/ ?>