<!doctype html>
<html lang="en">

<head>
    <title>Login 10</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="../view/login/css/style.css">

</head>

<body class="img js-fullheight" style="padding-top: 100px;background-image: url(../view/login/images/bg.jpg);">
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">

                </div>
            </div>
            <form action="../home/index.php" method="POST">
                <div class="row justify-content-center">
                    <div class="col-md-6 col-lg-4">
                        <div class="login-wrap p-0">
                            <h3 class="mb-4 text-center">Đăng nhập</h3>
                            <form action="#" class="signin-form">
                                <div class="form-group">
                                    <input type="text" name="user" class="form-control" placeholder="Username" required>
                                </div>
                                <div class="form-group">
                                    <input id="password-field" name="pass" type="password" class="form-control" placeholder="Password" required>
                                    <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                    <?php
                                    if (isset($mess) && !empty($mess)) {
                                        echo $mess;
                                    }
                                    ?>
                                </div>
                                <div class="form-group">
                                    <button name="btn_login" type="submit" class="form-control btn btn-primary submit px-3">Sign In</button>
                                </div>
                                <div class="form-group d-md-flex">
                                    <div class="w-50">
                                        <a href="../home/singup.php"> <label class="checkbox-wrap checkbox-primary">Đăng ký
                                            </label></a>
                                    </div>
                                    <div class="w-50 text-md-right">
                                        <a href="#" style="color: #fff">Forgot Password</a>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <script src="../view/login/js/jquery.min.js"></script>
    <script src="../view/login/js/popper.js"></script>
    <script src="../view/login/js/bootstrap.min.js"></script>
    <script src="../view/login/js/main.js"></script>
</body>

</html>