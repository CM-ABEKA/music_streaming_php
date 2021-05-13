<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/0c4b9907e3.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./CSS/bootstrap.css">
    <link rel="stylesheet" href="./CSS/form.css">
    <title>Document</title>
</head>

<body>

    <div class="row login">
        <div class="col-lg-4 mx-auto">
            <div class="card  mt-5 bg-dark p-2">
                <div class="card-title text-center">
                    <i class="fa fa-user-circle fa-6x"></i>
                </div>
                <div class="card-body">
                    <form action="check.php" method="post">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fa fa-user fa-2x"></i>
                                </span>
                            </div>
                            <input type="text" required class="form-control" name="user"
                                placeholder="Enter user name or email">
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fa fa-lock fa-2x"></i>
                                </span>
                            </div>
                            <input type="password" required class="form-control" name="password" placeholder="Password">
                        </div>
                        <button class="btn btn-success mb-3" name="login">Login Now</button>
                        <p><a href="#">Forgot Password?</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>

</html>