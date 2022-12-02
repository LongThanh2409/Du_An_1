<?php 
  
  function layDSDatXe(){
    if(isset($_GET['ma_kh'])){
    $ma_kh = $_GET['ma_kh'];
    // $sql = "SELECT * FROM don where ma_kh = $ma_kh";
    // $sql ="SELECT xe.ma_xe, xe.ten_xe, xe.hinh,don.trang_thai  from xe, don  where   xe.ma_xe = don.ma_xe ";
    
    $sql = " SELECT *  from xe, don, khach_hang where xe.ma_xe = don.ma_xe and khach_hang.ma_kh = don.ma_kh and khach_hang.ma_kh=$ma_kh";
    $list_don = getData($sql, FETCH_ALL);
    return $list_don;
    }
   
  
}


?>