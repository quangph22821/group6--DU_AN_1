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
        include 'views/dangnhap.php';
        break;
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