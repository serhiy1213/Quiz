<?php
require_once '../config/connect.php';

print_r($_POST);

$username = $_POST['username'];
$email= $_POST['email'];
$phone_number = $_POST['phone_number'];

mysqli_query($connect, "INSERT INTO users (username, email, phone_number, password) VALUES('$username', '$email', '$phone_number', 0)");



 header('Location: /goods/index.php');