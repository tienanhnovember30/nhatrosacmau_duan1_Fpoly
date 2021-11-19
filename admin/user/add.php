<section class="content-header">
    <div class="container-fluid pt-5">
        <div class="row mb-2">
            <div class="col-sm-6 ">
                <h1>Thêm mới khách hàng</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="">Home</a></li>
                    <li class="breadcrumb-item active">Thêm mới khách hàng</li>
                </ol>
            </div>
        </div>
    </div>
</section>

<section class="content">
    <form method="POST" enctype="multipart/form-data">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-warning">
                        <div class="card-header">
                            <h3 class="card-title mt-4"> </h3>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="card-body">


                                    <div class="form-group">
                                        <label for="">Tài khoản</label>
                                        <input type="text" class="form-control" placeholder="User name" name="username">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Mật khẩu</label>
                                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Nhập mật khẩu" name="pass">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Xác nhận mật khẩu</label>
                                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Nhập lại mật khẩu" name="pass2">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Điện thoại</label>
                                        <input type=" text" class="form-control" placeholder="Số điện thoại" name="phone">
                                    </div>

                                </div>
                            </div> 
                            <div class="col-sm-6">

                                <div class="card-body">
                                    <div role="form">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label>Họ và tên</label>
                                                    <input type="text" class="form-control" placeholder="Họ tên" name="name_user">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputFile">Ảnh đại diện</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="exampleInputFile" name="avatar">
                                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputFile">Vai trò</label>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" name="vaitro" value="0" checked>
                                                <label class="px-2">Khách hàng</label>
                                                <input type="radio" name="vaitro" value="1">
                                                <label class="px-2">Đối tác</label>
                                                <input type="radio" name="vaitro" value="2">
                                                <label class="px-2">Admin</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputFile">Kích hoạt ?</label>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" name="kichhoat" value="1" checked>
                                                <label class="px-2">Kích hoạt</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pl-4">
                                <button type="submit" name="btn_add" class="btn btn-primary ">Thêm mới</button>
                                <button type="reset" class="btn btn-primary ">Nhập lại</button>
                            </div>
                        </div>
                    </div>
                </div>
    </form>
</section>
<?php
if (isset($_POST['btn_add'])) {
    $id_user = "";
    $username = $_POST['username'];
    $chec = mb_strlen($username);
    $pass = $_POST['pass'];
    $pass1 = $_POST['pass2'];
    $phone = $_POST['phone'];
    $check_phone =  is_numeric($phone);
    $tmpAvatar = $_FILES['avatar']['tmp_name'];
    $cc = mb_strlen($phone);
    $name = $_POST['name_user'];
    $role = $_POST['vaitro'];
    $activated = $_POST['kichhoat'];
    $avatar = $_FILES['avatar']['name'];
    $link = "../user/images/";
    if ($chec <= 0 || $chec >= 15) {
        echo "<p class='ml-3 text-danger font-weight-bold'>Chưa nhập tài khoản hoặc tài khoản dài quá 15 ký tự</p>";
        die();
    } else {
        if (!preg_match("/^[A-Za-z0-9_\.]{4,20}$/", $username, $matchs)) {
            echo "<p class='ml-3 text-danger font-weight-bold'>Tài khoản không được chứ các ký tự đặc biệt & 4 - 20 ký tự</p>";
        } else {
            if ($pass != $pass1) {
                echo "<p class='ml-3 text-danger font-weight-bold'>Mật khẩu xác nhận không khớp </p>";
            } else {
                if (!preg_match("/[A-Za-z0-9]{6,15}$/", $pass)) {
                    echo "<p class='ml-3 text-danger font-weight-bold'>Mật khẩu quá ngắn hoặc chứa ký tự đặc biệt </p>";
                } else {
                    if ($check_phone = false) {
                        echo "<p class='ml-3 text-danger font-weight-bold'>Định dạng số điện thoại không hợp lệ</p>";
                    } else {
                        if ($cc <= 0 || $cc >= 11) {
                            echo "<p class='ml-3 text-danger font-weight-bold'>Số điện thoại phải từ 0 đến 11 số</p>";
                        } else {
                            if ($name == "") {
                                echo "<p class='ml-3 text-danger font-weight-bold'>Bạn chưa nhập họ tên</p>";
                            } else {
                                $password = mahoa($pass);
                                move_uploaded_file($tmpAvatar, "../user/images/" . $avatar);
                                user_insert($id_user, $username, $password, $name, $avatar, $phone, $role, $activated);
                                header("location: ../user/index.php");
                            }
                        }
                    }
                }
            }
        }
    }
}
