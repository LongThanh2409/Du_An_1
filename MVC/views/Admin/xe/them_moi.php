<?php
  if (isset($_POST['btn_them'])) {
    $ten_xe = $_POST['ten_xe'];
    $don_gia = $_POST['don_gia'];
   $ma_loai = $_POST['ma_loai'];
    $hinh =  $_FILES['hinh'];
    $thong_tin = $_POST['thong_tin'];
    $giam_gia = $_POST['giam_gia'];
    $so_km = $_POST['so_km'];
    $xuat_xu = $_POST['xuat_xu'];
    $slots = $_POST['slots'];
    $dong_co = $_POST['dong_co'];
  $ma_gio = $_POST['ma_gio'];
   if(!$ten_xe){
    $ten_xe_err = 'CHƯA NHẬP';
   }
   if(!$don_gia){
    $don_gia_err = 'CHƯA NHẬP';
   }
   if(!$ma_loai){
     $ma_loai_err ='CHƯA NHẬP';
   }
   if(!$hinh['name']){
    $hinh_err = 'CHƯA NHẬP';
   }
   if(!$thong_tin){
    $thong_tin_err ='CHƯA NHẬP';
   }
   if(!$giam_gia){
    $giam_gia_err = 'CHƯA NHẬP';
   }
   if(!$so_km){
    $so_km_err = 'CHƯA NHẬP';
   }
   if(!$xuat_xu){
    $xuat_xu_err = 'CHƯA NHẬP';
   }
   if(!$slots){
    $slots_err = 'CHƯA NHẬP';
   }
   if(!$dong_co){
    $dong_co_err = 'CHƯA NHẬP';
   }
   if(!$ma_gio){
    $ma_gio_err = 'CHƯA NHẬP';
   }
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="assets/css/them_moi_xe.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
      integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
  </head>
  <body>
    <div class="container">
    <div class="header">
      <div class="logo">
          <img src="assets/images/logo.png" alt="" >
        </div>
        <div class="menu">
        <a class="menu_home" href="index2.php">
          <i class="fa-sharp fa-solid fa-house"></i> <span>HOME</span>
        </a>
        <br />
        <div class="menu_home1">
          <a class="menu_type" href="index2.php?url=ds_loai_xe"><i class="fa-solid fa-pencil"></i><span>LOẠI XE</span> </a>
          <div class="submenu">
            <a href="index2.php?url=them_loai_xe" class="btn_them"><i class="fa-solid fa-plus"></i> THÊM MỚI</a>
            <a href="index2.php?url=ds_loai_xe" class="btn_ds"><i class="fa-solid fa-book"></i>DANH SÁCH</a>
          </div>
        </div>
        <br />
        <div class="menu_home1">
          <a class="menu_car" href="index2.php?url=ds_xe"><i class="fa-solid fa-car"></i>XE</a>
          <div class="submenu">
            <a href="index2.php?url=them_xe"><i class="fa-solid fa-plus"></i> THÊM MỚI</a>
            <a href="index2.php?url=ds_xe"><i class="fa-solid fa-book"></i>DANH SÁCH</a>
          </div>
        </div>
        <br />
        <div class="menu_home1">
          <a class="menu_people" href="index2.php?url=ds_khach_hang"><i class="fa-sharp fa-solid fa-person"></i><span>KHÁCH HÀNG</span> </a>
          <div class="submenu">
            <a href="index2.php?url=them_khach_hang"><i class="fa-solid fa-plus"></i> THÊM MỚI</a>
            <a href="index2.php?url=ds_khach_hang"><i class="fa-solid fa-book"></i>DANH SÁCH</a>
          </div>
        </div>
        <br>
        <div class="menu_home1">
          <a class="menu_time" href="index2.php?url=ds_khung_gio"><i class="fa-solid fa-clock"></i><span>KHUNG GIỜ</span> </a>
          <div class="submenu">
            <a href="index2.php?url=them_khung_gio"><i class="fa-solid fa-plus"></i> THÊM MỚI</a>
            <a href="index2.php?url=ds_khung_gio"><i class="fa-solid fa-book"></i>DANH SÁCH</a>
          </div>
        </div>
        <br />
        <a class="menu_view" href="index2.php?url=ds_dang_ky"><i class="fa-solid fa-bookmark"></i><span>ĐĂNG KÝ XEM XE</span> </a><br />
      </div>
      </div>
      <div class="main_content">
        <div class="banner">
          <span class="text">>> THÊM MỚI XE</span>
         <a href="index.php?url=logout"  onclick="return confirm('Bạn có chắc là muốn đăng xuất')" class="log_out"  >   <i class="fa-solid fa-user"></i></a>
         <div class="hello">
          <marquee class="text-right" width="150px" direction="left" height="50px">
            <h3 class="" style="color: #FFF;"> <?php

                                                session_start();

                                                echo isset($_SESSION['admin']) ? 'Hello' . ' ' .  $_SESSION['admin'] : "";
                                                if(!isset($_SESSION['admin'])){
                                                  header('location:index.php?url=login');
                                                }
                                                ?>
            </h3>
          </marquee>
        </div>
        </div>
        <form action="" method="post" enctype="multipart/form-data">
          <div class="form_con">
          <div class="left">
          <h3 class="h3">MÃ XE</h3>
        <p class="text1">AUTO</p>
        <h3 class="h3">TÊN XE</h3>
        <input type="text" name="ten_xe" class="ten_xe" value = '<?= isset($ten_xe) ? $ten_xe : ''?>'>
        <p style="color: red;">
        <?php echo isset($ten_xe_err) ?  $ten_xe_err : ''; ?>
     </p>
        <h3 class="h3">ĐƠN GIÁ</h3>
        <input type="text" name="don_gia" class="don_gia" value = '<?= isset($don_gia) ? $don_gia : ''?>'>
        <p style="color: red;">
        <?php echo isset($don_gia_err) ?  $don_gia_err : ''; ?>
     </p>
        <h3 class="h3">MÃ LOẠI</h3>
        <select id="" name="ma_loai" >
                    <option value="">Chọn</option>
                    <?php foreach ($ds_lx as $value) : ?>
                    <option value="<?php echo $value['ma_loai'] ?>"><?php echo $value['ten_loai']; ?></option>
                    <?php endforeach; ?>
                </select>
                <p style="color: red;">
        <?php echo isset($ma_loai_err) ?  $ma_loai_err : ''; ?>
     </p>
        <h3 class="h3">HÌNH ẢNH </h3>
         <div class="text1">
          <input type="file" name="hinh" class="hinh" >
         </div>
         <p style="color: red;">
        <?php echo isset($hinh_err) ?  $hinh_err : ''; ?>
     </p>
         <h3 class="h3">THÔNG TIN</h3>
         <input type="text" name="thong_tin" class="thong_tin" value = '<?= isset($thong_tin) ? $thong_tin : ''?>'>
         <p style="color: red;">
        <?php echo isset($thong_tin_err) ?  $thong_tin_err : ''; ?>
     </p>
          </div>
          <div class="right">
            <h3 class="h3">GIẢM GIÁ</h3>
            <input type="text" name="giam_gia" class="giam_gia" value = '<?= isset($giam_gia) ? $giam_gia : ''?>'>
            <p style="color: red;">
        <?php echo isset($giam_gia_err) ?  $giam_gia_err: ''; ?>
     </p>
            <h3 class="h3">SỐ KM</h3>
            <input type="text" name="so_km" class="so_km" value = '<?= isset($so_km) ? $so_km : ''?>'>
            <p style="color: red;">
        <?php echo isset($so_km_err) ?  $so_km_err : ''; ?>
     </p>
            <h3 class="h3">XUẤT XỨ</h3>
            <input type="text" name="xuat_xu" class="xuat_xu" value = '<?= isset($so_km) ? $so_km : ''?>'>
            <p style="color: red;">
        <?php echo isset($xuat_xu_err) ?  $xuat_xu_err : ''; ?>
     </p>
            <h3 class="h3">SLOTS</h3>
            <input type="text" name="slots" class="slots" value = '<?= isset($slots) ? $slots : ''?>'>
            <p style="color: red;">
        <?php echo isset($slots_err) ?  $slots_err : ''; ?>
     </p>
            <h3 class="h3">ĐỘNG CƠ</h3>
            <input type="text" name="dong_co" class="dong_co" value = '<?= isset($dong_co) ? $dong_co : ''?>'>
            <p style="color: red;">
        <?php echo isset($dong_co_err) ?  $dong_co_err: ''; ?>
     </p>
          <h3 class="h3">KHUNG GIỜ</h3>
            <select id="" name="ma_gio" >
                    <option value="">Chọn</option>
                    <?php foreach ($ds_kg as $value) : ?>
<option value="<?php echo $value['ma_gio'] ?>"><?php echo $value['khung_gio']; ?></option>
                    <?php endforeach; ?>
                </select>   
                <p style="color: red;">
        <?php echo isset($ma_gio_err) ?  $ma_gio_err : ''; ?>
     </p>
          </div>
          </div>
        <div class="btn">
            <button name="btn_them" class="btn_them1">THÊM MỚI</button>      
            <a href="index2.php?url=ds_xe" class="ds">DANH SÁCH</a>
        </div>
        </form>
      </div>
    </div>
  </body>
</html>
