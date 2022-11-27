<?php
require_once('models/db.php');
function layDSXe() {
    $sql = "SELECT * FROM xe ORDER BY ma_xe DESC";
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
        $hinh = 'assets/images/img_data/' . $_FILES['hinh']['name'];
        $thong_tin = $_POST['thong_tin'];
        $giam_gia = $_POST['giam_gia'];
        $so_km = $_POST['so_km'];
        $xuat_xu = $_POST['xuat_xu'];
        $slots = $_POST['slots'];
        $dong_co = $_POST['dong_co'];
        $file_name = uniqid() . $_FILES['hinh']['name'];
        $ext = pathinfo($file_name, PATHINFO_EXTENSION);
      if($ten_xe != '' && $don_gia != '' && $ma_loai != '' &&  $_FILES['hinh']['name'] != '' && $thong_tin !='' && $giam_gia != '' && $so_km != '' && $xuat_xu != '' && $slots != '' && $dong_co != '' ){
        if ($ext == 'png' || $ext == 'jpg' || $ext == 'jpeg') {
      
        $sql = "INSERT INTO  xe(ten_xe,don_gia,ma_loai,hinh,thong_tin,giam_gia,so_km,xuat_xu,slots,dong_co) VALUES ('$ten_xe','$don_gia','$ma_loai','$hinh','$thong_tin','$giam_gia','$so_km','$xuat_xu','$slots','$dong_co')";         
        $conn = getConnect();
        $statement = $conn->prepare($sql);
        $statement->execute();
        move_uploaded_file($_FILES["hinh"]["tmp_name"], 'assets/images/img_data/' . $_FILES["hinh"]["name"]);
        header('Location:index2.php?url=ds_xe');
       }
      }
    }
}
function suaXe(){
    if (isset($_POST['btn_sua'])) {
      $ma_xe = $_GET['ma_xe'];
        $ten_xe = $_POST['ten_xe'];
        $don_gia = $_POST['don_gia'];
       $ma_loai = $_POST['ma_loai'];
        $hinh = 'assets/images/img_data/' . $_FILES['hinh']['name'];
        $thong_tin = $_POST['thong_tin'];
        $giam_gia = $_POST['giam_gia'];
        $so_km = $_POST['so_km'];
        $xuat_xu = $_POST['xuat_xu'];
        $slots = $_POST['slots'];
        $dong_co = $_POST['dong_co'];
        $file_name = uniqid() . $_FILES['hinh']['name'];
        $ext = pathinfo($file_name, PATHINFO_EXTENSION);
        if(!$ma_loai){
         $_SESSION['error1'] ='CHƯA NHẬP';
        }
    if($ma_loai != '' ){
      if($_FILES['hinh']['name'] == ''){
        $sql = "UPDATE xe SET ten_xe = '$ten_xe' , don_gia='$don_gia',ma_loai='$ma_loai',thong_tin='$thong_tin',giam_gia='$giam_gia',so_km='$so_km',xuat_xu='$xuat_xu',slots='$slots',dong_co='$dong_co' WHERE ma_xe = $ma_xe";       
        $conn = getConnect();
        $statement = $conn->prepare($sql);
        $statement->execute();
        move_uploaded_file($_FILES["hinh"]["tmp_name"], 'assets/images/img_data/' . $_FILES["hinh"]["name"]);
        header('Location:index2.php?url=ds_xe');
      }else{
        if ($ext != 'png' && $ext != 'jpg' && $ext != 'jpeg') {
          $_SESSION['error'] = "File chỉ được có đuôi png,jpg,jpeg ";
       }else{
        $sql = "UPDATE xe SET ten_xe = '$ten_xe' , don_gia='$don_gia',ma_loai='$ma_loai',hinh='$hinh',thong_tin='$thong_tin',giam_gia='$giam_gia',so_km='$so_km',xuat_xu='$xuat_xu',slots='$slots',dong_co='$dong_co' WHERE ma_xe = $ma_xe";       
        $conn = getConnect();
        $statement = $conn->prepare($sql);
        $statement->execute();
        move_uploaded_file($_FILES["hinh"]["tmp_name"], 'assets/images/img_data/' . $_FILES["hinh"]["name"]);
        header('Location:index2.php?url=ds_xe');
       }     
      }
    }else{
      if($_FILES['hinh']['name'] == ''){
        $sql = "UPDATE xe SET ten_xe = '$ten_xe' , don_gia='$don_gia',thong_tin='$thong_tin',giam_gia='$giam_gia',so_km='$so_km',xuat_xu='$xuat_xu',slots='$slots',dong_co='$dong_co' WHERE ma_xe = $ma_xe";       
        $conn = getConnect();
        $statement = $conn->prepare($sql);
        $statement->execute();
        move_uploaded_file($_FILES["hinh"]["tmp_name"], 'assets/images/img_data/' . $_FILES["hinh"]["name"]);
        header('Location:index2.php?url=ds_xe');
      }else{
        if ($ext != 'png' && $ext != 'jpg' && $ext != 'jpeg') {
          $_SESSION['error'] = "File chỉ được có đuôi png,jpg,jpeg ";
       }else{
        $sql = "UPDATE xe SET ten_xe = '$ten_xe' , don_gia='$don_gia',hinh='$hinh',thong_tin='$thong_tin',giam_gia='$giam_gia',so_km='$so_km',xuat_xu='$xuat_xu',slots='$slots',dong_co='$dong_co' WHERE ma_xe = $ma_xe";       
        $conn = getConnect();
        $statement = $conn->prepare($sql);
        $statement->execute();
        move_uploaded_file($_FILES["hinh"]["tmp_name"], 'assets/images/img_data/' . $_FILES["hinh"]["name"]);
        header('Location:index2.php?url=ds_xe');
       }     
      }
    }
      

       
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