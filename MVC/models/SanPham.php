<?php
require "db.php";
// out 3 sản phẩm
function layDS3SanPham()
{
    $sql = "SELECT * FROM xe where 1 order by ma_xe desc limit 0,3";
    $list_sp = getData($sql, FETCH_ALL);
    return $list_sp;
}
// out all sp
function layDSSanPham($key)
{
    if(isset($_GET['key'])&&($_GET['key']!="")){
        $sql = "SELECT * FROM xe WHERE ten_xe like '%$key%'";
        $list_sp = getData($sql, FETCH_ALL);
    }
   
    else{
        $sql = "SELECT * FROM xe";
        $list_sp = getData($sql, FETCH_ALL);
    
    }
   
    return $list_sp;
}
// sanpham chi tiết
function lay1SanPham($ma_xe)
{
    $sql = "SELECT * FROM xe where ma_xe=".$ma_xe;
    $sp_ct = getData($sql, FETCH_ONE);
    return $sp_ct;
}
// out sản phẩm theo danh mục
function laySanPhamTheoDM($ma_loai)
{
    $sql = "SELECT * FROM  xe where 1 AND ma_loai= $ma_loai";
  
    $sp_dms = getData($sql, FETCH_ALL);
    return $sp_dms;
}
// lấy sản phẩm theo khung giờ
function laySanPhamTheoGio($ma_gio)
{
    $sql = "SELECT * FROM  xe where 1 AND ma_gio= $ma_gio";
  
    $sp_gio = getData($sql, FETCH_ALL);
    return $sp_gio;
}
// danh_sách_gio
function layKhungGio()
{
    $sql = "SELECT * FROM  khung_gio";
  
    $ds_gio = getData($sql, FETCH_ALL);
    return $ds_gio;
}
// tim san phâm
// function timKiemSanPham($key){
//     if(isset($_GET['key'])&&($_GET['key']!="")){
//         $sql = "SELECT * FROM xe WHERE ten_xe like '%$key%'";
//         $timKiem = getData($sql, FETCH_ALL);
//     }
   
//     else{
//         $sql = "SELECT * FROM xe";
//         $timKiem = getData($sql, FETCH_ALL);
    
//     }
   
   
//     return $timKiem;
// }
?>