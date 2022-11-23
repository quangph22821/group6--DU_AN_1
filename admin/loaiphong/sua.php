<link rel="stylesheet" href="css/index.css">
<div class="update_lp" >
    <form action="index.php?act=sua&id=<?=$lp['id']?>" method='post'>

    <input type="hidden" name="id" value="<?=$lp['id']?>">

    <div class="form-group">
        <label for="">Tên loại phòng</label>
        <br>
        <input type="text" name="name_room"  value="<?= $lp['name_room']?>">
    </div>

    <div class="btn">
        <input type="submit" value="CẬP NHẬT" name="update">
          <input type="reset" value="NHẬP LẠI">
          <a href="index.php?act=danhsach"><input type="button" value="DANH SÁCH"></a>
    </div>


    </form>
</div>



