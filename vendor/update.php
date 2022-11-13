<?php
require_once '../config/connect.php';

$id = $_POST['id'];
$username = $_POST['username'];
$email = $_POST['email'];
$phone_number = $_POST['phone_number'];

mysqli_query($connect, "UPDATE users SET username = '$username', email = '$email', phone_number = '$phone_number' WHERE users.id = '$id'");

header('Location: /goods/');