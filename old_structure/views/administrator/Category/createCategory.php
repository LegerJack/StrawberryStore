<? include_once ROOT . '/views/layouts/header_admin.php'; ?>
<div class="container">
    <div class="row mt-3 mb-3">
        <div class="d-inline-block">
            <a href="/admin/category" type="button" class="back_button">Назад</a>
        </div>
    </div>
    <div class="h3">Добавление новой категории</div>
    <?php if (isset($errors) && is_array($errors)) : ?>
        <ul>
            <? foreach ($errors as $error) : ?>
                <li> - <? echo $error ?></li>
            <? endforeach; ?>
        </ul>
    <? endif; ?>
    <form action="" method="POST">
        <div class="row">
            <div class="col-md-6 col-lg-6">
                <div class="form-group">
                    <label for="">Название категории</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Порядковый номер</label>
                    <input type="text" name="sort_order" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Статус</label>
                    <select name="status" class="form-control">
                        <option value="1">Отображается</option>
                        <option value="0" 3>Скрыт</option>
                    </select>
                </div>
                <div class="col center">
                    <input type="submit" name="submit" value="Сохранить" class="add_button">
                </div>
            </div>
    </form>
</div>
<? include_once ROOT . '/views/layouts/footer_admin.php'; ?>