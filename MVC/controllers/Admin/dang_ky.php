<?php
require('models/Admin/dang_ky.php');
function hienThiDangKy() { 
    $dk = layDSDK();
    include('views/Admin/dang_ky/danh_sach.php');
}