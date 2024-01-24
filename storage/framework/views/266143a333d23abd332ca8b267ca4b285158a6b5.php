<?php $__env->startPush('styles'); ?>
    <link href="<?php echo asset('css/swiper-bundle.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo asset('css/styles.css'); ?>" rel="stylesheet">
    <link href="<?php echo asset('css/lot.css'); ?>" rel="stylesheet">
    <link href="<?php echo asset('css/swiper-bundle.min.css'); ?>" rel="stylesheet">

<?php $__env->stopPush(); ?>

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
    <script src="<?php echo asset('js/thirdParty/jquery-3.6.4.min.js'); ?>" type="text/javascript"></script>
    <script src="<?php echo asset('js/script.js'); ?>" type="text/javascript"></script>
    <script src="<?php echo asset('js/swiper-bundle.min.js'); ?>" type="text/javascript"></script>
    <script src="<?php echo asset('js/lot.js'); ?>" type="text/javascript"></script>
    <script src="<?php echo asset('js/auction_mechanic.js'); ?>" type="text/javascript"></script>
    <script src="https://js.pusher.com/8.0.1/pusher.min.js"></script>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
    <section class="page" id="lot">
        <h1 class="page__heading">Лот №<?php echo e($item->lot_number); ?></h1>
        <a href="<?php echo e(url()->previous()); ?>" class="lot__back-link go-back-btn">Назад</a>
        <div class="lot__main"
             data-id="<?php echo e($item->id); ?>"
             data-bet-size="<?php echo e($item->bet_size); ?>"
             data-timer-dv-all="<?php echo e($item->timer['dv_all']); ?>"
             data-timer-dv-left="<?php echo e($item->timer['dv_left']); ?>"
             data-timer-left="<?php echo e($item->timer['time_left']); ?>"
        >
            <div class="lot__col1 row__col">
                <div class="lot__card status-<?php echo e($item->status_id); ?>">
                    <span class="lot__card-cost_mobile"><span
                            class="value"><?php echo e(number_format($item->price, 0, '.', ' ')); ?></span> р.</span>
                    <div class="lot__card-visual">

                        <div class="lot__card-img">
                            <?php if(count($item->images) > 0): ?>
                                <img src="<?php echo asset($item->images[0]); ?>" alt="">
                            <?php else: ?>
                                <img src="<?php echo asset('/img/icons/auction.svg'); ?>" alt="">
                            <?php endif; ?>
                        </div>


                        <?php if($item->status_id<3): ?>
                            <?php if($item->deposit_value): ?>
                                <div class="lot__card-sticker sticker-deposit type2">
                                    <p class="lot__card-sticker-smp">Ваш депозит</p>
                                    <p class="lot__card-sticker-bigp"><?php echo e($item->deposit_value->deposit_balance); ?>

                                        FLAMES</p>
                                </div>
                            <?php elseif($item->deposit > 0): ?>
                                <div class="lot__card-sticker sticker-deposit">
                                    <p class="lot__card-sticker-smp">Депозит</p>
                                    <p class="lot__card-sticker-bigp"><?php echo e($item->deposit); ?> FLAMES</p>
                                </div>
                            <?php endif; ?>
                        <?php else: ?>
                            <div class="lot__card-sticker sticker-win">
                                <p class="lot__card-sticker-p">победа!</p>
                            </div>
                            <p class="lot-victory-text">Победил:</p>

                            <div class="lot__card_img-wrapper">
                                <div class="lot__card-letter-icon-wrapper fs">
                                    <span class="lot__card-letter-icon"><?php echo e($leader->first_letter_name ?? null); ?></span>
                                </div>
                                <p class="lot__card-sticker-p lot__card_img-wrapper-p">
                                    <?php echo e($leader->name ?? null); ?>

                                </p>
                            </div>
                        <?php endif; ?>
                        <?php if($isFavorite): ?>
                            <div class="fav_button active" data-id="<?php echo e($item->id); ?>">
                                <div class="text">Убрать из избранного</div>
                            </div>
                        <?php else: ?>
                            <div class="fav_button" data-id="<?php echo e($item->id); ?>">
                                <div class="text">Добавить в избранное</div>
                            </div>
                        <?php endif; ?>
                        <?php if($item->bet_size > 1): ?>
                            <div class="auction__card-sticker sticker-payment is-disabled">
                                <p class="auction__card-sticker-p"><?php echo e($item->bet_size); ?> FLAMES</p>
                                <p class="auction__card-sticker-p">Стоимость клика</p>
                            </div>
                        <?php endif; ?>
                    </div>
                    
                    <?php if($item->status_id==1): ?>
                        <div class="lot__card-date">
                            <p class="lot__card-date-smp">Начало</p>
                            <p class="lot__card-date-value"><?php echo e(date('d/m/y H:i', strtotime($item->time_to_start))); ?></p>
                        </div>
                    <?php elseif($item->status_id==2): ?>
                        <div class="lot__card-date type2">
                            <div class="caption">Лидер</div>
                            <div
                                class="item winner auction_item"> 
                                <div class="user">
                                    <div class="icon">
                                        <div class="noicon color1"><?php echo e($leader->first_letter_name); ?></div>
                                    </div>
                                    <div class="name"><?php echo e($leader->name); ?></div>
                                </div>
                                <div class="time time_left"
                                     data-time-left="<?php echo e($item->timer['time_left']); ?>"><?php echo e($item->timer['dv_left']); ?></div>
                            </div>

                        </div>
                    <?php endif; ?>
                </div>
                <div class="lot__card-text">
                    <div class="lot__button-mobile-wrapper">
                        <button class="lot__button lot__button-mobile invate">Вступить</button>
                        
                    </div>

                    <div class="lot__card-heading">
                        <h6 class="lot__card-heading-title">
                            <span class="lot__card-name"><?php echo e($item->name); ?></span>
                            <span class="lot__card-cost"><span
                                    class="value"><?php echo e(number_format($item->price, 0, '.', ' ')); ?></span> р.</span>
                        </h6>
                        <?php if(!is_null($item->all_slots)): ?>
                            <p class="lot__card-heading-places">
                                Свободно мест:
                                <br>
                                <span class="lot__card-placesleft"><span class="free"><?php echo e($item->free_slots); ?></span>
                            из <span class="all"><?php echo e($item->all_slots); ?></span></span>
                            </p>
                        <?php endif; ?>
                    </div>
                    <?php if($item->bet_size > 1): ?>
                        <p class="lot__card-click-pay">Стоимость клика - <?php echo e($item->bet_size); ?> FLAMES</p>
                    <?php endif; ?>
                    <p class="lot__card-description">
                        <?php echo $item->description; ?>

                    </p>
                    <button class="lot__card-spoiler">Подробнее о товаре</button>
                    <div class="lot__about">
                        <?php echo $item->characteristic; ?>

                        <?php if($additionalDescription): ?>
                            <?php $__currentLoopData = $additionalDescription; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $additionalDescriptionItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="item">
                                    <div class="title"><?php echo $additionalDescriptionItem->title; ?></div>
                                    <div class="description"><?php echo $additionalDescriptionItem->description; ?></div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                    </div>
                    <button data-id="<?php echo e($item->id); ?>"
                            class="lot-button
                            <?php if(($item->status->code == 'bid')&&($item->is_member)): ?>lot__interrupt
                                <?php else: ?> lot__button invate
                            <?php endif; ?>
                            <?php if($item->status->code == 'start'): ?> notstarted is-enabled
                                <?php elseif($item->status->code == 'bid' || $item->time_left > 0): ?>
                                    <?php if(isset($item->is_member)): ?>
                                        <?php if(!$item->is_member): ?> started bid is-enabled <?php endif; ?>
                                    <?php endif; ?>
                                lot-first bid is-enabled
                                <?php elseif($item->status->code == 'completed' || $item->time_left == 0): ?> victory-in-active
                                    <?php else: ?> bid is-enabled <?php endif; ?>"
                            <?php if($item->status->code == 'start'): ?>
                                data-dv-all="<?php echo e($item->timer['dv_all']); ?>"
                            data-time-left="<?php echo e($item->timer['time_left']); ?>"
                            data-dv-left="<?php echo e($item->timer['dv_left']); ?>"
                        <?php endif; ?> >
                        <?php if(isset($canPay) && $item->payed == 0 && $item->canPay): ?>
                            Оплатить
                        <?php elseif(isset($canPay) && $item->payed == 1 && $item->canPay): ?>
                            Оплачен
                        <?php elseif($item->time_left == 0 && $item->status->code !== 'start'): ?>
                            Завершен
                        <?php else: ?>
                            <?php if(($item->status->code == 'bid')&&($item->is_member)): ?>
                                ПЕРЕБИТЬ <span></span><?php echo e($item->bet_size); ?> FLAMES
                            <?php elseif(($item->status->code=='start')&&($item->deposit_value)): ?>
                                Вы участвуете
                            <?php else: ?>
                                <?php echo e($item->status->name); ?>

                            <?php endif; ?>
                        <?php endif; ?>
                    </button>
                    
                    
                </div>
            </div>
            <div class="lot__col2 row__col">
                <div class="lot__col2-wrapper">
                    <div class="lot__col2-heading-wrapper">
                        <h3 class="lot__col2-heading">Список участников:</h3>
                        <button class="lot__filterbar-heading-showbtn"></button>
                    </div>

                    <div class="line-separator"></div>
                    <ul class="lot__list lot__list-members is-active">
                        <?php $__currentLoopData = $bids; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bid): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php
                                $bidUser = App\User::find($bid->user_id);
                            ?>
                            <li class="lot__list-item">
                                <div class="user-avatar-wrapper">
                                    <img
                                        src="/img/noavatar.svg"
                                        alt="Ava" class="user-avatar">
                                </div>
                                <p class="user-email"><?php echo e($bidUser->email); ?></p>
                                <p class="user-date"><?php echo e(date('H:i', strtotime($bid->created_at))); ?></p>
                            </li>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                    <div class="lot__list lot__progress-steps-wrapper ">
                        <ul class="progress-steps">
                            <li class="lot__progress-steps-row">
                                <div class="lot__progress-step lot__progress-step-error">
                                    <span>1</span>
                                </div>
                                <div>
                                    <h3 class="grey-text">Оплата</h3>
                                    <p class="lot__progress-steps__smp grey-text">
                                        Заказ ожидает оплаты
                                    </p>
                                </div>
                            </li>
                            <li class="lot__progress-steps-row">
                                <div class="lot__progress-step lot__progress-step-done">
                                    <span>2</span>
                                </div>
                                <div>
                                    <h3>Контактные данные</h3>
                                    <p class="lot__progress-steps__smp grey-text">
                                        Заполните данные для доставки
                                    </p>
                                    <a class="lot__progress-steps__btn submit-btn is-active" href="settings.html">Настройки</a>
                                </div>
                            </li>
                            <li class="lot__progress-steps-row">
                                <div class="lot__progress-step lot__progress-step-active">
                                    <span>3</span>
                                </div>
                                <div>
                                    <h3>Звонок менеджера</h3>
                                    <p class="lot__progress-steps__smp grey-text">
                                        Подтвердите данные для доставки менеджеру
                                    </p>
                                </div>
                            </li>
                            <li class="lot__progress-steps-row">
                                <div class="lot__progress-step lot__progress-step-disable">
                                    <span>4</span>
                                </div>
                                <div>
                                    <h3>Заказ отправлен</h3>
                                    <p class="lot__progress-steps__smp grey-text">
                                        Трек-номер для отслеживания
                                    </p>
                                    <span class="lot__progress-steps__tracknum tooltip grey-text"
                                          value="5679-5636-5683">5679-5636-5683
                                    <span class="tooltip-text">
                                      Скопировано в буфер обмена
                                    </span>
                                  </span>
                                </div>
                            </li>
                            <li class="lot__progress-steps-row">
                                <div class="lot__progress-step lot__progress-step-disable">
                                    <span>5</span>
                                </div>
                                <div>
                                    <h3>Заказ доставлен</h3>
                                    <p class="lot__progress-steps__smp grey-text">
                                        Поздравляем!
                                    </p>
                                    <button class="lot__progress-steps__btn submit-btn is-active">
                                        Оставить отзыв
                                    </button>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="lot__nav">
            <div class="lot__tags-wrapper">
                <p class="lot__tags-p">Категория:</p>
                <ul class="lot__tags">
                    <li class="lot__tag">Гаджеты</li>
                </ul>
            </div>
            
        </div>
        
        
        
        
        
        
        
        
        
        
        

        
        
        
        
        
        
        
        
        
        
        
        
        
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.auction', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/laravelapp/resources/views/auction/item.blade.php ENDPATH**/ ?>