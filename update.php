<?php
require_once 'config/connect.php';
$user_id = $_GET['id'];
$user = mysqli_query($connect, "SELECT * FROM users WHERE `id`='$user_id'");
$user = mysqli_fetch_assoc($user);
//print_r($product);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Редагування контакта</title>
</head>
<body>

<a href="/goods/">Головна</a>
<hr>

<h2>Обновить товар</h2>
<form action="vendor/update.php" method="post">
    <input type="hidden" name="id" value="<?= $user['id'] ?>">
    <p>Ім'я</p>
    <input type="text" name="username" value="<?= $user['username'] ?>">
    <p>Email</p>
    <input type="email" name="email" value="<?= $user['email'] ?>">
    <p>Номер телефону</p>
    <input type="text" name="phone_number" value="<?= $user['phone_number'] ?>">
    <button type="submit">Обновить</button>
</form>

</body>
</html>