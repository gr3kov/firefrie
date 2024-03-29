<?php $__env->startPush('styles'); ?>
    <link href="<?php echo asset('css/tactic.css'); ?>" rel="stylesheet">
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
    <section class="page" id="tactic">
        <h1 class="page__heading"><?php echo $title; ?></h1>
        <article class="row1">
            <div class="row__col">
                <p>Хотим поделиться с вами секретами победы в Flame auction и предлагаем изучить несколько
                    тактик, которые помогут вам выигрывать и покупать товары с выгодой до 99%.
                    <br><br>
                    По нашим правилам победителем аукциона становится тот участник, клик которого не был
                    перебит в течение таймера обратного отсчёта. Это значит, что должен наступить момент,
                    когда все остальные участники не сделают очередной клик.
                    Произойти это может по различным причинам, например, ваши оппоненты начнут экономить
                    свои клики или по какой-либо причине (сон, работа, звонок и т. д.) им придётся на время
                    уйти в оффлайн.
                    <br><br>
                    Итак, заранее запаситесь необходимым количеством кликов, изучите основные тактики
                    победы, выберите ту, которая вам больше подходит и выигрывайте:
                </p>
            </div>
        </article>
        <article class="row2">
            <div class="row2__col1 row__col">
                <h2>01</h2>
                <h3>Психологическая атака</h3>
                <p>
                    Ставьте так чтобы ваш профиль был каждым вторым в ленте сделанных ставок.
                    <br><br>
                    Секрет победы, при использовании данной тактики заключается в том, чтобы дать другим
                    участникам понять, что у вас в запасе имеется большое количество кликов, и каждый
                    сделанный ими клик будет перебит вами — это значительно увеличит вероятность того, что
                    наступит момент, когда другие пользователи начнут экономить свои клики, а ваш клик
                    станет победный.
                </p>
            </div>
            <div class="row2__col2 row__col">
                <h2>02</h2>
                <h3>ВЫМАТЫВАЮЩАЯ АТАКА</h3>
                <p>
                    Перебивайте только те клики, у которых до победы осталось 5 и менее секунд таймера
                    обратного отсчёта.
                    <br><br>
                    Данная тактика позволит вам сэкономить значительное количество кликов и в течение
                    длительного времени «выматывать» нервную систему ваших оппонентов, которые будут
                    потирать руки в предвкушении победы, но раз за разом их победа будет уходить от них в
                    самый последний момент — таким образом вы увеличите шанс дождаться момента, когда
                    остальные участники в целях экономии своих кликов одновременно решать не делать
                    очередной клик.
                </p>
            </div>
            <div class="row2__col3 row__col">
                <h2>03</h2>
                <h3>ИНТЕНСИВНЫЙ СТАРТ</h3>
                <p>
                    Сделайте упор на клики в первые часы после старта аукциона.
                    <br><br>
                    По статистике лот разыгрывается либо в первые несколько часов, либо на 2-3 сутки после
                    старта аукциона. Происходит это потому, что большинство участников стараются сохранить
                    свои клики на тот момент, когда они закончатся у других, именно поэтому на старте
                    аукциона вероятность победы значительно выше.
                </p>
            </div>
        </article>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.auction', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/laravelapp/resources/views/pages/tactics.blade.php ENDPATH**/ ?>