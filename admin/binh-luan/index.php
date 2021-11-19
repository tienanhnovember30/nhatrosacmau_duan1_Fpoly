<?php
require "../../global.php";
require "../../dao/thongke.php";
require "../../dao/pdo.php";
require "../../dao/binhluan.php";
require "../../check.php";
extract($_REQUEST);

if (exist_param("id_sanpham", $_REQUEST)) {
    $id_sanpham = $_GET['id_sanpham'];
    $items = binh_luan_select_san_pham($id_sanpham);
    $VIEW_NAME = "detail.php";
} elseif (exist_param("delete")) {
    $id_binhluan = $_GET['delete'];
    binh_luan_delete($id_binhluan);
    $items = thong_ke_binh_luan();
    $VIEW_NAME = "list.php";
} else {
    $items = thong_ke_binh_luan();
    $VIEW_NAME = "list.php";
}
require "../site/layout.php";
