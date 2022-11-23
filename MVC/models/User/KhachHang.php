<?php



// function dkxemxe()
// {
//     if (isset($_POST['dat_btn'])) {
//         $ma_xe = $_GET['ma_xe'];
//         $ten_khach_hang = $_POST['ten_khach_hang'];
//         $email = $_POST['email'];
//         $dia_chi = $_POST['dia_chi'];
//         $ma_gio = $_GET['ma_gio'];
       
//         if(isset($_SESSION['username'])){
//         $ma_kh = $_SESSION['ma_kh'];
       
//         $sql = "INSERT INTO  dat_lich(ten_khach_hang,email,dia_chi,ma_gio, ma_xe,ma_kh) VALUES ('$ten_khach_hang' , '$email','$dia_chi' , '$ma_gio', '$ma_xe','$ma_kh')";
//         getData($sql, FETCH_ALL);
//         $_SESSION['thanh_cong']= 'Đăng ký thành Công';
        
//         }
//         else{
//             $_SESSION['dang_ky']="Bạn cần đăng nhập mới có thể đăng ký xe";
//         }
//     }
// }
// function lay1KhungGio($ma_gio)
// {
//     $sql = "SELECT * FROM khung_gio where ma_gio=".$ma_gio;
//     $one_gio = getData($sql, FETCH_ONE);
//     return $one_gio;
// }
// function layDSKhachHang(){
//     $sql = "SELECT * FROM khach_hang";
//     $kh = getData($sql , FETCH_ALL);
//     return $kh;
// }

?>
