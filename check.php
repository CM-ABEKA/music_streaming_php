<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"
        integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"
        integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/0c4b9907e3.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <link rel="shortcut icon" href="headphones-2104207_640.png" type="image/x-icon">
    <link rel="stylesheet" href="corousel.css">
    <link rel="stylesheet" href="effects.css">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body class="bg-gradient">
    <?php 
    session_start();
    if (isset($_POST['login'])){
        if ($_POST['user'] == "admin" && $_POST['password'] == "admin123"){
            $_SESSION['logged_in'] = '1';
            include('index.php');
        }else{
?>
    <div class="card mt-3 bg-warning p-2 border-5">
        <span><i class="fa fa-user-slash fa-6x"></i></span>
        <div class="">Invalid User name or Password</div>
        <div>
            <p><a href="login.php">Try Again?</a></p>
        </div>

    </div>
    <?php 
    }
}
    ?>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="script.js"></script>
    <!-- <script src="about.js"></script> -->
    <script src="effects.js"></script>
</body>

</html>