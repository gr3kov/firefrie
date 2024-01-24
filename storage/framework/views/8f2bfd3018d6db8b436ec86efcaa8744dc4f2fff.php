<?php $__env->startPush('styles'); ?>
    <link href="<?php echo asset('css/notifications.css'); ?>" rel="stylesheet">
<?php $__env->stopPush(); ?>

<?php $__env->startPush('scripts'); ?>
    <script src="<?php echo asset('./js/jquery-3.6.2.min.js'); ?>" type="text/javascript"></script>
    <script src="<?php echo asset('js/script.js'); ?>" type="text/javascript"></script>
    <script src="<?php echo asset('js/notifications.js'); ?>" type="text/javascript"></script>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
    <section class="page" id="notifications">
        <h1 class="page__heading"><?php echo $title; ?></h1>
        <div class="notifications-wrapper new">
            <?php $__currentLoopData = $notifications['new']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $notificationsItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <article class="notifications-card-wrapper">
                    <div class="notifications-card <?php if($notificationsItem['unread']): ?> is-unread <?php endif; ?>">
                        <div
                          class="notifications-card-img <?php if(isset($notificationsItem['auction'])): ?> notifications-card-awardimg <?php endif; ?>">
                            <?php if(isset($notificationsItem['auction'])): ?>
                                <p
                                  class="notifications-card-awardimg-name"><?php echo e($notificationsItem['auction']['title']); ?></p>
                                <?php if($notificationsItem['auction']['image'] != null): ?>
                                <img src="<?php echo e(asset($notificationsItem['auction']['image'])); ?>" alt="">
                                <?php else: ?>
                                    <img src="<?php echo e(asset('/img/icons/auction.svg')); ?>" alt="">
                                <?php endif; ?>
                            <?php else: ?>
                                <img src="<?php echo e($notificationsItem['image']); ?>" alt="">
                            <?php endif; ?>
                        </div>
                        <div class="notifications-card-text">
                            <p class="notifications-card-title"><?php echo e($notificationsItem['title']); ?></p>
                            <p class="notifications-card-content"><?php echo $notificationsItem['text']; ?></p>

                            <?php if(isset($notificationsItem['auction'])): ?>
                                <a href="<?php echo e($notificationsItem['auction']['url']); ?>" class="notifications-card-link">Перейти
                                    на страницу лота ></a>
                            <?php else: ?>
                                <button class="notifications-card-spoiler">Развернуть</button>
                            <?php endif; ?>
                        </div>
                        <p class="notifications-card-date">
                            <?php echo e(date('d/m/Y', $notificationsItem['date'])); ?>

                            <br>
                            <?php echo e(date('H:i', $notificationsItem['date'])); ?>

                        </p>
                        <?php if($notificationsItem['unread']): ?>
                            <div class="unread"></div> <?php endif; ?>

                        <?php if($notificationsItem['unread']): ?>
                            <div class="unread"></div>
                        <?php endif; ?>
                    </div>
                </article>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.auction', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/laravelapp/resources/views/profile/notifications.blade.php ENDPATH**/ ?>