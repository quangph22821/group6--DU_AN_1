<!-- 
// include_once "./model/connect.php";

$sql = "SELECT * FROM room_type ORDER BY id DESC";
//Chuẩn bị -->
<!-- $stmt = $connect->prepare($sql); -->
<!-- //Thực thi -->
<!-- $stmt->execute(); -->
<!-- //Lấy toàn bộ dữ liệu của bảng -->
<!-- $phong = $stmt->fetchAll(PDO::FETCH_ASSOC); -->


<div class="row">
    <div class="row fromtitle mb">
        <h1>Danh Sách Sản Phẩm</h1>
    </div>
    <form action="index.php?act=listphong" method="post">
        <input type="text" name="kyw">
        <select name="ID_lp">
            <option value="0" selected>Tất Cả</option>
            <?php
            foreach ($listloaiphong as $loaiphong) {
                extract($loaiphong);
                echo '<option value="' . $id . '">' . $name . '</option>';
            }
            ?>

        </select>
        <input type="submit" name="listok" value="GO">
    </form>
    <div class="row fromcontent">
        <div class="row mb10 fromdsloai">

            <table>
                <tr>

                    <th>Mã Phòng</th>
                    <th>Tên Phòng</th>
                    <th>Hình Phòng</th>
                    <th>Giá Phòng</th>
                    <th>Nội Dung</th>
                    <th>Chức Năng</th>
                </tr>
                <tbody>
                    <?php foreach ($listphong as $key => $value) : ?>
                        <tr>
                            <td><?=$value['id'] ?></td>
                            <td><?=$value['room_name'] ?></td>
                            <td>
                                <img src="../upload/<?=$value['image'] ?>" width="123" alt="">
                            </td>

                            <td><?=$value['price'] ?></td>
                            <td><?=$value['description'] ?></td>
                            <td>
                                <button class="btn btn-default"><a href="?act=suaphong&id=<?=$value['id'] ?>" >Sửa</a></button>
                                <button class="btn btn-danger"><a href="?act=xoaphong&id=<?=$value['id']?>" 
                                onclick="return confirm('Bạn Có Muốn Xóa Không?')">Xóa</a></button>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>


    </div>
</div>