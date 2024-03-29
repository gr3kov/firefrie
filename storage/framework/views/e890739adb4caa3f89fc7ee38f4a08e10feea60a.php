<ul class="nav navbar-nav ">
	<li class="nav-item">
		<a class="nav-link" data-widget="pushmenu"><i class="fas fa-bars"></i></a>
	</li>

	<?php if(config('sleeping_owl.state_datatables') || config('sleeping_owl.state_tabs') || config('sleeping_owl.state_filters')): ?>
		<li class="nav-item">
			<a class="nav-link" href="javascript:localStorage.clear()" data-toggle="tooltip" title="<?php echo e(trans('sleeping_owl::lang.button.clear')); ?> LocalStorage">
				<i class="fas fa-eraser"></i>
			</a>
		</li>
	<?php endif; ?>

	<?php echo $__env->yieldPushContent('navbar.left'); ?>

	<?php echo $__env->yieldPushContent('navbar'); ?>
</ul>

<ul class="navbar-nav ml-auto">
	<?php echo $__env->yieldPushContent('navbar.right'); ?>
</ul>
<?php /**PATH /var/www/html/laravelapp/vendor/laravelrus/sleepingowl/src/Providers/../../resources/views/default/_partials/header.blade.php ENDPATH**/ ?>