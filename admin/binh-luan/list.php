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

                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">

                                <thead>
                                    <tr class="text-center">
                                        <th>#id sản phẩm</th>
                                        <th>Tên sản phẩm</th>
                                        <td>Ảnh sản phẩm</td>
                                        <th>Số lượng bình luận</th>
                                        <th>Bình luận cũ nhất</th>
                                        <th>Bình luận mới nhất</th>
                                        <th></th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($items as $key => $items) {
                                        extract($items);

                                    ?>
                                        <tr class="text-center">
                                            <td><?= $items['id_sanpham'] ?></td>
                                            <td><?= $items['ten_sanpham'] ?></td>
                                            <td class="d-flex justify-content-center"><img style="width:200px;" src="<?= BASE_URL_ADMIN ?>/san-pham/images/<?= $items['anh_sanpham'] ?>" alt=""></td>
                                            <td><?= $items['so_luong'] ?></td>
                                            <td><?= $items['min_comment'] ?></td>
                                            <td><?= $items['max_comment'] ?></td>
                                            <td>
                                                <a href="../binh-luan/index.php?id_sanpham=<?= $items['id_sanpham'] ?>">Chi tiết</a>
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