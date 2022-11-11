<?php 
require './models/DanhMuc.php';
function hienThiDanhMuc()
{
    $dm_loai_xe = layDSDanhMuc();
   
    include('views/User/san_pham/danh_sach_dm.php');
   
}
?>