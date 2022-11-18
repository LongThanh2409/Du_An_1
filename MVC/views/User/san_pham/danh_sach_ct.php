
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   
</head>
<body>
    
<div  class="two w-4/6 m-auto">
        <?php
       
            extract($sp);
            // $img_path = 'assets/images/img_logo/';
            // $img_logo = $img_path.$hinh_logo;
       
            echo '
            <div class="one products  mt-10 shadow-[0_35px_60px_-15px_rgba(0,0,0,0.3)]" >
         
            <div " class="m-auto item-img ">
          <img id="myBTN" src="'.$hinh.'" alt="" >  
          
                      </div>
                      <div class="text text-left ml-10 mt-3"> 
                      <h1>' . $ten_xe . '</h1>
                         <i>' . 'Giảm ' . $giam_gia . '%' . '</i> <br>
                      
                        <span>Chỉ còn: </span> <h3>' . $don_gia =($don_gia- ($don_gia*$giam_gia)/100) . '$' . '</h3>
                       
                       </div>
                       <hr>
                      <div class="ml-10 whitespace-pre-line">
                      <p>'.$thong_tin.' </p>
                      </div>

                      <hr>
                      <div>
                     
                     
                       
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
                     
                       </div>


                       
            ';
     
        ?>
     </div>
</body>
</html>