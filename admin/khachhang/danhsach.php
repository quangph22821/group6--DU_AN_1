<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách tài khoản</title>
    <link rel="stylesheet" href="../css/index.css">
</head>
<body>
    <div class="danh_sach">
        <table border='1'>
            <tr>
                <th>Mã tài khoản</th>
                <th>Tên tài khoản</th>
                <th>Địa chỉ</th>
                <th>Email</th>
                <th>Số điện thoại</th>
                <th>Tên đăng nhập</th>
                <th>Mật khẩu</th>
                <th>Vai trò</th>
                <th>Chức Năng</th>
            </tr>

            <?php foreach ($listtaikhoan as $key => $value): {

            }?>
            <tr>
                <td><?=$value['id']?></td>
                <td><?=$value['name']?></td>
                <td><?=$value['address']?></td>
                <td><?=$value['email']?></td>
                <td><?=$value['telephone']?></td>
                <td><?=$value['user_name']?></td>
                <td><?=$value['password']?></td>
                <td>
                <?php 
                    if($value['role']===0){
                        echo 'Quản trị viên';
                    }else{
                        echo 'Khách hàng';
                } ?>
                </td>
            <td>
                 <a href="./index.php?act=xoa_taikhoan&id=<?=$value['id']?>">Xóa</a>
                 <a href="index.php?act=sua&id=<?=$value['id']?>">Sửa</a>
            </td>
            </tr>
            <?php endforeach ?>
        </table>
    </div>
</body>
</html>