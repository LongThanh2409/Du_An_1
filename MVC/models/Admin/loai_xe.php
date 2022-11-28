<?php
require_once('models/db.php');
function layDSLoaiXe() {
    $sql = "SELECT * FROM loai_xe ORDER BY ma_loai DESC";
    $loai_xe = getData($sql, FETCH_ALL);
    return $loai_xe;
}
function layMotLoaiXe($ma_loai) {
    $sql = "SELECT * FROM loai_xe WHERE ma_loai= $ma_loai";
    $loai_xe = getData($sql, FETCH_ONE);
    return $loai_xe;
}
function themMoiLoaiXe()
{
    if (isset($_POST['btn_them'])) {
        $ten_loai = $_POST['ten_loai'];
        $hinh_logo = 'assets/images/img_logo/' . $_FILES['hinh_logo']['name'];
        $file_name = uniqid() . $_FILES['hinh_logo']['name'];
        $ext = pathinfo($file_name, PATHINFO_EXTENSION);
        if($ten_loai != '' && $_FILES['hinh_logo']['name'] != '' ){
            if ($ext != 'png' && $ext != 'jpg' && $ext != 'jpeg') {
                $_SESSION['error1'] = "File chỉ được có đuôi png,jpg,jpeg ";
             } else{
                $sql = "INSERT INTO  loai_xe(ten_loai , hinh_logo) VALUES ('$ten_loai' , '$hinh_logo')";      
                $conn = getConnect();
                $statement = $conn->prepare($sql);
                $statement->execute();
                move_uploaded_file($_FILES["hinh_logo"]["tmp_name"], 'assets/images/img_logo/' . $_FILES["hinh_logo"]["name"]);
                header('Location:index2.php?url=ds_loai_xe');
            
             }
    
        }
     
    }
}
function xoaLoaiXe()
{
    $ma_loai = $_GET['ma_loai'];
    $sql = "DELETE FROM loai_xe WHERE ma_loai=$ma_loai";
    $conn = getConnect();
    $statement = $conn->prepare($sql);
    $statement->execute();
    header('Location:index2.php?url=ds_loai_xe');
}
function suaLoaiXe()
{
    if (isset($_POST['btn_sua'])) {
        $ma_loai = $_GET['ma_loai'];
        $ten_loai = $_POST['ten_loai'];
        $hinh_logo = 'assets/images/img_logo/' . $_FILES['hinh_logo']['name'];
        $file_name = uniqid() . $_FILES['hinh_logo']['name'];
        $ext = pathinfo($file_name, PATHINFO_EXTENSION);
      
  
        if($_FILES['hinh_logo']['name'] == ''){
            $sql = "UPDATE loai_xe SET  ten_loai='$ten_loai' WHERE  ma_loai  =$ma_loai";
            $conn = getConnect();
            $statement = $conn->prepare($sql);
            $statement->execute();
            header('Location:index2.php?url=ds_loai_xe');
        }else{
            if ($ext != 'png' && $ext != 'jpg' && $ext != 'jpeg') {
                $_SESSION['error2'] = "File chỉ được có đuôi png,jpg,jpeg ";
             } else{
                $sql = "UPDATE loai_xe SET  ten_loai='$ten_loai',hinh_logo='$hinh_logo' WHERE  ma_loai  =$ma_loai";
                $conn = getConnect();
                $statement = $conn->prepare($sql);
                $statement->execute();
                move_uploaded_file($_FILES["hinh_logo"]["tmp_name"], 'assets/images/img_logo/' . $_FILES["hinh_logo"]["name"]);
                header('Location:index2.php?url=ds_loai_xe');
            
             }
         
          
        }
        
    }
}
