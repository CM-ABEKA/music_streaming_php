<!DOCTYPE html>
<html lang="en">
<?php
if(isset($_SESSION['logged_in'])){
?>

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous" />
    <link rel="stylesheet" href="./3d.css" />

    <title>Document</title>
</head>

<body>

    <div class="scene">
        <div class="cube">
            <div class="front"></div>
            <div class="back"></div>
            <div class="left"></div>
            <div class="right"></div>
            <div class="top">
                <div class="ballshadow"></div>
            </div>
            <div class="bottom"></div>
        </div>
        <div class="ball"></div>
    </div>

    <div class="load">
        <div class="words word-1">
            <span>L</span>
            <span>O</span>
            <span>A</span>
            <span>D</span>
            <span>I</span>
            <span>N</span>
            <span>G</span>

            <span>.</span>
            <span>.</span>
            <span>.</span>
        </div>
    </div>
    <iframe src="https://open.spotify.com/embed/album/1DFixLWuPkv3KT3TnV35m3" width="300" height="380" frameborder="0"
        allowtransparency="true" allow="encrypted-media"></iframe>
</body>
<?php
}else{
    include('login.php');
}?>

</html>