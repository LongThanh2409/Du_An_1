<?php
require_once('models/db.php');
function layDSHinh() {
    if(isset($_POST['btn_chon'])){
        $btn_loc = $_POST['btn_loc'];
      if($btn_loc !=""){
        $sql = "SELECT * FROM hinh where ma_xe = $btn_loc";
        $hinh = getData($sql, FETCH_ALL);
        return $hinh;
      }
      else{
        $sql = "SELECT * FROM hinh ORDER BY id_anh DESC ";
        $hinh = getData($sql, FETCH_ALL);
        return $hinh;
      }
    }
    else{
        $sql = "SELECT * FROM hinh ORDER BY id_anh DESC ";
        $hinh = getData($sql, FETCH_ALL);
        return $hinh;
      }
}
function layHinh1() {
    $sql = "SELECT hinh1 FROM hinh  ";
    $hinh = getData($sql, FETCH_ALL);
    return $hinh;
}
function layMotHinh($id_anh) {
    $sql = "SELECT * FROM hinh WHERE id_anh= $id_anh";
    $hinh = getData($sql, FETCH_ONE);
    return $hinh;
}
function MocTenXe()
{

  $sql = "SELECT xe.ten_xe,xe.ma_xe
  FROM xe,hinh
  WHERE xe.ma_xe = hinh.ma_xe";
    $xe1 = getData($sql, FETCH_ALL);
    return $xe1;
}
function xoaHinh()
{
    $id_anh = $_GET['id_anh'];
    $sql = "DELETE FROM hinh WHERE id_anh=$id_anh";
    $conn = getConnect();
    $statement = $conn->prepare($sql);
    $statement->execute();
    header('Location:index2.php?url=ds_hinh');
}
function SuaHinh()
{
    if (isset($_POST['btn_sua'])) {
        $id_anh = $_GET['id_anh'];
        $ma_xe =  $_POST['ma_xe'];
        $hinh1 = 'assets/images/img_data/' . $_FILES['hinh1']['name'];

  
        if($ma_xe != ''){
            if(  $_FILES['hinh1']['name'] != ''){
                $sql = "UPDATE hinh SET hinh1='$hinh1' , ma_xe ='$ma_xe' WHERE id_anh =$id_anh" ;       
                $conn = getConnect();
                $statement = $conn->prepare($sql);
                $statement->execute();
                move_uploaded_file($_FILES["hinh1"]["tmp_name"], 'assets/images/img_data/' . $_FILES["hinh1"]["name"]);
                header('Location:index2.php?url=ds_hinh');
            }else{
                $sql = "UPDATE hinh SET  ma_xe ='$ma_xe' WHERE id_anh =$id_anh" ;       
                $conn = getConnect();
                $statement = $conn->prepare($sql);
                $statement->execute();
                header('Location:index2.php?url=ds_hinh');
            }    
        }else{
            if(  $_FILES['hinh1']['name'] != ''){
                $sql = "UPDATE hinh SET hinh1='$hinh1'  WHERE id_anh =$id_anh" ;       
                $conn = getConnect();
                $statement = $conn->prepare($sql);
                $statement->execute();
                move_uploaded_file($_FILES["hinh1"]["tmp_name"], 'assets/images/img_data/' . $_FILES["hinh1"]["name"]);
                header('Location:index2.php?url=ds_hinh');
            }else{
              
                header('Location:index2.php?url=ds_hinh');
            } 
        }
     
    }
}