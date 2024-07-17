<? include_once ROOT . '/views/layouts/header_admin.php'; ?>
<div class="container">
    <div class="row mt-3">
        <div class="d-inline-block">
            <a href="/admin/product" type="button" class="back_button">Назад</a>
        </div>
    </div>
    <div class="h3">Добавление нового товара</div>
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
                    <label for="">ID</label>
                    <input type="text" name="id" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Название товара</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Код товара</label>
                    <input type="text" name="code" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Цена товара (Руб)</label>
                    <input type="text" name="price" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Категория товара</label>
                    <select name="category_id" class="form-control">
                        <? if(is_array($categorysList)): ?>
                        <?php foreach ($categorysList as $categoryItem) : ?>
                            <option value="<? echo $categoryItem['id']; ?>"><? echo $categoryItem['name']; ?></option>
                        <? endforeach; ?>
                        <? endif; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Изображение товара</label>
                    <input type="file" name="image" class="form-control-file">
                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                <div class="form-group">
                    <label for="">Статус</label>
                    <select name="status" class="form-control">
                        <option value="1">Отображается</option>
                        <option value="0">Скрыт</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Новинка</label>
                    <select name="is_new" class="form-control">
                        <option value="1">Да</option>
                        <option value="0">Нет</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Рекомендуемое</label>
                    <select name="is_recommended" class="form-control">
                        <option value="1">Да</option>
                        <option value="0">Нет</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Хит продаж</label>
                    <select name="is_hot" class="form-control">
                        <option value="1">Да</option>
                        <option value="0">Нет</option>
                    </select>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="form-group">
                    <label for="">Описание</label>
                    <textarea type="text" name="discription" class="form-control" rows="5"></textarea>
                </div>
            </div>
            <div class="col center">
                <input type="submit" name="submit" value="Добавить" class="add_button">
            </div>
        </div>
    </form>
</div>
<? include_once ROOT . '/views/layouts/footer_admin.php' ?>