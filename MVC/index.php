<?php
require_once "models/db.php";

session_start();
require('./controllers/User/SanPham.php');
require('./controllers/User/DanhMuc.php');
require('./controllers/User/KhachHang.php');
require('./controllers/User/TrangChu.php');
require('./controllers/User/DatLich.php');



$url = isset($_GET['url']) ? $_GET['url'] : '/';




switch ($url) {
  case '/':


    TrangChuUser();


    break;
  case 'trang_chu':


    TrangChuUser();


    break;

  case 'danh_sach_dm':
    hienThiDanhMuc();
    break;
  case 'sanpham_chitiet':
    hienThi1SanPham();
    // dang_ky_xem_xe();
    break;
  case 'sanpham_danhmuc':

    hienThiSanPhamTheoDM();
    break;
  case 'list_san_pham':
    hienThiSanPham();
    break;
  case 'login':

    logins();
    break;
  case 'logout':
    logouts();
    break;
  case 'dang_ky':
    dangkys();
    break;
  case 'ds_dat_lich';
    HienThiDSDatLich();
    break;
  case 'thong_tin';
    include "views/User/menu/thong_tin.php";
    break;



    // case 'dangkyxemxe':

    //   // dang_ky_xem_xe();
    //   require_once "./views/User/dangkyxemxe/dkxemxe.php ";
    //   break;
  default:
    echo 'Đường dẫn không tồn tại';
    break;
}

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

</body>

</html>