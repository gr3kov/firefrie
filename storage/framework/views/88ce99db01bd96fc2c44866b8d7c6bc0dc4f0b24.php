<div <?php echo $attributes; ?>>
	<?php if($visibled): ?>
		<?php if(!empty($value)): ?>
			<a href="<?php echo e($value); ?>" data-toggle="lightbox">
				<?php if($lazy): ?>
					<img class="thumbnail lazyload" src="<?php echo e(config('sleeping_owl.imageLazyLoadFile')); ?>" data-src="<?php echo e($value); ?>" width="<?php echo e($imageWidth); ?>">
				<?php else: ?>
					<img class="thumbnail" src="<?php echo e($value); ?>" width="<?php echo e($imageWidth); ?>">
				<?php endif; ?>
			</a>
		<?php endif; ?>
		<?php echo $append; ?>


		<?php if($small): ?>
			<small class="clearfix"><?php echo $small; ?></small>
		<?php endif; ?>
	<?php endif; ?>
</div>
<?php /**PATH /var/www/html/laravelapp/vendor/laravelrus/sleepingowl/src/Providers/../../resources/views/default/column/image.blade.php ENDPATH**/ ?>