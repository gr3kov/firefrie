<?php
  $tooltip = '';
  if (strlen (strip_tags($title)) > 15) {
    $tooltip = 'title="' . strip_tags($title) . '"';
  }
?>

<?php if($hasChild): ?>
  <li class="nav-item has-treeview <?php echo ($isActive) ? 'menu-open' : ''; ?>">
    <a href="#" class="nav-link" <?php echo $attributes; ?> <?php echo $tooltip; ?>>
      <?php echo $icon; ?>

      <p class="<?php echo e($icon ? 'ml-2':''); ?>">
        <?php echo $title; ?>

        <span class="pull-right-container">
          <?php if($badges->count() > 0): ?>
            <span class="sidebar-page-badges">
              <?php $__currentLoopData = $badges; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $badge): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php echo $badge->render(); ?>

              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </span>
          <?php endif; ?>
        </span>
        <i class="fas fa-angle-left right"></i>
      </p>
    </a>

    <ul class="nav nav-treeview">
      <?php $__currentLoopData = $pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php echo $page->render(); ?>

      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
  </li>
<?php else: ?>
  <li class="nav-item">
    <a href="<?php echo e($url); ?>" class="nav-link <?php echo ($isActive) ? 'active' : ''; ?>" <?php echo $attributes; ?> <?php echo $tooltip; ?>>
      <?php echo $icon; ?>

      <p class="<?php echo e($icon ? 'ml-2':''); ?>">
        <?php echo $title; ?>

        <?php if($badges->count() > 0): ?>
          <span class="pull-right-container">
            <span class="sidebar-page-badges">
              <?php $__currentLoopData = $badges; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $badge): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php echo $badge->render(); ?>

              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </span>
          </span>
        <?php endif; ?>
      </p>
    </a>
  </li>
<?php endif; ?>
<?php /**PATH /var/www/html/laravelapp/vendor/laravelrus/sleepingowl/src/Providers/../../resources/views/default/_partials/navigation/page.blade.php ENDPATH**/ ?>