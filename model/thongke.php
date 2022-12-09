<?php
    function loadall_thongke(){
        $sql= "select room_gallary.id as matk, room_gallary.name_room as tentk, count(room_type.id) as count_room, min(room_type.price) as minprice, max(room_type.price) as maxprice, avg(room_type.price) as avgprice";
        $sql.=" from room_type left join room_gallary on room_gallary.id = room_type.ID_lp";
        $sql.=" group by room_gallary.id order by room_gallary.id desc";
        $listtk =pdo_query($sql);
        return $listtk; 
    }

    function loadtk_doanhthu(){
        $sql = "select sum(total_price) as doanhthu from booking ";
        $sql.="group by doanhthu";
        $listdoanhthu = pdo_query($sql);
        return $listdoanhthu; 
    }
?>