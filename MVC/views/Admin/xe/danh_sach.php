<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="assets/css/xe.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
  <div class="container">
    <div class="header">
      <div class="logo">
        <img src="assets/images/logo.png" alt="">
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
        <span class="text">>> DANH SÁCH XE</span>
        <a href="index.php?url=logout"  onclick="return confirm('Bạn có chắc là muốn đăng xuất')" class="log_out"> <i class="fa-solid fa-user"></i></a>
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
      <table style="max-width: 1300px; width: 100%;">
        <tr class="tr1">
          <td class="td1">MÃ XE</td>
          <td class="td2">TÊN XE</td>
          <td>ĐƠN GIÁ</td>
          <td>MÃ LOẠI</td>
          <td>HÌNH</td>
          <td>THÔNG TIN</td>
          <td>GIẢM GIÁ</td>
          <td>SỐ KM</td>
          <td>XUẤT XỨ</td>
          <td>SLOTS</td>
          <td>ĐỘNG CƠ</td>
          <td>MÃ GIỜ</td>
        </tr>
        <?php foreach ($ds_xe as $key => $value) : ?>
          <tr class="tr2">
            <td> <?= $value['ma_xe'] ?> </td>
            <td><?= $value['ten_xe'] ?> </td>
            <td><?= $value['don_gia'] ?></td>
            <td><?= $value['ma_loai'] ?></td>
            <td> <img width="20%" src="<?= $value['hinh'] ?>" alt=""></td>
            <td><?= $value['thong_tin'] ?></td>
            <td><?= $value['giam_gia'] ?></td>
            <td><?= $value['so_km'] ?></td>
            <td><?= $value['xuat_xu'] ?></td>
            <td><?= $value['slots'] ?></td>
            <td><?= $value['dong_co'] ?></td>
            <td><?= $value['ma_gio'] ?></td>
            <td>
              <button class="btn_edit">
                <a class="edit" href="?url=sua_xe&ma_xe=<?php echo $value['ma_xe'] ?>">Sửa</a>
              </button>
              <button class="btn_delete">
                <a class="delete" href="?url=xoa_xe&ma_xe=<?php echo $value['ma_xe'] ?>" onclick="return confirm('bạn có muốn xóa')">Xóa</a>
              </button>
            </td>
          </tr>
        <?php endforeach ?>
      </table>
    </div>
  </div>
</body>

</html>