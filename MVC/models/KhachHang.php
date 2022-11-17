<?php

function login(){


if (isset($_POST['dangnhap'])) {
   
    $sql = "SELECT * FROM khach_hang";
    $user = getData($sql, FETCH_ALL);
    foreach ($user as $value) {
        if (isset($_POST['dangnhap'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            // $password = password_hash($password, PASSWORD_DEFAULT);

            // kiểm tra
            if ($username == $value['username'] && $password == $value['password'] && $value['level'] == 1) {
                $_SESSION['admin'] = $value['username'];
                header('location:index2.php?url=ds_loai_xe');
            } else if ($username == $value['username'] && $password == $value['password'] && $value['level'] == 2) {
                
                $_SESSION['username'] = $value['username'];
               
             
                header('location:index.php?url=ds_san_pham');
            } else {
                $_SESSION['error'] = "Tài khoản mật khẩu không đúng";
            }
        }             
    }
    
}
}
function logout(){
    
       
    
     
        if(isset($_SESSION['username'])){
           unset($_SESSION['username']);
       }
       if(isset($_SESSION['admin'])){
           unset($_SESSION['admin']);
       }
       header('location:index.php?url=ds_san_pham');
   
     
   
    
}

function dkxemxe(){
    // $ma_xe=$_GET['ma_xe'];
    // if(isset($_POST['datlich'])){
    //     $ma_xe=$_POST['ma_xe'];
    //     $tenkhachhang=$_POST['username'];
    //     $email=$_POST['email'];
    //     $diachi=$_POST['diachi'];
    //     $khunggio=$_POST['khunggio'];
    //     $error=[];
    //     if($tenkhachhang=''){
    //         $error['tenkhachhang']="Tên khách hàng không được để trống";
    //     }
    //     if($email=' '){
    //         $error['email']="Email không được để trống";
    //     }
    //     if($diachi=' '){
    //         $error['diachi']="Địa chỉ không được để trống";
    //     }
    //     if(!$error) {
    //         // $sql = "INSERT INTO dat_lich(tenkhachhang, email, diachi, khung_gio, ma_xe) VALUES ($tenkhachhang,$email,$diachi,$khunggio,$ma_xe)";
    //         // $conn = getConnect();
    //         // $statement = $conn->prepare($sql);
    //         // $statement->execute();
    //         // $sucss = 'Tạo Thành Công';
    //         $sql = $conn->prepare('INSERT INTO dat_lich( tenkhachhang, email, diachi, khung_gio, ma_xe) VALUES (:tenkhachhang, :email, :diachi,  :khunggio,:ma_xe)');
    //     $sql->bindParam(':tenkhachhang', $tenkhachhang);
    //     $sql->bindParam(':diachi', $diachi);
    //     $sql->bindParam(':email', $email);
    //     $sql->bindParam(':khung_gio', $khunggio);

    //     $sql->bindParam(':ma_xe', $ma_xe);


    //     $sql->execute();
    //     }
    // }
}
?>
