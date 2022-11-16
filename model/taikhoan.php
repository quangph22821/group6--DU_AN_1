<?php
    require_once('connect.php');
    function dang_ky($name, $address, $email, $telephone, $user_name, $password){
    $sql = "INSERT INTO user(name, address, email, telephone, user_name, password) VALUE ('$name', '$address', '$email', '$telephone', '$user_name', $password)";
    $statement = $connect -> prepare($sql);
    $statement -> execute();
}