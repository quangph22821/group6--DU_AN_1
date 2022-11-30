<!--  -->
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
        <?php
            if(isset($_SESSION['user_name'])){
                extract($_SESSION['user_name']);
            ?>
            <div class="chao">
                <h2 style="margin-bottom: 12px;">Xin chào <?= $name ?></h2>
            </div>
            <div class="chao">
                <?php 
                    if($role == 0){
                ?>
                <div class="ccc">
                <li><a href="./admin/index.php">Đăng nhập Admin</a></li>
                </div>
                <?php } ?>
                <div class="ccc">
                    <li><a href="./index.php?act=quenmatkhau">Quên mật khẩu</a></li>
                </div>
                <div class="ccc">
                    <li><a href="./index.php?act=suataikhoan&id=<?= $id ?>">Cập nhật tài khoản</a></li>
                </div>
               <div class="ccc">
                    <li><a href="./index.php?act=dangxuat">Đăng xuất</a></li>
               </div>
            </div>
            <style>
                .chao{
                list-style-type: none;
                display: grid;
                grid-template-columns: 1fr 1fr;
            }
            .chao li a{
                
                text-decoration: none;
                color: #fff;
                background-color: #AB8A62;
                margin-top: 12px;
            
            }
            .ccc{
                cursor:pointer;
                width: 70%;
                padding: 12px;
                text-align: center;
                height: 40px;
                border: none;
                background: #AB8A62;
                text-transform: uppercase;
                font-size: medium;
                color: #fff;
                margin-bottom: 12px;
                margin-top: 12px;
            }
            </style>
            <?php
                }else{

            ?>
            <h2>Đăng nhập</h2><br>
            <form action="./index.php?act=dangnhap" method="post">
                <div class="name">
                    <label for="">Tên đăng nhập</label><br>
<input type="text" name="user_name" placeholder="Tên đăng nhập*">
                </div>
                <div class="name">
                    <label for="">Password</label><br>
                    <input type="password" name="password" placeholder="Password*">
                </div>
                <div class="nhap">
                   <input  type="submit" name="dang_nhap" value="Đăng nhập" class="btn"  style=" cursor:pointer;">
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
                <div class="nhap">
                   <a href="./index.php?act=quenmatkhau"><input  name="dang_nhap" value="Quên mật khẩu" class="btn"  style=" cursor:pointer;"></a>
                </div>
                <div class="dangky">
                    <span>Bạn chưa có tài khoản ?<a href="./index.php?act=dangky">Đăng ký</a></span>
                </div>
            </form>
        </div>
    </div>
    <?php
                }?>
</main>
