<?php 
session_start();
include "./model/connect.php";
include "./model/taikhoan.php";
include "./model/phong.php";
include_once "views/header.php";
// controller
  $listphong = loadall_phong();
if (isset($_GET['act'])) {
  $act = $_GET['act'];
  switch ($act) {
    // đây là của đăng ký đăng nhập
    case 'dangnhap':
      if(isset($_POST['dang_nhap']) && ($_POST['dang_nhap'])){
        $user_name = $_POST['user_name'];
        $password = $_POST['password'];
        $checkuser = dang_nhap($user_name, $password);
        if(is_array($checkuser)){
            $_SESSION['user_name'] = $checkuser;
            header('location:index.php');
          }else{ ?>
            <script>
              alert('Tài khoản không tồn tại hoặc sai mật khẩu. Vui lòng đăng nhập lại!')
          </script>
         <?php
         }
          ?>
           
       <?php } 
    include 'views/dangnhap.php';
    break;
    case 'dangky':
      if(isset($_POST['dang_ky']) && ($_POST['dang_ky'])){
        $name = $_POST['name'];
        $address = $_POST['address'];
        $email = $_POST['email'];
        $telephone = $_POST['telephone'];
        $user_name = $_POST['user_name'];
        $password = $_POST['password'];
        dang_ky($name, $address, $email, $telephone, $user_name, $password);
         
        } 
      include 'views/dangky.php';
      break;
    case 'quenmatkhau':
      if(isset($_POST['lay_mat_khau']) && ($_POST['lay_mat_khau'])){
        $email = $_POST['email'];
        $check_email = check_email($email);
        if(is_array($check_email)){ ?>
          <script>
            alert("Mật khẩu của bạn là : <?= $check_email['password'];  ?>");
          </script>
          <?php 
        }else{ ?>
            <script>
              alert("Email này không tồn tại!");
            </script>
          <?php }
    }
      include 'views/quenmatkhau.php';
      break;
    case 'dangxuat':
        session_unset();
        header('location:index.php');
        break;
    case 'suataikhoan':
      if(isset($_POST['updatetaikhoan']) && ($_POST['updatetaikhoan'])){
        $id = $_POST['id'];
        $name = $_POST['name'];
        $address = $_POST['address'];
        $email = $_POST['email'];
        $telephone = $_POST['telephone'];
        $user_name = $_POST['user_name'];
        $password = $_POST['password'];
        update_taikhoan($id, $name, $address, $email, $telephone, $user_name, $password);
        echo "CẬP NHẬT THÀNH CÔNG";
      }
      $id = $_GET['id'];
      $taikhoan = load_taikhoan($id);
      
      include 'views/suataikhoan.php';
      break;
    //  end đăng nhập đăng kí
    case 'phongnghi':
        include 'views/phongnghi.php';
        break;
    case 'chitietphong':
      if(isset($_GET['id']) && ($_GET['id']>0)){
        $id = $_GET['id'];
        $room_home = loadone_phong($id);
        extract ($room_home);
        include 'views/chitiet_phong.php';
      }else{
        include 'views/main.php';
      }
        
        break;

    // đây là tìm và đặt phòng
    case 'timphongtrong':
      include 'views/timphongtrong.php';
      break;
    case 'amthuc':
        include 'views/amthuc.php';
        break;
    case 'tintuc':
      include 'views/tintuc.php';
      break;
    case 'chitiettintuc':
      include 'views/chitiet_tintuc.php';
      break;
    case 'uudai':
      include 'views/uudai.php';
      break;
    case 'lienhe':
      include 'views/lienhe.php';
      break;
    default:
        include_once "views/main.php";
        break;
  }
}else{
  include_once "views/main.php";
}

include_once "views/footer.php";


?>