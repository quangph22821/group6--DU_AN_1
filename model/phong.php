<?php
function insert_phong($tenphong,$giaphong,$hinh,$mota,$idlp){
    $sql = "INSERT INTO room_type(room_name,price,image,description,ID_lp) VALUES ('$tenphong','$giaphong','$hinh','$mota','$idlp')";
    pdo_execute($sql);
}

function loadall_phong($kyw="",$idlp=0){
    $sql = "SELECT *FROM room_type where 1";
    if($kyw!=""){
        $sql.=" and room_name like '%".$kyw."%'";
    }
    if($idlp > 0){
        $sql.=" and ID_lp = '".$idlp."'";
    }
    $sql.=" order by id desc";
    $listphong = pdo_query($sql);
    return $listphong;
}

function delete_phong($id){
    $sql = "DELETE FROM room_type where id = '$id'";
    pdo_execute($sql);
}

function loadone_phong($id){
    $sql = "SELECT * FROM room_type where id = '$id'";
    $lp = pdo_query_one($sql);
    return $lp;
}
function update_phong($idlp,$tenphong,$giaphong,$filename,$mota,$id){
    if ($filename!="") 
        $sql="UPDATE room_type set ID_lp='".$idlp."',room_name='".$tenphong."',price='".$giaphong."',image='".$filename."',description='".$mota."' where id=".$id;
    else
    $sql="UPDATE room_type set ID_lp='".$idlp."',room_name='".$tenphong."',price='".$giaphong."',description='".$mota."' where id=".$id;
    pdo_execute($sql);
}
 function phong1($id){
$sql="SELECT * FROM room_type where id='$id'";
pdo_query_one($sql);
 }