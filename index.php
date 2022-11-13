<?php
session_start();

require_once 'config/connect.php';
$users = mysqli_query($connect, "SELECT * FROM users");
$users = mysqli_fetch_all($users);


if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: registration/login.php');
}
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: registration/login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<table>
    <tr>
        <th>id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <!-- <th>&#9972;</th> -->
        <th>&#9998;</th>
        <th>&#10006;</th>
    </tr>
    <?php
    foreach ($users as $item) {
        ?>
        <tr>
            <td><?= $item[0] ?></td>
            <td><?= $item[1] ?></td>
            <td><?= $item[2] ?></td>
            <td><?= $item[3] ?></td>
            <!-- <td><a href="product.php?id=<?= $item[0] ?>">Просмотр</a></td> -->
            <td><a href="update.php?id=<?= $item[0] ?>">Обновить</a></td>
            <td><a href="vendor/delete.php?id=<?= $item[0] ?>">Удалить</a></td>
        </tr>
        <?php
    }
    ?>

</table>
<h2>Додати нового користувача</h2>
<form action="vendor/create.php" method="post">
    <p>Ім'я</p>
    <input type="text" name="username">
    <p>Email</p>
    <textarea name="email"></textarea>
    <p>Телефон</p>
    <input type="text" name="phone_number">
    <button type="submit">Добавить</button>
</form>
<p><a href="index.php?logout='1'" style="color: red;">logout</a></p>
</body>
</html>