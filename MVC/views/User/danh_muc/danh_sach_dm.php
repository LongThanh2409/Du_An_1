
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<div class="w-2/5 mt-8 m-auto overflow-x-scroll items-center grid grid-rows-1 grid-flow-col gap-5">
        <?php
         foreach($dm_loai_xe as $key => $value){
            extract($value);
         
            $link ='index.php?url=san_pham_dm&ma_loai='.$ma_loai;
            echo '
            <div>
            <div>
            <a href="'.$link.'"> <img src="'.$hinh_logo.'" alt="">  </a>
            <p>'.$ten_loai.' </p>
             </div>
             </div>
            ';
         }
        ?>
     </div>
</body>
</html>