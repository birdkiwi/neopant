<div class="wrapper">
    <header class="main-header">
        <div class="clearfix">
            <div class="language-change-block js-languages">
                <span class="language-change-block-label">Язык:</span> <a href="#" class="language-change-block-language">Russian</a>
                <div class="language-change-block-list">
                    <ul>
                        <li><a href="#"><img src="images/flags/ru.png" alt="ru" width="16" height="16"> Русский</a></li>
                        <li><a href="#"><img src="images/flags/en.png" alt="en" width="16" height="16"> English</a></li>
                    </ul>
                </div>
            </div>
            <nav class="main-header-menu">
                <ul>
                    <li><a href="index.php">О компании</a></li>
                    <li class="active"><a href="mortgage.php">Отзывы</a></li>
                    <li><a href="news.php">Вопрос / Ответ</a></li>
                    <li><a href="#">Доставка и оплата</a></li>
                    <li><a href="#">Сотрудничество</a></li>
                    <li><a href="#">Оптовикам</a></li>
                    <li><a href="#">Контакты</a></li>
                </ul>
            </nav>
        </div>
        <div class="main-header-background">
            <div class="main-header-logo">
                <a href="#">
                    <img src="images/logo.png" width="316" height="157" alt="Неопант — Интернет-магазин пантовой продукции">
                </a>
            </div>
            <div class="main-header-slogan">
                <img src="images/header-slogan.png" width="425" height="84" alt="Здоровья и счастья вам и вашим близким!">
            </div>
        </div>
        <div class="main-header-bar">
            <div class="main-header-bar-left"></div>
            <div class="main-header-bar-bg">
                <form action="#" method="POST" class="main-header-bar-search">
                    <label for="search-field">Поиск по сайту:</label>
                    <div class="form-group">
                        <input type="text" class="form-control" id="search-field">
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </div>
                </form>
                <div class="main-header-bar-phone">
                    <a href="tel:+73833509603">+7 383 350-96-03</a>
                    <a href="#" class="main-header-bar-phone-callback">Заказать обратный звонок</a>
                </div>
                <div class="main-header-bar-user">
                    <a href="#">Вход</a>
                    <a href="#">Регистрация</a>
                </div>
                <a href="#" class="main-header-bar-cart">
                    Корзина <span class="main-header-bar-cart-quantity">(0)</span>
                </a>
            </div>
            <div class="main-header-bar-right"></div>
        </div>
        <nav class="main-header-catalog-menu">
            <ul>
                <li><a href="#"><span style="white-space: nowrap">Вся продукция</span></a></li>
                <li><a href="#">Лечебно-оздоровительная продукция</a></li>
                <li><a href="#">Косметика</a></li>
                <li><a href="#"><span style="white-space: nowrap">Парфюмерная продукция</span></a></li>
                <li><a href="#"><span style="white-space: nowrap">Напитки и бальзамы</span></a></li>
                <li><a href="#">Коррекция половой дисфункции</a></li>
            </ul>
        </nav>
    </header>

    <header class="main-header-mobile">
        <div class="main-header-mobile-languages">
            <ul>
                <li><a href="#">Русский</a></li>
                <li><a href="#">English</a></li>
                <li><a href="#">Español</a></li>
            </ul>
        </div>

        <div class="clearfix">
            <div class="main-header-logo-mobile">
                <a href="#">
                    <img src="images/logo-small.png" alt="Неопант" width="120">
                </a>
            </div>

            <div class="main-header-mobile-contacts">
                <a href="tel:+7 383 350-96-03">+7 383 350-96-03</a>
                <a href="#">Заказать обратный звонок</a>

                <div class="main-header-mobile-user">
                    <a href="#">Вход / Регистрация</a>
                </div>
            </div>
        </div>

        <div class="main-header-mobile-cart">
            <a href="#" class="main-header-bar-cart">
                Корзина <span class="main-header-bar-cart-quantity">(0)</span>
            </a>
        </div>

        <div class="main-header-mobile-menu">
            <a href="#" class="main-header-mobile-menu-link js-accordeon-menu">
                <span class="main-header-mobile-menu-desc">Меню магазина</span>
                <span class="main-header-menu-toggler"><i class="fa fa-bars"></i></span>
            </a>

            <ul>
                <li><a href="#">Главная</a></li>
                <li>
                    <a href="#">Продукция</a>
                    <ul>
                        <li><a href="#">Вся продукция</a></li>
                        <li><a href="#">Лечебно-оздоровительная продукция</a></li>
                        <li><a href="#">Косметика</a></li>
                        <li><a href="#">Парфюмерная продукция</a></li>
                        <li><a href="#">Напитки и бальзамы</a></li>
                        <li><a href="#">Коррекция половой дисфункции</a></li>
                    </ul>
                </li>
                <li><a href="#">О компании</a></li>
                <li><a href="#">Отзывы</a></li>
                <li><a href="#">Вопрос/ответ</a></li>
                <li><a href="#">Доставка и оплата</a></li>
                <li><a href="#">Сотрудничество</a></li>
                <li><a href="#">Оптовикам</a></li>
                <li><a href="#">Контакты</a></li>
            </ul>

            <form action="#" method="post" class="form-inline main-header-mobile-menu-search">
                <div class="input-group">
                    <input name="searchword" class="input-sm form-control" placeholder="Поиск..." type="search">
                    <div class="input-group-btn">
                        <button class="btn btn-success btn-sm" onclick="this.form.searchword.focus();"><i class="fa fa-search"></i></button>
                    </div>
                </div>
            </form>
        </div>
    </header>
</div>

<!--<div class="main-offcanvas">
    <div class="main-offcanvas-search">
        <form action="#" method="post" class="form-inline">
            <div class="input-group">
                <input name="searchword" class="input-sm form-control" placeholder="Поиск..." type="search">
                <div class="input-group-btn">
                    <button class="btn btn-success btn-sm" onclick="this.form.searchword.focus();"><i class="fa fa-search"></i></button>
                </div>
            </div>
        </form>
    </div>

    <div class="main-offcanvas-menu">
        <ul>
            <li><a href="#">Главная</a></li>
            <li>
                <a href="#">Продукция</a>
                <ul>
                    <li><a href="#">Вся продукция</a></li>
                    <li><a href="#">Лечебно-оздоровительная продукция</a></li>
                    <li><a href="#">Косметика</a></li>
                    <li><a href="#">Парфюмерная продукция</a></li>
                    <li><a href="#">Напитки и бальзамы</a></li>
                    <li><a href="#">Коррекция половой дисфункции</a></li>
                </ul>
            </li>
            <li><a href="#">О компании</a></li>
            <li><a href="#">Отзывы</a></li>
            <li><a href="#">Вопрос/ответ</a></li>
            <li><a href="#">Доставка и оплата</a></li>
            <li><a href="#">Сотрудничество</a></li>
            <li><a href="#">Оптовикам</a></li>
            <li><a href="#">Контакты</a></li>
        </ul>
    </div>
</div>-->