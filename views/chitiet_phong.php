
    <link rel="stylesheet" href="./css/chitiet.css">
    <div class="anh_phong">
        <div class="anh">
            <img src="./banner/bn8.jpg" style="height: 450px; width: 75%;">
        </div>

        <div class="anh">
            <img src="./banner/bn3.jpg" style="height: 450px; width: 75%">
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
            <h2>FAMILY ROOM</h2>
            <p>Family Room của chúng tôi được thiết kế tiện nghi và sang trọng với đầy đủ các ứng dụng cần thiết. 
                Kích thước phòng được tối ưu hóa, sử dụng tông màu kem nhẹ nhàng sang trọng mang đến cho bạn một 
                không gian thư giãn rộng rãi nhất. Bạn có thể thoải mái lựa chọn căn phòng với giường cỡ Queen hoặc 
                2 giường đơn tùy theo nhu cầu của mình mà không cần lo lắng về sự thoải mái của chất lượng giường.
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
            <div class="title">
                <h3>Trẻ em và giường phụ</h3>
                <p>Trẻ em được chào đón Trẻ em được ở miễn phí! Trẻ em được ở miễn phí khi sử dụng giường có sẵn;
                    trẻ em có thể không đủ điều kiện nhận bữa sáng miễn phí Có sẵn giường gấp / giường phụ với phụ phí $ 10 mỗi ngày.
                </p>
            </div>
            <div class="bookk">
                <a href=""><input class="ddd" type="submit" value="Đặt phòng" style=" cursor: pointer;
    background-color: #AB8A62;
    /* width: auto; */
    width: 150px;
    font-size: 18px;
    height: 50px;
    margin-top: 12px;
    border: none;
    text-transform: uppercase;
    color: #fff;"></a>
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