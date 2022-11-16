<?php
require_once('models/db.php');
function layDSXe() {
    $sql = "SELECT * FROM xe";
    $xe = getData($sql, FETCH_ALL);
    return $xe;
}
function layMotXe($ma_xe) {
    $sql = "SELECT * FROM xe WHERE ma_xe= $ma_xe";
    $xe = getData($sql, FETCH_ONE);
    return $xe;
}
function themMoiXe()
{
    if (isset($_POST['btn_them'])) {
        $ten_xe = $_POST['ten_xe'];
        $don_gia = $_POST['don_gia'];
       $ma_loai = $_POST['ma_loai'];
        $hinh = 'assets/images/' . $_FILES['hinh']['name'];
        $thong_tin = $_POST['thong_tin'];
        $giam_gia = $_POST['giam_gia'];
        $so_km = $_POST['so_km'];
        $xuat_xu = $_POST['xuat_xu'];
        $slots = $_POST['slots'];
        $dong_co = $_POST['dong_co'];
      $ma_gio = $_POST['ma_gio'];
      if($ten_xe != '' && $don_gia != '' && $ma_loai != '' &&  $_FILES['hinh']['name'] != '' && $thong_tin !='' && $giam_gia != '' && $so_km != '' && $xuat_xu != '' && $slots != '' && $dong_co != '' && $ma_gio !=''){
        $sql = "INSERT INTO  xe(ten_xe,don_gia,ma_loai,hinh,thong_tin,giam_gia,so_km,xuat_xu,slots,dong_co,ma_gio) VALUES ('$ten_xe','$don_gia','$ma_loai','$hinh','$thong_tin','$giam_gia','$so_km','$xuat_xu','$slots','$dong_co','$ma_gio')";       
        $conn = getConnect();
        $statement = $conn->prepare($sql);
        $statement->execute();
        move_uploaded_file($_FILES["hinh"]["tmp_name"], 'assets/images/' . $_FILES["hinh"]["name"]);
        header('Location:index2.php?url=ds_xe');
      }
       
    }
}
function suaXe(){
    if (isset($_POST['btn_sua'])) {
        $ten_xe = $_POST['ten_xe'];
        $don_gia = $_POST['don_gia'];
       $ma_loai = $_POST['ma_loai'];
        $hinh = 'assets/images/' . $_FILES['hinh']['name'];
        $thong_tin = $_POST['thong_tin'];
        $giam_gia = $_POST['giam_gia'];
        $so_km = $_POST['so_km'];
        $xuat_xu = $_POST['xuat_xu'];
        $slots = $_POST['slots'];
        $dong_co = $_POST['dong_co'];
      $ma_gio = $_POST['ma_gio'];
        $sql = "UPDATE xe SET ten_xe = '$ten_xe' , don_gia='$don_gia',ma_loai='$ma_loai',hinh='$hinh',
        thong_tin='$thong_tin',giam_gia='$giam_gia',so_km='$so_km',xuat_xu='$xuat_xu',slots='$slots',dong_co='$dong_co',ma_gio='$ma_gio'
          ";       
        $conn = getConnect();
        $statement = $conn->prepare($sql);
        $statement->execute();
        move_uploaded_file($_FILES["hinh"]["tmp_name"], 'assets/images/' . $_FILES["hinh"]["name"]);
       
    }
}
function xoaXe()
{
    $ma_xe = $_GET['ma_xe'];
    $sql = "DELETE FROM xe WHERE ma_xe=$ma_xe";
    $conn = getConnect();
    $statement = $conn->prepare($sql);
    $statement->execute();
   header('Location:index2.php?url=ds_xe');
}