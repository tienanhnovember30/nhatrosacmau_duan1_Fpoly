<?php

function diadiem_selectAll()
{
    $sql = "select * from diadiem ORDER BY id_diadiem ";
    return pdo_query($sql);
}
function diadiem_insert($id_diadiem, $ten_diadiem, $ngay_them)
{
    $sql = "INSERT INTO diadiem(id_diadiem, ten_diadiem, ngay_them) VALUES (?, ?, ?)";
    pdo_execute($sql, $id_diadiem, $ten_diadiem, $ngay_them);
}
function diadiem_delete($id_diadiem)
{
    $sql = "DELETE FROM diadiem WHERE id_diadiem = ?";
    pdo_execute($sql, $id_diadiem);
}
function diadiem_select_by_id($id_diadiem)
{
    $sql = "SELECT * FROM `diadiem` WHERE id_diadiem = ?";
    return pdo_query_one($sql, $id_diadiem);
}
function diadiem_update($id_diadiem, $ten_diadiem)
{
    $sql = "UPDATE diadiem SET ten_diadiem = ? WHERE id_diadiem = ?";
    pdo_execute($sql, $ten_diadiem, $id_diadiem);
}
function list_dd_1()
{
    $sql = "SELECT * FROM diadiem LIMIT 0,4";
    return pdo_query($sql);
}
function list_dd_2()
{
    $sql = "SELECT * FROM diadiem LIMIT 4,4";
    return pdo_query($sql);
}

function list_dd_3()
{
    $sql = "SELECT * FROM diadiem LIMIT 8,4";
    return pdo_query($sql);
}
