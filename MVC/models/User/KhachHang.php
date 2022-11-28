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
        if (empty($ten_khach_hang)) {
            $error['ten_khach_hang'] = 'Bạn chưa nhập tên';
        }
        if (empty($username)) {
            $error['username'] = 'Bạn chưa nhập tên';
        }
        if (empty($password)) {
            $error['password'] = 'Bạn chưa nhập mật khẩu';
        }
        if (empty($password2)) {
            $error['password2'] = 'Bạn chưa nhập lại mật khẩu';
        }
        if ($password != $password2 && $password2 != "") {
            $error['password_lost'] = 'Mật khẩu không khớp';
        }
        if (empty($email)) {
            $error['email'] = 'Bạn chưa nhập email';
        }
        if (empty($so_dien_thoai)) {
            $error['so_dien_thoai'] = 'Bạn chưa nhập số điện thoại';
        }
        
        
    
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
                $sucss = 'Tạo Thành Công';
            }
        }
    }
}
function dat_xem(){
    if (isset($_POST['dat_xem_xe'])) {
                $ma_xe = $_GET['ma_xe'];

                $ten_khach_hang = $_POST['ten_khach_hang'];
                $email = $_POST['email'];
                $dia_chi = $_POST['dia_chi'];
                $so_dien_thoai=$_POST['so_dien_thoai'];
                $ngay_xem=$_POST['ngay_xem'];
                if (empty($ten_khach_hang)) {
                    $error['ten_khach_hang'] = 'Bạn chưa nhập tên';
                }
                if (empty($email)) {
                    $error['email'] = 'Bạn chưa nhập email';
                }
                if (empty($dia_chi)) {
                    $error['dia-chi'] = 'Bạn chưa nhập địa chỉ';
                }
                if (empty($so_dien_thoai)) {
                    $error['so_dien_thoai'] = 'Bạn chưa nhập số điện thoại';
                }
                if (empty($ngay_xem)) {
                    $error['ngay_xem'] = 'Bạn chưa chọn ngày xem';
                }
                $sql = "INSERT INTO don(ma_dat,ma_xe, ma_kh, ten_khach_hang, so_dien_thoai, dia_chi, ngay_xem, thoi_gian_dat, trang_thai) VALUES ('$ma_xe','$ma_kh','$ten_khach_hang','$so_dien_thoai','$dia_chi','$ngay_xem',current_timestamp())";
                $conn = getConnect();
                $statement = $conn->prepare($sql);
                $statement->execute();
              
    }
                  
}
?>

