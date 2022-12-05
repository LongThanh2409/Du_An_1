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

function layDSDK_2() {
  $sql = "SELECT * FROM don WHERE trang_thai= 2";
  $dk = getData($sql, FETCH_ALL);
  return $dk;
  
}
function ctDangKy1(){
  $sql = "SELECT * FROM xe,don,khach_hang WHERE xe.ma_xe = don.ma_xe AND khach_hang.ma_kh = don.ma_kh ";
  $ct = getData($sql, FETCH_ALL);
  return $ct;
}
function ctDangKy($ma_dat){
  $sql = "SELECT * FROM xe,don,khach_hang WHERE xe.ma_xe = don.ma_xe AND khach_hang.ma_kh = don.ma_kh AND ma_dat = $ma_dat";
  $ct = getData($sql, FETCH_ONE);
  return $ct;
}
function suaDangKy()
{  

   
  $trang_thai = '1';
        $ma_dat = $_GET['ma_dat'];
        if(isset($_POST['btn_duyet'])){
          $sql = "UPDATE don SET trang_thai='$trang_thai' WHERE  ma_dat  =$ma_dat";
          $conn = getConnect();
          $statement = $conn->prepare($sql);
          $statement->execute();
         header('Location:index2.php?url=ds_dang_ky_1');
        }

  
}
function huyDon()
{  
  $trang_thai = '2';
        $ma_dat = $_GET['ma_dat'];
        if(isset($_POST['btn_duyet1'])){
          $sql = "UPDATE don SET trang_thai='$trang_thai' WHERE  ma_dat  =$ma_dat";
          $conn = getConnect();
          $statement = $conn->prepare($sql);
          $statement->execute();
          header('Location:index2.php?url=ds_dang_ky_2');
        }

  
}
function xoaDangKy_1()
{  
    $ma_dat = $_GET['ma_dat'];   
    if(isset($_POST['btn_delete'])){
        $sql = "DELETE FROM don WHERE ma_dat=$ma_dat ";
        $conn = getConnect();
        $statement = $conn->prepare($sql);
        $statement->execute();
        header('Location:index2.php?url=ds_dang_ky_1');
    }
      }
function xoaDangKy_2()
      {  
          $ma_dat = $_GET['ma_dat'];   
          if(isset($_POST['btn_delete'])){
              $sql = "DELETE FROM don WHERE ma_dat=$ma_dat ";
              $conn = getConnect();
              $statement = $conn->prepare($sql);
              $statement->execute();
              header('Location:index2.php?url=ds_dang_ky_2');
          }
            }
        
      

  
 



