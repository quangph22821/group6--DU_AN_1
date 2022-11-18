<?php 
// session_start();
include "../model/connect.php";
include "../model/taikhoan.php";
include "../model/loaiphong.php";
include_once "header.php";

// controller
if (isset($_GET['act'])) {
  $act = $_GET['act'];
  switch ($act) {
    // đây là của loại phòng
    case 'them':

        if(isset($_POST['themmoi']) && ($_POST['themmoi'])){
          $name_room = $_POST['name_room'];
          insert_loai_phong($name_room);
          $thongbao = "THÊM THÀNH CÔNG";
          
        }
        include "loaiphong/them.php";
        break;

    case 'danhsach':
        $listloaiphong = loadall_loaiphong(); 
        include 'loaiphong/danhsach.php';
        break;

    case 'delete':
      if(isset($_GET['id']) && ($_GET['id'] > 0)){
        delete_loaiphong($_GET['id']);
      }
      $listloaiphong = loadall_loaiphong();
      include 'loaiphong/danhsach.php';
      break;

    case 'sua':
      if(isset($_POST['update']) && ($_POST['update'])){
        $id = $_POST['id'];
        $name_room = $_POST['name_room'];
        update_loaiphong($id, $name_room);
        echo "CẬP NHẬT THÀNH CÔNG";
      }
      $id = $_GET['id'];
      $lp = load_loaiphong($id);
      $listloaiphong = loadall_loaiphong();
     
      include 'loaiphong/sua.php';
      break;
   
    // đây là của phòng
    
    
    case 'addphong':
      include 'phong/them.php';
      break;
    // đây là của khách hàng
    case 'khachhang':
        include 'khachhang/danhsach.php';
        break;
    case 'tintuc':
      include 'tintuc.php';
      break;
    case 'uudai':
      include 'uudai.php';
      break;
    case 'lienhe':
      include 'lienhe.php';
      break;
    default:
        include_once "main.php";
        break;
  }
}else{
  include_once "main.php";
}

include_once "footer.php";


?>