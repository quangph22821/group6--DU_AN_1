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
<div class="sua_phong">
            <div class="title">
                <h1>Cập Nhật Phòng</h1>
            </div>
            <div class="row">
            <form action="index.php?act=capnhat" method="post" enctype="multipart/form-data">
                <div class="col">
                <div class="form-group">
                    <label for="">Loại phòng</label>
                    <select name="ID_lp" >
                        
                        <?php
                        foreach($listloaiphong as $loaiphong){
                           
                            if($idlp==$loaiphong['id'])echo '<option value="'.$loaiphong['id'].' "'.$selected.'>'.$loaiphong['name_room'].'</option>';
                            else   echo '<option value="'.$loaiphong['id'].'">'.$loaiphong['name_room'].'</option>';
                        }
                        ?>
                        
                    </select>
                 
                    </div>
                </div>
                  
                    <div class="col">
                    <div class="form-group">
                    <label for="">Tên phòng</label>
                    <input type="text" name="room_name" value="<?=$phong['room_name']?>">
                    </div>
                    </div>
                   <div class="col">
                   <div class="form-group">
                   <label for="">Giá phòng</label>
                    <input type="number" name="price" value="<?=$phong['price']?>" >
                    </div>
                   </div>
                 <div class="col">   <div class="form-group">
                 <label for="">Hình phòng</label>
                    <input type="file" name="image" id="files"  multiple >
                    <img src="../upload/<?=$phong['image'] ?>" width="123" alt="">
                    </div></div>
                    <div class="col">
                    <div class="form-group">
                    <label for="">Mô tả</label>
                    <input  type="text" name="description"  style="width=200px" value="<?=$phong['description']?>">
                    </div>
                    </div>
                  
                    <div class="btn">
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