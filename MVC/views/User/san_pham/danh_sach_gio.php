
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<style>
    body{
        position: relative;
    }
    .headersa:hover .gio{
        display: block;
    }
    .gio{
        border: 3px solid gainsboro;
        margin-top: 0;
        margin-left: 300px;
        background-color: #fff;
    }
    .gio a{
        text-decoration: none;
        color: #000;
        font-weight: 500;
    }
    .headersa{
        cursor: pointer;
        margin: 10px;
    }
</style>
<body>

<div class="headersa w-96 ">
<div class="gio  p-2 hidden absolute h-36 w-96 mt-8  overflow-y-scroll grid grid-cols-1 grid-flow-row  gap-1 shadow-[0_35px_60px_-15px_rgba(0,0,0,0.3)]">
        <?php
         foreach($ds_gio as $key => $value){
            extract($value);
          
            $link ='index.php?url=san_pham_gio&ma_gio='.$ma_gio;
            echo  '

            <div >
          
            <div>
            <a href="'.$link.'"> <p class="border-gray-900" >'.$khung_gio.' </p> </a>
            
             </div>
             </div>
            ';
         }
        ?>
     </div>
    
     <h2 class="ml-20 mt-4">&#10148; Khung giờ</h2>
    </div>
</body>
</html>