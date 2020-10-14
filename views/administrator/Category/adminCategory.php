<? include_once ROOT . '/views/layouts/header_admin.php'; ?>
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/admin">Главная</a></li>
            <li class="breadcrumb-item active">Упарвление категориями</li>
        </ol>
    </nav>
    <a href="/admin" type="button" class="btn btn-danger">Назад</a>
    <a href="category/create" type="button" class="btn btn-success"><b>+</b>Добавить категорию</a>
    <h4>Список категорий</h4>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th>Id категории</th>
                <th>Название категории</th>
                <th>Порядковй номер</th>
                <th>Статус</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <? foreach ($categoryList as $category) : ?>
            <tr>
                <td><? echo $category['id']; ?></td>
                <td><? echo $category['name']; ?></td>
                <td><? echo $category['sort_order']; ?></td>
                <td><? echo $category['status']; ?></td>
                <td><a href="/admin/category/update/<? echo $category['id'] ?>"><i class="far fa-edit"></i></a></td>
                <td><a href="/admin/category/delete/<? echo $category['id'] ?>" class="close"><span aria-hidden="true">&times;</span></a></td>
            </tr>
        <? endforeach; ?>
    </table>
</div>
<? include_once ROOT . '/views/layouts/footer_admin.php'; ?>