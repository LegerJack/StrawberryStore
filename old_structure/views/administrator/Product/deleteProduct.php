<? include_once ROOT . '/views/layouts/header_admin.php'; ?>
<h2><? echo $id; ?> <? echo $product['name']; ?></h2>
<h4>Вы действительн охотите удалить товар?</h4>
<form method="POST">
    <input type="submit" name="submit" value="Да, удалить">
</form>
<? include_once ROOT . '/views/layouts/footer_admin.php'; ?>