<?php
function load_tin_tuc(){
    $sql = "SELECT * FROM tin_tuc order by id ";
    $list_tin_tuc = pdo_query($sql);
    return $list_tin_tuc;
}
function load_one_tin_tuc($id){
    $sql = "SELECT * FROM tin_tuc WHERE id ='$id'";
    $chi_tiet_mot_tin_tuc = pdo_query_one($sql);
    return $chi_tiet_mot_tin_tuc;
}
function insert_tin_tuc($tieu_de,$mo_ta,$hinh_anh,$ngay_them){
    $sql = "INSERT INTO tin_tuc (tieu_de,mo_ta,hinh_anh,ngay_them) VALUES ('$tieu_de','$mo_ta','$hinh_anh','$ngay_them')";
    pdo_execute($sql);
}
function update_tin_tuc($id,$tieu_de,$mo_ta,$hinh_anh,$ngay_them){
    $sql = "UPDATE tin_tuc SET tieu_de='$tieu_de',mo_ta='$mo_ta',hinh_anh='$hinh_anh',ngay_them='$ngay_them' where id = '$id'";
    pdo_execute($sql);
    
}
function delete_tin_tuc($id){
    $sql = "DELETE FROM tin_tuc where id = '$id'";
    pdo_execute($sql);
}
?>