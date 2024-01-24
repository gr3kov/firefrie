<?php $__env->startPush('styles'); ?>
    <link href="<?php echo asset('css/main.css'); ?>" rel="stylesheet">
    <link href="<?php echo asset('css/about.css'); ?>" rel="stylesheet">
<?php $__env->stopPush(); ?>

<?php $__env->startPush('scripts'); ?>
    <script src="<?php echo asset('js/script.js'); ?>" type="text/javascript"></script>
    <script src="<?php echo asset('js/about.js'); ?>" type="text/javascript"></script>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
    <section class="page" id="main">
        <h1 class="page__heading"><?php echo $title; ?></h1>

        <article class="row1">
            <div class="row1__cols123">
                <div class="row1__col1 row__col">
                    <div class="flex item-cener">
                        <img src="/img/main/about.svg" alt="">
                        <p class="row1__col1-paragraph">Это международный онлайн-аукцион, который предлагает
                            возможность участвовать в торгах за право приобретения товаров, услуг,
                            крипто-активов, автомобилей, недвижимости и прочего, за 15-20% от их рыночной
                            стоимости</p>
                    </div>

                </div>
                <div class="row1__col2 row__col"
                     style="background: #171a1e radial-gradient(   at right 100%,   rgba(255, 160, 28, 0.1) 0%,   rgba(0, 0, 0, 0) 70% )">
                    <h2 class="row1__col2-heading">Миссия</h2>
                    <p class="row1__col2-paragraph">100 000 счастливых людей, выигравших на торгах <span>100
                                        000</span></p>
                </div>
                <div class="row1__col3 row__col">
                    <div class="row1__col3__block1 row1__col3__block">
                        <p class="row1__col3__block-text">Сумма<br>выигрышей</p>
                        <p class="row1__col3__block-number">1 300 000 р.</p>
                    </div>
                    <div class="row1__col3__block2 row1__col3__block">
                        <p class="row1__col3__block-text">Количество участников</p>
                        <p class="row1__col3__block-number"><?php echo e(number_format($totalUsers, 0, '.', ' ')); ?></p>
                    </div>
                    <div class="row1__col3__block3 row1__col3__block">
                        <p class="row1__col3__block-text">Количество стран участников</p>
                        <p class="row1__col3__block-number">7</p>
                    </div>
                    <div class="row1__col3__block4 row1__col3__block">
                        <p class="row1__col3__block-text">Аукционов ежедневно</p>
                        <p class="row1__col3__block-number"><?php echo e($auctionsToday); ?></p>
                    </div>
                    <div class="row1__col3__block5 row1__col3__block">
                        <p class="row1__col3__block-text">Выведено партнёрам</p>
                        <p class="row1__col3__block-number">944 567 р.</p>
                    </div>
                    <div class="row1__col3__block6 row1__col3__block">
                        <p class="row1__col3__block-text">Число партнёров</p>
                        <p class="row1__col3__block-number">234</p>
                    </div>
                    <div class="row1__col3__block7 row1__col3__block">
                        <p class="row1__col3__block-text">Количество победителей</p>
                        <p class="row1__col3__block-number">132</p>
                        <div class="row1__col3__block-img">
                            <img src="/img/main/goblet-new.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row1__col4 row__col">
                <h2 class="row1__col4-heading">Как это работает?</h2>
                <div class="line-separator"></div>
                <p class="row1__col4-paragraph">В разделе <a href="<?php echo e(route('auction')); ?>"
                                                             style="font-weight: 400; text-decoration: underline;">аукционы</a>
                    на торги выставляются различные востребованные на рынке предложения: гаджеты, электроника,
                    драгоценности, криптовалюты, автомобили и прочее.</p>
                <ul class="progress-steps">
                    <li class="progress-step is-active">
                        <p class="progress-step-heading">До начала аукциона по каждому из предложений,
                            появляется анонс с датой и временем начала торгов и открывается набор участников
                        </p>
                    </li>
                    <li class="progress-step">
                        <p class="progress-step-heading">В каждом предложении может принимать участие
                            ограниченное количество человек, установленное индивидуально по каждому
                            предложению</p>
                    </li>
                    <li class="progress-step">
                        <p class="progress-step-heading">Для участия в торгах необходимо иметь на балансе
                            внутреннюю игровую валюту FLAMES (Royal Token)</p>
                    </li>
                    <li class="progress-step">
                        <p class="progress-step-heading">Для бронирования места и подтверждения участия в
                            торгах, игрокам необходимо заморозить установленное количество токенов FLAMES до
                            начала.</p>
                    </li>
                    <li class="progress-step">
                        <p class="progress-step-heading">По окончанию таймера сразу же начинаются торги и
                            участники начинают делать клики по кнопке «купить»</p>
                    </li>
                    <li class="progress-step">
                        <p class="progress-step-heading">Каждый клик стоит заранее установленное количество
                            FLAMES на каждом из предложений.</p>
                    </li>
                    <li class="progress-step">
                        <p class="progress-step-heading">После каждого сделанного клика, право приобретения
                            предложения переходит последнему кликнувшему участнику торгов</p>
                    </li>
                    <li class="progress-step">
                        <p class="progress-step-heading">Если за установленное время с момента вашего клика
                            вас никто не перекликнул, предложение достаётся вам!</p>
                    </li>
                </ul>
                <p class="row1__col4-spoiler">Развернуть</p>
            </div>
        </article>

        <article class="row2">
            <div class="row2__cols12">
                <div class="row2__col1">
                    <div class="row2__col1__block row__col">
                        <a href="https://instagram.com/<?php echo env('CONTACTS_INSTAGRAM'); ?>" class="row2__col1__block-img">
                            <img src="/img/icons/instagram.svg" alt="">
                        </a>
                        <p class="row2__col1__block-text">Instagram</p>
                    </div>
                    <div class="row2__col1__block row__col">
                        <a href="<?php echo env('CONTACTS_TELEGRAM'); ?>" class="row2__col1__block-img">
                            <img src="/img/icons/telegram.svg" alt="">
                        </a>
                        <p class="row2__col1__block-text">Телеграм</p>
                    </div>
                    <div class="row2__col1__block row__col">
                        <a href="#" class="row2__col1__block-img">
                            <img src="/img/icons/tgbot.svg" alt="">
                        </a>
                        <p class="row2__col1__block-text">Телеграм-бот</p>
                    </div>
                </div>
            </div>
        </article>
        <div>
            <div class="row2__col3 row__col">
                <h3 class="row2__col3-heading">Последние регистрации</h3>
                <div class="partner-table">
                    <table class="tg">
                        <thead>
                        <tr>
                            <th class="partner-table-th--user">Пользователь</th>
                            <th class="partner-table-th--regdate">Дата подключения</th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php $__currentLoopData = $lastUserRegistration; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lastUserRegistrationItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td class="partner-table-td--user">
                                    <div class="user-avatar-wrapper">
                                        <img
                                            src="/img/noavatar.svg"
                                            alt="Ava" class="user-avatar">
                                    </div>
                                    <div class="partner-table-td--user-info">
                                        <p class="partner-table-td--user-name"><?php echo e($lastUserRegistrationItem->telegram); ?></p>
                                        <p class="partner-table-td--user-id">ID: <?php echo e($lastUserRegistrationItem->id); ?></p>
                                    </div>
                                </td>
                                <td class="partner-table-td--regdate">
                                    <p class="partner-table-td--regdate-date"><?php echo e(date('d.m.Y', strtotime($lastUserRegistrationItem->created_at))); ?></p>
                                    <p class="partner-table-td--regdate-time"><?php echo e(date('H:i', strtotime($lastUserRegistrationItem->created_at))); ?></p>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.auction', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/laravelapp/resources/views/pages/about.blade.php ENDPATH**/ ?>