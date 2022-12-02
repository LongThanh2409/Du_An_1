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
function dangky(){
    $name = $email = $password = $password2 = $hinh_anh = '';
    if (isset($_POST['dangky'])) {
        $ten_khach_hang = $_POST['ten_khach_hang'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $so_dien_thoai = $_POST['so_dien_thoai'];
        $password = $_POST['password'];
        $password2 = $_POST['password2'];
       
    
    
        $error = [];
        
        
        
    
        // foreach ($item as $value) { //lặp để kiểm tra dữ liệu nhập vào form và dữ liệu trong DB
        //     if ($_POST['username'] == $value["username"]) { // kiểm tra xem userusername và password nhập vào có trùng với 
        //         $error['trungtk'] = 'Email tài khoản này đã tồn tại';
        //         break;
        //     }
        // }
    
      
        if (!($error)) {
            $sql = "SELECT username FROM khach_hang where username = :username";
            $conn = getConnect();
            $stmt = $conn->prepare($sql);
            $stmt->bindValue(':username', $username);
            $stmt->execute();
    
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
          
            if ($user) {
                $error['trungtk'] = 'Tài khoản này đã tồn tại';
            } else {
                $password = md5($password);
                $sql = $conn->prepare('
                    INSERT INTO khach_hang(ten_khach_hang,username, password, email,so_dien_thoai)
                    VALUES (:ten_khach_hang,:username, :password, :email,:so_dien_thoai)
                    ');
                $sql->bindParam(':ten_khach_hang', $ten_khach_hang);
                $sql->bindParam(':username', $username);
                $sql->bindParam(':password', $password);
                $sql->bindParam(':email', $email);
                $sql->bindParam(':so_dien_thoai', $so_dien_thoai);
                $sql->execute();
             ;
            }
        }
    }
}
function dat_xem() {
    
    if (isset($_POST['dat_xem_xe'])) {
        
        $ma_xe=$_GET['ma_xe'];
        $ma_kh=$_SESSION['ma_kh'];
        $dia_chi = $_POST['dia_chi'];
        $ngay_xem = $_POST['ngay_xem'];
        $ghi_chu = $_POST['ghi_chu'];
      
        $error = [];
      
        
      if( $dia_chi !='' && $ngay_xem != '' && $ghi_chu !=''){
        $sql = "INSERT INTO don(ma_xe,ma_kh,dia_chi, ngay_xem, ghi_chu, thoi_gian_dat) VALUES ('$ma_xe','$ma_kh','$dia_chi','$ngay_xem','$ghi_chu',current_timestamp())";       
        $conn = getConnect();
        $statement = $conn->prepare($sql);
        $statement->execute();
       
        $tieude="Thong Bao Dat Xe Thanh Cong";
        $noidung="<p>Cảm ơn quý khách đã đặt hàng với địa chỉ:'.$dia_chi.'</p><br>
                  <p>Ngày Giờ xem xe:'.$ngay_xem.'</p><br>
                  <p>Ghi chú đính kèm: '.$ghi_chu.'</p>";
        $maildatxe=$_SESSION['email'];
        $mail= new Mailer();
        $mail->datXe($tieude,$noidung,$maildatxe); 
      }
    // $result = $this->execute(array($ma_xe,$ma_kh,$ten_khach_hang,$so_dien_thoai,$email,$ghi_chu,$ngay_xem,$ghi_chu));
    // if($result)
    //     return $this->getLastId();  
    // else
    //     return false;
}
}
function login(){

    if (isset($_POST['dang_nhap'])) {
     
        $sql = "SELECT * FROM khach_hang";
        $user = getData($sql, FETCH_ALL);
        foreach ($user as $value) {
            if (isset($_POST['dang_nhap'])) {
                $username = $_POST['username'];
                $password = $_POST['password'];

                $password_md5 = md5($password);
            
    
                // kiểm tra
                if ($username == $value['username'] && $password == $value['password'] && $value['level'] == 1) {
                 
                    $_SESSION['admin'] = $value['username'];                    
                    header('location:index2.php?url=ds_loai_xe');
                } else if ($username == $value['username'] && $password_md5 == $value['password'] && $value['level'] == 2) {
                    $_SESSION['ma_kh']= $value['ma_kh'];
                    $_SESSION['username'] = $value['username'];
                    $_SESSION['email'] = $value['email'];
                    $_SESSION['ten_khach_hang'] = $value['ten_khach_hang'];
                  
                    header('location:index.php');
                } else {
                    $_SESSION['error'] = "Tài khoản hoặc mật khẩu không đúng";
                }
            }
            else{
                $_SESSION['error_tk']="Tài khoản không đúng";
            }             
        }
        
    }
    }
    function logout(){
       
            if(isset($_SESSION['username'])&& isset($_SESSION['ma_kh'])){
               unset($_SESSION['username']);
               unset($_SESSION['ma_kh']);
           }
           if(isset($_SESSION['admin'])){
               unset($_SESSION['admin']);
           }
           header('location:index.php');
       
         
       
        
    }
?>

