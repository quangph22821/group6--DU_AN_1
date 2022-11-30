<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table border='1'>
            <tr>
                <td>Iduser</td>
                <td>Idphong</td>
                <td>Nội dung</td>
                <td>Ngày bình luận</td>
            </tr>

            <?php foreach ($listbl as $key => $value): {
                
            }?>
            <tr>
                <td><?=$value['iduser']?></td>
                <td><?=$value['idphong']?></td>
                <td><?=$value['noidung']?></td>
                <td><?=$value['ngaybinhluan']?></td>
            <td>  
                
                 <a href="?act=deletebl&id=<?=$value['id']?>">Xóa</a>
              
            </td>
            </tr>
            <?php endforeach ?>
        </table>
</body>
</html>