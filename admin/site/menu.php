<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= BASE_URL ?>" class="brand-link">
        <img src="../../view/image/logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">NHÀ TRỌ SẮC MÀU</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?= BASE_URL_ADMIN . "user/images/" . $_SESSION['user']['avatar'] ?>" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block"><?= $_SESSION['user']['name'] ?></a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">

            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->


                <li class="nav-item has-treeview ">
                    <a href="#" class="nav-link active ">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Welcome</p>
                    </a>
                </li>


                <li class="nav-item has-treeview menu-open">
                    <a href="" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Quản lý phòng trọ
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>

                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="../dia-diem/index.php" class="nav-link ">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Quản lý địa điểm</p>
                            </a>

                        </li>
                        <li class="nav-item">
                            <a href="../san-pham/index.php" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Quản lý phòng</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../ton-kho/index.php" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Phòng theo địa điểm </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= BASE_URL_ADMIN . "binh-luan/index.php" ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Quản lý bình luận</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="../oder/" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Phòng cho thuê</p>
                            </a>
                        </li>

                    </ul>
                </li>


                <li class="nav-item has-treeview menu-open">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            Quản lý khách hàng
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview ">
                        <li class="nav-item">
                            <a href="../user/index.php" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Quản lý tài khoản</p>
                            </a>
                        </li>

                        <li class="nav-item ">
                            <a href="../user/index.php?add" class="nav-link ">
                                <i class="far fa-circle nav-icon active "></i>
                                <p>Thêm mới khách hàng</p>
                            </a>
                        </li>


                    </ul>
                </li>
                <li class="nav-item has-treeview menu-open">
                    <a href="#" class="nav-link">
                        <i class="bi bi-bar-chart"></i>
                        <p>
                            Thông tin thống kê
                            <i class="fa fa-bar-chart"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview ">
                        <li class="nav-item">
                            <a href="../thong-ke/index.php" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Thống kê địa điểm</p>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a href="../slider-show/" class="nav-link ">
                                <i class="far fa-circle nav-icon active "></i>
                                <p>Slider</p>
                            </a>
                        </li>
                    </ul>
                </li>


            </ul>
            <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.3.2/angular.min.js"></script>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>