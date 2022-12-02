<?php
    function insert_binhluan($noidung,$iduser,$idphong,$ngaybinhluan){
        $sql = "INSERT INTO binh_luan (noidung,iduser,idphong,ngaybinhluan) values('$noidung','$iduser','$idphong','$ngaybinhluan')";
        pdo_execute($sql);
    }

    function loadall_binhluan($idphong){
        $sql="select * from binh_luan where 1";
        if($idphong>0)
        $sql.=" AND idphong='".$idphong."'";
        $sql.=" order by id desc";
        $listbinhluan=pdo_query($sql);
        return $listbinhluan;
    }
    
    function delete_binhluan($id){
        $sql="delete from binh_luan where id=".$id;
        pdo_execute($sql);
    }
    
?>