<?php 
require './models/User/DanhMuc.php';
function hienThiDanhMuc()
{
    $dm_loai_xe = layDSDanhMuc();
    $sl_xe = layDSSanPham();
    include('views/User/danh_muc/danh_sach_dm.php');
   
}
?>