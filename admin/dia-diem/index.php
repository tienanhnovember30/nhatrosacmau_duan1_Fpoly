<?php
require "../../global.php";
require "../../dao/pdo.php";
require "../../dao/diadiem.php";
require "../../check.php";
extract($_REQUEST);
$list = diadiem_selectAll();
if (exist_param("btn_add", $_REQUEST)) {
    $id_diadiem = " ";
    $ten_diadiem = $_POST['name_dd'];
    $ngay_them = $datetime;
    diadiem_insert($ten_diadiem, $ten_diadiem, $ngay_them);
    $list = diadiem_selectAll();
    $VIEW_NAME = "list.php";
} elseif (exist_param("add", $_REQUEST)) {
    $VIEW_NAME = "add.php";
} elseif (exist_param("edit", $_REQUEST)) {
    $id_diadiem = $_GET['edit'];
    $info = diadiem_select_by_id($id_diadiem);
    $VIEW_NAME = "edit.php";
} elseif (exist_param("btn_edit", $_REQUEST)) {
    $id_diadiem = $_POST['id'];
    $ten_diadiem = $_POST['ten_dd'];
    diadiem_update($id_diadiem, $ten_diadiem);
    header("location: ../dia-diem/index.php?list");
} elseif (exist_param("delete", $_REQUEST)) {
    $id_diadiem = $_GET['delete'];
    diadiem_delete($id_diadiem);
    header("location: ../dia-diem/index.php?list");
} else {
    $VIEW_NAME = "list.php";
}
require "../site/layout.php";
