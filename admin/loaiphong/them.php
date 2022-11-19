<!-- Thêm loại phòng -->
<div class="add_loaiphong">
    <div class="text">
        <h1>Thêm mới loại phòng</h1>
    </div>
    <form action="index.php?act=them" method='post'>
        <div class="form-group">
            <label for="">Tên loại phòng</label>
            <br>
            <input type="text" name="name_room" id="" class='inp'>
        </div>

        <div class="btn">
            <input type="submit" value="THÊM MỚI" name="themmoi">
            <input type="reset" value="NHẬP LẠI">
            <a href="index.php?act=danhsach"><input type="button" value="DANH SÁCH"></a>
        </div>
    </form>
</div>
