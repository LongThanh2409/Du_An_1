<?php
// require_once "models/db.php";


require('./controllers/User/SanPham.php');
require('./controllers/User/DanhMuc.php');
require('./controllers/User/KhachHang.php');
require_once "./views/header.php";


$url = isset($_GET['url']) ? $_GET['url'] : '/';


switch($url){
  
    case 'about':
      headers();
      require "./views/User/menu/about.php";
      break;
     
}

     switch($url){
      case '/':
        headers();
        require "./views/banner_slider.php";
        hienThiSanPham();
       
        
        break;
        case 'ds_san_pham':
          headers();
          require "./views/banner_slider.php";
          hienThiSanPham();
          
          break;
          
          case 'sp_chi_tiet':
            headers();
            require "./views/banner_slider.php";
            hienThi1SanPham();
            break;
            case 'san_pham_dm':
              headers();
             hienThiSanPhamTheoDM();
              break;
              case 'san_pham_gio':
                headers();
              hienThiSanPhamTheoGio();
                break;
              case 'login':
            
                logins();
               
                 break;
                 case 'logout':
            
                  logouts();
                 
                   break;
                   case 'dang_ky':

                    require_once "./views/User/tai_khoan/dangky.php";
                   break;
     }
    
 
    require_once "views/footer.php";
     ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="./assets/css/index.css">
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
  
</body>
</html>