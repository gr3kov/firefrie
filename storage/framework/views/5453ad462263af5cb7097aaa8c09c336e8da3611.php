<div class="sidebar">
    <?php echo $__env->yieldPushContent('sidebar.top'); ?>

    <div class="brand">
      <a href="<?php echo e(url(config('sleeping_owl.url_prefix'))); ?>" class="brand-link">
        <span class="logo">
          <?php echo AdminTemplate::getLogo(); ?>

        </span>

        <span class="logo-mini">
          <?php echo AdminTemplate::getLogoMini(); ?>

        </span>

        <?php if(AdminTemplate::getMenuTop()): ?>
          <span class="brand-text font-weight-light">
            <?php echo AdminTemplate::getMenuTop(); ?>

          </span>
        <?php endif; ?>
      </a>
    </div>

    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <?php echo $__env->yieldPushContent('sidebar.ul.top'); ?>

            <?php echo $template->renderNavigation(); ?>


            <?php echo $__env->yieldPushContent('sidebar.ul.bottom'); ?>
        </ul>
    </nav>

    <?php echo $__env->yieldPushContent('sidebar.bottom'); ?>
</div>
<?php /**PATH /var/www/html/laravelapp/vendor/laravelrus/sleepingowl/src/Providers/../../resources/views/default/_partials/navigation.blade.php ENDPATH**/ ?>