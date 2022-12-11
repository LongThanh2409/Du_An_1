<?php
require('models/Admin/loai_xe.php');

function hienThiLoaiXe() {
    $ds_lx = layDSLoaiXe(); 
    include('views/Admin/loai_xe/danh_sach.php');
}
function formThemMoiLoaiXe(){
    themMoiLoaiXe();
//     session_start();
// if(!isset($_SESSION['admin'])){
//  header('location:index.php');
// }
    include('views/Admin/loai_xe/them_moi.php');
}
function xoaDSLX()
 { 
   xoaLoaiXe();

    include('views/Admin/loai_xe/danh_sach.php');

 }
 function formSuaLoaiXe(){
    $sua=  layMotLoaiXe($_GET['ma_loai']);
  suaLoaiXe();
 
    include('views/Admin/loai_xe/chinh_sua.php');
 }