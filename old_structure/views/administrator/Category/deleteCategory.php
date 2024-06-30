<? include_once ROOT . '/views/layouts/header_admin.php'; ?>
<div class="container">
    <h4>Вы действительно хотите удалить категорию?</h4>
    <h2>#<? echo $id; ?> <? echo $category['name']; ?></h2>
    <form method="POST">
        <input type="submit" class="btn btn-danger btn-lg" name="submit" value="Да, удалить">
    <div class="d-inline-block ">
        <a href="/admin/category" class="btn btn-success btn-lg">Я передумал</a>
    </div>
    </form>
    
</div>

<? include_once ROOT . '/views/layouts/footer_admin.php'; ?>