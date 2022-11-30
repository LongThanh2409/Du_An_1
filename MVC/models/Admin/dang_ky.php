<?php
require_once('models/db.php');
function layDSDK_0() {
    $sql = "SELECT * FROM don WHERE trang_thai= 0";
    $dk = getData($sql, FETCH_ALL);
    return $dk;
    
}

function layDSDK_1() {
  $sql = "SELECT * FROM don WHERE trang_thai= 1";
  $dk = getData($sql, FETCH_ALL);
  return $dk;
  
}

function MocKH()
{ 
  $sql = "SELECT khach_hang.ten_khach_hang,khach_hang.ma_kh
  FROM khach_hang,don
  WHERE khach_hang.ma_kh = don.ma_kh ";

    $kh1 = getData($sql, FETCH_ALL);
    return $kh1;
}

function MocXe()
{

  $sql = "SELECT xe.ten_xe,xe.ma_xe
  FROM xe,don
  WHERE xe.ma_xe = don.ma_xe ";
    $xe1 = getData($sql, FETCH_ALL);
    return $xe1;
}
function suaDangKy()
{  

   
  $trang_thai = '1';
        $ma_dat = $_GET['ma_dat'];
        $sql = "UPDATE don SET trang_thai='$trang_thai' WHERE  ma_dat  =$ma_dat";
        $conn = getConnect();
        $statement = $conn->prepare($sql);
        $statement->execute();
        header('Location:index2.php?url=ds_dang_ky_1');
  
}
function xoaDangKy()
{  
    $ma_dat = $_GET['ma_dat'];   
        $sql = "DELETE FROM don WHERE ma_dat=$ma_dat ";
        $conn = getConnect();
        $statement = $conn->prepare($sql);
        $statement->execute();
        header('Location:index2.php?url=ds_dang_ky_1');
      }
        
      

  
 



