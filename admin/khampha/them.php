<link rel="stylesheet" href="../css/index.css">
<div class="bao_quat">
        <div class="tieu_de">
            <h1>Thêm mới tin tức và sự kiện</h1>
        </div>
        <div class="chi_tiet_tin_tuc">
            <form action="index.php?act=addtintuc" METHOD="POST" enctype="multipart/form-data">
                <div class="col">
                    <label for=""class="labe">Tiêu đề</label><br>
                    <input type="text" name="tieu_de" placeholder="Tiêu đề" class="input">
                </div>
                
                <div class="col">
                    <label for="" class="labe">Ảnh</label><br>
                    <input type="file" name="hinh_anh" class="input">
                </div>
                <div class="col">
                    <label for=""  class="labe">Mô tả</label><br>
                    <input type="text" name="mo_ta" placeholder="Description" class="input">
                </div>
                <br>
                <div class="col">
                    <label for="" class="labe">Ngày nhập</label><br>
                    <input type="date" name="ngay_them" placeholder="Ngày nhập" class="input">
                </div>
                <div>
                    <input type="submit" name="add" class="abc">
                    <a href="index.php?act=tintuc">Danh sách</a>
                </div>
            </form>
        </div>
    </div>