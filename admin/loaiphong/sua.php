
<form action="index.php?act=sua&id=<?=$value['id']?>" method='post'>
<?php
    foreach ($listloaiphong as $key => $value):    
?>
        <input type="hidden" name='id' >
        <div class="form-group">
            <label for="">Tên loại phòng</label>
            <br>
            <input type="text" name="name_room"  value='<?= $value['name_room']?>'>
        </div>

        <div class="btn">
            <input type="submit" value="CẬP NHẬT" name="sua">
            <input type="reset" value="NHẬP LẠI">
            <a href="index.php?act=danhsach"><input type="button" value="DANH SÁCH"></a>
        </div>
       
 </form>

<?php endforeach ?>
   
