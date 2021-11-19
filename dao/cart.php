<?php
function info_order($id_user)
{
    $sql = "SELECT  giohang.id_donhang, giohang.id_nguoidang, giohang.trang_thai,giohang.ngay_xemphong,sanpham.ten_sanpham, diadiem.ten_diadiem, sanpham.gia, user.name FROM ((giohang INNER JOIN user ON giohang.id_nguoidang = user.id_user) INNER JOIN sanpham ON giohang.id_sanpham = sanpham.id_sanpham) INNER JOIN diadiem ON giohang.id_diadiem = diadiem.id_diadiem WHERE giohang.id_nguoithue = ? ORDER BY giohang.trang_thai ASC";
    return  pdo_query($sql, $id_user);
}
function order($id_donhang, $id_sanpham, $id_diadiem, $id_nguoidang, $ngay_order, $trang_thai, $ngay_xemphong, $hoten, $so_dt, $id_nguoithue, $ngay_hoanthanh, $email)
{
    $sql = "INSERT INTO giohang VALUES (?,?,?,?,?,?,?,?,?,?,?,?)";
    pdo_execute($sql, $id_donhang, $id_sanpham, $id_diadiem, $id_nguoidang, $ngay_order, $trang_thai, $ngay_xemphong, $ngay_hoanthanh, $id_nguoithue,  $hoten, $so_dt,  $email);
}

function list_all_trang_thai($id_donhang)
{
    $sql = "select trang_thai from giohang WHERE id_donhang = ? ";
    return pdo_query($sql, $id_donhang);
}
function huy_order($lydo, $id_donhang)
{
    $sql = "UPDATE giohang SET lydo = ?, trang_thai = 0 WHERE id_donhang = ?";
    pdo_execute($sql, $lydo, $id_donhang);
}
