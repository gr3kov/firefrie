<?php $__env->startSection('content'); ?>
    <div class="wrapper" id="vueApp">
        <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
            <?php echo $__env->make(AdminTemplate::getViewPath('_partials.header'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </nav>

        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <?php echo $__env->make(AdminTemplate::getViewPath('_partials.navigation'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </aside>

        <div class="content-wrapper">

            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2 align-items-center">
                      <div class="col-sm-12">
                        <?php echo $template->renderBreadcrumbs($breadcrumbKey); ?>

                      </div>

                      <div class="col-sm-12">
                        <h1>
                          <?php echo $title; ?>

                        </h1>
                      </div>
                    </div>
                </div>
            </div>

            <div class="content body">
                <?php echo $__env->yieldPushContent('content.top'); ?>

                <?php echo $content; ?>


                <?php echo $__env->yieldPushContent('content.bottom'); ?>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make(AdminTemplate::getViewPath('_layout.base'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/laravelapp/vendor/laravelrus/sleepingowl/src/Providers/../../resources/views/default/_layout/inner.blade.php ENDPATH**/ ?>