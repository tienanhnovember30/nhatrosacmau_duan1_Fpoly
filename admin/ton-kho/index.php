<?php
require "../../global.php";
require "../../dao/pdo.php";
require "../../dao/sanpham.php";
require "../../check.php";
$sp_tonkho = sanpham_tonkho();
$VIEW_NAME = "list.php";
require "../site/layout.php";
