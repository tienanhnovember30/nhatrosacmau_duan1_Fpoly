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
                        <div class="card-header">
                            <h3><a href="index.php?add">Thêm mới sản phẩm</a></h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">

                                <thead>
                                    <tr class="text-center">
                                        <th>#id </th>
                                        <th>Tên sản phẩm</th>
                                        <th>Ảnh sản phẩm</th>
                                        <th>Giá sản phẩm</th>
                                        <th>Số lượng</th>
                                        <th>Địa điểm</th>
                                        <th>Ngày nhập sản phẩm</th>
                                        <th>Người nhập</th>

                                        <th></th>

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
                                            <td><img style="width: 150px; height: 100px" src="images/<?= $sp['anh_sanpham'] ?>" alt=""></td>
                                            <td><?= number_format($sp['gia']) ?></td>
                                            <td><?= $sp['so_luong'] ?></td>
                                            <td><?= $sp['id_diadiem'] ?></td>
                                            <td><?= $sp['ngay_nhap'] ?></td>
                                            <td><?= $sp['name'] ?></td>

                                            <td><a class="btn btn-primary" href="../san-pham/index.php?idsp=<?php echo $sp['id_sanpham'] ?>"> Sửa</a>
                                                <a class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa không?')" href="../san-pham/index.php?btn_delete=<?php echo $sp['id_sanpham'] ?>"> Xóa</a>
                                            </td>
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