<?php
session_start();

function headers()
{ ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="../assets/css/index.css">
        <link rel="stylesheet" href="../assets/css/bootstrap.min.css">

    </head>

    <body>
        <!-- <div class="header">
    <div class="logo">
                <img src="./assets/images/logo.png" alt="">
            </div>
            <ul class="nav">
                <li><a href="">Home</a></li>
                <li><a href="">Band</a></li>
                <li><a href="">Torn</a></li>
                <li><a href="">Contact</a></li>
                <li>
                   <a href="">gfg</a>
                    <ul class="subnav">
                        <li><a href="">Giới Tfhiệu</a></li>
                        <li><a href="">Mô Tả</a></li>
                        <li><a href="">Liên Hệ</a></li>
                    </ul>
                </li>
            </ul>
           
            <div class="search-button">
               <div class="search">
                <input type="search" name="search" id="" placeholder="Tìm Kiếm">
               </div>
               <div class="button-login">
                <a href="">Login / Register</a>
               </div>
            </div>
    </div> -->

        <div class="header relative">
            <div class="row mb-3 grid lg:grid-cols-4 text-center">
                <div class="col-md-2 themed-grid-col">
                    <div class="logo">
                        <img src="./assets/images/img_logo_heder/logo.png" alt="">
                    </div>
                </div>
                <div class="col-md-5 themed-grid-col">
                    <ul class="nav">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="index.php?url=about">About</a></li>
                        <li class=""><a href="index.php?url=dangkyxemxe">Đặt Lịch</a>
                        </li>
                        <li onclick="scrollWin()"id="dm"><a href="#">Loại Xe</a></li>

                    </ul>
                </div>



                <?php
                if (!isset($_SESSION['username'])) {


                    echo '
                    <div class=" col-md-5 themed-grid-col">
                    <div class="search-button">
                    <form action="index.php?url=tim_Kiem" method="get">
                    <div class="search">
                                 <input type="text" name="key" id="" placeholder="Tìm Kiếm">
                                 <button > Tìm Kiếm</button>
                             </div>
                    </form>
                        <div class="button-login">
                            <a href="index.php?url=login">Login / Register</a>

                        </div>
                    </div>
                </div>
                    ';
                } else {
                    $confim = ("'Có chắc là muốn đăng xuất'");
                    echo '
                   
                    <div class=" col-md-5 themed-grid-col">
                    <div class="search-button">
                    <form action="index.php?url=tim_Kiem" method="get">
                    <div class="search">
                                 <input type="text" name="key" id="" placeholder="Tìm Kiếm">
                                 <button > Tìm Kiếm</button>
                             </div>
                    </form>

                    <div class="button-logout">
                    <button onclick="return confirm(' . $confim . ')"  name="dang_xuat">  <a href="index.php?url=logout"  >Logout</a></button> 

                  </div>
                </div>
            </div>
                    ';
                }
                ?>

            </div>

            <div class="hello-username fixed top-5 right-1">
                <marquee class="text-right" width="160px" direction="left" height="50px">
                    <h3 class="" style="color: #000;"> <?php


                                                        echo isset($_SESSION['username']) ? 'Hello' . ' ' .  $_SESSION['username'] : "" ?>
                    </h3>
                </marquee>

            </div>
        </div>
    </body>
    
    <script>
function scrollWin() {
  window.scrollTo(0, 2300);
}
</script>
  
    </html>
<?php } ?>


<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
</head>
<body>
<header class="p-3 text-bg-dark">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
         
        </a>
        <div class="logo">
                <img src="./assets/images/logo.png" alt="">
            </div>
        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="#" class="nav-link px-2 text-secondary">Home</a></li>
          <li><a href="#" class="nav-link px-2 text-white">Features</a></li>
          <li><a href="#" class="nav-link px-2 text-white">Pricing</a></li>
          <li><a href="#" class="nav-link px-2 text-white">FAQs</a></li>
          <li><a href="#" class="nav-link px-2 text-white">About</a></li>
        </ul>

        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
          <input type="search" class="form-control form-control-dark text-bg-dark" placeholder="Search..." aria-label="Search">
        </form>

        <div class="text-end">
          <button type="button" class="btn btn-outline-light me-2">Login</button>
          <button type="button" class="btn btn-warning">Sign-up</button>
        </div>
      </div>
    </div>
  </header>
</body>
</html> -->