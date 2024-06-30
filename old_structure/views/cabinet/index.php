<?php include ROOT . '/views/layouts/header.php'; ?>
<main class="upHead">
    <div class="container">
            <h1>Личный кабинет</h1>
            <h3><? echo $user['name'] . ' ' . $user['lastname']; ?></h3>
            <a href="cabinet/edit" class="redact">Редактировать данные</a>
    </div>
</main>
<?php include ROOT . '/views/layouts/footer.php' ?>