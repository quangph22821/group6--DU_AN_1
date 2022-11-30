<?php
    function dang_ky($name, $address, $email, $telephone, $user_name, $password){
    $sql = "INSERT INTO user(name, address, email, telephone, user_name, password) VALUES ('$name', '$address', '$email', '$telephone', '$user_name', $password)";
    pdo_execute($sql);
}
function dang_nhap($user_name, $password){
    $sql = "SELECT * FROM user WHERE user_name = '".$user_name."' AND password = '".$password."'";
    $dn = pdo_query_one($sql);
    return $dn;
}
function loadall_taikhoan(){
    $sql = "SELECT * FROM user order by id ";
    $listaikhoan = pdo_query($sql);
    return $listaikhoan;
}
function delete_taikhoan($id){
    $sql = "DELETE FROM user where id = '$id'";
    pdo_execute($sql);
}
function check_email($email){
    $sql = "SELECT * FROM user WHERE email = '$email'";
    $kh = pdo_query_one($sql);
    return $kh;
}
function load_taikhoan($id){
    $sql = "SELECT * FROM user where id ='$id'";
    $taikhoan = pdo_query_one($sql);
    return $taikhoan;
}
function update_taikhoan($id, $name, $address, $email, $telephone, $user_name, $password){
    $sql = "UPDATE user SET name = '$name', address = '$address', email = '$email', telephone = '$telephone', user = '$user_name', password = '$password' where id = '$id'";
    pdo_execute($sql);
    
}