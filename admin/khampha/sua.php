<div class="bao_quat">

        <div class="tieu_de">
            <h1>Thêm mới tin tức và sự kiện</h1>
        </div>
        <div class="chi_tiet_tin_tuc">
            <form action="index.php?act=edittintuc&id=<?= $tin_tuc['id']?>" METHOD="POST" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= $tin_tuc['id']?>" >
                <div class="col">
                    <label for=""class="labe">Tiêu đề</label><br>
                    <input type="text" name="tieu_de" value="<?= $tin_tuc['tieu_de']?>" class="input">
                </div>
                
                <div class="col">
                    <label for="" class="labe">Ảnh</label><br>
                    <input type="file" name="hinh_anh"  class="input">
                    <img src="../upload/<?= $tin_tuc['hinh_anh']?>" width="100px"  alt="">
                </div>
                <div class="col">
                    <label for=""  class="labe">Mô tả</label><br>
                    <input type="text" name="mo_ta" value="<?= $tin_tuc['mo_ta']?>" class="input">
                </div>
                <br>
                <div class="col">
                    <label for="" class="labe">Ngày nhập</label><br>
                    <input type="date" name="ngay_them" value="<?= $tin_tuc['ngay_them']?>" class="input">
                </div>
                <div>
                    <input type="submit" name="update" value="Cập nhật" class="abc">
                    <a href="index.php?act=tintuc">Danh sách</a>
                </div>
            </form>
        </div>

    </div>