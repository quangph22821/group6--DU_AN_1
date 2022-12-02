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
                <td>Thứ tụ</td>
                <td>Iduser</td>
                <td>Idphong</td>
                <td>Nội dung</td>
                <td>Ngày bình luận</td>
            </tr>

            <?php foreach ($listbinhluan as $binhluan => $bl): {
               
                
            }?>
            <tr>
                <td><?=$bl['id']?></td>
                <td><?=$bl['iduser']?></td>
                <td><?=$bl['idphong']?></td>
                <td><?=$bl['noidung']?></td>
                <td><?=$bl['ngaybinhluan']?></td>

            <td>  
                
                 <a href="?act=deletebl&id=<?=$bl['id']?>">Xóa</a>
              
            </td>
            </tr>
            <?php endforeach ?>
        </table>
     
</body>
</html>