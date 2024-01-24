

<?php echo $__env->yieldPushContent('scripts'); ?>

<?php if(!PH_DEBUG): ?>
    <script src="https://7hd2-widget.happydesk.ru/widget.js" charset="utf-8"></script><script>Happydesk.initChat({clientId: 4322,server: 'https://7hd2-widget.happydesk.ru',host: 'roualauction.happydesk.ru' }, {page_url: window.location.href,user_agent: window.navigator.userAgent,language: 'ru'});</script>
<?php endif; ?>
<?php /**PATH /var/www/html/laravelapp/resources/views/partial/scripts.blade.php ENDPATH**/ ?>