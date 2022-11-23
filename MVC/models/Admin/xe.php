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
        $hinh = 'assets/images/img_data/' . $_FILES['hinh']['name'];
        $hinh1 = 'assets/images/img_data/' . $_FILES['hinh1']['name'];
        $hinh2 = 'assets/images/img_data/' . $_FILES['hinh2']['name'];
        $hinh3 = 'assets/images/img_data/' . $_FILES['hinh3']['name'];
        $thong_tin = $_POST['thong_tin'];
        $giam_gia = $_POST['giam_gia'];
        $so_km = $_POST['so_km'];
        $xuat_xu = $_POST['xuat_xu'];
        $slots = $_POST['slots'];
        $dong_co = $_POST['dong_co'];
     
      if($ten_xe != '' && $don_gia != '' && $ma_loai != '' &&  $_FILES['hinh']['name'] != '' && $thong_tin !='' && $giam_gia != '' && $so_km != '' && $xuat_xu != '' && $slots != '' && $dong_co != ''  &&  $_FILES['hinh1']['name'] != '' &&  $_FILES['hinh2']['name'] != '' &&  $_FILES['hinh3']['name'] != ''){
        $sql = "INSERT INTO  xe(ten_xe,don_gia,ma_loai,hinh,thong_tin,giam_gia,so_km,xuat_xu,slots,dong_co,ma_gio,hinh1,hinh2,hinh3) VALUES ('$ten_xe','$don_gia','$ma_loai','$hinh','$thong_tin','$giam_gia','$so_km','$xuat_xu','$slots','$dong_co','$hinh1' , '$hinh2' , '$hinh3')";       
        $conn = getConnect();
        $statement = $conn->prepare($sql);
        $statement->execute();
        move_uploaded_file($_FILES["hinh"]["tmp_name"], 'assets/images/img_data/' . $_FILES["hinh"]["name"]);
        move_uploaded_file($_FILES["hinh1"]["tmp_name"], 'assets/images/img_data/' . $_FILES["hinh1"]["name"]);
        move_uploaded_file($_FILES["hinh2"]["tmp_name"], 'assets/images/img_data/' . $_FILES["hinh2"]["name"]);
        move_uploaded_file($_FILES["hinh3"]["tmp_name"], 'assets/images/img_data/' . $_FILES["hinh3"]["name"]);
        header('Location:index2.php?url=ds_xe');
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
        $hinh1 = 'assets/images/img_data/' . $_FILES['hinh1']['name'];
        $hinh2 = 'assets/images/img_data/' . $_FILES['hinh2']['name'];
        $hinh3 = 'assets/images/img_data/' . $_FILES['hinh3']['name'];
        $thong_tin = $_POST['thong_tin'];
        $giam_gia = $_POST['giam_gia'];
        $so_km = $_POST['so_km'];
        $xuat_xu = $_POST['xuat_xu'];
        $slots = $_POST['slots'];
        $dong_co = $_POST['dong_co'];
    
    if($ma_loai != '' && $_FILES['hinh']['name'] != '' && $_FILES['hinh1']['name'] != '' && $_FILES['hinh2']['name'] != '' && $_FILES['hinh3']['name'] != ''){
      $sql = "UPDATE xe SET ten_xe = '$ten_xe' , don_gia='$don_gia',ma_loai='$ma_loai',hinh='$hinh',hinh1='$hinh1',hinh2='$hinh2',hinh3='$hinh3',thong_tin='$thong_tin',giam_gia='$giam_gia',so_km='$so_km',xuat_xu='$xuat_xu',slots='$slots',dong_co='$dong_co' WHERE ma_xe = $ma_xe";       
      $conn = getConnect();
      $statement = $conn->prepare($sql);
      $statement->execute();
      move_uploaded_file($_FILES["hinh"]["tmp_name"], 'assets/images/img_data/' . $_FILES["hinh"]["name"]);
      move_uploaded_file($_FILES["hinh1"]["tmp_name"], 'assets/images/img_data/' . $_FILES["hinh1"]["name"]);
      move_uploaded_file($_FILES["hinh2"]["tmp_name"], 'assets/images/img_data/' . $_FILES["hinh2"]["name"]);
      move_uploaded_file($_FILES["hinh3"]["tmp_name"], 'assets/images/img_data/' . $_FILES["hinh3"]["name"]);
      header('Location:index2.php?url=ds_xe');
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