<?php

require('models/Admin/dang_ky.php');
function hienThiDangKy_0() { 
    $dk_0 = layDSDK_0();
    $kh1 = MocKH_0();
    $xe1 = MocXe_0();
    include('views/Admin/dang_ky/chua_duyet.php');
}
function hienThiDangKy_1() { 
    $dk_1 = layDSDK_1();
    $kh1 = MocKH_1();
    $xe1 = MocXe_1();
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