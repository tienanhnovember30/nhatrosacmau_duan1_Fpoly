<div class="">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2 pt-5">
                <div class="col-sm-6">
                    <h1>Tổng hợp bình luận</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Bình luận</li>
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
                            <h3>Sản phẩm:</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">

                                <thead>
                                    <tr class="text-center">
                                        <th>#Id Comment</th>
                                        <th>Nội dung bình luận</th>
                                        <td>Ngày bình luận</td>
                                        <th>Người bình luận</th>
                                        <th></th>


                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($items as $key => $value) {
                                        extract($value);
                                    ?>
                                        <tr class="text-center">
                                            <td><?= $value['id_binhluan'] ?></td>
                                            <td><?= $value['noi_dung'] ?></td>
                                            <td><?= $value['ngay_binhluan'] ?></td>
                                            <td><?= $value['name'] ?></td>
                                            <td><a onclick="return confirm('Bạn có chắc chắn muốn xóa không?') " href="<?= BASE_URL_ADMIN . "binh-luan/index.php?delete=" . $value['id_binhluan'] ?>">Xóa</a></td>
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