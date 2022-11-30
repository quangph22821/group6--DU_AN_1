<div class="update_lp" style="">
    <form action="index.php?act=sua&id=<?=$lp['id']?>" method='post'>

    <input type="hidden" name="id" value="<?=$lp['id']?>">

    <div class="form-group">
        <label for="">Tên loại phòng</label>
        <br>
        <input type="text" name="name_room"  value="<?= $lp['name_room']?>">
    </div>

    <div class="btn">
      <input type="submit" value="Cập nhật" name="update">
        <input type="reset" value="NHẬP LẠI">
        <a href="index.php?act=danhsach"><input type="button" value="DANH SÁCH"></a>
    </div>

</form>

</div>
