<?php
require('models/Admin/dang_ky.php');
function hienThiDangKy() { 
    $dk = layDSDK();
    include('views/Admin/dang_ky/danh_sach.php');
}
function formSuaDangKy(){
    suaDangKy();
    include('views/Admin/dang_ky/danh_sach.php');
 }
 function xoaDSDK(){
    xoaDangKy();
    include('views/Admin/dang_ky/danh_sach.php');
 }