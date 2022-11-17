<?php
require_once "models/db.php";
require('./controllers/Admin/home.php');
require('./controllers/Admin/xe.php');
require('./controllers/Admin/loai_xe.php');
require('./controllers/Admin/khach_hang.php');
require('./controllers/Admin/dang_ky.php');
require('./controllers/Admin/khung_gio.php');
$url = isset($_GET['url']) ? $_GET['url'] : '/';

switch ($url) {
    case '/':
   hienThiHome();
        break;
  //LOAI XE      
    case 'ds_loai_xe':
        hienThiLoaiXe();
        break;
    case 'them_loai_xe':
        formThemMoiLoaiXe();
        break;
    case 'xoa_loai_xe':
        xoaDSLX();
        break;
    case 'sua_loai_xe':
        formSuaLoaiXe();
        break;    
// XE
    case 'ds_xe':
       hienThiXe();
       break;
    case 'them_xe': 
        formThemMoiXe();
        break;   
    case 'sua_xe':
        formSuaXe();
        break;    
    case 'xoa_xe':
        xoaDSX();
      break;    
// KHÁCH HÀNG      
    case 'ds_khach_hang':
        hienThiKhachHang();
        break;
    case 'them_khach_hang':
        formThemMoiKH();
        break;    
    case 'sua_khach_hang':
        formSuaKH();
        break;    
        case 'xoa_khach_hang':
            xoaDSKH();
            break;   
// KHUNG GIỜ
    case  'ds_khung_gio':
        hienThiKhungGio();
        break;
    case 'them_khung_gio':
        formThemMoiKhungGio();
        break;
    case 'sua_khung_gio':
            formSuaKhungGio();
            break;   
    case 'xoa_khung_gio':
            xoaDSKG();
            break;    
    case 'ds_dang_ky':
        
        hienThiDangKy();
        
        break;     
    case 'sua_dang_ky' :
        formSuaDangKy();
        break;       


    default:
        echo 'Đường dẫn không tồn tại';
        break;
}
?>
