<?php if( ! empty($title)): ?>
	<div class="row">
		<div class="col-lg-12 pt-3">
			<?php echo $title; ?>

		</div>
	</div>
	<br />
<?php endif; ?>

<?php echo $__env->yieldContent('before.card'); ?>
<?php echo $__env->yieldContent('before.panel'); ?>

<div class="card card-default <?php echo $card_class; ?>">
	<div class="card-heading card-header">
		<?php if($creatable): ?>
			
			<a href="<?php echo e(url($createUrl)); ?>" class="btn btn-primary btn-create">
				<i class="fas fa-plus"></i> <?php echo e($newEntryButtonText); ?>

			</a>
		<?php endif; ?>

		<div class="pull-right block-actions">
			<?php echo $__env->yieldContent('card.heading.actions'); ?>
			<?php echo $__env->yieldContent('panel.heading.actions'); ?>

			<?php echo $__env->yieldContent('card.buttons'); ?>
			<?php echo $__env->yieldContent('panel.buttons'); ?>
		</div>

	    <?php echo $__env->yieldContent('card.heading'); ?>
    	<?php echo $__env->yieldContent('panel.heading'); ?>
	</div>

	<?php $__currentLoopData = $extensions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ext): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<?php echo $ext->render(); ?>

	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

	<?php echo $__env->yieldContent('card.footer'); ?>
	<?php echo $__env->yieldContent('panel.footer'); ?>
</div>

<?php echo $__env->yieldContent('after.card'); ?>
<?php echo $__env->yieldContent('after.panel'); ?>
<?php /**PATH /var/www/html/laravelapp/vendor/laravelrus/sleepingowl/src/Providers/../../resources/views/default/display/table.blade.php ENDPATH**/ ?>