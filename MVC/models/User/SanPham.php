<!-- <?php

        // out 3 sản phẩm

        // out all sp
        function layDSSanPham()
        {
          
            if (isset($_POST['key']) && ($_POST['key'] != "")) {
                $key = $_POST['key'];
                $sql = "SELECT * FROM xe WHERE ten_xe  like '%$key%'";
                
                $list_sp = getData($sql, FETCH_ALL);
            } else {
               if(isset($_POST['price']))
             
                {
                    $prices = $_POST['prices']; 
                    if($prices=="3"){
                        $sql = "SELECT * FROM xe Where don_gia > 1000000000  ";
                        $list_sp = getData($sql, FETCH_ALL);
                    }
                    elseif($prices == "4"){
                        $sql = "SELECT * FROM xe  ";
                        $list_sp = getData($sql, FETCH_ALL);
                    }
                    else{
                        $sql = "SELECT * FROM xe Where don_gia <= $prices  ";
                        $list_sp = getData($sql, FETCH_ALL);
                    }
                    
                   
                }
                
                else{
                    $sql = "SELECT * FROM xe";
                    $list_sp = getData($sql, FETCH_ALL);
                }
             
            }

            return $list_sp;
        
        }
        // function lay3SanPhamCungLoai()
        // {
        //     if(isset($_GET['ma_xe'])&&($_GET['ma_xe']!="")){
        //         $ma_xe =$_GET['ma_xe'];
        //         $ma_loai =$_GET['loai'];
        //         $sql = "SELECT * FROM xe WHERE 1 AND ma_xe <> $ma_xe AND ma_loai = $ma_loai ";
        //         $list_sp = getData($sql, FETCH_ALL);
        //     }


        //     else{
        //         $ma_xe ="";
        //         $sql = "SELECT * FROM xe";
        //         $list_sp = getData($sql, FETCH_ALL);

        //     }

        //     return $list_sp;
        // }
        // // sanpham chi tiết
        function lay1SanPham()
        {
            if (isset($_GET['ma_xe'])) {

                $ma_xe = $_GET['ma_xe'];
                $sql = "SELECT * FROM xe  WHERE ma_xe= $ma_xe
        ";

                $sp_ct = getData($sql, FETCH_ONE);
                return $sp_ct;
            }
        }
        // function layanhSanPham()
        // {
        //     if (isset($_GET['ma_xe'])) {

        //         $ma_xe = $_GET['ma_xe'];
        //         $sql = "SELECT * FROM xe  WHERE ma_xe= $ma_xe";
        //         $car = getData($sql, FETCH_ONE);


        //         $albums = (explode(",",$car['Ablum']));

        //         return $albums;
        //     }
        // }
        function thongTinKhachHang()
        {
            if (isset($_SESSION['ma_kh'])) {
                $ma_kh = $_SESSION['ma_kh'];
                $sql = "SELECT * FROM khach_hang where ma_kh=$ma_kh ";
                $thong_tin_kh = getData($sql, FETCH_ONE);
                return $thong_tin_kh;
            }
        }
        function layAnh()
        {
            if (isset($_GET['ma_xe'])) {
                $ma_xe = $_GET['ma_xe'];

                $sql = "SELECT * FROM hinh  WHERE ma_xe= $ma_xe";
                $sp_ct = getData($sql, FETCH_ALL);
                return $sp_ct;
            }
        }

        function binhLuans()
        {
            if (isset($_POST['btn_bl'])) {
                $full_name = $_POST['full_name'];
                $content = $_POST['content'];
                $ma_kh = $_SESSION['ma_kh'];
                $ma_xe = $_GET['ma_xe'];
                if ($full_name != "" && $content != "") {
                    $sql = "INSERT INTO  binh_luan VALUES (null, '$full_name','$content',current_timestamp(), '$ma_kh', '$ma_xe')";
                    $conn = getConnect();
                    $statement = $conn->prepare($sql);
                    $statement->execute();
                }
            }
        }

        function binhLuan()
        {
            if (isset($_GET['ma_xe'])) {

                $ma_xe = $_GET['ma_xe'];
                $sql = "SELECT * FROM binh_luan  WHERE ma_xe=$ma_xe order by ma_xe desc limit 0,3 
            ";


                $sp_cts = getData($sql, FETCH_ALL);
                return $sp_cts;
            }
        }
        // // out sản phẩm theo danh mục
        function laySanPhamTheoDM($ma_loai)
        {
            $sql = "SELECT * FROM  xe where 1 AND ma_loai= $ma_loai ";

            $sp_dms = getData($sql, FETCH_ALL);
            return $sp_dms;
        }
        function SanPhamCungLoai4()
        {
            if (isset($_GET['ma_loai']) && isset($_GET['ma_xe'])) {
                $ma_loai = $_GET['ma_loai'];
                $ma_xe = $_GET['ma_xe'];

                $sql = "SELECT * FROM  xe where 1 AND ma_loai= $ma_loai AND ma_xe <> $ma_xe limit 0,4";
                $sp_cl = getData($sql, FETCH_ALL);
                return $sp_cl;
            }
        }
        // // lấy sản phẩm theo khung giờ
        // function laySanPhamTheoGio()
        // {
        //     if(isset($_GET['ma_gio'])&&($_GET['ma_gio']!="")){
        //         $ma_gio =$_GET['ma_gio'];
        //         $sql = "SELECT * FROM  xe where 1 AND ma_gio= $ma_gio";
        //         $sp_gio = getData($sql, FETCH_ALL);
        //     }






        //     return $sp_gio;
        // }
        // // danh_sách_gio
        // function layKhungGio()
        // {
        //     $sql = "SELECT * FROM  khung_gio";

        //     $ds_gio = getData($sql, FETCH_ALL);
        //     return $ds_gio;
        // }


        // tim san phâm
        // function timKiemSanPham($key){
        //     if(isset($_GET['key'])&&($_GET['key']!="")){
        //         $sql = "SELECT * FROM xe WHERE ten_xe like '%$key%'";
        //         $timKiem = getData($sql, FETCH_ALL);
        //     }

        //     else{
        //         $sql = "SELECT * FROM xe";
        //         $timKiem = getData($sql, FETCH_ALL);

        //     }


        //     return $timKiem;
        // }
        ?> -->