<div class="">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Danh sách khách hàng</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Danh sách khách hàng</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3><a href="index.php?add">Thêm mới khách hàng</a></h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">

                                <thead>
                                    <tr class="text-center">

                                        <th>#id</th>
                                        <th>Tên tài khoản</th>
                                        <th>Họ và tên</th>
                                        <th>Số điện thoại</th>
                                        <th>Ảnh đại diện</th>
                                        <th>Vai trò</th>
                                        <th>Kích hoạt</th>
                                        <th></th>
                                        <th></th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($user as $khach_hang) {
                                        extract($khach_hang);

                                    ?>
                                        <tr class="text-center">

                                            <td><?php echo $khach_hang['id_user'] ?></td>
                                            <td><?php echo $khach_hang['username'] ?></td>
                                            <td><?php echo $khach_hang['name'] ?></td>
                                            <td>0<?php echo $khach_hang['phone'] ?></td>
                                            <td><img style="width: 150px; height: 80px;" src="../user/images/<?php echo $khach_hang['avatar'] ?>" alt=""></td>
                                            <td><?php if ($khach_hang['role'] == 1) {
                                                    echo "<p class='text-primary'>Đối tác</p>";
                                                } elseif ($khach_hang['role'] == 2) {
                                                    echo "<p class='text-primary'>Admin</p>";
                                                } else {
                                                    echo "<p class='text-success'>Khách hàng</p>";
                                                } ?></td>
                                            <td><?php if ($khach_hang['activated'] == 1) {
                                                    echo "Đang hoạt động";
                                                } else {
                                                    echo "Đang bị khóa";
                                                } ?></td>
                                            <td><a class="btn btn-primary" href="../user/index.php?edit_id=<?= $khach_hang['id_user'] ?>"> Sửa</a></td>
                                            <td><a class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa không?')" href="../user/index.php?id=<?= $khach_hang['id_user'] ?>"> Xóa</a></td>
                                        </tr>
                                    <?php } ?>
                                </tbody>


                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>

<?php
