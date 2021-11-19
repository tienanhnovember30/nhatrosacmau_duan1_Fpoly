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
                                    <tr class="text-center font-bold">
                                        <th>#id phòng trọ</th>
                                        <th>Tên phòng</th>

                                        <th>Giá cao nhất</th>
                                        <th>Giá thấp nhất</th>
                                        <th>Giá trung bình</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($user as $items) {
                                        extract($items);

                                    ?>
                                        <tr class="text-center ">
                                            <td><?= $items['id_user'] ?></td>
                                            <td><?= $items['name'] ?></td>
                                            <td><?= $tk['gia_min'] ?></td>
                                            <td><?= $tk['gia_max'] ?></td>
                                            <td></td>
                                        </tr>
                                    <?php } ?>

                                </tbody>
                            </table>
                        </div>
                        <div>
                            <a class="" href="index.php?chart">

                                <button class="ml-3 btn btn-primary" name="aa">Xem biểu đồ </button>

                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>