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
   
//     include('views/User/san_pham/danh_sach_ct.php');
   
// }
function logins()
{
   login();
    include('views/User/tai_khoan/login.php');
   
}
function logouts(){
  
   include('views/User/tai_khoan/logout.php');
   logout();
   
}
function dangkyxem(){

   $sp = lay1SanPham($_GET['ma_xe']);
   $one_gio = lay1KhungGio($_GET['ma_gio']);
   $kh = layDSKhachHang();
   dkxemxe();
 
   include('views/User/dangkyxemxe/dkxemxe.php');
 }

?>