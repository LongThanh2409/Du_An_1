<?php 
require './models/User/SanPham.php';
require './maill/sendmail.php';
function hienThiSanPham()
{
    
    $ds_sp_xe = layDSSanPham();
    $dm_loai_xe = lay5DSDanhMuc();
    include('views/User/san_pham/list_san_pham.php');
   
}
function hienThi1SanPham()
{
    // $dm_loai_xe = layDSDanhMuc();
    // $ds_sp_xe_cl = lay3SanPhamCungLoai();
    $sp = lay1SanPham();
    binhLuans();
    // $albums =layanhSanPham();
    $albums = layAnh();
    $bl = binhLuan();
    
    dat_xem();
    // $khachHang= MocKH();
    // $xe= MocXe();
    $cung_loai = SanPhamCungLoai4();
    include('views/User/san_pham/san_pham_ct.php');
   
}

function hienThiSanPhamTheoDM()
{
 
    $sp_dm = laySanPhamTheoDM($_GET['ma_loai']);
   
    include('views/User/danh_muc/sp_theo_dm.php');
   
}
// function themMoiBL(){
   
   
//     include('views/User/san_pham/san_pham_ct.php');
// }
// function hienThiSanPhamTheoGio()
// {
//     $sp_gio = laySanPhamTheoGio($_GET['ma_gio']);
   
//     include('views/User/san_pham/san_pham_gio.php');
   
// }
// function hienThiKhungGio()
// {
//     $ds_gio = layKhungGio();
//     include('views/User/san_pham/danh_sach_gio.php');
   
   
// }
// function timKiemSanPhams(){
    
//     $ds_sp_xe = timKiemSanPham($_GET['key']);
//     include ('views/User/san_pham/danh_sach.php');
// }
?>