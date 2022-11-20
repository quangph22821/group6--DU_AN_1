<?php
if (is_array($phong)) {
    extract($phong);
}
$hinhpath="../upload/";
if (is_file($hinhpath)) {
    $hinh="<img src='".$hinhpath."' height='80'>";
}else{
    $hinh=" không có hình";
}
?>
<div class="row">
            <div class="row fromtitle">
                <h1>Cập Nhật Phòng</h1>
            </div>
            <div class="row fromcontent">
            <form action="index.php?act=capnhat" method="post" enctype="multipart/form-data">
                    <div class="row mb10">
                    <select name="ID_lp" >
                        
                        <?php
                        foreach($listloaiphong as $loaiphong){
                           
                            if($idlp==$loaiphong['id'])echo '<option value="'.$loaiphong['id'].' "'.$selected.'>'.$loaiphong['name_room'].'</option>';
                            else   echo '<option value="'.$loaiphong['id'].'">'.$loaiphong['name_room'].'</option>';
                        }
                        ?>
                        
                    </select>
                 
                    </div>
                  
                    <div class="row mb10">
                        Tên Phòng<br>
                    <input type="text" name="room_name" value="<?=$phong['room_name']?>">
                    </div>
                    <div class="row mb10">
                        Giá Phòng<br>
                    <input type="number" name="price" value="<?=$phong['price']?>" >
                    </div>
                    <div class="row mb10">
                        Hình Phòng<br>
                    <input type="file" name="image" >
                    <?=$hinh?>
                    </div>
                    <div class="row mb10">
                        Mô Tả<br>
                    <textarea name="description"  cols="30" rows="10" value="<?=$phong['description']?>"></textarea>
                    </div>
                  
                    <div class="row mb10">
                        <input type="hidden" name="id" value="<?=$phong['id']?>">
                        <input type="submit"name="capnhat" value="Cập Nhật">
                        <input type="reset" value="Nhập Lại">
                       <a href="index.php?act=listphong"> <input type="button" value="Danh Sách"></a>
                    </div>
                   
                    <?php
                    if (isset($thongbao)&&($thongbao!="")) echo $thongbao;
                    ?>
                </form>
            </div>        
        </div>
        </div>