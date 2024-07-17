<? include_once ROOT . '/views/layouts/header_admin.php'; ?>
<div class="container">
    <div class="row mt-3">
        <div class="d-inline-block">
            <a href="/admin/product" type="button" class="back_button">Назад</a>
        </div>
    </div>
    <div class="h3">Редактирование товара</div>
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
                    <label for="">Название товара</label>
                    <input type="text" name="name" class="form-control" value="<? echo $product['name'] ?>">
                </div>
                <div class="form-group">
                    <label for="">Код товара</label>
                    <input type="text" name="code" class="form-control" value="<? echo $product['code'] ?>">
                </div>
                <div class="form-group">
                    <label for="">Цена товара (Руб)</label>
                    <input type="text" name="price" class="form-control" value="<? echo $product['price'] ?>">
                </div>
                <div class="form-group">
                    <label for="">Категория товара</label>
                    <select name="category_id" class="form-control">
                        <? if (is_array($categorysList)) : ?>
                            <?php foreach ($categorysList as $categoryItem) : ?>
                                <option value="<? echo $categoryItem['id']; ?>" <? if ($product['category_id'] == $categoryItem['id']) echo ' selected="selected"'; ?>>
                                    <? echo $categoryItem['name']; ?>
                                </option>
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
                        <option value="1" <? if ($product['status'] == 1) echo ' selected = "selected"'; ?>>Отображается</option>
                        <option value="0" <? if ($product['status'] == 0) echo ' selected = "selected"'; ?>>Скрыт</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Новинка</label>
                    <select name="is_new" class="form-control">
                        <option value="1" <? if ($product['is_new'] == 1) echo ' selected = "selected"'; ?>>Да</option>
                        <option value="0" <? if ($product['is_new'] == 0) echo ' selected = "selected"'; ?>>Нет</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Рекомендуемое</label>
                    <select name="is_recommended" class="form-control">
                        <option value="1" <? if ($product['is_recommended'] == 1) echo ' selected = "selected"'; ?>>Да</option>
                        <option value="0" <? if ($product['is_recommended'] == 0) echo ' selected = "selected"'; ?>>Нет</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Хит продаж</label>
                    <select name="is_hot" class="form-control">
                        <option value="1" <? if ($product['is_hot'] == 1) echo ' selected = "selected"'; ?>>Да</option>
                        <option value="0" <? if ($product['is_hot'] == 0) echo ' selected = "selected"'; ?>>Нет</option>
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
                <input type="submit" name="submit" value="Сохранить" class="add_button">
            </div>
        </div>
    </form>
</div>
<? include_once ROOT . '/views/layouts/footer_admin.php'; ?>