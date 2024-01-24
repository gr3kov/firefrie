<?php if($messages): ?>
    <div class="alert alert-warning alert-message">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>

        <i class="fas fa-exclamation-triangle fa-lg"></i> <?php echo $messages; ?>

    </div>

    <?php echo e(session()->forget('warning_message')); ?>

<?php endif; ?>
<?php /**PATH /var/www/html/laravelapp/vendor/laravelrus/sleepingowl/src/Providers/../../resources/views/default/_partials/messages/warning.blade.php ENDPATH**/ ?>