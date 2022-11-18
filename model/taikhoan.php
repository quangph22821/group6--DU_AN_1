<?php
    function dang_ky($name, $address, $email, $telephone, $user_name, $password){
    $sql = "INSERT INTO user (name, address, email, telephone, user_name, password) VALUES ('$name', '$address', '$email', '$telephone', '$user_name', $password)";
    pdo_execute($sql);
}
    function dang_nhap($user_name, $password){
        $sql = "SELECT * FROM user WHERE user_name = '".$user_name."' AND password = '".$password."'";
        $dn = pdo_query_one($sql);
        return $dn;
    }