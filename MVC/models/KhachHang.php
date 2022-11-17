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


?>
