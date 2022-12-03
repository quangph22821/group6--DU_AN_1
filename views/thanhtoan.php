<div class="main_datphong">
    <link rel="stylesheet" href="./css/index.css">
    <div class="tin_chinh">
        <h1>Lotums Hotel & Resort</h1>
        <div class="aaa">
            <i class="fa-solid fa-phone"></i>
            <p class="cho">Đặt chỗ</p>
            <p>0917920648</p>
        </div>
        <div class="aaa">
            <i class="fa-solid fa-envelope"></i>
            <p class="cho">Email</p>
            <p>Lotums@webhotel.com</p>
        </div>
        <div class="aaa">
            <i class="fa-solid fa-location-dot" style="font-size: 35px;"></i>
            <p class="cho">Địa chỉ</p>
            <p>Số 3 Trịnh Văn Bô, Nam Từ Liêm, Hà Nội</p>
        </div>
    </div>
    <div class="datphong">
        <h1>Đặt phòng</h1>
        
        <form action="./index.php?act=xacnhan" method="POST">
            <?php 
                extract ($donhang)?>
                    <div class="timphong">
                        <label for="">Khách sạn</label><br>
                        <input type="text" value="Lotums Hotel & Resort" disabled>
                    </div>
                    <div class="timphong">
                        <input type="text"name="full_name" value= "<?= $full_name ?>">
                    </div>
                    <div class="timphong">
                        <input type="text" value= "<?= $address ?>">
                    </div>
                    <div class="timphong">
                        <input type="text" value= "<?= $telephone ?>">
                    </div>
                    <div class="timphong">
                        <input type="text" value= "<?= $email ?>">
                    </div>
                    <div class="timphong">
                        <label for="">Ngày vào</label><br>
                        <input type="date" name="checkin" require>
                    </div>
                    <div class="timphong">
                        <label for="">Ngày ra</label><br>
                        <input type="date" name="checkout" require>
                    </div>
                    <div class="timphong">
                        <label for="">Người lớn</label><br>
                        <input type="number" name="nguoi_lon" min="1" require>
                    </div>
                    <div class="timphong">
                        <label for="">Trẻ em</label><br>
                        <input type="number" name="tre_em" min="1" require>
                    </div>
           <div class="checktrong">
                <input type="submit" name="xacnhan" class="btn" value="Xác nhận thanh toán">
           </div>
           
        </form>
    </div>
</div>