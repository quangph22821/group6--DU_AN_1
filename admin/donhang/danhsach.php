
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách loại phòng</title>
</head>
<body>
    <a href="index.php?act=them" style=""><input type="button" value="Nhập thêm"></a>
    <div class="danh_sach" >
        <table border='1'>
            <tr>
                <td>Mã loại</td>
                <td>Tên khách hàng</td>
                <td>Số điện thoại</td>
                <td>Email</td>
                <td>Địa chỉ</td>
                <td>Tổng tiền</td>
                <td>Giờ vào</td>
                <td>Giờ ra</td>
                <td>Số người lớn</td>
                <td>Số trẻ em</td>
                <td>Trạng thái</td>
                <td>Chức năng</td>
            </tr>

            <?php foreach ($listdonhang  as $key => $value): ?>
            <tr>
                <td><?=$value['id']?></td>
                <td><?=$value['full_name']?></td>
                <td><?=$value['telephone']?></td>
                <td><?=$value['email']?></td>
                <td><?=$value['address']?></td>
                <td><?=$value['total_price']?></td>
                <td><?=$value['checkin']?></td>
                <td><?=$value['checkout']?></td>
                <td><?=$value['nguoi_lon']?></td>
                <td><?=$value['tre_em']?></td>
                <td><?=$value['trang_thai']?></td>
            <td>  
                
                 <a href="?act=delete&id=<?=$value['id']?>" style="text-decoration: none;">Xóa</a>
                 <a href="index.php?act=sua&id=<?=$value['id']?>"style="text-decoration: none;">Sửa</a>
            </td>
            </tr>
            <?php endforeach ?>
        </table>
    </div>
</body>
</html>