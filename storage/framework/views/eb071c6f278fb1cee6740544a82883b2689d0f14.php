<?php $__env->startPush('scripts'); ?>
    <script type="text/javascript">
        let urlLogin = '<?php echo e(route('login')); ?>',
            urlStartAuction = '/startAuction/',
            urlBid = '/bid/',
            urlGetAuctionBidsTable = '/getAuctionBidsTable/',
            pusherAppKey = '<?php echo e(env('PUSHER_APP_KEY')); ?>',
            pusherAppCluster = '<?php echo e(env('PUSHER_APP_CLUSTER')); ?>',
            pusherChannel = '<?php echo e(env('PUSHER_CHANNEL')); ?>',
            pusherEvent = '<?php echo e(env('PUSHER_EVENT')); ?>';
    </script>
    <script src="<?php echo asset('js/auction_mechanic.js'); ?>" type="text/javascript"></script>
    <script src="https://js.pusher.com/8.0.1/pusher.min.js"></script>
<?php $__env->stopPush(); ?>

<div class="auction__cards <?php if($active): ?> is-active <?php endif; ?>" <?php if(isset($slug) && $slug): ?> id="<?php echo e($slug); ?>" <?php endif; ?>>

    <?php $__currentLoopData = $auctionItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $auctionItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="auction__card goto auction_item"
             data-id="<?php echo e($auctionItem->id); ?>"
             data-bet-size="<?php echo e($auctionItem->bet_size); ?>"
             id="auction_<?php echo e($auctionItem->id); ?>"
             target="<?php echo e(route('item', ['id' => $auctionItem->id])); ?>">
            <div class="auction__card-visual">
                <div class="auction__card-img">
                    <?php if($auctionItem->preview_image != null): ?>
                        <img src="<?php echo asset($auctionItem->preview_image); ?>" alt="">
                    <?php else: ?>
                        <img src="<?php echo e(asset('/img/icons/auction.svg')); ?>" alt="<?php echo e($auctionItem->name); ?>">
                    <?php endif; ?>
                </div>
                <?php if($auctionItem->status_id<3): ?>
                    <?php if($auctionItem->deposit_value): ?>
                        <div class="auction__card-sticker sticker-deposit type2">
                            <p class="auction__card-sticker-smp">Ваш депозит</p>
                            <p class="auction__card-sticker-bigp"><?php echo e($auctionItem->deposit_value->deposit_balance); ?>

                                FLAMES</p>
                        </div>
                    <?php elseif($auctionItem->deposit > 0): ?>
                        <div class="auction__card-sticker sticker-deposit">
                            <p class="auction__card-sticker-smp">Депозит</p>
                            <p class="auction__card-sticker-bigp"><?php echo e($auctionItem->deposit); ?> FLAMES</p>
                        </div>
                    <?php endif; ?>
                <?php endif; ?>
                <div class="fav_button <?php if($auctionItem->is_favorite): ?> active <?php endif; ?>">
                    <div class="text">Добавить в избранное</div>
                </div>
                <?php if($auctionItem->bet_size > 1): ?>
                    <div class="auction__card-sticker sticker-payment is-disabled">
                        <p class="auction__card-sticker-p"><?php echo e($auctionItem->bet_size); ?> FLAMES</p>
                        <p class="auction__card-sticker-p">Стоимость клика</p>
                    </div>
                <?php endif; ?>
                <?php if(isset($canPay) && $auctionItem->payed == 1 && $auctionItem->canPay): ?>
                    <div class="auction__card-sticker sticker-payment is-disabled">
                        <p class="auction__card-sticker-p">Оплачено</p>
                    </div>
                <?php endif; ?>
                <?php if(!empty($auctionItem->leader)): ?>
                    <div class="auction__card-sticker sticker-email type2">
                        <p class="auction__card-sticker-p name"><?php if($auctionItem->status_id==3): ?>
                                Победитель
                            <?php else: ?>
                                Лидер
                            <?php endif; ?></p>
                        <p class="auction__card-sticker-p"><?php echo $auctionItem->leader->name; ?></p>
                    </div>
                <?php endif; ?>
            </div>
            <div class="auction__card-text">
                <h6 class="auction__card-heading">
                    <span class="auction__card-name"><?php echo e($auctionItem->name); ?></span><span class="auction__card-cost"><?php echo e(number_format($auctionItem->price, 0, '.', ' ')); ?>

                        р.</span>
                </h6>
                <?php if(!is_null($auctionItem->all_slots)): ?>
                    <p class="auction__card-smp">
                        Свободно мест:
                        <span class="auction__card-placesleft"><span class="free"><?php echo e($auctionItem->free_slots); ?></span>
                            из <span class="all"><?php echo e($auctionItem->all_slots); ?></span></span>
                    </p>
                <?php endif; ?>
                <?php if($auctionItem->time_left == 'bid' || $auctionItem->status->code != 'completed'): ?>
                    <div class="auction__card-date <?php if($auctionItem->status->code != 'start'): ?> is-timer <?php endif; ?>">
                        <?php if($auctionItem->status->code == 'start'): ?>
                            <p>Начало</p>
                            <p
                                class="auction__card-date-value"><?php echo e(date('d/m/y H:i', strtotime($auctionItem->time_to_start))); ?></p>
                        <?php elseif(($auctionItem->status->code != 'completed') || ($auctionItem->time_left > 0)): ?>
                            <p
                                class="auction__card-date-value"><?php echo e($auctionItem->timer['dv_all']); ?></p>
                            <p class="auction__card-date-value time_left"
                               data-time-left="<?php echo e($auctionItem->timer['time_left']); ?>"><?php echo e($auctionItem->timer['dv_left']); ?></p>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
            </div>
            
            <button data-id="<?php echo e($auctionItem->id); ?>"
                    class="auction__card-btn button
                    <?php if($auctionItem->status->code == 'start'): ?> notstarted is-enabled
                    <?php elseif($auctionItem->status->code == 'bid' || $auctionItem->time_left > 0): ?>
                    <?php if(isset($auctionItem->is_member)): ?>
                    <?php if(!$auctionItem->is_member): ?> started bid is-enabled <?php endif; ?>
                    <?php endif; ?>
                      lot-first bid is-enabled
<?php elseif($auctionItem->status->code == 'completed' || $auctionItem->time_left == 0): ?> finished is-disabled
                    <?php else: ?> bid is-enabled <?php endif; ?>"
                    <?php if($auctionItem->status->code == 'start'): ?>
                        data-dv-all="<?php echo e($auctionItem->timer['dv_all']); ?>"
                    data-time-left="<?php echo e($auctionItem->timer['time_left']); ?>"
                    data-dv-left="<?php echo e($auctionItem->timer['dv_left']); ?>"
                <?php endif; ?> >
                <?php if(isset($canPay) && $auctionItem->payed == 0 && $auctionItem->canPay): ?>
                    Оплатить
                <?php elseif(isset($canPay) && $auctionItem->payed == 1 && $auctionItem->canPay): ?>
                    Оплачен
                <?php elseif($auctionItem->time_left == 0 && $auctionItem->status->code !== 'start'): ?>
                    Завершен
                <?php else: ?>
                    <?php if(isset($auctionItem->is_member)): ?>
                        <?php if(($auctionItem->status->code == 'bid')&&($auctionItem->is_member)): ?>
                            <span>ПЕРЕБИТЬ</span>
                            <img src="/img/buy-crypto.svg" alt="">
                            <span><?php echo e($auctionItem->bet_size); ?> FLAMES</span>
                            <span class="flare"></span>
                        <?php elseif(($auctionItem->status->code=='start')&&($auctionItem->deposit_value)): ?>
                            Вы участвуете
                        <?php else: ?>
                            <?php echo e($auctionItem->status->name); ?>

                        <?php endif; ?>
                    <?php endif; ?>
                <?php endif; ?>
            </button>
        </div>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</div>
<?php /**PATH /var/www/html/laravelapp/resources/views/partial/auction/cards.blade.php ENDPATH**/ ?>