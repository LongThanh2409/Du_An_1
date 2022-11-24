<?php
require_once('models/db.php');
function layDSKhachHang()
{
    $sql = "SELECT * FROM khach_hang ORDER BY ma_kh DESC";
    $kh = getData($sql, FETCH_ALL);
    return $kh;
}
function layMotKH($ma_kh)
{
    $sql = "SELECT * FROM khach_hang WHERE ma_kh= $ma_kh";
    $kh = getData($sql, FETCH_ONE);
    return $kh;
}
function themMoiKH()
{
    if (isset($_POST['btn_them'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $level = $_POST['level'];
        $ten_khach_hang = $_POST['ten_khach_hang'];
        $so_dien_thoai = $_POST['so_dien_thoai'];
        if ($username != '' && $password != '' && $email != '' && $level != '' && $ten_khach_hang != '' && $so_dien_thoai != ''  ) {
            $sql = "INSERT INTO  khach_hang(ten_khach_hang, username,password,email, so_dien_thoai, level) VALUES ( '$ten_khach_hang','$username' , '$password','$email','$so_dien_thoai', '$level')";
            $conn = getConnect();
            $statement = $conn->prepare($sql);
            $statement->execute();
            header('Location:index2.php?url=ds_khach_hang');
        }
    }
}
function suaKH()
{
    if (isset($_POST['btn_sua'])) {
        $ma_kh = $_GET['ma_kh'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $level = $_POST['level'];
        $ten_khach_hang = $_POST['ten_khach_hang'];
        $so_dien_thoai = $_POST['so_dien_thoai'];
        $sql = "UPDATE  khach_hang SET ten_khach_hang='$ten_khach_hang', username='$username',password='$password',email='$email',so_dien_thoai='$so_dien_thoai',level='$level' WHERE  ma_kh  =$ma_kh ";
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

