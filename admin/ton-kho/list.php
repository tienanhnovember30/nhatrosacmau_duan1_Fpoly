<div class="">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Danh sách tồn kho</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Danh sách </li>
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
                                        <th>#Id</th>
                                        <th>Thông tin phòng trọ</th>
                                        <th>Giá cho thuê</th>

                                        <th>Số lượng</th>
                                        <th>Địa điểm</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php
                                    foreach ($sp_tonkho as $a) {
                                        extract($a);
                                        if ($a['so_luong'] >= 1) {
                                    ?>
                                            <tr class="text-center">
                                                <td><?= $a['id_sanpham'] ?></td>
                                                <td><?= $a['ten_sanpham'] ?></td>
                                                <td><?= number_format($a['gia']) ?></td>
                                                <td><?= $a['so_luong'] ?></td>
                                                <td><?= $a['ten_diadiem'] ?></td>
                                            </tr>
                                    <?php }
                                    } ?>
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