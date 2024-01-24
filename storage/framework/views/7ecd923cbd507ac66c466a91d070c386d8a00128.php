<?php if($messages): ?>
    <div class="alert alert-error alert-danger alert-message text-white">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>

        <i class="fas fa-times fa-lg"></i> <?php echo $messages; ?>

    </div>

    <?php echo e(session()->forget('error_message')); ?>

<?php endif; ?>
<?php /**PATH /var/www/html/laravelapp/vendor/laravelrus/sleepingowl/src/Providers/../../resources/views/default/_partials/messages/error.blade.php ENDPATH**/ ?>