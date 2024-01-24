<?php if(auth()->guard()->check()): ?>
    <div class="sidebar_bg"></div>
    <aside class="sidebar">
        <div class="sidebar__wrapper">
            <div class="logo">
                <a href="https://project8209146.tilda.ws" class="logo-img">
                    <img src="<?php echo e(asset("/img/new-logo.svg")); ?>" alt="">
                </a>
            </div>
            <nav>
                <ul class="sidebar__menu">
                    <?php $__currentLoopData = App\Helpers\SidebarMenuHelper::instance()->getMenu(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sidebarMenuItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if(isset($sidebarMenuItem['divider'])): ?>
                            <br/><br/>
                            <?php continue; ?>
                        <?php endif; ?>
                        <li>
                            <a href="<?php echo $sidebarMenuItem['url']; ?>"
                               class="sidebar__menu-item <?php if($sidebarMenuItem['unread']): ?> is-unread <?php endif; ?> <?php if($sidebarMenuItem['counter']): ?> is-hascounter <?php endif; ?> <?php if(url()->current() == $sidebarMenuItem['url']): ?> is-active <?php endif; ?>">
                                <div class="sidebar__menu-item-icon">
                                    <img src="<?php echo $sidebarMenuItem['imgPath']; ?>" alt="">
                                </div>
                                <?php echo e($sidebarMenuItem['title']); ?>

                                <?php if($sidebarMenuItem['unread']): ?>
                                    <div class="unread"></div> <?php endif; ?>
                                <?php if($sidebarMenuItem['counter']): ?>
                                    <div class="counter"><?php echo e($sidebarMenuItem['counter']); ?></div> <?php endif; ?>
                            </a>
                        </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <li>
                            <a href="<?php echo e(route('logout')); ?>" class="sidebar__menu-item" id="sidebar__menu-link--exit">
                                <div class="sidebar__menu-item-icon">
                                    <img src="/img/icons/exit.svg" alt="">
                                </div>
                                <span class="grey-text">Выход</span>
                            </a>
                        </li>
                </ul>
            </nav>

            <a class="sidebar__referal-btn" style="color: white" href="<?php echo e(route('referral')); ?>">
                <div class="sidebar__referal-btn-img">
                    <img src="/img/icons/nav/copy_link.svg" alt="">
                </div>
                Партнерская ссылка
            </a>

            <?php echo $__env->make('partial.sidebarinfo', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </aside>
<?php else: ?>
    <div class="sidebar_bg"></div>
    <aside class="sidebar">
        <div class="sidebar__wrapper">
            <div class="logo">
                <a href="https://project8209146.tilda.ws" class="logo-img">
                    <img src="/img/new-logo.svg" alt="">
                </a>
            </div>
            <div class="login__form-wrapper sidebar-login__form-wrapper">
                <form action="<?php echo e(route('login')); ?>"
                      class="login__form is-active" id="login"
                      method="post">
                    <?php echo $__env->make('partial.loginform', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </form>
            </div>
            <?php echo $__env->make('partial.sidebarinfo', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </aside>
<?php endif; ?>
<?php /**PATH /var/www/html/laravelapp/resources/views/partial/sidebar.blade.php ENDPATH**/ ?>