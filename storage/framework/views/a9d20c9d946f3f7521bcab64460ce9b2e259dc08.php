<?php if($messages): ?>
    <div class="alert alert-info alert-message text-white">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>

        <i class="fas fa-info fa-lg"></i> <?php echo $messages; ?>

    </div>

    <?php echo e(session()->forget('info_message')); ?>

<?php endif; ?>
<?php /**PATH /var/www/html/laravelapp/vendor/laravelrus/sleepingowl/src/Providers/../../resources/views/default/_partials/messages/info.blade.php ENDPATH**/ ?>