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
        <h1>Thanh toán</h1>
        
        <form action="./index.php?act=thanhtoan_thanhcong" method="POST">
            <div class="timphong">
                <label for="">Khách sạn</label><br>
                <input type="text" value="Lotums Hotel & Resort" disabled>
            </div>
            <div class="timphong">
                <label for="">Tên khách hàng</label><br>
                <input type="text" value= "<?= $full_name ?>" disabled>
            </div>
            <div class="timphong">
                <label for="">Địa chỉ</label><br>
                <input type="text" value= "<?= $address ?>" disabled>
            </div>
            <div class="timphong">
                <label for="">Số điện thoại</label><br>
                <input type="text" value= "<?= $telephone ?>" disabled>
            </div>
            <div class="timphong">
                <label for="">Email</label><br>
                <input type="text" value= "<?= $email ?>" disabled>
            </div>
            <div class="timphong">
                <label for="">Ngày vào</label><br>
                <input type="text" name="checkin" value = "<?= $checkin ?>" disabled>
            </div>
            <div class="timphong">
                <label for="">Ngày ra</label><br>
                <input type="text" name="checkout" value = "<?= $checkout?>" disabled>
            </div>
            <div class="timphong">
                <label for="">Người lớn</label><br>
                <input type="number" name="nguoi_lon" min="1" value = "<?= $nguoi_lon ?>" disabled>
            </div>
            <div class="timphong">
                <label for="">Trẻ em</label><br>
                <input type="number" name="tre_em" min="1" value = "<?= $tre_em?>" disabled>
            </div>
            <div class="timphong">
                <label for="">Tổng tiền</label><br>
                <input type="number" name="total_price" value = "<?= $total_price?>" disabled>
            </div>
            <div class="timphong">
                <label for="">Phương thức thanh toán</label><br>
                <input type="radio">Thanh toán tiền mặt
                <input type="radio">Chuyển khoản ngân hàng
            </div>
           <div class="checktrong">
                <input type="submit" name="thanhcong" class="btn" value="Thanh toán">
           </div>
           
        </form>
    </div>
</div>