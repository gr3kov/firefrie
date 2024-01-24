<?php if($messages): ?>
    <div class="alert alert-success alert-message text-white">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>

        <i class="fas fa-check-circle fa-lg"></i> <?php echo $messages; ?>

    </div>

    <?php echo e(session()->forget('success_message')); ?>

<?php endif; ?>
<?php /**PATH C:\xampp_new\htdocs\laraauction.loc\vendor\laravelrus\sleepingowl\src\Providers/../../resources/views/default/_partials/messages/success.blade.php ENDPATH**/ ?>