<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.phptutorial.net/app/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="shortcut icon" href="images/logo.png" />
    <title>Login</title>
    <style>
    /* Center the loader */

  

    @-webkit-keyframes spin {
        0% {
            -webkit-transform: rotate(0deg);
        }

        100% {
            -webkit-transform: rotate(360deg);
        }
    }

    @keyframes spin {
        0% {
            transform: rotate(0deg);
        }

        100% {
            transform: rotate(360deg);
        }
    }

    /* Add animation to "page content" */
    .animate-bottom {
        position: relative;
        -webkit-animation-name: animatebottom;
        -webkit-animation-duration: 1s;
        animation-name: animatebottom;
        animation-duration: 1s
    }

    @-webkit-keyframes animatebottom {
        from {
            bottom: -100px;
            opacity: 0
        }

        to {
            bottom: 0px;
            opacity: 1
        }
    }

    @keyframes animatebottom {
        from {
            bottom: -100px;
            opacity: 0
        }

        to {
            bottom: 0;
            opacity: 1
        }
    }

    #myDiv {
        display: none;
        text-align: center;
    }

    #show {
        text-align: right;
        cursor: pointer;
    }

    body {
        width: 100vw;
        height: 100vh;
        object-fit: cover;
        object-position: center;
        background-image: url('https://wallpaperaccess.com/full/2531241.jpg');
        background-size: 100% 100%;
        background-repeat: no-repeat;
        opacity: background-image 0.1;
        padding-top: 86px;

    }

    form {
        opacity: 0.9;
    }

    main>form {
        margin: 13rem auto;
        width: 52rem;
    }

    button {
        width: 10rem;
    }
    label{
        text-align: left;
    }
    #trangchu{
        margin-right: 45rem;
    }
    </style>
</head>

<body onload="myFunction()" style="margin:0;">

    <div id="loader"></div>

    <div style="display:none;" id="myDiv" class="animate-bottom">
        <main>
            <form action="" method="post">
            <a id="trangchu" href="index.php"> Trang chủ</a>
                <h1>Login</h1>
                <div>
                    <label for="username">Username:</label>
                    <input type="text" name="username" id="username">
                </div>
                <div>
                    <label for="password">Password:</label>
                    <input type="password" name="password" id="password">
                </div>
                <div id="show">
                    <span><i class="fas fa-eye"></i>
                    </span>
                    <span>Hiển thị mật khẩu ?</span>
                    
                </div>
                <div class="quenmk">
                  
                  <a href="./Admin/khach_hang/quenmk.php"><p>Quên Mật Khẩu</p></a>
                    
               
                </div>
                <div>
                <?php echo isset($erorr) ? $erorr : "" ?>
                    <?php echo isset($_POST['dangnhap']) ? $_SESSION['error'] : "" ?>
                </div>
                <section>
                    <button type="submit" name="dangnhap">Login</button>
               
                    <a href="index.php?url=dang_ky">Register</a>
                </section>
            </form>
        </main>
    </div>

    <script>
    var myVar;

    function myFunction() {
        myVar = setTimeout(showPage, 1000);
    }

    function showPage() {
        document.getElementById("loader").style.display = "none";
        document.getElementById("myDiv").style.display = "block";
    }
    </script>

</body>

</html>


<script>
const passField = document.querySelector("#password");
const showBtn = document.querySelector("#show");
showBtn.onclick = (() => {
    if (passField.type === "password") {
        passField.type = "text";
        showBtn.classList.add("hide-btn");
    } else {
        passField.type = "password";
        showBtn.classList.remove("hide-btn");
    }
});
</script>

</html>