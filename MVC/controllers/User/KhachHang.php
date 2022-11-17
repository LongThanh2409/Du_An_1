<?php 
require './models/KhachHang.php';
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
   $sp_gio = laySanPhamTheoGio();
   $ds_kg = layKhungGio(); 
   $ds_sp = layDSSanPham(); 
   dkxemxe();
   include('views/User/dangkyxemxe/dkxemxe.php');
 }

?>