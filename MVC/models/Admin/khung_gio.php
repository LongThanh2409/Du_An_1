<?php
require_once('models/db.php');
function layDSKhungGio() {
    $sql = "SELECT * FROM khung_gio";
    $khung_gio = getData($sql, FETCH_ALL);
    return $khung_gio;
}
function layMotKhungGio($ma_gio) {
    $sql = "SELECT * FROM khung_gio WHERE ma_gio= $ma_gio";
    $khung_gio = getData($sql, FETCH_ONE);
    return $khung_gio;
}
function themMoiKhungGio()
{
    if (isset($_POST['btn_them'])) {
        $khung_gio = $_POST['khung_gio'];    
        if($khung_gio !=''){                
        $sql = "INSERT INTO  khung_gio( khung_gio) VALUES ( '$khung_gio')";       
        $conn = getConnect();
        $statement = $conn->prepare($sql);
        $statement->execute();
        header('Location:index2.php?url=ds_khung_gio');
        }else{
            $khung_gio_err = 'NHẬP LẠI';
        }
    }
    }
function xoaKhungGio()
{
    $ma_gio = $_GET['ma_gio'];
    $sql = "DELETE FROM khung_gio WHERE ma_gio=$ma_gio";
    $conn = getConnect();
    $statement = $conn->prepare($sql);
    $statement->execute();
   header('Location:index2.php?url=ds_khung_gio');
}
function suaKhungGio()
{
    if (isset($_POST['btn_sua'])) {
        $ma_gio = $_GET['ma_gio'];
        $khung_gio = $_POST['khung_gio'];  
        $sql = "UPDATE khung_gio SET khung_gio='$khung_gio' WHERE  ma_gio  =$ma_gio";
        $conn = getConnect();
        $statement = $conn->prepare($sql);
        $statement->execute();
        header('Location:index2.php?url=ds_khung_gio');
    }
}