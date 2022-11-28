<?php 
require './models/User/KhachHang.php';
// function hienThiSanPham()
// {
//     $ds_sp_xe = layDSSanPham();
//     $ds3_sp_xe = layDS3SanPham();
//     include('views/User/san_pham/danh_sach.php');
   
// }
// function hienThi1SanPham()
// {
//     $sp = lay1SanPham($_GET['ma_xe']);
   
//     include('views/User/san_pham/danh_sach_cts.php');
   
// }
function logins()
{
   login();
    include('views/User/tai_khoan/login.php');
   
}
function logouts(){
    logout();
   include('views/User/tai_khoan/logout.php');

   
}
function dangkys(){
    include('views/User/tai_khoan/dangky.php');
   dangky();
}
// function dang_ky_xem_xe(){
//     // $kh = layDSKhachHang();
//     include('views/User/san_pham/san_pham_ct.php');
  
// }


?>