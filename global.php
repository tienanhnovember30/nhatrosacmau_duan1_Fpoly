<?php
session_start();
define("BASE_URL", "http://localhost/nhatrosacmau/");
define("BASE_URL_ADMIN", "http://localhost/nhatrosacmau/admin/");

ob_start();
date_default_timezone_set('Asia/Ho_Chi_Minh');
$date = date_create();
$datetime =  date_format($date, 'Y-m-d H:i:s');
$nam = date_format($date, 'Y');
$thang = date_format($date, 'm');
$ngay = date_format($date, 'd');


function exist_param($fieldname)
{
    return array_key_exists($fieldname, $_REQUEST);
}
function save_file($fieldname, $target_dir)
{
    $file_uploaded = $_FILES[$fieldname];
    $file_name = basename($file_uploaded['name']);
    $target_path = $target_dir . $file_name;
    move_uploaded_file($file_uploaded['tmp_name'], $target_path);
    return $file_name;
}
