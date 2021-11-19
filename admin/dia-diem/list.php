<div class="">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Danh sách loại hàng</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Danh sách hàng h</li>
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
                            <h3><a href="index.php?add">Thêm mới địa điểm</a></h3>

                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">

                                <thead>
                                    <tr class="text-center">
                                        <th>#Id</th>
                                        <th>Địa điểm</th>
                                        <th>Ngày thêm</th>
                                        <th></th>

                                    </tr>
                                </thead>

                                <tbody>
                                    <?php
                                    foreach ($list as $key => $dd) {
                                        extract($dd);
                                    ?>
                                        <tr class="text-center">
                                            <td><?= $dd['id_diadiem'] ?></td>
                                            <td><?= $dd['ten_diadiem'] ?></td>
                                            <td><?= $dd['ngay_them'] ?></td>
                                            <td><a class="btn btn-primary" href="../dia-diem/index.php?edit=<?php echo $dd['id_diadiem'] ?>"> Sửa</a>
                                                <a class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa không?')" href="../dia-diem/index.php?delete=<?php echo $dd['id_diadiem'] ?>"> Xóa</a>
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