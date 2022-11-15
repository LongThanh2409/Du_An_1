
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="assets/css/index.css">
</head>
<body>
<?php
      hienThiKhungGio();
     ?>
    <div class="one mt-11 mx-20 grid lg:grid-cols-3 gap-5">
        <?php 
        foreach($ds3_sp_xe as $key => $value){
            extract($value);
            $img_path = 'assets/images/';
            $img = $img_path.$hinh;
            $link_sp_ct = 'index.php?url=sp_chi_tiet&ma_xe='.$ma_xe;
            echo '
            <div class="products shadow-[0_35px_60px_-15px_rgba(0,0,0,0.3)]" >
           
            <div class="m-auto item-img ">
            <a href="'.$link_sp_ct.'"> <img src="'.$img.'" alt="">  </a>
                      </div>
                      <div class="text text-left ml-10 mt-3"> 
                      <h1>' . $ten_xe . '</h1>
                         <i>' . 'Giảm ' . $giam_gia . '%' . '</i> <br>
                      
                        <span>Chỉ còn: </span> <h3>' . $don_gia =($don_gia- ($don_gia*$giam_gia)/100) . '$' . '</h3>
                       
                       </div>
                       <hr class="px-3">
                       
                       <div class= "my-3 ml-10 grid grid-cols-2">
                       <div class="leading-10 text-small">
                       <span>'.$so_km.'</span><b>km</b> <br>
                       <span>'.$dong_co.'</span>
                      
                       </div>
                       <div class=" leading-10  text-small">
                       <span>'.$slots.' </span> <span>Chỗ </span> <br>
                       <span> Xuất Xứ:</span> <span>'.$xuat_xu.' </span>
                       </div>
                       </div>
                       </div>
            ';
        }
        ?>
    </div>
    <!--  -->

<!-- taitlto -->
     <div class="mt-40 mx-20 grid lg:grid-cols-2 gap-5">
        <div class="item-img">
            <img src="assets/images/car-img-02.png" alt="">
        </div>
        <div class=" mt-20 text-one">
            <h1 class="text-5xl">Why choose Cash My Car?</h1>
            <p class="text-xl mt-10">How do we compare with other ways to sell?</p>
            <p class="text-xl">Lorem ipsum dolor sit amet, consectetur adipisicing elit sed eiusmod tempor incididu et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ull laboris aliquip ex ea commodo consequat. Duis aute irure dolorin reprehenderits volupta velit dolore fugiat nulla pariatur excepteur sint occaecat cupidatat.</p>
            <img class="m-auto" src="assets/images/car-img-03.png" alt="">
        </div>
     </div>
     <!--  -->
     <!--  -->
     <div class="text-center ">
        <h1 class="text-5xl">Our Vehicles Listing</h1>
        <p class="my-10 text-xl">Helps you to find perfect car. But I must explain to you how all this mistaken</p>
     </div>
     <?php
      hienThiDanhMuc();
     ?>
     <div class="one my-15 grid gird-cols-1 gap-2  md:grid-cols-2 lg:grid-cols-4">
        <?php 
      
        if(isset($ds_sp_xe)){

           
        foreach($ds_sp_xe as $key => $value) {
           
            extract($value);
            $img_path = 'assets/images/';
            $img = $img_path.$hinh;
            $link_sp_ct = 'index.php?url=sp_chi_tiet&ma_xe='.$ma_xe;
           
            echo '
            <div class="products mt-10 shadow-[0_35px_60px_-15px_rgba(0,0,0,0.3)]" >
         
            <div class="m-auto item-img ">
            <a href="'.$link_sp_ct.'"> <img src="'.$img.'" alt="">  </a>
                      </div>
                      <div class="text text-left ml-10 mt-3"> 
                      <h1>' . $ten_xe . '</h1>
                         <i>' . 'Giảm ' . $giam_gia . '%' . '</i> <br>
                      
                        <span>Chỉ còn: </span> <h3>' . $don_gia =($don_gia- ($don_gia*$giam_gia)/100) . '$' . '</h3>
                       
                       </div>
                       <hr class="px-3">
                       
                       <div class= "my-3 ml-10 grid grid-cols-2">
                       <div class="leading-10 text-small">
                       <span>'.$so_km.'</span><b>km</b> <br>
                       <span>'.$dong_co.'</span>
                      
                       </div>
                       <div class=" leading-10  text-small">
                       <span>'.$slots.' </span> <span>Chỗ </span> <br>
                       <span> Xuất Xứ:</span> <span>'.$xuat_xu.' </span>
                       </div>
                       </div>
                       </div>
            ';
        }
    }
    else{
        echo 'Xin lỗi';
    }
        ?>
    </div>
</body>
</html>