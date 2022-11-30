<div class="add_phong">
    <div class="title">
        <h1>Thêm mới phòng</h1>
    </div>
    <form action="index.php?act=addlp" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="">Loại phòng</label>
                    <select name="ID_lp">
                        <?php
                        foreach ($listloaiphong as $loaiphong) {
                            extract($loaiphong);
                            echo '<option value="' . $id . '">' . $name_room . '</option>';
                        }
                        ?>


                    </select>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="">Tên Phòng</label>
                    <input type="text" name="room_name" placeholder="Tên Phòng">
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="">Giá Phòng</label>
                    <input type="number" name="price" min="0" value="0">
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="">Hình Ảnh</label>
                    <input type="file" name="image" placeholder="" multiple>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="">Mô Tả</label>
                    <textarea name="description" id="" cols="30" rows="10"></textarea>
                </div>
            </div>
        </div>
      <div class="btn">
      <input type="submit" name="themmoi" value="Thêm Mới">
        <input type="reset" value="Nhập Lại">
        <a href="index.php?act=listphong"> <input type="button" value="Danh Sách"></a>
      </div>
        <?php
        if (isset($thongbao) && ($thongbao != "")) echo $thongbao;
        ?>
    </form>
</div>