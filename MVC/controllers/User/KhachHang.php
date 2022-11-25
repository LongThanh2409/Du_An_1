<?php 
require './models/User/KhachHang.php';
// function hienThiSanPham()
// {
//     $ds_sp_xe = layDSSanPham();
//     $ds3_sp_xe = layDS3SanPham();
//     include('views/User/san_pham/danh_sach.php');
   
// }
// function hienThi1SanPham()
// {
//     $sp = lay1SanPham($_GET['ma_xe']);
   
//     include('views/User/san_pham/danh_sach_ct.php');
   
// }
function logins()
{
   login();
    include('views/User/tai_khoan/login.php');
   
}
function logouts(){
  
   include('views/User/tai_khoan/logout.php');
   logout();
   
}
function dangkys(){
    include('views/User/tai_khoan/dangky.php');
   dangky();
}
// function dangkyxem(){

//    $sp = lay1SanPham($_GET['ma_xe']);
//    $one_gio = lay1KhungGio($_GET['ma_gio']);
//    $kh = layDSKhachHang();
//    dkxemxe();
 
//    include('views/User/dangkyxemxe/dkxemxe.php');
//  }
class C_khach_hang
{
    public function __construct()
    {

        include_once('./models/User/KhachHang.php');
    }

    public function dang_ky_xem_xe()
    {
        if(isset($_POST['dat_xem_xe']))
        {   $ma_xe=$_GET['ma_xe'];
         
            $ten_khach_hang=$_POST['ten_khach_hang'];
            $ngay = date_create($_POST["ngay_xem"]);
            $ngay_sinh = date_format($ngay, "Y-m-d");
            $dia_chi=$_POST['dia_chi'];
            $so_dien_thoai=$_POST['so_dien_thoai'];
            $email=$_POST['email'];
            $m_khach_hang=new M_khach_hang();
            $ma_kh= $m_khach_hang->themKhachHangDat($ma_xe,$ma_kh,$ten_khach_hang,$dia_chi,$so_dien_thoai,$email,$ngay_xem);
       
            
             include('templates/layout.php');
         }
      }
}
   

?>