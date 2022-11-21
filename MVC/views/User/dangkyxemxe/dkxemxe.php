<?php



// $query2 = "select * from khach_hang";
// // $item = getData($query2, FETCH_ALL);

// $name = $email = $password = $khung_gio = $hinh_anh = '';
// if (isset($_POST['datlich'])) {
//     $ten_khach_hang = $_POST['ten_khach_hang'];
//     $email = $_POST['email'];
//     $dia_chi = $_POST['dia_chi'];
//     $khung_gio = $_POST['khung_gio'];
//     $ma_xe=$_POST['ma_xe'];
//     // $hinh_anh = './models/images_sp/' . $_FILES['avatar']['name'];


//     $error = [];

//     if (empty($ten_khach_hang)) {
//         $error['ten_khach_hang'] = 'Bạn chưa nhập tên';
//     }
//     if (empty($khung_gio)) {
//         $error['khung_gio'] = 'Bạn chưa nhập mật khẩu';
//     }
//     if (empty($dia_chi)) {
//         $error['dia_chi'] = 'Bạn chưa nhập lại mật khẩu';
//     }
//     if (empty($email)) {
//         $error['email'] = 'Bạn chưa nhập email';
//     }
//     // if (empty($avata)) {
//     //     $error['avata'] = 'Bạn chưa nhập avata';
//     // }

//     // foreach ($item as $value) { //lặp để kiểm tra dữ liệu nhập vào form và dữ liệu trong DB
//     //     if ($_POST['ten_khach_hang'] == $value["ten_khach_hang"]) { // kiểm tra xem userten_khach_hang và password nhập vào có trùng với 
//     //         $error['trungtk'] = 'Email tài khoản này đã tồn tại';
//     //         break;
//     //     }
//     // }


//     if (!($error)) {
//         $sql = "SELECT ten_khach_hang FROM dat_lich where ten_khach_hang = :ten_khach_hang";
//         $conn = getConnect();
//         $stmt = $conn->prepare($sql);
//         $stmt->bindValue(':ten_khach_hang', $ten_khach_hang);
//         $stmt->execute();

//         $user = $stmt->fetch(PDO::FETCH_ASSOC);

//         if ($user) {
//             $error['trungtk'] = 'Tài khoản này đã tồn tại';
//         } else {
//             // $password = password_hash($password, PASSWORD_DEFAULT);
//             // $sql = $conn->prepare('
//             //     INSERT INTO khach_hang(ten_khach_hang, password, email)
//             //     VALUES (:ten_khach_hang, :password, :email)
//             //     ');
//             // $sql->bindParam(':ten_khach_hang', $ten_khach_hang);
//             // $sql->bindParam(':password', $password);
//             // $sql->bindParam(':email', $email);

//             // $sql->execute();
//             $sql = "INSERT INTO  dat_lich(ten_khach_hang,email,dia_chi,khung_gio,ma_xe) VALUES ('$ten_khach_hang','$email','$dia_chi','$khung_gio','$ma_xe','')";       
//             $conn = getConnect();
//             $statement = $conn->prepare($sql);
//             $statement->execute();
//             $sucss = 'Tạo Thành Công';
//         }
//     }
// }


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.phptutorial.net/app/css/style.css">
    <title>Register</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" href="images/logo.png" />
    <style>
        @-webkit-keyframes spin {
            0% {
                -webkit-transform: rotate(0deg);
            }

            100% {
                -webkit-transform: rotate(360deg);
            }
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        /* Add animation to "page content" */
        .animate-bottom {
            position: relative;
            -webkit-animation-name: animatebottom;
            -webkit-animation-duration: 0.5s;
            animation-name: animatebottom;
            animation-duration: 0.5s
        }

        @-webkit-keyframes animatebottom {
            from {
                bottom: -100px;
                opacity: 0
            }

            to {
                bottom: 0px;
                opacity: 1
            }
        }

        @keyframes animatebottom {
            from {
                bottom: -100px;
                opacity: 0
            }

            to {
                bottom: 0;
                opacity: 1
            }
        }

        #myDiv {
            display: none;
            text-align: center;
        }

        #sucss h2 {
            color: aqua;
        }

        #show {
            text-align: right;
            cursor: pointer;
        }

        body {
            width: 100vw;
            height: 100vh;
            object-fit: cover;
            object-position: center;
            background-image: url('assets/images/banner-image-1.jpg');
            background-size: 100% 100%;
            background-repeat: no-repeat;
            opacity: background-image 0.1;

        }

        form {
            opacity: 0.9;
        }

        main>form {
            margin: 5rem auto;
            width: 52rem;
        }

        button {
            width: 10rem;
            background-color: #61428f;
            height: 40px;
        }

        label {
            text-align: left;
        }
        #myDiv input{
            height: 40px;
            padding-left: 10px;
            font-weight: 500;
            font-size: 20px;
        }
    </style>
</head>

<body onload="myFunction()" style="margin:0;">

    <div id="loader"></div>

    <div style="display:none;" id="myDiv" class="animate-bottom">
        <main>

            <form action="" method="post">
             
                <div id="sucss">
                 
                </div>
                <h1>Đăng Ký Xem Xe</h1>
                <div>
                    <label>Tên Khách Hàng:</label>
                    <input type="text" name="ten_khach_hang" placeholder=" ">
                    <b><?php echo isset($error['ten_khach_hang']) ? $error['ten_khach_hang'] : "" ?></b>
                </div>
                <!-- <div class="mb-3">
                    <label for="avata" class="form-label">Avata:</label>
                    <input class="form-control" name='avatar' type="file" id="avata">
                    <b></b>
                </div> -->
                <div>
                    <label>Email:</label>
                    <input type="email" name="email">
                    <b><?php echo isset($error['email']) ? $error['email'] : "" ?></b>
                </div>
                <div>
                    <label>Địa Chỉ:</label>
                    <input type="text" name="dia_chi" class="show1">
                    <b><?php echo isset($error['dia_chi']) ? $error['dia_chi'] : "" ?></b>
                </div>
                <div>
                    <label>Khung Giờ:</label>
                    <input type="text" name="" id="" value="<?= $one_gio['khung_gio'] ?>">
                    <b><?php echo isset($error['khung_gio']) ? $error['khung_gio'] : "" ?></b>
                </div>
                <div>
                    <label>Tên Xe:</label>
                  
                        
                    
                          <input type="text" name="" id="" value="<?= $sp['ten_xe'] ?>">
                        
                    
                </div>
                
               
                <button name="dat_btn">Đặt Ngay</button>
                <b><?=  isset($_SESSION['dang_ky'])?$_SESSION['dang_ky']:"" ?></b>
             
                <footer><a href="index.php?url=ds_san_pham">Trang chủ</a></footer>
            </form>
        </main>
    </div>

    <script>
        var myVar;

        function myFunction() {
            myVar = setTimeout(showPage, 1000);
        }

        function showPage() {
            document.getElementById("loader").style.display = "none";
            document.getElementById("myDiv").style.display = "block";
        }
    </script>

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