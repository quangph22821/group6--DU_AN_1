
<link rel="stylesheet" href="./css/index.css">
    <main>
    <div class="main_sigin">
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
        <div class="signin">
            <h2>Quên mật khẩu</h2><br>
            <form action="./index.php?act=quenmatkhau" method="post">
                <div class="name">
                    <label for="">Email</label><br>
                    <input type="email" name="email" placeholder="Mời bạn nhập email để lấy lại mật khẩu: ">
                </div>
                <div class="nhap">
                   <input  type="submit" name="lay_mat_khau" value="Gửi" class="btn"  style=" cursor:pointer;">
                </div>
                <style>
                    .nhap .btn{
                        width: 25%;
                        height: 40px;
                        margin-left: 27%;
                        border: none;
                        background: #AB8A62;
                        text-transform: uppercase;
                        font-size: medium;
                        color: #fff;
                        margin-bottom: 12px;
                    }
                </style>
                <div class="dangky">
                    <span>Bạn chưa có tài khoản ?<a href="./index.php?act=dangky">Đăng ký</a></span>
                </div>
            </form>
        </div>
    </div>
</main>
