<?php
require('models/Admin/khung_gio.php');

function hienThiKhungGio() {
    $ds_kg = layDSKhungGio(); 
    include('views/Admin/khung_gio/danh_sach.php');
}
function  formThemMoiKhungGio(){
    themMoiKhungGio();
    include('views/Admin/khung_gio/them_moi.php');
}
function xoaDSKG()
 { 
   xoaKhungGio();
    include('views/Admin/khung_gio/danh_sach.php');
 }
 function formSuaKhungGio(){
    $sua_kg=  layMotKhungGio($_GET['ma_gio']);
  suaKhungGio();
 
    include('views/Admin/khung_gio/chinh_sua.php');
 }