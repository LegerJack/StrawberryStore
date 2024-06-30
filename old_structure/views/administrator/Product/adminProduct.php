<? include_once ROOT . '/views/layouts/header_admin.php'; ?>
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/admin">Главная</a></li>
            <li class="breadcrumb-item active">Упарвление товарами</li>
        </ol>
    </nav>
    <a href="/admin" type="button" class="btn btn-danger">Назад</a>
    <a href="product/create" type="button" class="btn btn-success"><b>+</b>Добавить товар</a>
    <h4>Список товаров</h4>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Артикул</th>
                <th>Изображение</th>
                <th>Название товара</th>
                <th>Цена</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <? foreach ($productList as $product) : ?>
            <tr>
                <td><? echo $product['id']; ?></td>
                <td><? echo $product['code']; ?></td>
                <td><? echo $product['image']; ?></td>
                <td><? echo $product['name']; ?></td>
                <td><? echo $product['price']; ?> р</td>
                <td><a href="/admin/product/update/<? echo $product['id'] ?>"><i class="far fa-edit"></i></a></td>
                <td><a href="/admin/product/delete/<? echo $product['id'] ?>" class="close"><span aria-hidden="true">&times;</span></a></td>
            </tr>
        <? endforeach; ?>
    </table>
</div>

<? include_once ROOT . '/views/layouts/footer_admin.php'; ?>