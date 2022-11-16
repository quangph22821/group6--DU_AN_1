
<form action="index.php?act=sua&id=<?=$value['id']?>" method='post'>

        <input type="hidden" name="id" value="<?=$lp['id']?>">

        <div class="form-group">
            <label for="">Tên loại phòng</label>
            <br>
            <input type="text" name="name_room"  value="<?= $lp['name_room']?>">
        </div>

        <div class="btn">
            <button type="submit" name="update">
                Cập nhật
            </button>
            <input type="reset" value="NHẬP LẠI">
            <a href="index.php?act=danhsach"><input type="button" value="DANH SÁCH"></a>
        </div>
        
   
 </form>


