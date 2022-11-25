<?php
// out 3 sản phẩm
function layDS6SanPham()
{
    $sql = "SELECT * FROM xe where 1 order by ma_xe desc limit 0,6";
    $list_6sp = getData($sql, FETCH_ALL);
    return $list_6sp;
}
function layDS3SanPham()
{
    $sql = "SELECT * FROM xe where 1 order by ma_xe desc limit 0,3";
    $list_3sp = getData($sql, FETCH_ALL);
    return $list_3sp;
}


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
                    $_SESSION['ma_kh']= $value['ma_kh'];
                    $_SESSION['username'] = $value['username'];
                   
                 
                    header('location:index.php?url=trang_chu');
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
        
           
            if(isset($_SESSION['username'])){
               unset($_SESSION['username']);
           }
           if(isset($_SESSION['admin'])){
               unset($_SESSION['admin']);
           }
           header('location:index.php');
       
         
       
        
    }
