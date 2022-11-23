<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .blink {
            animation: blinker 0.5s linear infinite;
            color: red;
            font-family: sans-serif;
        }

        @keyframes blinker {
            50% {
                opacity: 0;
            }
        }

        .one>.text-ct a {
            padding: 15px 50px;
            margin-top: 45px;
            background-color: red;
            border-radius: 5px;
            color: #fff;
            text-decoration: none;
            font-weight: 800;
            font-size: 1.5rem;

        }

        .myImg {
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s;
        }

        .myImg:hover {
            opacity: 0.7;
        }

        /* The Modal (background) */
        .modal {
            display: none;
            /* Hidden by default */
            position: fixed;
            /* Stay in place */
            z-index: 1;
            /* Sit on top */
            padding-top: 100px;
            /* Location of the box */
            left: 0;
            top: 0;
            width: 100%;
            /* Full width */
            height: 100%;
            /* Full height */
            overflow: auto;
            /* Enable scroll if needed */
            background-color: rgb(0, 0, 0);
            /* Fallback color */
            background-color: rgba(0, 0, 0, 0.9);
            /* Black w/ opacity */
        }

        /* Modal Content (image) */
        .modal-content {
            margin: auto;
            display: block;
            width: 100%;
            max-width: 1000px;
        }

        /* Caption of Modal Image */
        #caption {
            margin: auto;
            display: block;
            width: 80%;
            max-width: 700px;
            text-align: center;
            color: #ccc;
            padding: 10px 0;
            height: 150px;
        }

        /* Add Animation */
        .modal-content,
        #caption {
            -webkit-animation-name: zoom;
            -webkit-animation-duration: 0.6s;
            animation-name: zoom;
            animation-duration: 0.6s;
        }

        @-webkit-keyframes zoom {
            from {
                -webkit-transform: scale(0)
            }

            to {
                -webkit-transform: scale(1)
            }
        }

        @keyframes zoom {
            from {
                transform: scale(0)
            }

            to {
                transform: scale(1)
            }
        }

        /* The Close Button */
        .close {
            position: absolute;
            top: 15px;
            right: 35px;
            color: #f1f1f1;
            font-size: 40px;
            font-weight: bold;
            transition: 0.3s;
        }

        .close:hover,
        .close:focus {
            color: #bbb;
            text-decoration: none;
            cursor: pointer;
        }



        /* Slideshow container */
        .slideshow-container {
            max-width: 1000px;
            position: relative;
            margin: auto;
        }

        /* Hide the images by default */
        .mySlides {
            display: none;
        }

        /* Next & previous buttons */
        .prev,
        .next {
            cursor: pointer;
            position: absolute;
            top: 50%;
            width: auto;
            margin-top: -22px;
            padding: 16px;
            color: white;
            font-weight: bold;
            font-size: 18px;
            transition: 0.6s ease;
            border-radius: 0 3px 3px 0;
            user-select: none;
        }

        /* Position the "next button" to the right */
        .next {
            right: 0;
            border-radius: 3px 0 0 3px;
        }

        /* On hover, add a black background color with a little bit see-through */
        .prev:hover,
        .next:hover {
            background-color: rgba(0, 0, 0, 0.8);
        }

        /* Caption text */
        .text {
            color: #f2f2f2;
            font-size: 15px;
            padding: 8px 12px;
            position: absolute;
            bottom: 8px;
            width: 100%;
            text-align: center;
        }

        /* Number text (1/3 etc) */
        .numbertext {
            color: #f2f2f2;
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
        }

        /* The dots/bullets/indicators */
        .dot {
            cursor: pointer;
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
        }

        .active,
        .dot:hover {
            background-color: #717171;
        }

        /* Fading animation */
        .fades {
            animation-name: fades;
            animation-duration: 1.5s;
        }

        @keyframes fades {
            from {
                opacity: 0.4
            }

            to {
                opacity: 1
            }
        }
    </style>
</head>

<body>


    <?php

    extract($sp);  ?>
    <h1 class="ml-10 mt-32 border-y-2"><?php echo $ten_xe ?></h1>
    <div class="one grid lg:grid-cols-3 gap-5 mx-10">
        <div class="item-img">
            <!-- <img id="myImg" class="cursor-zoom-in" src="<?php echo $hinh ?>" alt=""> -->

            <div class="slideshow-container">

               
                <div class="mySlides fades">
                    <div class="numbertext">1 / 4</div>
                    <img class="myImg" class="cursor-zoom-in" src="<?php echo $hinh ?>" style="width:100%">
                   
                </div>

                <div class="mySlides fades">
                    <div class="numbertext">2 / 4</div>
                    <img class="myImg" class="cursor-zoom-in" src="<?php echo $hinh1 ?>" style="width:100%">
                   
                </div>

                <div class="mySlides fades">
                    <div class="numbertext">3 / 4</div>
                    <img class="myImg" class="cursor-zoom-in" src="<?php echo $hinh2 ?>" style="width:100%">
                    
                </div>
                <div class="mySlides fades">
                    <div class="numbertext">4 / 4</div>
                    <img class="myImg" class="cursor-zoom-in" src="<?php echo $hinh3 ?>" style="width:100%">
                   
                </div>

                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
            </div>
            <br>

         
            <div style="text-align:center">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
                <span class="dot" onclick="currentSlide(4)"></span>
                
            </div>

            <marquee class="mt-11" behavior="" direction="" scrollamount="10">
                <h1 class="blink text-5xl italic "><?php echo $ten_xe ?></h1>
            </marquee>
        </div>
        <div class="text-ct ">
            <div class="flex pt-4">
                <p class="text-4xl cursor-pointer text-red-600 "><?php echo $don_gias = ($don_gia - ($don_gia * $giam_gia) / 100) ?>$</p>
                <span class="text-3xl ml-4 cursor-pointer line-through"><?php echo $don_gia ?>$</span>
            </div>
            <div class="border-2 my-4 rounded">
                <h3 class="pl-6 pt-6 underline">Thông số</h3>
                <div>
                    <span class="ml-14 text-3xl">Số Km đã đi: <?php echo $so_km ?> KM </span> <br>
                    <hr class="w-11/12 mx-auto">
                    <span class="ml-14 text-3xl">Chỗ ngồi: <?php echo $slots ?></span> <br>
                    <hr class="w-11/14 mx-auto">
                    <span class="ml-12 text-3xl"><?php echo $dong_co ?> </span> <br>
                    <hr class="w-11/14 mx-auto">
                    <span class="ml-12 text-3xl"> Xuất Xứ:<?php echo $xuat_xu ?> </span> <br>
                    <hr class="w-11/14 mx-auto">
                </div>
            </div>
            <div class="border-2 rounded">
                <h3 class="pl-6 pt-6 underline">Thông tin chi tiết</h3>
                <p class="whitespace-pre-line ml-14 text-2xl"> <?php echo $thong_tin ?></p>
            </div>


            <?php

            ?>
            <button><a href="index.php?url=dangkyxemxe&ma_xe=<?php echo $ma_xe ?>&ma_gio=<?php echo  $ma_gio ?>">Đặt ngay</a></button>

        </div>

        <div>
            <h1>Những Thương Hiệu Khác</h1>

            <div class="dm pt-5 grid grid-cols-3 grid-flow-row text-center border-2 rounded">
                <?php
                foreach ($dm_loai_xe  as $key => $value) {
                    extract($value);

                    $link = 'index.php?url=san_pham_dm&ma_loai=' . $ma_loai;

                    echo '
            <div>
            <div >
            <a class="text-2xl no-underline text-black font-medium"  href="' . $link . '">  <p class="mb-12">' . $ten_loai . ' </p>  </a>
           
             </div>
             </div>
            ';
                }
                ?>
            </div>
        </div>



    </div>

    <div class="xetuongtu">
        <div class="one mt-14 mx-20 grid lg:grid-cols-3 gap-5">
            <?php
            foreach ($ds_sp_xe_cl as $key => $value) {
                extract($value);

                $link_sp_ct = 'index.php?url=sp_chi_tiet&ma_xe=' . $ma_xe;
                echo '
            <div class="products shadow-[0_35px_60px_-15px_rgba(0,0,0,0.3)]" >
           
            <div class="m-auto item-img ">
            <a href="' . $link_sp_ct . '"> <img src="' . $hinh . '" alt="">  </a>
                      </div>
                      <div class="text text-left ml-10 mt-3"> 
                      <h1>' . $ten_xe . '</h1>
                         <i>' . 'Giảm ' . $giam_gia . '%' . '</i> <br>
                      
                        <span>Chỉ còn: </span> <h3>' . $don_gia = ($don_gia - ($don_gia * $giam_gia) / 100) . '$' . '</h3>
                       
                       </div>
                       <hr class="px-3">
                       
                       <div class= "my-3 ml-10 grid grid-cols-2">
                       <div class="leading-10 text-small">
                       <span>' . $so_km . '</span><b>km</b> <br>
                       <span>' . $dong_co . '</span>
                      
                       </div>
                       <div class=" leading-10  text-small">
                       <span>' . $slots . ' </span> <span>Chỗ </span> <br>
                       <span> Xuất Xứ:</span> <span>' . $xuat_xu . ' </span>
                       </div>
                       </div>
                       </div>
            ';
            }
            ?>
        </div>
    </div>
    <div id="myModal" class="modal">
        <span class="close">&times;</span>
        <img class="modal-content" id="img01">
        <div id="caption"></div>
    </div>
</body>
<script>
    // Get the modal
    var modal = document.getElementById("myModal");

    // Get the image and insert it inside the modal - use its "alt" text as a caption
    var img = document.querySelectorAll(".myImg");
    var modalImg = document.getElementById("img01");
    var captionText = document.getElementById("caption");
 img.forEach(element => {
    element.onclick = function() {
        modal.style.display = "block";
        modalImg.src = this.src;
        captionText.innerHTML = this.alt;
    }
 });
   

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    }
    let slideIndex = 1;
    showSlides(slideIndex);

    // Next/previous controls
    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    // Thumbnail image controls
    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        let i;
        let slides = document.getElementsByClassName("mySlides");
        let dots = document.getElementsByClassName("dot");
        if (n > slides.length) {
            slideIndex = 1
        }
        if (n < 1) {
            slideIndex = slides.length
        }
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
    }
</script>

</html>