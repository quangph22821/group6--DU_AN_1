
    <link rel="stylesheet" href="./css/chitiet.css">
    <div class="anh_phong">
    <?php extract($room_home) ?>
        <div class="anh">
            <img src="./upload/<?= $image ?>" alt="" width="80%" height="500px"></a>
        </div>
        <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
        </div>
        <script>
            let slideIndex = 0;
            showSlides();

            function showSlides() {
                let i;
                let slides = document.getElementsByClassName("anh");
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";
                }
                slideIndex++;
                if (slideIndex > slides.length) { slideIndex = 1 }
                slides[slideIndex - 1].style.display = "block";
                setTimeout(showSlides, 2000); // Change image every 2 seconds
            }
        </script>
    </div>
    <section class="main_content">
        <div class="mains">
            <h2><?= $room_name ?></h2>
            <p>
            <?= $description ?>
            </p>
            <div class="content">
                <div class="gio_vao">
                    <h3>Giờ vào</h3>
                    <li>Nhận phòng từ 9:00 sáng - bất kỳ lúc nào</li>
                    <li>Nhận phòng sớm tùy vào tình trạng phòng trống</li>
                </div>
                <div class="thanh_toan">
                    <h3>Thanh toán</h3>
                    <li>Trả phòng trước buổi trưa</li>
                    <li>Trả phòng cấp tốc</li>
                </div>
                
            </div>
            <div class="title">
                <h3>Hướng dẫn đăng ký</h3>
                <p>Du khách sẽ nhận được email 5 ngày trước khi đến hướng dẫn nhận phòng; Nhân viên lễ tân sẽ chào đón 
                    khách khi đến Để biết thêm chi tiết, vui lòng liên hệ với nơi nghỉ bằng thông tin trong xác nhận đặt phòng.
                </p>
            </div>
            <div class="title">
                <h3>Vật nuôi</h3>
                <p>Vật nuôi không được phép</p>
            </div>
            <div class="bookk">
                <a href="./index.php?act=timphongtrong&id=<?=$id?>"><input class="ddd" name="datphong" type="submit" value="Đặt phòng" style=" cursor: pointer; background-color: #AB8A62;
            width: 150px;
            font-size: 18px;
            height: 50px;
            margin-top: 12px;
            border: none;
            text-transform: uppercase;
            color: #fff;
            margin-bottom: 12px;"></a>
            </div>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
            <script>
                $(document).ready(function(){
                    $("#binhluan").load("./views/binhluanform.php", {idphong: <?=$id?>});
                });

            </script>

            <div class="row" id='binhluan'>

            </div>
        </div>
        <div class="tien_ich">
            <h2>Tiện ích</h2>
            <div class="system">
                <i class="fa-solid fa-wifi"></i>Wifi
            </div>
            <div class="system">
                <i class="fa-solid fa-people-group"></i>2-3 người
            </div>
            <div class="system">
                <i class="fa-solid fa-bed"></i>Giường đôi
            </div>
            <div class="system">
                <i class="fa-solid fa-tv"></i>Tivi
            </div>
            <div class="system">
                <i class="fa-solid fa-bath"></i>Bồn tắm
            </div>
            <div class="system">
                <i class="fa-solid fa-chart-area"></i>45m2
            </div>
            

        
        </div>

        
    </section>
