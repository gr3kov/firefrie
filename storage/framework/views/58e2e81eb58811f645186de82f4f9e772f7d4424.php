<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Главная</title>
        <link rel="stylesheet" href="<?php echo asset('/landing/css/style.min.css'); ?>">
    </head>
    <body>

        <?php echo $__env->yieldContent('content'); ?>

        <script src="<?php echo asset('/landing/js/libs.min.js'); ?>"></script>
        <script src="<?php echo asset('/landing/js/main.js'); ?>"></script>

    </body>
</html>
<?php /**PATH /var/www/html/laravelapp/resources/views/layouts/landing.blade.php ENDPATH**/ ?>