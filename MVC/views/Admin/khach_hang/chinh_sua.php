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
    <link rel="stylesheet" href="assets/css/them_moi_khach_hang.css" />
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
          <span class="text">>> THÊM MỚI KHÁCH HÀNG</span>
          <a href="index.php?url=logout"  onclick="return confirm('Bạn có chắc là muốn đăng xuất')" class="log_out">  <i class="fa-solid fa-user"></i></a>
         <div class="hello">
          <marquee class="text-right" width="150px" direction="left" height="50px">
            <h3 class="" style="color: #FFF;"> <?php
                                                session_start();

                                                echo isset($_SESSION['admin']) ? 'Hello' . ' ' .  $_SESSION['admin'] : "";
                                                if(!isset($_SESSION['admin'])){
                                                  header('location:index.php?url=login');
                                                } ?>
            </h3>
          </marquee>
        </div>
        </div>
        <div class="main">
        <form action="" method="post" enctype="multipart/form-data">
          <div class="main_con">
          <div class="left">
            <h3 class="h3">MÃ KH</h3>
            <p class="text1">AUTO</p>
            <h3 class="h3">USERNAME</h3>
            <input type="text" name="username" class="username"  value="<?= $kh['username'] ?>">
            <h3 class="h3">PASSWORD</h3>
            <input type="text" name="password" class="password" value="<?= $kh['password'] ?>">
          </div>
          <div class="right">
            <h3 class="h3">EMAIL</h3>
            <input type="email" name="email" class="email" value="<?= $kh['email'] ?>">
            <h3 class="h3">LEVEL</h3>
            <input type="text" name="level" class="level" value="<?= $kh['level'] ?>">
          </div>
          </div>
          <div class="btn">
            <button name="btn_sua" class="btn_them1">SỬA</button>      
            <a href="index2.php?url=ds_khach_hang" class="ds">DANH SÁCH</a>
        </div>
          </form>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>