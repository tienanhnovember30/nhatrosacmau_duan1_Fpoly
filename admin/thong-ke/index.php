<?php
require "../../global.php";
require "../../dao/pdo.php";
require "../../dao/thongke.php";
require "../../dao/user.php";
require "../../check.php";
extract($_REQUEST);
if (exist_param("chart", $_REQUEST)) {
    $items = thong_ke_hang_hoa();
    $VIEW_NAME = "chart.php";
} else {
    $items = thong_ke_hang_hoa();
    $VIEW_NAME = "list_diadiem.php";
}
require "../site/layout.php";
