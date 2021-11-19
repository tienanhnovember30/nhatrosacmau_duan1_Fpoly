<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="../view/singup/colorlib-regform-13/css/style.css">
</head>

<body>

    <div class="main">

        <div class="container">
            <div class="booking-content">
                <div class="booking-image">
                    <img class="booking-img" src="../view/singup/colorlib-regform-13/images/banner.jpg" alt="Booking Image">
                </div>
                <div class="booking-form">
                    <form id="booking-form" method="POST" action="../home/index.php" enctype="multipart/form-data">
                        <h2>ĐĂNG KÝ THÀNH VIÊN</h2>
                        <div class="form-group form-input">
                            <input type="text" name="user" id="name" value="" required />
                            <label for="name" class="form-label">Tài khoản</label>
                        </div>
                        <div class="form-group form-input">
                            <input type="password" name="pass" id="phone" value="" required />
                            <label for="phone" class="form-label">Mật khẩu</label>
                        </div>
                        <div class="form-group form-input">
                            <input type="text" name="name" id="phone" value="" required />
                            <label for="phone" class="form-label">Họ và tên</label>
                        </div>
                        <div class="form-group form-input">
                            <input type="number" name="phone" id="phone" value="" required />
                            <label for="phone" class="form-label">Số điện thoại</label>
                        </div>
                        <div class="wrap-input100 validate-input" data-validate="Bạn chưa chọn ảnh">
                            <span style="color:#BEBEBE;" class="pl-4">Ảnh đại diện</span>
                            <input class="input100 mt-2" type="file" name="avatar" id="" required>
                            <span class="focus-input100"></span>
                        </div>
                        <?php
                        if (isset($error) && !empty($error)) {
                            echo $error;
                        } ?>
                        <div style="margin-top:10%" class="form-submit">
                            <input style="margin-left: 30%" type="submit" value="Book now" class="submit" id="submit" name="btn_singup" />
                            <a href="../home/login.php" class="vertify-booking">Bạn đã có tài khoản? <br>Đăng nhập </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

    <!-- JS -->
    <script src="../view/singup/colorlib-regform-13/vendor/jquery/jquery.min.js"></script>
    <script src="../view/singup/colorlib-regform-13/js/main.js"></script>
</body>

</html>