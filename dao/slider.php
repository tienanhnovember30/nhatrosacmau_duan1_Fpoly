<?php
function slider_listAll()
{
    $sql = "SELECT * FROM slider";
    return pdo_query($sql);
}
