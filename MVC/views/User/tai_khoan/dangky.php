 <?php


    // session_start();


    if (isset($_POST['dangky'])) {
        $ten_khach_hang = $_POST['ten_khach_hang'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $so_dien_thoai = $_POST['so_dien_thoai'];
        $password = $_POST['password'];
        $password2 = $_POST['password2'];
        $sql = "SELECT * FROM khach_hang  ";
        $user = getData($sql, FETCH_ALL);
        foreach ($user as $value) {
            if ($username == $value['username']) {
                $error['username1'] = 'Tên đăng nhập đã tồn tại';
            }
        }
        if (empty($ten_khach_hang)) {
            $error['ten_khach_hang'] = 'Bạn chưa nhập tên';
        }
        if (empty($username)) {
            $error['username'] = 'Bạn chưa nhập tên';
        }
        if (empty($password)) {
            $error['password'] = 'Bạn chưa nhập mật khẩu';
        }
        if (empty($password2)) {
            $error['password2'] = 'Bạn chưa nhập lại mật khẩu';
        }
        if ($password != $password2 && $password2 != "") {
            $error['password_lost'] = 'Mật khẩu không khớp';
        }
        if (empty($email)) {
            $error['email'] = 'Bạn chưa nhập email';
        }
        if (empty($so_dien_thoai)) {
            $error['so_dien_thoai'] = 'Bạn chưa nhập số điện thoại';
        } else {
            $sucss = " Đăng ký thành công";
        }
    }

    // $name = $email = $password = $password2 = $hinh_anh = '';
    // if (isset($_POST['dangky'])) {
    //     $ten_khach_hang = $_POST['ten_khach_hang'];
    //     $username = $_POST['username'];
    //     $email = $_POST['email'];
    //     $so_dien_thoai = $_POST['so_dien_thoai'];
    //     $password = $_POST['password'];
    //     $password2 = $_POST['password2'];



    //     $error = [];
    //     if (empty($ten_khach_hang)) {
    //         $error['ten_khach_hang'] = 'Bạn chưa nhập tên';
    //     }
    //     if (empty($username)) {
    //         $error['username'] = 'Bạn chưa nhập tên';
    //     }
    //     if (empty($password)) {
    //         $error['password'] = 'Bạn chưa nhập mật khẩu';
    //     }
    //     if (empty($password2)) {
    //         $error['password2'] = 'Bạn chưa nhập lại mật khẩu';
    //     }
    //     if ($password != $password2 && $password2 != "") {
    //         $error['password_lost'] = 'Mật khẩu không khớp';
    //     }
    //     if (empty($email)) {
    //         $error['email'] = 'Bạn chưa nhập email';
    //     }
    //     if (empty($so_dien_thoai)) {
    //         $error['so_dien_thoai'] = 'Bạn chưa nhập số điện thoại';
    //     }



    //     // foreach ($item as $value) { //lặp để kiểm tra dữ liệu nhập vào form và dữ liệu trong DB
    //     //     if ($_POST['username'] == $value["username"]) { // kiểm tra xem userusername và password nhập vào có trùng với 
    //     //         $error['trungtk'] = 'Email tài khoản này đã tồn tại';
    //     //         break;
    //     //     }
    //     // }


    //     if (!($error)) {
    //         $sql = "SELECT username FROM khach_hang where username = :username";
    //         $conn = getConnect();
    //         $stmt = $conn->prepare($sql);
    //         $stmt->bindValue(':username', $username);
    //         $stmt->execute();

    //         $user = $stmt->fetch(PDO::FETCH_ASSOC);

    //         if ($user) {
    //             $error['trungtk'] = 'Tài khoản này đã tồn tại';
    //         } else {
    //             $sql = $conn->prepare('
    //                 INSERT INTO khach_hang(ten_khach_hang,username, password, email,so_dien_thoai)
    //                 VALUES (:ten_khach_hang,:username, :password, :email,:so_dien_thoai)
    //                 ');
    //             $sql->bindParam(':ten_khach_hang', $ten_khach_hang);
    //             $sql->bindParam(':username', $username);
    //             $sql->bindParam(':password', $password);
    //             $sql->bindParam(':email', $email);
    //             $sql->bindParam(':so_dien_thoai', $so_dien_thoai);
    //             $sql->execute();
    //             $sucss = 'Tạo Thành Công';
    //         }
    //     }
    // }


    ?>


 <!DOCTYPE HTML>
 <html lang="en">

 <head>
     <title>Online Login Form Responsive Widget Template :: w3layouts</title>
     <!-- Meta tag Keywords -->
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
     <meta name="keywords" content="Online Login Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
     <!--   
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script> -->
     <!-- Meta tag Keywords -->
     <!-- css files -->
     <!-- <script src="dist/js/custom.min.js"></script> -->
     <link rel="stylesheet" href="assets/css2/login.css" type="text/css" media="all" /> <!-- Style-CSS -->
     <link rel="stylesheet" href="assets/css2/font-awesome.css"> <!-- Font-Awesome-Icons-CSS -->
     <!-- //css files -->
     <!-- online-fonts -->
     <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
     <link href="//fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700,800&amp;subset=latin-ext" rel="stylesheet">
     <!-- //online-fonts -->

     <style>
         /* .preloader {
            width: 100%;
            height: 100%;
            top: 0px;
            position: fixed;
            z-index: 99999;
            background: #fff;
        }

        .lds-ripple {
            display: inline-block;
            position: relative;
            width: 64px;
            height: 64px;
            position: absolute;
            top: calc(50% - 3.5px);
            left: calc(50% - 3.5px);
        }

        .lds-ripple .lds-pos {
            position: absolute;
            border: 2px solid #2962FF;
            opacity: 1;
            border-radius: 50%;
            -webkit-animation: lds-ripple 1s cubic-bezier(0, 0.1, 0.5, 1) infinite;
            animation: lds-ripple 1s cubic-bezier(0, 0.1, 0.5, 1) infinite;
        }

        .lds-ripple .lds-pos:nth-child(2) {
            -webkit-animation-delay: -0.5s;
            animation-delay: -0.5s;
        }

        @-webkit-keyframes lds-ripple {
            0% {
                top: 28px;
                left: 28px;
                width: 0;
                height: 0;
                opacity: 0;
            }

            5% {
                top: 28px;
                left: 28px;
                width: 0;
                height: 0;
                opacity: 1;
            }

            100% {
                top: -1px;
                left: -1px;
                width: 58px;
                height: 58px;
                opacity: 0;
            }
        }

        @keyframes lds-ripple {
            0% {
                top: 28px;
                left: 28px;
                width: 0;
                height: 0;
                opacity: 0;
            }

            5% {
                top: 28px;
                left: 28px;
                width: 0;
                height: 0;
                opacity: 1;
            }

            100% {
                top: -1px;
                left: -1px;
                width: 58px;
                height: 58px;
                opacity: 0;
            }
        }
 

       */
         .pom-agile {
             position: relative;
         }

         .error {

             position: absolute;
             text-align: left;
             left: 68%;
             margin-top: -2.6rem;

         }

         .error h2 {
             color: #FFF;
             font-size: 20px;
             font-weight: 500;
         }

         .wthree-pro {
             display: flex;
             justify-content: space-around;

         }

         .wthree-pro h2 a {
             color: #FFF;

         }
     </style>

 </head>

 <body>

     <!-- main -->
     <div class="preloader">
         <div class="lds-ripple">
             <div class="lds-pos"></div>
             <div class="lds-pos"></div>
         </div>
     </div>

     <div class="center-container">
         <!--header-->
         <div class="header-w3l">

             <h1>Đăng Ký</h1>
         </div class="header-w3l">
         <h1><?= isset($sucss) ? $sucss : "" ?></h1>
         <div>

         </div>
         <!--//header-->
         <div class="main-content-agile">
             <div class="sub-main-w3">
                 <div class="wthree-pro">
                     <h2> <a href="index.php?url=login">Đăng Nhập</a></h2>
                     <h2>Đăng Ký</h2>
                 </div>
                 <form action="" method="post">

                     <div class="pom-agile">
                         <input placeholder="Tên Khách Hàng" name="ten_khach_hang" class="user" type="text">
                         <span class="icon1"><i class="fa fa-user" aria-hidden="true"></i></span>

                     </div>

                     <div class="error">
                         <h2> <?= isset($error['ten_khach_hang']) ? $error['ten_khach_hang'] : "" ?></h2>
                     </div>



                     <div class="pom-agile">
                         <input placeholder="Tên Đăng Nhập" name="username" class="user" type="text">

                         <span class="icon1"><i class="fa fa-user" aria-hidden="true"></i></span>
                     </div>
                     <div class="error">
                         <h2> <?= isset($error['username']) ? $error['username'] : "" ?></h2>
                         <h2> <?= isset($error['username1']) ? $error['username1'] : "" ?></h2>
                     </div>
                     <div class="pom-agile">
                         <input placeholder="Email" name="email" class="user" type="email">
                         <span class="icon1"><i class="fa fa-envelope" aria-hidden="true"></i></span>

                     </div>
                     <div class="error">
                         <h2> <?= isset($error['email']) ? $error['email'] : "" ?></h2>
                     </div>
                     <div class="pom-agile">
                         <input placeholder="Số điện thoại" name="so_dien_thoai" class="user" type="tel">
                         <span class="icon1"><i class="fa fa-phone" aria-hidden="true"></i></span>

                     </div>
                     <div class="error">
                         <h2> <?= isset($error['so_dien_thoai']) ? $error['so_dien_thoai'] : "" ?></h2>
                     </div>
                     <div class="pom-agile">
                         <input placeholder="Mật Khẩu" class="show1" name="password" class="user" type="password">
                         <span class="icon1"><i class="fa fa-lock" aria-hidden="true"></i></span>
                     </div>
                     <div class="error">
                         <h2> <?= isset($error['password']) ? $error['password'] : "" ?></h2>
                     </div>
                     <div class="pom-agile">
                         <input placeholder="Nhập Lại Mật Khẩu" name="password2" class="show2" class="pass" type="password">
                         <span id="show" class="icon2"><i class="fa fa-unlock" aria-hidden="true"></i></span>

                     </div>
                     <div class="error">
                         <h2> <?= isset($error['password2']) ? $error['password2'] : "" ?></h2>
                     </div>
                     <div class="error">
                         <h2> <?= isset($error['password_lost']) ? $error['password_lost'] : "" ?></h2>
                     </div>
                     <div class="sub-w3l">

                         <div class="right-w3l">
                             <input type="submit" value="Đăng Ký" name="dangky">
                         </div>
                     </div>
                 </form>
             </div>
         </div>
         <!--//main-->
         <!--footer-->

     </div>

 </body>


 <script>
     var passField = document.querySelector(".show1");
     var passField2 = document.querySelector(".show2");
     var showBtn = document.querySelector("#show");
     showBtn.onclick = (() => {
         if (passField.type === "password") {
             passField.type = "text";

         } else {
             passField.type = "password";

         }
         if (passField2.type === "password") {
             passField2.type = "text";

         } else {
             passField2.type = "password";

         }
     });
 </script>