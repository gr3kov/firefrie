<?php $__env->startPush('styles'); ?>
    <link href="<?php echo asset('css/settings.css'); ?>" rel="stylesheet">
<?php $__env->stopPush(); ?>

<?php $__env->startPush('scripts'); ?>
    <script src="<?php echo asset('js/settings.js'); ?>" type="text/javascript"></script>
    <script type="text/javascript">
        let urlAvatarChange = '<?php echo e(route('avatarChange')); ?>',
            csrfTokenAvatarChange = '<?php echo e(csrf_token()); ?>';
    </script>
    <script src="<?php echo asset('./js/jquery-3.6.2.min.js'); ?>" type="text/javascript"></script>
    <script src="<?php echo asset('js/swiper-bundle.min.js'); ?>" type="text/javascript"></script>
    <script src="<?php echo asset('./js/itc__slider.js'); ?>" type="text/javascript"></script>
    <script src="<?php echo asset('./js/jquery-ui.min.js'); ?>" type="text/javascript"></script>
    <script src="<?php echo asset('./js/script.js'); ?>" type="text/javascript"></script>
    <script src="<?php echo asset('./js/slick.min.js'); ?>" type="text/javascript"></script>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
    <section class="page" id="settings">
        <h1 class="page__heading"><?php echo e($title); ?></h1>

        <?php echo e($errors->first('lastname')); ?>


        
        

        <form action="<?php echo e(route('settings')); ?>" method="post" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <article class="row1">
                <div class="row1__col1 row__col">
                    <h3 class="settings-heading">Личные данные</h3>
                    <div class="line-separator"></div>
                    <ul class="settings-userdata">
                        <li class="settings-userdata-row <?php if($errors->has('firstname')): ?> error <?php endif; ?>">
                            <div class="settings-userdata-item">
                                <div class="settings-userdata-item__title">
                                    <h3 class="settings-userdata-item__label">Имя</h3>
                                </div>
                                <div class="settings-userdata-item__wrapper">
                                    <div class="settings-input_non-icon">
                                        <input
                                            class="settings-input_non-icon"
                                            type="text"
                                            id="settings-userdata--firstname"
                                            name="firstname"
                                            <?php if($user->firstname): ?> value="<?php echo e($user->firstname); ?>"
                                            <?php else: ?> value="<?php echo e(old('firstname')); ?>" <?php endif; ?>
                                        />
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="settings-userdata-row">
                            <div class="settings-userdata-item">
                                <div class="settings-userdata-item__title">
                                    <h3 class="settings-userdata-item__label">
                                        Instagram
                                    </h3>
                                    <span class="status-label is-disabled"
                                    >Не подтвержден</span
                                    >
                                </div>
                                <div class="settings-userdata-item__wrapper">
                                    <div class="settings-userdata-item__input">
                                        <img
                                            src="./img/icons/instagram_placeholder.svg"
                                            alt=""
                                        />
                                        <input
                                            class="settings-input"
                                            type="text"
                                            id="settings-userdata--instagram" placeholder=""
                                            name="instagram"
                                            <?php if($user->instagram): ?> value="<?php echo e($user->instagram); ?>" <?php endif; ?>
                                        />
                                    </div>
                                    <button id="add-instagram-btn" type="button">
                                        Подтвердить
                                    </button>
                                </div>
                            </div>
                        </li>
                        <li class="settings-userdata-row <?php if($errors->has('lastname')): ?> error <?php endif; ?>">
                            <div class="settings-userdata-item">
                                <div class="settings-userdata-item__title">
                                    <h3 class="settings-userdata-item__label">Фамилия</h3>
                                </div>
                                <div class="settings-userdata-item__wrapper">
                                    <div class="settings-input_non-icon">
                                        <input
                                            class="settings-input_non-icon"
                                            type="text"
                                            id="settings-userdata--lastname"
                                            name="lastname"
                                            <?php if($user->lastname): ?> value="<?php echo e($user->lastname); ?>"
                                            <?php else: ?> value="<?php echo e(old('lastname')); ?>" <?php endif; ?>
                                        />
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="settings-userdata-row <?php if($errors->has('phone')): ?> error <?php endif; ?>">
                            <div class="settings-userdata-item">
                                <div class="settings-userdata-item__title">
                                    <h3 class="settings-userdata-item__label">Телефон</h3>
                                    <span class="status-label is-enabled">Подтвержден</span
                                    >
                                </div>
                                <div class="settings-userdata-item__wrapper">
                                    <div class="settings-userdata-item__input">
                                        <input
                                            class="settings-input"
                                            type="text"
                                            name="phone"
                                            id="settings-userdata--phone"
                                            placeholder="+7" name="phone"
                                            <?php if($user->phone): ?> value="<?php echo e($user->phone); ?>"
                                            <?php else: ?> value="<?php echo e(old('phone')); ?>" <?php endif; ?>
                                        />
                                    </div>
                                    <button id="add-instagram-btn" type="button">
                                        Подтвердить
                                    </button>
                                </div>
                            </div>
                        </li>
                        <li class="settings-userdata-row <?php if($errors->has('patronymic')): ?> error <?php endif; ?>">
                            <div class="settings-userdata-item">
                                <div class="settings-userdata-item__title">
                                    <h3 class="settings-userdata-item__label">
                                        Отчество
                                    </h3>
                                </div>
                                <div class="settings-userdata-item__wrapper">
                                    <div class="settings-input_non-icon">
                                        <input
                                            class="settings-input_non-icon"
                                            type="text"
                                            id="settings-userdata--middletname"
                                            name="patronymic"
                                            <?php if($user->patronymic): ?> value="<?php echo e($user->patronymic); ?>"
                                            <?php else: ?> value="<?php echo e(old('patronymic')); ?>" <?php endif; ?>
                                        />
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="settings-userdata-row">
                            <div class="settings-userdata-item">
                                <div class="settings-userdata-item__title">
                                    <h3 class="settings-userdata-item__label">E-mail</h3>
                                    <?php if($user->confirmed == 0): ?>
                                        <span class="status-label is-disabled">Не подтвержден</span>
                                    <?php elseif($user->confirmed == 1): ?>
                                        <span class="status-label is-enabled">Подтверждён</span>
                                    <?php endif; ?>
                                </div>
                                <div class="settings-userdata-item__wrapper">
                                    <div class="settings-userdata-item__input">
                                        <input
                                            class="settings-input"
                                            type="text"
                                            id="settings-userdata--email"
                                            placeholder="email@example.com"
                                            name="email"
                                            <?php if($user->email): ?> value="<?php echo e($user->email); ?>" <?php endif; ?>
                                        />
                                    </div>
                                    <?php if($user->confirmed != 1): ?>
                                        <button id="add-instagram-btn" onclick="sendVerifyEmail()" type="button">
                                            Подтвердить
                                        </button>
                                    <?php endif; ?>
                                </div>

                            </div>






                        </li>
                    </ul>
                </div>
                <script>
                    function sendVerifyEmail() {
                        // URL where you want to send the POST request
                        const url = '<?php echo e(route("sendVerifyEmail")); ?>';

                        // Data to be sent in the request body (adjust accordingly)
                        const data = {
                            email: 'user@example.com',
                            // add more data as needed
                        };

                        // Fetch options for the POST request
                        const options = {
                            method: 'GET',
                            headers: {
                                'Content-Type': 'application/json', // specify the content type as JSON
                                // add any other headers if needed
                            },
                        };

                        // Perform the fetch POST request
                        fetch(url, options)
                            .then(response => {
                                if (!response.ok) {
                                    throw new Error('Network response was not ok');
                                }
                                return response.json(); // assuming the response is in JSON format
                            })
                            .then(data => {
                                // Handle the response data here
                                if (data.status === true) {
                                    toastr.success("Вам отправлена ссылка на электронную почту", 'Успех')
                                } else {
                                    toastr.error(data.message, 'Error')
                                }
                            })
                            .catch(function (error, message) {

                                toastr.error(error, 'Error');
                            });
                    }
                </script>

                <div class="row1__cols23">
                    <div class="row1__col2 row__col">
                        <div class="row1__col2-content">
                            <div class="user-avatar-wrapper">
                                <?php if($user->photo == null): ?>
                                    <img id="user-avatar" src="<?php echo e(asset("/img/avatar.png")); ?>" alt="Ava" class="user-avatar">
                                <?php else: ?>
                                    <img id="user-avatar" src="<?php echo e(asset("storage/" . $user->photo)); ?>" alt="Ava" class="user-avatar">
                                <?php endif; ?>
                            </div>
                            <a href="<?php echo e(route('avatarDelete')); ?>" class="row1__col2-text-delete">Удалить аватар</a>
                            <input type="file" name="photo" style="display: none" id="photo">
                        </div>
                        <button type="button" id="change-photo" class="gray-btn">Сменить аватар</button>
                        <script>
                            $(document).ready(function () {
                                $("#change-photo,#user-avatar").on('click', function () {
                                    $("#photo").click();
                                });

                                $("#photo").on('change', function () {
                                    // Получаем выбранный файл
                                    var input = this;
                                    var file = input.files[0];

                                    if (file) {
                                        // Читаем файл как Data URL
                                        var reader = new FileReader();
                                        reader.onload = function (e) {
                                            // Устанавливаем src изображения в Data URL
                                            $("#user-avatar").attr('src', e.target.result);
                                        };
                                        reader.readAsDataURL(file);
                                    }
                                });
                            });
                        </script>
                    </div>
                    <div class="telegram">
                        <div class="telegram__title">
                            <h3 class="settings-heading">Telegram</h3>
                            <span class="status-label is-disabled"
                            >Не подтвержден</span
                            >
                        </div>
                        <div class="telegram__wrapper <?php if($errors->has('telegram')): ?> error <?php endif; ?>">
                            <div class="telegram__input">
                                <img
                                    src="./img/icons/telegram_placeholder.svg"
                                    alt=""
                                />
                                <input
                                    class="settings-input"
                                    type="text"
                                    id="settings-userdata--telegram"
                                    name="telegram"
                                    <?php if($user->telegram): ?> value="<?php echo e($user->telegram); ?>"
                                    <?php else: ?> value="<?php echo e(old('telegram')); ?>" <?php endif; ?>
                                    placeholder="Telegram не подключен"
                                />
                            </div>
                            <button id="add-telegram-btn" type="button">
                                Подключить
                            </button>
                        </div>
                    </div>
                </div>
            </article>
            <article class="row2">
                <div class="row2__col1 row__col">
                    <h3 class="settings-heading">Адрес для доставки</h3>
                    <div class="line-separator"></div>
                    <ul class="settings-useradress">
                        <li class="settings-useradress-item form-item">
                            <label for="settings-useradress--region" class="settings-label">Регион</label>
                            <input class="settings-input" type="text" id="settings-useradress--region"
                                   name="delivery_region"
                                   <?php if($user->delivery_region): ?> value="<?php echo e($user->delivery_region); ?>" <?php endif; ?>>
                        </li>
                        <li class="settings-useradress-item form-item">
                            <label for="settings-useradress--city" class="settings-label">Город</label>
                            <input class="settings-input" type="text" id="settings-useradress--city"
                                   name="delivery_city"
                                   <?php if($user->delivery_city): ?> value="<?php echo e($user->delivery_city); ?>" <?php endif; ?>>
                        </li>
                        <li class="settings-useradress-item form-item">
                            <label for="settings-useradress--street" class="settings-label">Улица</label>
                            <input class="settings-input" type="text" id="settings-useradress--street"
                                   name="delivery_street"
                                   <?php if($user->delivery_street): ?> value="<?php echo e($user->delivery_street); ?>" <?php endif; ?>>
                        </li>
                        <li class="settings-useradress-item form-item">
                            <label for="settings-useradress--house" class="settings-label">Дом</label>
                            <input class="settings-input" type="text" id="settings-useradress--house"
                                   name="delivery_house"
                                   <?php if($user->delivery_house): ?> value="<?php echo e($user->delivery_house); ?>" <?php endif; ?>>
                        </li>
                    </ul>
                    <div class="settings-useradress-item form-item"
                         style="flex-direction: row; align-items: center; margin: 15px 0 0;">
                        <label for="settings-useradress--index" class="settings-label" style="margin: 0 15px 0 0;">Индекс:</label>
                        <p id="settings-useradress--index" style="font-size: 12px;color: rgba(255, 255, 255, 0.4);
                                ">137521287</p>
                    </div>
                </div>
                <div class="row2__col2 row__col">
                    <h3 class="settings-heading">Уведомления</h3>
                    <div class="line-separator"></div>
                    <ul class="settings-usernotifications">
                        <li class="settings-usernotifications-item form-item <?php if($errors->has('news_notification')): ?> error <?php endif; ?>">
                            <input type="checkbox" id="settings-usernotifications--news" name="news_notification"
                                   <?php if($user->news_notification): ?> checked <?php endif; ?>>
                            <label for="settings-usernotifications--news" class="settings-label">Уведомлять о появлении
                                новинок</label>
                        </li>
                        <li class="settings-usernotifications-item form-item <?php if($errors->has('mailing')): ?> error <?php endif; ?>">
                            <input type="checkbox" id="settings-usernotifications--promo" name="mailing"
                                   <?php if($user->mailing): ?> checked <?php endif; ?>>
                            <label for="settings-usernotifications--promo" class="settings-label">Получать письма о
                                промо-акциях</label>
                        </li>
                    </ul>
                </div>
            </article>
            <article class="row3">
                <div class="row3__col1 row3__col row__col">
                    <div class="row3__col__block1">
                        <div class="row3__col__img">
                            <img src="/img/icons/creditcard.svg" alt="">
                        </div>
                        <div class="row3__col__text">
                            <p class="row3__col__key">Карта для вывода</p>
                            <p class="row3__col__value"></p>
                        </div>
                        <div class="status-label is-disabled">Не задана</div>
                    </div>
                    <div class="row3__col__block2">
                        <button class="gray-btn row3__col__gray-btn" for="cardchange">Подключить</button>
                    </div>
                </div>
                <div class="row3__col2 row3__col row__col">
                    <div class="row3__col__block1">
                        <div class="row3__col__img">
                            <img src="/img/icons/country.svg" alt="">
                        </div>
                        <div class="row3__col__text">
                            <p class="row3__col__key">Страна</p>
                            <p class="row3__col__value user-country-value">Российская федерация</p>
                        </div>
                        <select class="user-country-select">
                            <option value="russia" class="user-country-option">Российская федерация</option>
                            <option value="iran" class="user-country-option">Иран</option>
                            <option value="afghanistan" class="user-country-option">Афганистан</option>
                            <option value="syria" class="user-country-option">Сирия</option>
                            <option value="serbia" class="user-country-option">Сербия</option>
                            <option value="northkorea" class="user-country-option">Северная Корея</option>
                        </select>
                    </div>
                    <div class="row3__col__block2">
                        <div class="line-separator"></div>
                        <p class="system-msg">Страна была установлена автоматически
                        </p>
                    </div>
                </div>
                <div class="row3__col3 row3__col row__col">
                    <div class="row3__col__block1">
                        <div class="row3__col__img">
                            <img src="/img/icons/password.svg" alt="">
                        </div>
                        <div class="row3__col__text">
                            <p class="row3__col__key">Пароль</p>
                            <p class="row3__col__value">******</p>
                        </div>
                    </div>
                    <div class="row3__col__block2">
                        <button class="gray-btn row3__col__gray-btn" for="passchange">Изменить</button>
                    </div>
                </div>
            </article>
            <input type="submit" class="submit-btn" style="margin-bottom: 50px" value="Сохранить">
        </form>
    </section>

    <div class="settings-passchange-modal-wrapper modal-wrapper">
        <form class="settings-passchange-modal modal" id="passchange" action="#">
            <h3 class="settings-heading">Смена пароля</h3>
            <div class="line-separator"></div>
            <ul class="settings-passchange">
                <li class="settings-passchange-item form-item">
                    <label for="settings-passchange--oldpass" class="settings-label">Старый пароль</label>
                    <input class="settings-input" type="password" id="settings-passchange--oldpass">
                </li>
                <li class="settings-passchange-item form-item">
                    <label for="settings-passchange--newpass" class="settings-label">Новый пароль</label>
                    <input class="settings-input" type="password" id="settings-passchange--newpass">
                </li>
                <li class="settings-passchange-item form-item">
                    <label for="settings-passchange--repeatpass" class="settings-label">Повтор пароля</label>
                    <input class="settings-input" type="password" id="settings-passchange--repeatpass">
                </li>
            </ul>
            <p class="system-msg">Минимум 6 символов, не менее 1 цифры, хотя бы 1 символ с верхним регистром</p>
            <input type="submit" class="submit-btn" value="Сохранить">
        </form>
    </div>
    <div class="settings-cardchange-modal-wrapper modal-wrapper">
        <form class="settings-cardchange-modal modal" id="cardchange" action="#">
            <h3 class="settings-heading">Платёжные данные</h3>
            <div class="line-separator"></div>
            <ul class="settings-cardchange">
                <li class="settings-cardchange-item form-item">
                    <label for="settings-cardchange--cardnum" class="settings-label">Номер банковской
                        карты</label>
                    <input class="settings-input" type="text" id="settings-cardchange--cardnum">
                </li>
                <li class="settings-cardchange-item form-item">
                    <label for="settings-cardchange--cardexp" class="settings-label">EXP</label>
                    <input class="settings-input" type="text" id="settings-cardchange--cardexp"
                           placeholder="MM/YY">
                </li>
                <li class="settings-cardchange-item form-item">
                    <label for="settings-cardchange--cardname" class="settings-label">Имя владельца</label>
                    <input class="settings-input" type="text" id="settings-cardchange--cardname">
                </li>
            </ul>
            <input type="submit" class="submit-btn" value="Сохранить">
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.auction', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/laravelapp/resources/views/profile/settings.blade.php ENDPATH**/ ?>