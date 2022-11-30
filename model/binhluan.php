<?php
    function insert_binhluan($noidung,$iduser,$idphong,$ngaybinhluan){
        $sql = "INSERT INTO binh_luan (noidung,iduser,idphong,ngaybinhluan) values('$noidung','$iduser','$idphong','$ngaybinhluan')";
        pdo_execute($sql);
    }

    function loadall_binhluan($idphong){
        $sql="select * from binh_luan where idphong='.$idphong.' order by id desc";
        $listbl=pdo_query($sql);
        return $listbl;
    }
    
?>