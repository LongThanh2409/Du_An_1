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

function themKhachHangDat($ma_xe,$ma_kh,$ten_khach_hang,$dia_chi,$so_dien_thoai,$email,$ngay_xem) {
        $query = "INSERT INTO don(ma_xe,ma_kh,ten_khach_hang,dia_chi,so_dien_thoai,email,ngay_xem,thoi_gian_dat) ";
        $query.= "VALUES(?,?,?,?,?,?,?,?)";
        $this->setQuery($query);
        $result = $this->execute(array($ma_xe,$ma_kh,$ten_khach_hang,$dia_chi,$so_dien_thoai,$email,$ngay_xem));
        if($result)
            return $this->getLastId();  //If query execute successful, the system will return lastID in table khach_hang
        else

            return false;
}

            
function dangky(){
    if (isset($_POST['dangky'])) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $password2 = $_POST['password2'];
        // $hinh_anh = './models/images_sp/' . $_FILES['avatar']['name'];
    
    
        $error = [];
    
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
        // if (empty($avata)) {
        //     $error['avata'] = 'Bạn chưa nhập avata';
        // }
    
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
                // $password = password_hash($password, PASSWORD_DEFAULT);
                $sql = $conn->prepare('
                    INSERT INTO khach_hang(username, password, email)
                    VALUES (:username, :password, :email)
                    ');
                $sql->bindParam(':username', $username);
                $sql->bindParam(':password', $password);
                $sql->bindParam(':email', $email);
    
                $sql->execute();
                $sucss = 'Tạo Thành Công';
            }
        }
    }
    
}
?>

