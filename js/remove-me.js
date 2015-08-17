$(document).ready(function(){
    $('body').append(
        '<div id="verstka" style="position: fixed; top: 60px; right: 0; background: #fff; border: 1px solid #cecece; box-shadow: 2px 3px 10px #808080; padding: 15px; z-index: 50000;"><span  id="close" style="cursor:pointer; border: 1px solid #cecece;">X</span> Страницы верстки:<br />' +
        '1. √ <a href="index.php">Главная</a><br />' +
        '2. √ <a href="faq.php">FAQ</a><br />' +
        '3. √ <a href="blog.php">Блог</a><br />' +
        '4. √ <a href="article.php">Статья</a><br />' +
        '7. √ <a href="news.php">Новости</a><br />' +
        '10. √ <a href="catalog.php">Каталог</a><br />' +
        '11. √ <a href="product.php">Каталог - товар</a><br />' +
        '12. √ <a href="catalog-categories.php">Каталог - подкатегории</a><br />' +
        '14. √ <a href="cart.php">Корзина</a><br />' +
        '16. √ <a href="catalog-filter.php">Сферы применения</a><br />' +
        '17. √ <a href="reviews.php">Отзывы</a><br />' +

        '<br />' +
        '</div>');
    $('#close').click(function(e) {
        $('#verstka').hide();
        e.preventDefault();
    });
});