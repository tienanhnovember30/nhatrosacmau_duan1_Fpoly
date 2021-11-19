<?php
require "../../global.php";
require "../../dao/diadiem.php";
require "../../dao/sanpham.php";
require "../../dao/pdo.php";
require "../../check.php";
if (exist_param("s")) {
    echo "";
} else {
    $sp = sanpham_listOrder_admin();
    $VIEW_NAME = "list.php";
}
require "../site/layout.php";
