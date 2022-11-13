<?php
$connect = mysqli_connect('localhost', 'root', '', 'registration');
if(!$connect){
    die('Error to connect to database');
}