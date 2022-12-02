<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>

<body>
    <div class="container">
        <header>
            <!-- Slideshow container -->
            <div class="slideshow-container">

                <!-- Full-width images with number and caption text -->
                <div class="mySlides fade">
                    <img src="../banner/bn2.jpg" style="height: 450px; width: 100%">
                </div>

                <div class="mySlides fade">
                    <img src="../banner/bn8.jpg" style="height: 450px; width: 100%;">
                </div>

                <div class="mySlides fade">
                    <img src="../banner/bn3.jpg" style="height: 450px; width: 100%">
                </div>

                <!-- Next and previous buttons -->
                <!-- <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a> -->
            </div>
            <br>

            <!-- The dots/circles -->
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
                    let slides = document.getElementsByClassName("mySlides");
                    for (i = 0; i < slides.length; i++) {
                        slides[i].style.display = "none";
                    }
                    slideIndex++;
                    if (slideIndex > slides.length) { slideIndex = 1 }
                    slides[slideIndex - 1].style.display = "block";
                    setTimeout(showSlides, 2000); // Change image every 2 seconds
                }
            </script>
            <div class="logo-menu">
                <div class="logo">
                    <a href=""><img src="../img/Navy & Gold Elegant Hotel & Resort Logo.png" alt="" width="200px"></a>
                </div>
                <div class="menu">
                    <nav>
                        <ul>
                            <li><a href="index.php">Trang chủ</a></li>
                            <li><a href="index.php?act=them">Loại phòng</a></li>
                            <li><a href="index.php?act=addlp">Phòng</a></li>
                            <li><a href="index.php?act=khachhang">Tài khoản</a></li>
                            <li><a href="index.php?act=binhluan">Bình luận</a></li>
                            <li><a href="index.php?act=thongke">Thống kê</a></li>
                            <li><a href="../index.php?act=dangnhap">Đăng nhập</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="booking">
                <button><a href="">Đặt phòng</a></button>
            </div>
        </header>