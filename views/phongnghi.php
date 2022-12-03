<div class="main">
                <div class="main_3">
                    <h3>
                        Lotums Hotel & Resort
                    </h3>
                    <p>
                        Phòng & giá
                    </p>
                </div>
                <div class="products_1">
                <?php foreach ($listphong as $key => $value) : ?>
                    <div class="room">
                        <div class="img">
                            <a href="./index.php?act=chitietphong&id=<?=$value['id']?>"><img src="./upload/<?= $value['image'] ?>" alt="" width="380px" height="506.67px"></a>
                        </div>
                        <div class="book">
                            <a href="./index.php?act=timphongtrong"><button>Đặt phòng</button></a>
                        </div>
                        <div class="gia">

                            <p><?=$value['price'] ?>$</p>
                            <h6><?=$value['room_name']?></h6>

                            <hr style="color: white; height: 1px; margin-top: 12px;">
                            <div class="midle">
                                <h6>
                                    <i class="fa-solid fa-wifi"></i>
                                    <i class="fa-solid fa-bath"></i>
                                    <i class="fa-solid fa-tv"></i>
                                    <i class="fa-solid fa-bed"></i>
                                    <i class="fa-solid fa-people-group"></i>
                                    <a href="./index.php?act=chitietphong&id=<?=$value['id']?>">Chi tiết <i class="fa-solid fa-arrow-right"></i></a>
                                </h6>
                            </div>
                        </div>
                    </div>
                    <?php endforeach ?> 
                </div>
                <!-- <div class="products_2">
                    <div class="rooms">
                        <div class="img">
                            <a href=""><img src="./img/5.jpg" alt="" width="578px"></a>
                        </div>
                        <div class="books">
                            <a href=""><button>Đặt phòng</button></a>
                        </div>
                        <div class="gia_phong">
                            <p>300 / Đêm</p>
                            <h6>Deluxe Room</h6>
                            <hr style="color: white; height: 1px; margin-top: 12px;">
                            <div class="midle">
                                <h6>
                                    <i class="fa-solid fa-wifi"></i>
                                    <i class="fa-solid fa-bath"></i>
                                    <i class="fa-solid fa-tv"></i>
                                    <i class="fa-solid fa-bed"></i>
                                    <i class="fa-solid fa-people-group"></i>
                                    <a href="./index.php?act=chitietphong">Chi tiết <i class="fa-solid fa-arrow-right"></i></a>
                                </h6>
                            </div>
                        </div>
                    </div>
                    
                    </div> -->
            </div>
<!-- <div class="main">
    <div class="main_3">
        <h3>
            Lotums Hotel & Resort
        </h3>
        <p>
            Phòng & giá
        </p>
    </div>
    <div class="products_1">
        <div class="room">
            <div class="img">
                <a href=""><img src="./img/1-2.jpg" alt="" width="380px"></a>
            </div>
            <div class="book">
                <a href=""><button>Đặt phòng</button></a>
            </div>
            <div class="gia">

                <p>150 / Đêm</p>
                <h6>Junior Suite</h6>

                <hr style="color: white; height: 1px; margin-top: 12px;">
                <div class="midle">
                    <h6>
                        <i class="fa-solid fa-wifi"></i>
                        <i class="fa-solid fa-bath"></i>
                        <i class="fa-solid fa-tv"></i>
                        <i class="fa-solid fa-bed"></i>
                        <i class="fa-solid fa-people-group"></i>
                        <a href="./index.php?act=chitietphong">Chi tiết <i class="fa-solid fa-arrow-right"></i></a>
                    </h6>
                </div>
            </div>

        </div>
        <div class="room">
            <div class="img">
                <a href=""><img src="./img/2-1.jpg" alt="" width="380px" class="image"></a>
            </div>
            <div class="book">
                <a href=""><button>Đặt phòng</button></a>
            </div>
            <div class="gia">
                <p>200 / Đêm</p>
                <h6>Family Room</h6>
                <hr style="color: white; height: 1px; margin-top: 12px;">
                <div class="midle">

                    <h6>
                        <i class="fa-solid fa-wifi"></i>
                        <i class="fa-solid fa-bath"></i>
                        <i class="fa-solid fa-tv"></i>
                        <i class="fa-solid fa-bed"></i>
                        <i class="fa-solid fa-people-group"></i>
                        <a href="./index.php?act=chitietphong">Chi tiết <i class="fa-solid fa-arrow-right"></i></a>

                    </h6>
                </div>
            </div>
        </div>
        <div class="room">
            <div class="img">
                <a href=""><img src="./img/3.jpg" alt="" width="380px"></a>
            </div>
            <div class="book">
                <a href=""><button>Đặt phòng</button></a>
            </div>
            <div class="gia">
                <p>250 / Đêm</p>
                <h6>Double Room</h6>
                <hr style="color: white; height: 1px; margin-top: 12px;">
                <div class="midle">
                    
                    <h6>
                        <i class="fa-solid fa-wifi"></i>
                        <i class="fa-solid fa-bath"></i>
                        <i class="fa-solid fa-tv"></i>
                        <i class="fa-solid fa-bed"></i>
                        <i class="fa-solid fa-people-group"></i>
                        <a href="./index.php?act=chitietphong">Chi tiết <i class="fa-solid fa-arrow-right"></i></a>

                    </h6>
                </div>
            </div>
        </div>
    </div>
    <div class="products_1">
        <div class="room">
            <div class="img">
                <a href=""><img src="./img/1-2.jpg" alt="" width="380px"></a>
            </div>
            <div class="book">
                <a href=""><button>Đặt phòng</button></a>
            </div>
            <div class="gia">

                <p>150 / Đêm</p>
                <h6>Junior Suite</h6>

                <hr style="color: white; height: 1px; margin-top: 12px;">
                <div class="midle">
                    <h6>
                        <i class="fa-solid fa-wifi"></i>
                        <i class="fa-solid fa-bath"></i>
                        <i class="fa-solid fa-tv"></i>
                        <i class="fa-solid fa-bed"></i>
                        <i class="fa-solid fa-people-group"></i>
                        <a href="./index.php?act=chitietphong">Chi tiết <i class="fa-solid fa-arrow-right"></i></a>

                    </h6>
                </div>
            </div>

        </div>
        <div class="room">
            <div class="img">
                <a href=""><img src="./img/2-1.jpg" alt="" width="380px" class="image"></a>
            </div>
            <div class="book">
                <a href=""><button>Đặt phòng</button></a>
            </div>
            <div class="gia">
                <p>200 / Đêm</p>
                <h6>Family Room</h6>
                <hr style="color: white; height: 1px; margin-top: 12px;">
                <div class="midle">

                    <h6>
                        <i class="fa-solid fa-wifi"></i>
                        <i class="fa-solid fa-bath"></i>
                        <i class="fa-solid fa-tv"></i>
                        <i class="fa-solid fa-bed"></i>
                        <i class="fa-solid fa-people-group"></i>
                        <a href="./index.php?act=chitietphong">Chi tiết <i class="fa-solid fa-arrow-right"></i></a>
                    </h6>
                </div>
            </div>
        </div>
        <div class="room">
            <div class="img">
                <a href=""><img src="./img/3.jpg" alt="" width="380px"></a>
            </div>
            <div class="book">
                <a href=""><button>Đặt phòng</button></a>
            </div>
            <div class="gia">
                <p>250 / Đêm</p>
                <h6>Double Room</h6>
                <hr style="color: white; height: 1px; margin-top: 12px;">
                <div class="midle">
                    
                    <h6>
                        <i class="fa-solid fa-wifi"></i>
                        <i class="fa-solid fa-bath"></i>
                        <i class="fa-solid fa-tv"></i>
                        <i class="fa-solid fa-bed"></i>
                        <i class="fa-solid fa-people-group"></i>
                        <a href="./index.php?act=chitietphong">Chi tiết <i class="fa-solid fa-arrow-right"></i></a>
                    </h6>
                </div>
            </div>
        </div>
    </div>
</div> -->