<?php
require "../global.php";
require "../dao/pdo.php";
require "../dao/diadiem.php";
require "../dao/user.php";
require "../dao/sanpham.php";
require "../dao/cart.php";


$sp_dd_all = sanpham_select_diadiem_all();
$list_dd_1 = list_dd_1();
$list_dd_2 = list_dd_2();
$list_dd_3 = list_dd_3();
if (isset($_SESSION['user']) && !empty($_SESSION['user'])) {
    extract($_REQUEST);
    $dd = diadiem_selectAll();
    $count = sanpham_count();
    if (exist_param("id")) {
        $id_sanpham = $_GET['id'];
        $select = sanpham_id_dd($id_sanpham);
        $action = (isset($_GET['action'])) ? $_GET['action'] : 'add';
        $items = [
            'id_sanpham' => $select['id_sanpham'],
            'ten_sanpham' => $select['ten_sanpham'],
            'anh_sanpham' => $select['anh_sanpham'],
            'gia' => $select['gia'],
            'id_diadiem' => $select['id_diadiem'],
            'ten_diadiem' => $select['ten_diadiem'],
            'dd_chitiet' => $select['diadiem_chitiet'],
            'id_user' => $select['id_user'],
            'so_luong' => 1
        ];
        $_SESSION['cart'][$id_sanpham] = $items;
        if ($action == 'add') {
            $_SESSION['cart'][$id_sanpham] = $items;
        }

        $VIEW_NAME = "buy.php";
    } elseif (exist_param("product")) {
        $id_sanpham = $_GET['product'];
        $sp_by_id = $_SESSION['cart'][$id_sanpham];
        if (!isset($sp_by_id) && empty($sp_by_id)) {
            header("location:" . BASE_URL . "home/index.php?all");
        } else {
            $VIEW_NAME = "done.php";
        }
    } elseif (exist_param("stoporder")) {
        $lydo = $_POST['lydo'];
        $id_donhang = $_POST['xx'];
        huy_order($lydo, $id_donhang);
        header("location:" . BASE_URL . "cart/index.php?listorder");
    } elseif (exist_param("order")) {

        $id_user = $_SESSION['user']['id_user'];
        $id_sanpham = $_GET['order'];
        $sp = sanpham_select_user_id($id_sanpham);
        $add = $_SESSION['cart'][$id_sanpham];
        $id_donhang = "";
        $id_diadiem = $add['id_diadiem'];
        $ngay_order = $datetime;
        $trang_thai = 1;
        $id_nguoithue = $_SESSION['user']['id_user'];
        $id_nguoidang = $sp['id_user'];
        $hoten = $_POST['cus_name'];
        $email = $_POST['cus_email'];
        $so_dt = $_POST['cus_phone'];
        $ngay_hoanthanh = "";
        $ngay_xemphong = $_POST['cus_time'];
        if (strtotime($datetime) > strtotime($ngay_xemphong)) {
            echo "<script> confirm('Thời gian xem phòng không đúng vui lòng thử lại'); location.replace(' " . BASE_URL . "cart/index.php" . "');</script>";
        } elseif (strtotime($datetime) <= strtotime($ngay_xemphong)) {
            order($id_donhang, $id_sanpham, $id_diadiem, $id_nguoidang, $ngay_order, $trang_thai, $ngay_xemphong, $hoten, $so_dt, $id_nguoithue, $ngay_hoanthanh, $email);
            unset($_SESSION['cart'][$id_sanpham]);
            header("location:" . BASE_URL . "cart/index.php?listorder");
        }
        die();
    } elseif (exist_param("listorder")) {
        $id_user = $_SESSION['user']['id_user'];
        $tt = info_order($id_user);
        $VIEW_NAME = "phong_thue.php";
    } elseif (exist_param("delete")) {
        $id_sanpham = $_GET['delete'];
        unset($_SESSION['cart'][$id_sanpham]);
        header("location:" . BASE_URL . "cart/index.php");
    } else {
        if ($_SESSION['cart'] == NULL) {
            $VIEW_NAME = "no_order.php";
        } else {
            $VIEW_NAME = "buy.php";
        }
    }
    require "../site/layout.php";
} else {
    echo "<script>	confirm('Bạn chưa đăng nhập. Vui lòng đăng nhập để sử dụng chức năng này');location.replace(' " . BASE_URL . "home/index.php?login" . "');</script>";
}
