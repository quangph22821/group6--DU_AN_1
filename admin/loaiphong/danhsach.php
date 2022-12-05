
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
                <td>Tên loại</td>
                <td>Hành động</td>
            </tr>

            <?php foreach ($listloaiphong as $key => $value): {
                
            }?>
            <tr>
                <td><?=$value['id']?></td>
                <td><?=$value['name_room']?></td>
            <td>  
                
                 <a href="?act=delete&id=<?=$value['id']?>" style="text-decoration: none; color: #AB8A62; margi -right: 5px"><i class="fa-solid fa-trash"></i></a>
                 <a href="index.php?act=sua&id=<?=$value['id']?>"style="text-decoration: none; color: #AB8A62;"><i class="fa-solid fa-wrench"></i></a>
            </td>
            </tr>
            <?php endforeach ?>
        </table>
    </div>
</body>
</html>