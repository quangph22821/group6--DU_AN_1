<?php 
// session_start();
include "../model/connect.php";
include "../model/taikhoan.php";
include "../model/loaiphong.php";
include "../model/phong.php";
include "../model/binhluan.php";
include "../model/datphong.php";
include "../model/thongke.php";
include "../model/tin_tuc.php";
include_once "header.php";
$listphong = loadall_phong();
$listdonhang = loadall_donhang();
// controller
if (isset($_GET['act'])) {
  $act = $_GET['act'];
  switch ($act) {
    // đây là của loại phòng
    case 'them':

        if(isset($_POST['themmoi']) && ($_POST['themmoi'])){
          $name_room = $_POST['name_room'];
          insert_loai_phong($name_room);
          
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
    case 'chitietphong':
      if(isset($_GET['id']) && ($_GET['id']>0)){
        $id = $_GET['id'];
        $room_home = loadone_phong($id);
        extract ($room_home);
        include '../views/chitiet_phong.php';
      }else{
        include 'views/main.php';
      }
        
        break;
    
    case 'addlp':
      // kiểm tra người dùng bấm hay ko
      if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
        $idlp = $_POST['ID_lp'];
        $tenphong = $_POST['room_name'];
        $giaphong = $_POST['price'];
        $mota = $_POST['description'];
        $hinh = $_FILES['image']['name'];
        $target_dir = "../upload/";
        $target_file = $target_dir . basename($_FILES["image"]["name"]);
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
        } else {
        }
        insert_phong($tenphong,$giaphong,$hinh,$mota,$idlp);
        $thongbao = "Thêm Thành Công";
      }
      $listloaiphong = loadall_loaiphong();
      include_once "phong/them.php";
      break;
    case 'listphong':
      if (isset($_POST['listok']) && ($_POST['listok'])) {
        $kyw = $_POST['kyw'];
        $idlp = $_POST['ID_lp'];
      } else {
        $kyw = "";
        $idlp = 0;
      }
      $listloaiphong = loadall_loaiphong();
      $listphong = loadall_phong($kyw, $idlp);
      include_once "phong/danhsach.php";
      break;
    case 'xoaphong':
      if (isset($_GET['id']) && ($_GET['id'] > 0)) {
        delete_phong($_GET['id']);
      }
      $listphong = loadall_phong();
      include_once "phong/danhsach.php";
      break;

    case 'suaphong':
      if (isset($_GET['id']) && ($_GET['id'] > 0)) {
        $phong = loadone_phong($_GET['id']);
      }
      $id = $_GET['id'];
      $loadonephong = phong1($id);
      $listloaiphong = loadall_loaiphong();
      include_once "phong/sua.php";
      break;

    case 'capnhat':
      if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
        $id = $_POST['id'];
        $idlp = $_POST['ID_lp'];
        $tenphong = $_POST['room_name'];
        $giaphong = $_POST['price'];
        $mota = $_POST['description'];
        $filename = $_FILES['image']['name'];
        $target_dir = "../upload/";
        $target_file = $target_dir . basename($_FILES["image"]["name"]);
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
        } else {
        }
        update_phong($idlp,$tenphong,$giaphong,$filename,$mota,$id);
        $thongbao = "Cập Nhật  Thành Công";
      }
      $listloaiphong = loadall_loaiphong();
      $listphong = loadall_phong("", 0);
      include_once "phong/danhsach.php";

      break;
      // đây là của đơn hàng
      case 'donhang':
        $listdonhang = loadall_donhang();
        include 'donhang/danhsach.php';
        break;
      case 'xoa_donhang':
        if(isset($_GET['id']) && ($_GET['id'] > 0)){
          delete_donhang($_GET['id']);
        }
        $listdonhang = loadall_donhang();
        include 'donhang/danhsach.php';
        break;
    // đây là của khách hàng
    case 'khachhang':
      $listtaikhoan = loadall_taikhoan(); 
      include 'khachhang/danhsach.php';
      break;
      case 'xoa_taikhoan':
        if(isset($_GET['id']) && ($_GET['id'] > 0)){
          delete_taikhoan($_GET['id']);
        }
        $listtaikhoan = loadall_taikhoan(); 
        include 'khachhang/danhsach.php';
        break;
    
    // bình luận
    case 'binhluan':
        $listbinhluan=loadall_binhluan(0);
        include 'binhluan/danhsach.php';
        break;
    
    case 'deletebl':
      if (isset($_GET['id']) && ($_GET['id'] > 0)) {
          delete_binhluan($_GET['id']);
      }
      $listbinhluan = loadall_binhluan("", 0);
      include "binhluan/danhsach.php";
      break;
          //thống kê
    
    case 'thongke':
      $listthongke = loadall_thongke();
      include "thongke/danhsach.php";
      break;
    
    case 'thongkedanhmuc':
      $thongkedt = loadtk_doanhthu();
      include "thongke/tkdoanhthu.php";
      break;

    // tin tức

    case 'addtintuc':
      if (isset($_POST['add']) && ($_POST['add'])) {
        $tieu_de = $_POST['tieu_de'];
        $mo_ta = $_POST['mo_ta'];
        $hinh_anh = $_FILES['hinh_anh']['name'];
        $ngay_them = $_POST['ngay_them'];
        $target_dir = "../upload/";
        $target_file = $target_dir . basename($_FILES["hinh_anh"]["name"]);
        if (move_uploaded_file($_FILES["hinh_anh"]["tmp_name"], $target_file)) {
        } else {
        }
        insert_tin_tuc($tieu_de,$mo_ta,$hinh_anh,$ngay_them);
        $thongbao = "Thêm Thành Công";
      }
      $list_tin_tuc= load_tin_tuc();
      include_once "khampha/them.php";
      break;
    
    case 'deltintuc':
      if (isset($_GET['id']) && ($_GET['id'] > 0)) {
        delete_tin_tuc($_GET['id']);
      }
      $list_tin_tuc = load_tin_tuc();
      
      include 'khampha/danhsach.php';
      break;

    case 'edittintuc':
      if (isset($_POST['update']) && ($_POST['update'])) {
        $tieu_de =$_POST['tieu_de'];
        $mo_ta =$_POST['mo_ta'];
        $id =$_POST['id'];
        $hinh_anh =$_FILES['hinh_anh']['name'];
        $ngay_them =$_POST['ngay_them'];
        $target_dir = "../upload/";
        $target_file = $target_dir . basename($_FILES["hinh_anh"]["name"]);
        if (move_uploaded_file($_FILES["hinh_anh"]["tmp_name"], $target_file)) {
        } else {

        }
        update_tin_tuc($id,$tieu_de,$mo_ta,$hinh_anh,$ngay_them);
      }
      $id = $_GET['id'];
      $tin_tuc = load_one_tin_tuc($id);
      $list_tin_tuc = load_tin_tuc();

      include 'khampha/sua.php';
      break;
      $listtaikhoan = loadall_taikhoan(); 
      include 'khachhang/danhsach.php';
      break;
      //
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