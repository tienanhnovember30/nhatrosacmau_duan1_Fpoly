<div class="">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Danh sách sản phẩm</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Danh sách sản phẩm</li>
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

                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">

                                <thead>
                                    <tr class="text-center">
                                        <th>#id phòng </th>
                                        <th>Tên phòng trọ</th>
                                        <th>Địa chỉ</th>
                                        <th>Ngày đăng</th>
                                        <th>Ảnh phòng</th>
                                        <th>Số phòng</th>
                                        <th>Người đăng</th>
                                        <th>Người thuê</th>
                                        <th>Trạng thái</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($sp as $sp) {
                                        extract($sp);

                                    ?>
                                        <tr class="text-center">
                                            <td><?= $sp['id_sanpham'] ?></td>
                                            <td><?= $sp['ten_sanpham'] ?></td>
                                            <td><?= $sp['diadiem_chitiet'] ?></td>
                                            <td><?= $sp['ngay_nhap'] ?></td>
                                            <td><img style="width: 150px; height: 100px" src="../san-pham/images/<?= $sp['anh_sanpham'] ?>" alt=""></td>
                                            <td><?= $sp['so_luong'] ?></td>
                                            <td><?= $sp['name'] ?></td>
                                            <td><?= $sp['hoten'] ?></td>
                                            <td><?php

                                                if ($sp['trang_thai'] == 0) {
                                                    echo "<span >Đơn bị hủy</span>";
                                                } elseif ($sp['trang_thai'] == 1) {
                                                    echo "<span >Đang chờ xác nhận</span>";
                                                } elseif ($sp['trang_thai'] == 2) {
                                                    echo "<span>Đã liên hệ</span>";
                                                } elseif ($sp['trang_thai'] == 3) {
                                                    echo "<span >Đã xem phòng</span> ";
                                                } elseif ($sp['trang_thai'] == 4) {
                                                    echo "<span >Đang chờ ý kiến khách hàng</span>";
                                                } else {
                                                    echo "<span>Thành công</span>";
                                                }

                                                ?></td>
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