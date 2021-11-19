<?php
require "../../global.php";
require "../../dao/pdo.php";
require "../../dao/slider.php";

extract($_REQUEST);
if (exist_param("add")) {
    # code...
} else {
    $show = slider_listAll();
    $VIEW_NAME = "list.php";
}

require "../site/layout.php";
