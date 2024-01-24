<!DOCTYPE html>
<html lang="ru">

    <head>
        <?php echo $__env->make('partial.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </head>

    <body>
        <div class="body__wrapper">
            <div class="body">
                <main class="login">
                    <header class="login__header">
                        <div class="logo">
                            <a href="https://project8209146.tilda.ws" class="logo-img">
                                <img src="./img/new-logo.svg" alt="">
                            </a>
                        </div>
                        <button id="login--language"></button>
                    </header>
                    <?php echo $__env->yieldContent('content'); ?>
                </main>
            </div>
        </div>
    </body>

    <?php echo $__env->make('partial.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</html>
<?php /**PATH /var/www/html/laravelapp/resources/views/layouts/auctionnsb.blade.php ENDPATH**/ ?>