<?php
require "../../global.php";
require "../../dao/diadiem.php";
require "../../dao/sanpham.php";
require "../../dao/pdo.php";
require "../../check.php";
extract($_REQUEST);
$sp = sanpham_selectAll_admin();
$list = diadiem_selectAll();
if (exist_param("add")) {
    $VIEW_NAME = "add.php";
    $diadiem = diadiem_selectAll();
} elseif (exist_param("idsp")) {
    $id_sanpham = $_GET['idsp'];
    $sp_id = sanpham_select_id_diadiem($id_sanpham);
    $VIEW_NAME = "edit.php";
} elseif (exist_param("btn_edit")) {
    $id_sanpham = $_POST['id_sp'];
    $soluong = $_POST['soluong'];
    $ten_sanpham = $_POST['ten_sanpham'];
    $gia = $_POST['giatien'];
    $id_diadiem = $_POST['id_diadiem'];
    $avatar = $_FILES['avatar']['name'];
    $chitiet = $_POST['chi_tiet'];
    sanpham_update($id_sanpham, $ten_sanpham, $avatar, $gia, $soluong, $id_diadiem, $chitiet);
    header("location: ../san-pham/index.php?list");
} elseif (exist_param("btn_add")) {
    $id_sanpham = "";
    $soluong = $_POST['soluong'];
    $ten_sanpham = $_POST['ten_sanpham'];
    $gia = $_POST['giatien'];
    $id_diadiem = $_POST['id_diadiem'];
    $luotxem = $_POST['luot_xem'];
    $nameadd =  $_SESSION['user']['name'];
    $diachi_chitiet = $_POST['dia_chi'];
    $avatar = $_FILES['avatar']['name'];
    $ngaynhap = $_POST['ngay_nhap'];
    $chitiet = $_POST['chi_tiet'];
    sanpham_insert($id_sanpham, $ten_sanpham, $avatar, $gia, $soluong, $ngaynhap, $nameadd, $id_diadiem, $diachi_chitiet, $luotxem, $chitiet);
    $link = BASE_URL_ADMIN;
    save_file($avatar, $link);
    header("location: ../san-pham/index.php?list");
    die();
} elseif (exist_param("btn_delete")) {
    $id_sanpham = $_GET['btn_delete'];
    $a = sanpham_delete($id_sanpham);
    header("location: ../san-pham/index.php?list");
} else {
    $VIEW_NAME = "list.php";
}
require "../site/layout.php";
