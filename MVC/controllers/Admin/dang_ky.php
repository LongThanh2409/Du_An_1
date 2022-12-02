<?php

require('models/Admin/dang_ky.php');
function hienThiDangKy_0() { 
    $dk_0 = layDSDK_0();

    include('views/Admin/dang_ky/chua_duyet.php');
}
function hienThiDangKy_1() { 
    $dk_1 = layDSDK_1();
 
    include('views/Admin/dang_ky/da_duyet.php');
}
function chiTietDangKy_0() { 
    $ct = ctDangKy($_GET['ma_dat']);
    suaDangKy();
    include('views/Admin/dang_ky/chitiet_0.php');
}
function chiTietDangKy_1() { 
    $ct = ctDangKy($_GET['ma_dat']);
    xoaDangKy();
    include('views/Admin/dang_ky/chitiet_1.php');
}
function formSuaDangKy(){
   
    suaDangKy();
    include('views/Admin/dang_ky/chitiet_0.php');
 }
 function xoaDSDK(){
    xoaDangKy();
    include('views/Admin/dang_ky/da_duyet.php');
 }