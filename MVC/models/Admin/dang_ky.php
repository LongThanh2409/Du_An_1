<?php
require_once('models/db.php');
function layDSDK() {
    $sql = "SELECT * FROM dat_lich";
    $dk = getData($sql, FETCH_ALL);
    return $dk;
}
function suaDangKy()
{  

   
  $trang_thai = 'Đã Duyệt';
        $ma_dat = $_GET['ma_dat'];
        $sql = "UPDATE dat_lich SET trang_thai='$trang_thai' WHERE  ma_dat  =$ma_dat";
        $conn = getConnect();
        $statement = $conn->prepare($sql);
        $statement->execute();
        header('Location:index2.php?url=ds_dang_ky');
  
}
function xoaDangKy()
{  
    $ma_dat = $_GET['ma_dat'];   
        $sql = "DELETE FROM dat_lich WHERE ma_dat=$ma_dat ";
        $conn = getConnect();
        $statement = $conn->prepare($sql);
        $statement->execute();
        header('Location:index2.php?url=ds_dang_ky');
      }
        
      

  
 



