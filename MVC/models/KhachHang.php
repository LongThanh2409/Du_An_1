<?php

function login(){


if (isset($_POST['dangnhap'])) {
   
    $sql = "SELECT * FROM khach_hang";
    $user = getData($sql, FETCH_ALL);
    foreach ($user as $value) {
        if (isset($_POST['dangnhap'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            // $password = password_hash($password, PASSWORD_DEFAULT);

            // kiểm tra
            if ($username == $value['username'] && $password == $value['password'] && $value['level'] == 1) {
                $_SESSION['admin'] = $value['username'];
                header('location:index2.php?url=ds_loai_xe');
            } else if ($username == $value['username'] && $password == $value['password'] && $value['level'] == 2) {
                
                $_SESSION['username'] = $value['username'];
               
             
                header('location:index.php?url=ds_san_pham');
            } else {
                $_SESSION['error'] = "Tài khoản mật khẩu không đúng";
            }
        }             
    }
    
}
}
function logout(){
    
       
    
     
        if(isset($_SESSION['username'])){
           unset($_SESSION['username']);
       }
       if(isset($_SESSION['admin'])){
           unset($_SESSION['admin']);
       }
       header('location:index.php?url=ds_san_pham');
   
     
   
    
}

function dkxemxe()
{
    if (isset($_POST['dat_btn'])) {
        $ma_xe = $_POST['ma_xe'];
        $ten_khach_hang = $_POST['ten_khach_hang'];
        $email = $_POST['email'];
        $dia_chi = $_POST['dia_chi'];
        $ma_gio = $_POST['ma_gio'];
      
        $sql = "INSERT INTO  dat_lich(ten_khach_hang,email,dia_chi,ma_gio, ma_xe) VALUES ('$ten_khach_hang' , '$email','$dia_chi' , '$ma_gio', '$ma_xe')";
        getData($sql, FETCH_ALL);
        echo   $ten_khach_hang;
        echo   $sql;
    }
}
?>
