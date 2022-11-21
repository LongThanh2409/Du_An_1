<?php

// out 3 sản phẩm
function layDS3SanPham()
{
    $sql = "SELECT * FROM xe where 1 order by ma_xe desc limit 0,3";
    $list_sp = getData($sql, FETCH_ALL);
    return $list_sp;
}
// out all sp
function layDSSanPham()
{
    if(isset($_GET['key'])&&($_GET['key']!="")){
        $key =$_GET['key'];
        $sql = "SELECT * FROM xe WHERE ten_xe like '%$key%'";
        $list_sp = getData($sql, FETCH_ALL);
    }
   
    
    else{
        $key ="";
        $sql = "SELECT * FROM xe";
        $list_sp = getData($sql, FETCH_ALL);
    
    }
   
    return $list_sp;
}
function lay3SanPhamCungLoai()
{
    if(isset($_GET['ma_xe'])&&($_GET['ma_xe']!="")){
        $ma_xe =$_GET['ma_xe'];
        $ma_loai =$_GET['loai'];
        $sql = "SELECT * FROM xe WHERE 1 AND ma_xe <> $ma_xe AND ma_loai = $ma_loai ";
        $list_sp = getData($sql, FETCH_ALL);
    }
   
    
    else{
        $ma_xe ="";
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
function laySanPhamTheoGio()
{
    if(isset($_GET['ma_gio'])&&($_GET['ma_gio']!="")){
        $ma_gio =$_GET['ma_gio'];
        $sql = "SELECT * FROM  xe where 1 AND ma_gio= $ma_gio";
        $sp_gio = getData($sql, FETCH_ALL);
    }
   
    

  
  
    
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