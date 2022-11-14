<?php

// session_start();

// $query2 = "select * from khach_hang";
// // $item = getData($query2, FETCH_ALL);

// $name = $email = $password = $password2 = $hinh_anh = '';
if (isset($_POST['dangky'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password2 = $_POST['password2'];
    // $hinh_anh = './models/images_sp/' . $_FILES['avatar']['name'];


    $error = [];

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
    // if (empty($avata)) {
    //     $error['avata'] = 'Bạn chưa nhập avata';
    // }

    // foreach ($item as $value) { //lặp để kiểm tra dữ liệu nhập vào form và dữ liệu trong DB
    //     if ($_POST['username'] == $value["username"]) { // kiểm tra xem userusername và password nhập vào có trùng với 
    //         $error['trungtk'] = 'Email tài khoản này đã tồn tại';
    //         break;
    //     }
    // }

  
    if (!($error)) {
        $sql = "SELECT username FROM khach_hang where username = :username";
        $conn = getConnect();
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(':username', $username);
        $stmt->execute();

        $user = $stmt->fetch(PDO::FETCH_ASSOC);
      
        if ($user) {
            $error['trungtk'] = 'Tài khoản này đã tồn tại';
        } else {
            // $password = password_hash($password, PASSWORD_DEFAULT);
            $sql = $conn->prepare('
                INSERT INTO khach_hang(username, password, email)
                VALUES (:username, :password, :email)
                ');
            $sql->bindParam(':username', $username);
            $sql->bindParam(':password', $password);
            $sql->bindParam(':email', $email);

            $sql->execute();
            $sucss = 'Tạo Thành Công';
        }
    }
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.phptutorial.net/app/css/style.css">
    <title>Register</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
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
        background-image: url('https://images.pexels.com/photos/120049/pexels-photo-120049.jpeg?cs=srgb&dl=pexels-mike-b-120049.jpg&fm=jpg');
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
    }
    label{
        text-align: left;
    }
    </style>
</head>

<body onload="myFunction()" style="margin:0;">

    <div id="loader"></div>

    <div style="display:none;" id="myDiv" class="animate-bottom">
    <main>
        <form action="" method="post">
            <div id="sucss">
                <h2><b><?php echo isset($sucss) ? $sucss : "" ?></b> </h2>
            </div>
            <h1>Sign Up</h1>
            <div>
                <label for="username">Username:</label>
                <input type="text" name="username" id="username" placeholder=" ">
                <b><?php echo isset($error['username']) ? $error['username'] : "" ?></b>
                <b><?php echo isset($error['trungtk']) ? $error['trungtk'] : "" ?></b>
            </div>
            <!-- <div class="mb-3">
                    <label for="avata" class="form-label">Avata:</label>
                    <input class="form-control" name='avatar' type="file" id="avata">
                    <b></b>
                </div> -->
            <div>
                <label for="email">Email:</label>
                <input type="email" name="email" id="email">
                <b><?php echo isset($error['email']) ? $error['email'] : "" ?></b>
            </div>
            <div>
                <label for="password">Password:</label>
                <input type="password" name="password" id="password" class="show1">
                <b><?php echo isset($error['password']) ? $error['password'] : "" ?></b>
            </div>
            <div>
                <label for="password2">Password Again:</label>
                <input type="password" name="password2" id="password2" class="show2">
                <b><?php echo isset($error['password2']) ? $error['password2'] : "" ?></b>
                <b><?php echo isset($error['password_lost']) ? $error['password_lost'] : "" ?></b>
            </div>
            <div id="show">
                <span><i class="fa-solid fa-eye"></i>
                </span>
                <span>Hiển thị mật khẩu ?</span>
               
            </div>

            <button type="submit" name="dangky">Register</button>
            <footer>Already a member? <a href="index.php?url=login">Login here</a></footer>
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