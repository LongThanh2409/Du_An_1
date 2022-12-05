<?php
require('models/Admin/hinh.php');
function hienThiHinh() {
    $ds_hinh = layDSHinh(); 
    $ds_xe = layDSXe(); 
    $ds_hinh1 = layHinh1();
    $xe1 = MocTenXe();
  
    include('views/Admin/hinh/danh_sach.php');
}

function xoaDSHinh()
 { 
   xoaHinh();
    include('views/Admin/hinh/danh_sach.php');
 }
 function formSuaHinh(){
    $ds_xe = layDSXe(); 
    $ds_hinh = layDSHinh(); 
    $sua=  layMotHinh($_GET['id_anh']);
    SuaHinh();
    include('views/Admin/hinh/chinh_sua.php');
 }