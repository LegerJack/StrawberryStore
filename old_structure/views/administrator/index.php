<?php include ROOT . '/views/layouts/header_admin.php'; ?>
<main class="upHead">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active">Главная</li>               
            </ol>
        </nav>
        <h1>Hi admin!</h1>
        <ul class="list-group">
            <li class="list-group-item">
                <a href="admin/product">Управление товарами</a>
            </li>
            <li class="list-group-item">
                <a href="admin/category">Управление категориями</a>
            </li>
            <li class="list-group-item">
                <a href="admin/order">Управление заказами</a>
            </li>
        </ul>
    </div>
</main>
<?php include ROOT . '/views/layouts/footer_admin.php' ?>