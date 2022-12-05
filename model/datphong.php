<?php
function booking ($full_name, $telephone, $email, $address, $checkin, $checkout, $nguoi_lon, $tre_em, $total_price){
    $sql = "INSERT INTO booking (full_name, telephone, email, `address`, checkin, checkout, nguoi_lon, tre_em, total_price) 
    VALUES ('$full_name', '$telephone', '$email', '$address', '$checkin', '$checkout', '$nguoi_lon', '$tre_em' ,'$total_price')"; 
    pdo_execute($sql);
}
function loadall_donhang(){
    $sql = "SELECT * FROM booking order by id ";
    $listdonhang = pdo_query($sql);
    return $listdonhang;
}
function load_donhang($id){
    $sql = "SELECT * FROM booking where id = '$id'";
    $dh = pdo_query_one($sql);
    return $dh;
}
function delete_donhang($id){
    $sql = "DELETE FROM booking where id = '$id'";
    pdo_execute($sql);
}
