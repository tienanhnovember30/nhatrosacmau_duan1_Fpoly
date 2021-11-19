<?php
require "../../global.php";
require "../../dao/pdo.php";
require "../../dao/sanpham.php";
require "../../check.php";
extract($_REQUEST);

if (exist_param("dddda")) {
    # code...
} else {
    $VIEW_NAME = "hopdong.php";
}

require "../site/layout.php";
