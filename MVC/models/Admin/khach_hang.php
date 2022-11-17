<?php
require_once('models/db.php');
function layDSKhachHang() {
    $sql = "SELECT * FROM khach_hang";
    $kh = getData($sql, FETCH_ALL);
    return $kh;
}
function layMotKH($ma_kh) {
    $sql = "SELECT * FROM khach_hang WHERE ma_kh= $ma_kh";
    $kh = getData($sql, FETCH_ONE);
    return $kh;
}
function themMoiKH(){
    if (isset($_POST['btn_them'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $level = $_POST['level'];
        if($username != '' && $password != '' && $email != '' && $level != ''){
            $sql = "INSERT INTO  khach_hang(username,password,email,level) VALUES ('$username' , '$password','$email' , '$level')";       
            $conn = getConnect();
            $statement = $conn->prepare($sql);
            $statement->execute();
            header('Location:index2.php?url=ds_khach_hang');
        }
      
    }
}
function suaKH(){
    if (isset($_POST['btn_sua'])) {
        $ma_kh= $_GET['ma_kh'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $level = $_POST['level'];
        $sql = "UPDATE  khach_hang SET username='$username',password='$password',email='$email',level='$level' WHERE  ma_kh  =$ma_kh ";       
        $conn = getConnect();
        $statement = $conn->prepare($sql);
        $statement->execute();
        header('Location:index2.php?url=ds_khach_hang');
    }
}
function xoaKhachHang()
{
    $ma_kh = $_GET['ma_kh'];
    $sql = "DELETE FROM khach_hang WHERE ma_kh=$ma_kh";
    $conn = getConnect();
    $statement = $conn->prepare($sql);
    $statement->execute();
    header('Location:index2.php?url=ds_khach_hang');
}
function dkxemxe(){
    if(isset($_POST['dat_lich'])){
        $ma_xe=$_POST['ma_xe'];
        $ten_khach_hang=$_POST['ten_khach_hang'];
        $email=$_POST['email'];
        $dia_chi=$_POST['dia_chi'];
        $khung_gio=$_POST['khung_gio'];
       
            $sql = "INSERT INTO `dat_lich` (`ma_dat`, `ten_khach_hang`) VALUES (NULL, 'long')";
            $conn = getConnect();
            $statement = $conn->prepare($sql);
            $statement->execute();
            $sucss = 'Tạo Thành Công';
    
        echo   $ten_khach_hang;
    }
}