<?php include_once('head.php'); ?>
    <body data-btn-up>

<?php include_once('header.php'); ?>
<?php include_once('alert-block.php'); ?>

    <div class="wrapper">
        <div class="main-content">
            <nav class="breadcrumbs">
                <ul>
                    <li><a href="#">Главная</a></li>
                    <li><span>Отзывы</span></li>
                </ul>
            </nav>
            <div class="row">
                <div class="main-content-main col-xs-12 col-sm-8 col-md-9 col-sm-push-4 col-md-push-3">
                    <h1 class="page-header">Отзывы</h1>

                    <div class="comments-block">
                        <div class="comments-block-list">
                            <div class="comments-block-list-item">
                                <article class="comments-block-list-item-text">
                                    <p>
                                        Пантовые ванны впервые попробовал в санатории «Россия», г. Белокуриха, куда был направлен на санаторное лечение. Изначально относился скептически к заверениям врачей санатория, но уже после нескольких дней приема стал ощущать себя на 20 лет моложе. Пантовые ванны впервые попробовал в санатории «Россия», г. Белокуриха, куда был направлен на санаторное лечение.
                                    </p>
                                </article>
                                <div class="comments-block-list-item-meta">
                                    <div class="comments-block-list-item-meta-avatar">
                                        <img src="images/tmp/user-1.jpg" alt="Александр Александрович">
                                    </div>
                                    <div class="comments-block-list-item-meta-bio">
                                        <div class="comments-block-list-item-meta-bio-name">Александр Александрович</div>
                                        <div class="comments-block-list-item-meta-bio-char">
                                            Сотрудник ООО «МДМ Банк» <br>
                                            20 лет, Москва
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="comments-block-list-item">
                                <article class="comments-block-list-item-text">
                                    <p>
                                        Пантовые ванны впервые попробовал в санатории «Россия», г. Белокуриха, куда был направлен на санаторное лечение. Изначально относился скептически к заверениям врачей санатория, но уже после нескольких дней приема стал ощущать себя на 20 лет моложе. Пантовые ванны впервые попробовал в санатории «Россия», г. Белокуриха, куда был направлен на санаторное лечение.
                                    </p>
                                </article>
                                <div class="comments-block-list-item-meta">
                                    <div class="comments-block-list-item-meta-avatar">
                                        <img src="images/tmp/user-4.jpg" alt="Ирина Александровна">
                                    </div>
                                    <div class="comments-block-list-item-meta-bio">
                                        <div class="comments-block-list-item-meta-bio-name">Ирина Александровна</div>
                                        <div class="comments-block-list-item-meta-bio-char">
                                            Управляющий партнер ООО «Арматрон» <br>
                                            26 лет, Новосибирск
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <nav class="text-center">
                            <ul class="paginator">
                                <li class="paginator-previous">
                                    <a href="#"><i class="fa fa-angle-left"></i></a>
                                </li>
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li class="paginator-next">
                                    <a href="#"><i class="fa fa-angle-right"></i></a>
                                </li>
                            </ul>
                        </nav>

                        <form action="#" method="POST" class="comments-block-form js-validate">
                            <div class="comments-block-form-title">Добавить отзыв</div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-6">
                                    <input type="text" name="name" required placeholder="Ваше имя">
                                </div>
                                <div class="col-xs-12 col-sm-6">
                                    <input type="email" name="email" required placeholder="Ваше email">
                                </div>
                                <div class="col-xs-12">
                                    <textarea name="review" cols="30" rows="10" placeholder="Текст отзыва"></textarea>
                                </div>
                                <div class="col-xs-12">
                                    <input type="submit" class="btn btn-success" value="Опубликовать">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <aside class="main-sidebar col-xs-12 col-sm-4 col-md-3 col-sm-pull-8 col-md-pull-9">
                    <div class="module menu-module">
                        <h3 class="module-title">Блог о здоровье человека</h3>

                        <ul>
                            <li>
                                <a href="#">Профилактика заболеваний</a>
                            </li>
                            <li class="active">
                                <a href="#">Человек и пантовые препараты</a>
                            </li>
                            <li>
                                <a href="#">Заголовок рубрики</a>
                            </li>
                            <li>
                                <a href="#">Человек и пантовые препараты</a>
                            </li>
                        </ul>
                    </div>

                    <div class="module social-module">
                        <h3 class="module-title">Присоединяйтесь!</h3>

                        <a href="#" class="social-module-icon"><img src="images/icon-googleplus.png" width="36" height="36" alt="Google+"></a>
                        <a href="#" class="social-module-icon"><img src="images/icon-linkedin.png" width="36" height="36" alt="LinkedIn"></a>
                        <a href="#" class="social-module-icon"><img src="images/icon-rss.png" width="36" height="36" alt="RSS"></a>
                        <a href="#" class="social-module-icon"><img src="images/icon-facebook.png" width="36" height="36" alt="Facebook"></a>
                    </div>
                </aside>
            </div>
        </div>
    </div>

<?php include_once('footer.php'); ?>