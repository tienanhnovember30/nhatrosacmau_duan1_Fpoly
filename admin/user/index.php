<?php
require "../../global.php";
require "../../dao/pdo.php";
require "../../dao/user.php";
require "../../check.php";
extract($_REQUEST);
if (exist_param("add")) {
    $VIEW_NAME  = "add.php";
} elseif (exist_param("id")) {
    $id_user = $_GET['id'];
    user_delete($id_user);
    $user = user_selectAll();
    $VIEW_NAME  = "list.php";
} elseif (exist_param("edit_id")) {
    $id_user = $_GET['edit_id'];
    $info_user = user_select_by_id($id_user);
    $VIEW_NAME  = "edit.php";
} elseif (exist_param("btn_edit")) {
    $VIEW_NAME  = "list.php";
} else {
    $user = user_selectAll();
    $VIEW_NAME  = "list.php";
}
require "../site/layout.php";



//
