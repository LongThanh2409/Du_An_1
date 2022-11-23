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
                $_SESSION['ma_kh']= $value['ma_kh'];
                $_SESSION['username'] = $value['username'];
               
             
                header('location:index.php?url=ds_san_pham');
            } else {
                $_SESSION['error'] = "Tài khoản hoặc mật khẩu không đúng";
            }
        }
        else{
            $_SESSION['error_tk']="Tài khoản không đúng";
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
       header('location:index.php');
   
     
   
    
}

function dkxemxe()
{
    if (isset($_POST['dat_btn'])) {
        $ma_xe = $_GET['ma_xe'];
        $ten_khach_hang = $_POST['ten_khach_hang'];
        $email = $_POST['email'];
        $dia_chi = $_POST['dia_chi'];
        $ma_gio = $_GET['ma_gio'];
       
        if(isset($_SESSION['username'])){
        $ma_kh = $_SESSION['ma_kh'];
       
        $sql = "INSERT INTO  dat_lich(ten_khach_hang,email,dia_chi,ma_gio, ma_xe,ma_kh) VALUES ('$ten_khach_hang' , '$email','$dia_chi' , '$ma_gio', '$ma_xe','$ma_kh')";
        getData($sql, FETCH_ALL);
        $_SESSION['thanh_cong']= 'Đăng ký thành Công';
        
        }
        else{
            $_SESSION['dang_ky']="Bạn cần đăng nhập mới có thể đăng ký xe";
        }
    }
}
function lay1KhungGio($ma_gio)
{
    $sql = "SELECT * FROM khung_gio where ma_gio=".$ma_gio;
    $one_gio = getData($sql, FETCH_ONE);
    return $one_gio;
}
function layDSKhachHang(){
    $sql = "SELECT * FROM khach_hang";
    $kh = getData($sql , FETCH_ALL);
    return $kh;
}

?>
