




<?php
// session_start();
//    if(!isset($_SESSION['admin'])){
//     header('location:index.php');
//    }
   if (isset($_POST['btn_sua'])) {
    $file_name = uniqid() . $_FILES['hinh_logo']['name'];
    $ext = pathinfo($file_name, PATHINFO_EXTENSION);
    if ($ext != 'png' && $ext != 'jpg' && $ext != 'jpeg') {
      $_SESSION['error2'] = "File chỉ được có đuôi png,jpg,jpeg ";
   } 
  }
   
   
?><!DOCTYPE html>




<html dir="ltr" lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
  <title>Matrix Template - The Ultimate Multipurpose admin template</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer">
  <link href="assets/libs/flot/css/float-chart.css" rel="stylesheet">
  <link href="dist/css/style.min.css" rel="stylesheet">
</head>

<body>
  <div class="preloader">
    <div class="lds-ripple">
      <div class="lds-pos"></div>
      <div class="lds-pos"></div>
    </div>
  </div>
  <div id="main-wrapper">
    <header class="topbar" data-navbarbg="skin5">
      <nav class="navbar top-navbar navbar-expand-md navbar-dark">
        <div class="navbar-header" data-logobg="skin5">
          <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
          <a class="navbar-brand" href="index.php">
            <b class="logo-icon p-l-10">
              <img src="assets/images/logo-icon.png" alt="homepage" class="light-logo" />
            </b>
            <span class="logo-text">
              <img src="assets/images/logo-text.png" alt="homepage" class="light-logo" />

            </span>
          </a>

          <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
        </div>

        <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">

          <ul class="navbar-nav float-left mr-auto">
            <li class="nav-item d-none d-md-block"><a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a></li>

          </ul>

          <ul class="navbar-nav float-right">

          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic"  onclick="return confirm('Bạn có chắc là muốn đăng xuất')" href="index.php?url=logout" data-toggle="" aria-haspopup="true" aria-expanded="false"><img src="assets/images/users/1.jpg" alt="user" class="rounded-circle" width="31"></a>

            </li>

          </ul>
        </div>
      </nav>
    </header>

    <aside class="left-sidebar" data-sidebarbg="skin5">

      <div class="scroll-sidebar">

        <nav class="sidebar-nav">
          <ul id="sidebarnav" class="p-t-30">
            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="index2.php" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">HOME</span></a></li>

            <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">LOẠI XE </span></a>
              <ul aria-expanded="false" class="collapse  first-level">
                <li class="sidebar-item"><a href="index2.php?url=ds_loai_xe" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu">DANH SÁCH </span></a></li>
                <li class="sidebar-item"><a href="index2.php?url=them_loai_xe" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> THÊM MỚI </span></a></li>
              </ul>
            </li>
            <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-face"></i><span class="hide-menu">KHÁCH HÀNG </span></a>
              <ul aria-expanded="false" class="collapse  first-level">
                <li class="sidebar-item"><a href="index2.php?url=them_khach_hang" class="sidebar-link"><i class="mdi mdi-emoticon"></i><span class="hide-menu"> THÊM MỚI </span></a></li>
                <li class="sidebar-item"><a href="index2.php?url=ds_khach_hang" class="sidebar-link"><i class="mdi mdi-emoticon-cool"></i><span class="hide-menu"> DANH SÁCH </span></a></li>
              </ul>
            </li>
            <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fa-solid fa-car"></i><span class="hide-menu">XE </span></a>
              <ul aria-expanded="false" class="collapse  first-level">
                <li class="sidebar-item"><a href="index2.php?url=them_xe" class="sidebar-link"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu"> THÊM MỚI </span></a></li>
                <li class="sidebar-item"><a href="index2.php?url=ds_xe" class="sidebar-link"><i class="mdi mdi-multiplication-box"></i><span class="hide-menu"> DANH SÁCH</span></a></li>

              </ul>
            </li>
            <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-calendar-check"></i><span class="hide-menu"> ĐƠN ĐẶT</span></a>
              <ul aria-expanded="false" class="collapse  first-level">
                <li class="sidebar-item"><a href="index2.php?url=ds_dang_ky_1" class="sidebar-link"><i class="fa-solid fa-check"></i><span class="hide-menu">ĐÃ DUYỆT </span></a></li>
                <li class="sidebar-item"><a href="index2.php?url=ds_dang_ky_0" class="sidebar-link"><i class="fa-solid fa-xmark"></i></i><span class="hide-menu">CHƯA DUYỆT</span></a></li>
                <li class="sidebar-item"><a href="index2.php?url=ds_dang_ky_2" class="sidebar-link"><i class="mdi mdi-multiplication-box"></i></i><span class="hide-menu">HỦY ĐƠN</span></a></li>
              </ul>
            </li>
            <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fa-solid fa-image"></i><span class="hide-menu">HÌNH PHỤ  </span></a>
              <ul aria-expanded="false" class="collapse  first-level">
                <li class="sidebar-item"><a href="index2.php?url=ds_hinh" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu">DANH SÁCH </span></a></li>
           
              </ul>
            </li>
            <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fa-sharp fa-solid fa-comments"></i></i><span class="hide-menu">BÌNH LUẬN  </span></a>
              <ul aria-expanded="false" class="collapse  first-level">
                <li class="sidebar-item"><a href="index2.php?url=ds_bl" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu">DANH SÁCH </span></a></li>
             
              </ul>
            </li>

            </li>

          </ul>
        </nav>

      </div>

    </aside>

    <div class="page-wrapper">

      <div class="page-breadcrumb">
        <div class="row">
          <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title">CHỈNH SỬA LOẠI XE</h4>

          </div>
        </div>
      </div>
      <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="r" >
                    <div class="col-md-6" style="margin: auto;"> 
                        <div class="card">
                            <form class="form-horizontal"  method="POST" enctype="multipart/form-data">
                                <div class="card-body">
                          
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Mã Loại</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="fname" placeholder="Auto" readonly  value="<?= $sua['ma_loai'] ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Tên Loại</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control"  placeholder="Nhập Tên Loại" name="ten_loai" value="<?= $sua['ten_loai'] ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Hình Ảnh</label>
                                        <div class="col-sm-9">
                                            <input type="file" class="form-control"  name="hinh_logo">
                                            <span style="color: red;">
                                            <?php echo isset($_SESSION['error2']) ?  $_SESSION['error2'] : '';  ?>
                                            </span>
                                            <img src="<?= $sua['hinh_logo'] ?>" alt="" width="20%">
                                      
                                        </div>
                                    </div>
                         
                                </div>
                                <div class="border-top " >
                                    <div class="card-body" style="text-align: center;">
                                        <button  class="btn btn-primary" name="btn_sua">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
  

                    </div>
                </div>
                <!-- editor -->
  

            </div>

    

    </div>

  </div>

  <script src="assets/libs/jquery/dist/jquery.min.js"></script>

  <script src="assets/libs/popper.js/dist/umd/popper.min.js"></script>
  <script src="assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
  <script src="assets/extra-libs/sparkline/sparkline.js"></script>

  <script src="dist/js/waves.js"></script>

  <script src="dist/js/sidebarmenu.js"></script>

  <script src="dist/js/custom.min.js"></script>

  <script src="assets/libs/flot/excanvas.js"></script>
  <script src="assets/libs/flot/jquery.flot.js"></script>
  <script src="assets/libs/flot/jquery.flot.pie.js"></script>
  <script src="assets/libs/flot/jquery.flot.time.js"></script>
  <script src="assets/libs/flot/jquery.flot.stack.js"></script>
  <script src="assets/libs/flot/jquery.flot.crosshair.js"></script>
  <script src="assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
  <script src="dist/js/pages/chart/chart-page-init.js"></script>

</body>

</html>