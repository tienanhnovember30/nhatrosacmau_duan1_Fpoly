<?php

function thong_ke_binh_luan()
{
    $sql = "SELECT sanpham.id_sanpham, sanpham.ten_sanpham, sanpham.anh_sanpham, COUNT(*) as so_luong, MIN(binhluan.ngay_binhluan) as min_comment, MAX(binhluan.ngay_binhluan) as max_comment FROM sanpham INNER JOIN binhluan ON sanpham.id_sanpham = binhluan.id_sanpham GROUP BY sanpham.id_sanpham, sanpham.ten_sanpham HAVING so_luong > 0";
    return pdo_query($sql);
}
function binh_luan_select_san_pham($id_sanpham)
{
    $sql = "SELECT binhluan.id_binhluan, user.avatar, user.name, binhluan.noi_dung, binhluan.ngay_binhluan FROM user INNER JOIN binhluan ON user.id_user = binhluan.id_user WHERE id_sanpham =  ?";
    return pdo_query($sql, $id_sanpham);
}
function binh_luan_delete($id_binhluan)
{
    $sql = "DELETE FROM binhluan WHERE id_binhluan = ?";
    pdo_execute($sql, $id_binhluan);
}
