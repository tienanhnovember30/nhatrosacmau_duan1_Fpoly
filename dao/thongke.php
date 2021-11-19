<?php
function thong_ke_hang_hoa()
{
    $sql = "SELECT diadiem.id_diadiem, diadiem.ten_diadiem, COUNT(*) as so_luong, MIN(sanpham.gia)
   as gia_min,MAX(sanpham.gia) as gia_max, AVG(sanpham.gia) as gia_avg
    FROM diadiem INNER JOIN sanpham ON sanpham.id_diadiem = diadiem.id_diadiem
    GROUP BY diadiem.id_diadiem, diadiem.ten_diadiem";
    return pdo_query($sql);
}
function thong_ke_mua_ban($id_user)
{
    $sql = "SELECT user.name, user.id_user, user.username, MIN(gia) as gia_min, MAX(gia) as gia_max, COUNT(id_donhang) as so_phong FROM (giohang INNER JOIN user ON giohang.id_nguoidang = user.id_user ) INNER JOIN sanpham ON sanpham.id_sanpham = giohang.id_sanpham WHERE giohang.trang_thai = 5 AND giohang.id_nguoidang = ?";
    return pdo_query_one($sql, $id_user);
}
