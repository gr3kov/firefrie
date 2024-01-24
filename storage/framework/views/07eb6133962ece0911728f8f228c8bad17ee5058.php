<?php $__env->startPush('styles'); ?>
    <link href="<?php echo asset('css//login.css'); ?>" rel="stylesheet">
    <link href="<?php echo asset('css/swiper-bundle.min.css'); ?>" rel="stylesheet">
<?php $__env->stopPush(); ?>

<?php $__env->startPush('scripts'); ?>
    <script src="<?php echo asset('js/login.js'); ?>" type="text/javascript"></script>
    <script src="<?php echo asset('js/swiper-bundle.min.js'); ?>" type="text/javascript"></script>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
    <section class="login__page">
        <?php echo $__env->make('partial.auth.slider', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="login__form-wrapper">
            <form action="<?php echo e(route('password.email')); ?>" class="login__form is-active" method="post">
                <?php echo csrf_field(); ?>
                <div class="login__form-heading">
                    <h1 class="login__form-title">Восстановить пароль</h1>
                    <p class="login__form-subtitle">
                        Есть аккаунт?
                        <a href="<?php echo e(route('login')); ?>" style="color: #ffa01c; font-size: 13px; margin-left: 15px;">Войти</a>
                    </p>
                </div>
                <ul class="login__form-items">
                    <li class="form-item">
                        <label for="email">E-mail</label>
                        <input type="email" id="email" name="email" value="<?php echo e(old('email')); ?>" <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> class="is-haserror" <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>>
                        <p class="system-msg">
                            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?> <br> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </p>
                    </li>
                </ul>
                <button class="submit-btn">Отправить ссылку для восстановления пароля</button>

                <?php if(session('status')): ?>
                    <div class="passwordrecovery-approved-text is-active">
                        <p style="margin-top: 15px; line-height: 1.2;"><?php echo e(session('status')); ?></p>
                    </div>
                <?php endif; ?>
            </form>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.auction', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/laravelapp/resources/views/auth/passwords/email.blade.php ENDPATH**/ ?>