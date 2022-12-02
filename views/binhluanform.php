
<?php
    session_start();
    if (isset($_SESSION['user_name']) && ($_SESSION['user_name'] > 0)) {

    include "../model/connect.php";
    include "../model/binhluan.php";

    $idphong = $_REQUEST['idphong'];

    $listbinhluan = loadall_binhluan($idphong);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <div class="binhluan">
                <h1 class="test">BÌNH LUẬN</h1>

                <div class="table_bl" style="width: 100%;">

                        <table>
                            <tr>
                                <th>Người bình luận</th>
                                <th>Thứ tự</th>
                                <th>Nội dung</th>
                                <th>Ngày giờ</th>
                            </tr>

                            <?php

                            foreach ($listbinhluan as $bl){
                                extract($bl);
                                echo '<tr><td>' . $iduser . '</td>';
                                echo ' <td>' . $id. '</td>';
                                echo ' <td>' . $noidung . '</td>';
                                echo '<td>' . $ngaybinhluan . '</td> </tr>';
                            }

                            ?>
                        </table>
                    
                </div>


        <div class="binh_luan">
     
            <div class="gui_binh_luan">
            
            <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
            <input type="hidden" name="idphong" value="<?= $idphong ?>">
                <input type="text" name ="noidung">
                <input type="submit" name="guibinhluan" value ="Gửi bình luận">
            </form>
        </div>
        
    </div>

    <?php
            if (isset($_POST['guibinhluan']) && ($_POST['guibinhluan'])) {
                $noidung = $_POST['noidung'];
                $iduser = $_SESSION['user_name']['name'];
                $idphong = $_POST['idphong'];
                $ngaybinhluan = date('d/m/Y');
                insert_binhluan($noidung,$iduser,$idphong,$ngaybinhluan);
                header("location:".$_SERVER['HTTP_REFERER']);
            }
    ?>
    <?php
    }

        else {
            echo'
           <h3>Vui lòng đăng nhập để bình luận!</h3>';
        }
    ?>

      

</body>
</html>