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
function formSuaDangKy(){
    suaDangKy();
    include('views/Admin/dang_ky/chua_duyet.php');
 }
 function xoaDSDK(){
    xoaDangKy();
    include('views/Admin/dang_ky/da_duyet.php');
 }