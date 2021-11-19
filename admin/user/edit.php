<section class="content-header">
    <div class="container-fluid pt-5">
        <div class="row mb-2">
            <div class="col-sm-6 ">
                <h1>Cập nhật thông tin khách hàng</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="../loai-hang/">Home</a></li>
                    <li class="breadcrumb-item active"> Khách hàng</li>
                </ol>
            </div>
        </div>
    </div>
</section>

<section class="content">
    <form method="POST" enctype="multipart/form-data" action="../user/index.php">
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

                                        <label for="">Tài khoản </label>
                                        <input type="email" class="form-control" id="" readonly name="username" value="<?php echo $info_user['username'] ?>" readonly>
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
                                        <input type=" text" class="form-control" placeholder="Số điện thoại" name="phone" value="<?php echo $info_user['phone'] ?>">
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
                                                    <input type="text" class="form-control" placeholder="Họ tên" name="name_user" value="<?php echo $info_user['name'] ?>">
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
                                                <input type="radio" name="vaitro" value="0" <?php if ($info_user['role'] == 0) {
                                                                                                echo "checked";
                                                                                            } ?>>
                                                <label class="px-2">Khách hàng</label>
                                                <input type="radio" name="vaitro" value="1" <?php if ($info_user['role'] == 1) {
                                                                                                echo "checked";
                                                                                            } ?>>
                                                <label class="px-2">Nhân viên</label>
                                                <input type="radio" name="vaitro" value="0" <?php if ($info_user['role'] == 2) {
                                                                                                echo "checked";
                                                                                            } ?>>
                                                <label class="px-2">Admin</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputFile">Kích hoạt ?</label>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" name="kichhoat" value="1" <?php if ($info_user['activated'] == 1) {
                                                                                                    echo "checked";
                                                                                                } ?>>
                                                <label class="px-2">Cho phép sử dụng</label>
                                                <input type="radio" name="kichhoat" value="0" <?php if ($info_user['activated'] == 0) {
                                                                                                    echo "checked";
                                                                                                } ?>>
                                                <label class="px-2">Khóa tài khoản</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pl-4">
                                <button type="submit" name="btn_edit" onclick="return confirm('Bạn có chắc chắn muốn sửa?')" class="btn btn-primary ">Chỉnh sửa</button>
                                <button type="reset" class="btn btn-primary ">Nhập lại</button>
                            </div>
                        </div>
                    </div>
                </div>
    </form>
</section>

<?php
