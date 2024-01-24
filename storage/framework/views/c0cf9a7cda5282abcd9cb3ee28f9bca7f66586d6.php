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
            <?php if(Route::current()->getName() == 'register'): ?>
                <form action="<?php echo e(route('register')); ?>"
                      class="login__form<?php echo (Route::current()->getName() == 'register') ? ' is-active' : null; ?>"
                      id="registration" method="post">
                    <?php echo csrf_field(); ?>
                    <div class="login__form-heading">
                        <h1 class="login__form-title">Завести аккаунт</h1>

                    </div>
                    <ul class="login__form-items">
                        <li class="form-item">
                            <label for="registration--email">E-mail</label>
                            <input type="email" id="registration--email" name="email" placeholder="email@example.com"
                                   value="<?php echo e(old('email')); ?>" <?php $__errorArgs = ['email'];
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
                        <li class="form-item">
                            <label for="registration--phone">Номер телефона</label>
                            <input type="text" id="registration--phone" name="phone" placeholder="+7"
                                   value="<?php echo e(old('phone')); ?>"
                                   <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> class="is-haserror" <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>>
                            <p class="system-msg">
                                <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?> <br> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </p>
                        </li>
                        <li class="form-item">
                            <label for="registration--password">Пароль</label>
                            <input type="password" id="registration--password" name="password" <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            class="is-haserror" <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>>
                            <button class="login__password-show-btn"></button>
                            <p class="system-msg">Минимум 6 символов, не менее 1 цифры, хотя бы 1 символ с
                                верхним регистром</p>
                            <p class="system-msg">
                                <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?> <br> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </p>
                        </li>
                        <li class="form-item">
                            <label for="registration--promo">Промокод</label>
                            <input type="text" id="registration--promo" placeholder="Необязательный">
                        </li>
                        <li class="form-item login-terms">
                            <input type="checkbox" id="registration--terms" name="agreement"
                                   <?php echo e(old('agreement') == 'on' ? 'checked' : null); ?> <?php $__errorArgs = ['agreement'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            class="is-haserror"
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>>
                            <p class="system-msg">Я прочитал и согласен с&nbsp<a href="<?php echo route('agreement'); ?>">Условиями
                                    и
                                    положениями Flame auction</a></p>
                            <p class="system-msg">
                                <?php $__errorArgs = ['agreement'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?> <br> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                <?php if(isset($message)): ?>
                                    <?php echo $message; ?>

                                <?php endif; ?>
                            </p>
                        </li>
                    </ul>
                    <button class="submit-btn">Зарегистрироваться</button>

                    <div style="margin-top: 79px; text-align: center">
                        <p class="login__form-subtitle">
                            Уже есть аккаунт?
                        </p>
                        <a href="<?php echo e(route('login')); ?>" style="color: #ffa01c; font-size: 13px;">Войти</a>
                    </div>
                </form>
            <?php endif; ?>
            <?php if(Route::current()->getName() == 'login'): ?>
                <form action="<?php echo e(route('login')); ?>"
                      class="login__form<?php echo (Route::current()->getName() == 'login') ? ' is-active' : null; ?>" id="login"
                      method="post">
                    <?php echo $__env->make('partial.loginform', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </form>
            <?php endif; ?>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.auctionnsb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp_new\htdocs\laraauction.loc\resources\views/pages/auth.blade.php ENDPATH**/ ?>