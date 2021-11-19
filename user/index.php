<?php
require "../global.php";
if (exist_param("logout")) {
    unset($_SESSION['user']);
    header("location: ../home/");
} else {
    header("location:" . BASE_URL);
}
