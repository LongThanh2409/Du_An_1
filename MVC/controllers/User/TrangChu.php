<?php
require_once "./models/User/TrangChu.php";
function TrangChuUser(){
    $three_sp=  layDS3SanPham();
    $six_sp=  layDS6SanPham();
   
    
    include "./templates/layout.php";
}


?>