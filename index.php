<?php 
session_start();
include "./model/connect.php";
include "./model/taikhoan.php";
include_once "views/header.php";
// controller
if (isset($_GET['act'])) {
  $act = $_GET['act'];
  switch ($act) {
    case 'dangnhap':
      if(isset($_POST['dang_nhap']) && ($_POST['dang_nhap'])){
        $user_name = $_POST['user_name'];
        $password = $_POST['password'];
        $checkuser = dang_nhap($user_name, $password);
        if(is_array($checkuser)){
            $_SESSION['user_name'] = $checkuser;
            // $thongbao = "Bạn đã đăng nhập thành công!";
            header('location:index.php');
        }else{
            $thongbao = "Tài khoản không tồn tại. Vui lòng thử lại";
        }
    }
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

    case 'dangxuat':
      session_unset();
      header('location:index.php');
      break;

    //  end đăng nhập đăng kí
    case 'phongnghi':
      include 'views/phongnghi.php';
      break;
    case 'amthuc':
        include 'views/amthuc.php';
        break;
    case 'tintuc':
      include 'views/tintuc.php';
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