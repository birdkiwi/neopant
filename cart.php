<?php include_once('head.php'); ?>
<body data-btn-up>

<?php include_once('header.php'); ?>
<?php include_once('alert-block.php'); ?>

<div class="wrapper">
    <div class="main-content">
        <nav class="breadcrumbs">
            <ul>
                <li><a href="#">Главная</a></li>
                <li><a href="#">Вся продукция</a></li>
                <li><span>Корзина</span></li>
            </ul>
        </nav>
        <div class="row">
            <div class="main-content-main col-xs-12">
                <h1 class="page-header">Корзина</h1>

                <div class="cart-block">
                    <div class="cart-block-heading hidden-xs">
                        <div class="row">
                            <div class="col-xs-5 text-center">Наименование</div>
                            <div class="col-xs-2 text-center">Цена за шт./руб.</div>
                            <div class="col-xs-2 text-center">Количество</div>
                            <div class="col-xs-3 text-center">Итоговая цена</div>
                        </div>
                    </div>
                    <div class="cart-block-item">
                        <div class="row">
                            <div class="col-xs-12 col-sm-5">
                                <div class="cart-block-item-image">
                                    <a href="#">
                                        <img src="images/tmp/product-1.jpg" alt="">
                                    </a>
                                </div>
                                <div class="cart-block-item-name">
                                    <a href="#">
                                        Пантовый гель Неопант-1 для физиопроцедур
                                    </a>

                                    <div class="visible-xs">
                                        <div class="cart-block-item-price">2 150 <span class="cart-block-item-price-currency">руб.</span></div>
                                        <div class="cart-block-item-quantity">
                                            <form action="#" method="POST">
                                                <div class="product-quantity-block">
                                                    <input type="text" value="8">
                                                    <div class="product-quantity-block-buttons">
                                                        <a href="#" class="product-quantity-block-buttons-plus"></a>
                                                        <a href="#" class="product-quantity-block-buttons-minus"></a>
                                                    </div>
                                                    шт.
                                                </div>
                                            </form>
                                        </div>

                                        <div class="cart-block-item-subtotal">
                                            5 200 <span class="cart-block-item-subtotal-currency">руб</span>

                                            <a href="#" class="cart-block-item-delete" title="Удалить товар">x</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-2 hidden-xs">
                                <div class="cart-block-item-price">2 150 <span class="cart-block-item-price-currency">руб.</span></div>
                            </div>
                            <div class="col-xs-2 hidden-xs">
                                <div class="cart-block-item-quantity">
                                    <form action="#" method="POST">
                                        <div class="product-quantity-block">
                                            <input type="text" value="8">
                                            <div class="product-quantity-block-buttons">
                                                <a href="#" class="product-quantity-block-buttons-plus"></a>
                                                <a href="#" class="product-quantity-block-buttons-minus"></a>
                                            </div>
                                            шт.
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-xs-3 hidden-xs">
                                <div class="cart-block-item-subtotal">
                                    5 200 <span class="cart-block-item-subtotal-currency">руб</span>

                                    <a href="#" class="cart-block-item-delete" title="Удалить товар">x</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="cart-block-total">
                        <span class="cart-block-total-desc">Стоимость заказа</span>
                        <span class="cart-block-total-price">
                            3 200 <span class="cart-block-total-price-currency">руб</span>
                        </span>
                    </div>

                    <div class="text-center">
                        <a href="#" class="btn btn-lg btn-success">Оформить заказ</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include_once('footer.php'); ?>
