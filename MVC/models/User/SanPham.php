<!-- <?php

// out 3 sản phẩm

// out all sp
function layDSSanPham()
{
    if(isset($_GET['key'])&&($_GET['key']!="")){
        $key =$_GET['key'];
        $sql = "SELECT * FROM xe WHERE ten_xe  like '%$key%'"
        .$sql ="SELECT * FROM loai_xe WHERE ten_loai  like '%$key%'" ;
        $list_sp = getData($sql, FETCH_ALL);
    }
   
    
    else{
        $key ="";
        $sql = "SELECT * FROM xe";
        $list_sp = getData($sql, FETCH_ALL);
    
    }
   
    return $list_sp;
}
// function lay3SanPhamCungLoai()
// {
//     if(isset($_GET['ma_xe'])&&($_GET['ma_xe']!="")){
//         $ma_xe =$_GET['ma_xe'];
//         $ma_loai =$_GET['loai'];
//         $sql = "SELECT * FROM xe WHERE 1 AND ma_xe <> $ma_xe AND ma_loai = $ma_loai ";
//         $list_sp = getData($sql, FETCH_ALL);
//     }
   
    
//     else{
//         $ma_xe ="";
//         $sql = "SELECT * FROM xe";
//         $list_sp = getData($sql, FETCH_ALL);
    
//     }
   
//     return $list_sp;
// }
// // sanpham chi tiết
function lay1SanPham()
{
    if(isset($_GET['ma_xe'])){
        $ma_xe = $_GET['ma_xe'];
        $sql = "SELECT * FROM xe where ma_xe=".$ma_xe;
        $sp_ct = getData($sql, FETCH_ONE);
        return $sp_ct;
    }
    }
   
// // out sản phẩm theo danh mục
function laySanPhamTheoDM($ma_loai)
{
    $sql = "SELECT * FROM  xe where 1 AND ma_loai= $ma_loai";
  
    $sp_dms = getData($sql, FETCH_ALL);
    return $sp_dms;
}
function SanPhamCungLoai4()
{
    if(isset($_GET['ma_loai']) && isset($_GET['ma_xe']) ){
        $ma_loai = $_GET['ma_loai'];
        $ma_xe = $_GET['ma_xe'];
   
    $sql = "SELECT * FROM  xe where 1 AND ma_loai= $ma_loai AND ma_xe <> $ma_xe limit 0,4";
    $sp_cl = getData($sql, FETCH_ALL);
    return $sp_cl;
}
   
   
}
// // lấy sản phẩm theo khung giờ
// function laySanPhamTheoGio()
// {
//     if(isset($_GET['ma_gio'])&&($_GET['ma_gio']!="")){
//         $ma_gio =$_GET['ma_gio'];
//         $sql = "SELECT * FROM  xe where 1 AND ma_gio= $ma_gio";
//         $sp_gio = getData($sql, FETCH_ALL);
//     }
   
    

  
  
    
//     return $sp_gio;
// }
// // danh_sách_gio
// function layKhungGio()
// {
//     $sql = "SELECT * FROM  khung_gio";
  
//     $ds_gio = getData($sql, FETCH_ALL);
//     return $ds_gio;
// }


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
?> -->