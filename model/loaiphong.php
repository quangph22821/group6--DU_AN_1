
<?php


function insert_loai_phong($name_room){
    $sql = "INSERT INTO room_gallary (name_room ) VALUES ('$name_room')";
    pdo_execute($sql);
}

function loadall_loaiphong(){
    $sql = "SELECT * FROM room_gallary order by id ";
    $listloaiphong = pdo_query($sql);
    return $listloaiphong;
}

function delete_loaiphong($id){
    $sql = "DELETE FROM room_gallary where id = '$id'";
    pdo_execute($sql);
}

function load_loaiphong($id){
    $sql = "SELECT * FROM room_gallary where id ='$id'";
    $lp = pdo_query_one($sql);
    return $lp;
}
function update_loaiphong($id, $name_room){
    $sql = "UPDATE room_gallary SET name = '$name_room' where id = '$id'";
    pdo_execute($sql);
}