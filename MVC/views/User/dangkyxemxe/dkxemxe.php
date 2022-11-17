<?php
  if(isset($_POST['dat_lich'])){
    $ma_xe=$_POST['ma_xe'];
    $ten_khach_hang=$_POST['ten_khach_hang'];
    $email=$_POST['email'];
    $dia_chi=$_POST['dia_chi'];
    $khung_gio=$_POST['khung_gio'];
    $error=[];
    // if($ten_khach_hang=''){
    //     $error['ten_khach_hang']="Tên khách hàng không được để trống";
    // }
    // if($email=''){
    //     $error['email']="Email không được để trống";
    // }
    // if($dia_chi=''){
    //     $error['dia_chi']="Địa chỉ không được để trống";
    // }
    if(!$error) {
        $sql = "INSERT INTO dat_lich(ten_khach_hang, email, dia_chi,khung_gio, ma_xe) VALUES ('$ten_khach_hang','$email','$dia_chi','$khung_gio','$ma_xe')";       
        $conn = getConnect();
        $statement = $conn->prepare($sql);
        $statement->execute();
        // $sucss = 'Tạo Thành Công';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.phptutorial.net/app/css/style.css">
    <title>Đăng Ký xem Xe</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="shortcut icon" href="images/logo.png" />
        <!-- <link rel="stylesheet" href="assets/css/dangkyxemxe.css"> -->
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
    /* background-image: url('https://images.pexels.com/photos/120049/pexels-photo-120049.jpeg?cs=srgb&dl=pexels-mike-b-120049.jpg&fm=jpg'); */
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
        <form action="" method="POST">
            <h1>Đăng Ký Xem Xe</h1>
            <div>
                <label >Mã Xe</label>
                <input type="text" name="ma_xe" >
            </div>
            <div>
                <label >Tên khách Hàng:</label>
                <input type="text" name="ten_khach_hang"><br>
                <!-- <b><?php echo isset($error['ten_khach_hang']) ? $error['ten_khach_hang'] : "" ?></b> -->
            </div>
            <div>
                <label >Email:</label>
                <input type="email" name="email" >
                <!-- <b><?php echo isset($error['email']) ? $error['email'] : "" ?></b> -->
            </div>
            <div>
                <label >Địa chỉ</label>
                <input type="text" name="dia_chi" class="show1">
                <!-- <b><?php echo isset($error['dia_chi']) ? $error['dia_chi'] : "" ?></b> -->
            </div>
            <div>
                <label >Khung Giờ Xem Xe</label>
                <input type="text" name="khung_gio" class="show1">
            </div>
            <button type="submit" name="dat_lich">Đặt Lịch</button>
            <div id="sucss">
                <h2><b><?php echo isset($sucss) ? $sucss : "" ?></b> </h2>
            </div>
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