<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
	<?php echo $template->renderMeta($title); ?>

	<?php if(null !== ($favicon = config('sleeping_owl.favicon'))): ?>
		<link rel="icon" href="<?php echo e($favicon); ?>">
	<?php endif; ?>

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->

	<?php echo $__env->yieldPushContent('scripts'); ?>
</head>
<body class="<?php echo e(config('sleeping_owl.body_default_class', 'sidebar-mini sidebar-open') . (@$_COOKIE['sidebar-state'] == 'sidebar-collapse' ? ' sidebar-collapse' : '')); ?>">
	<?php echo $__env->yieldContent('content'); ?>
	<?php echo $__env->make(AdminTemplate::getViewPath('helper.scrolltotop'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

	<?php echo $template->meta()->renderScripts(true); ?>

	<?php echo $__env->yieldPushContent('footer-scripts'); ?>

	<?php echo $__env->make(AdminTemplate::getViewPath('helper.autoupdate'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
</html>
<?php /**PATH /var/www/html/laravelapp/vendor/laravelrus/sleepingowl/src/Providers/../../resources/views/default/_layout/base.blade.php ENDPATH**/ ?>