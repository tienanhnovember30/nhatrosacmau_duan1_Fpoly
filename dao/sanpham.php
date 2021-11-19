<?php

function sanpham_insert($id_sanpham, $ten_sanpham, $avatar, $gia, $soluong, $ngaynhap, $id_nguoithem, $id_diadiem,  $diachi_chitiet, $luotxem, $chitiet)
{
    $trangthai = 1;
    $sql = "INSERT INTO sanpham(id_sanpham, ten_sanpham, anh_sanpham, gia, so_luong, ngay_nhap, id_user, id_diadiem,trang_thai, diadiem_chitiet, luot_xem, chi_tiet) VALUES (?,?,?,?,?,?,?,?,?,?,?)";
    pdo_execute($sql, $id_sanpham, $ten_sanpham, $avatar, $gia, $soluong, $ngaynhap, $id_nguoithem, $id_diadiem, $trangthai, $diachi_chitiet, $luotxem, $chitiet);
}
function sanpham_selectAll()
{
    $sql = "SELECT * FROM sanpham WHERE trang_thai >= 1";
    return pdo_query($sql);
}
function sanpham_selectAll_admin()
{
    $sql = "SELECT sanpham.id_sanpham, sanpham.ten_sanpham, sanpham.anh_sanpham, sanpham.gia, sanpham.so_luong, sanpham.ngay_nhap, sanpham.id_user, sanpham.id_diadiem, sanpham.trang_thai, sanpham.diadiem_chitiet, sanpham.luot_xem, sanpham.chi_tiet, user.name FROM sanpham INNER JOIN user ON sanpham.id_user = user.id_user WHERE trang_thai >= 1";
    return pdo_query($sql);
}
function sanpham_select_by_id($id_sanpham)
{
    $sql = "SELECT * FROM sanpham WHERE id_sanpham = ?";
    return pdo_query_one($sql, $id_sanpham);
}
function sanpham_id_dd($id_sanpham)
{
    $sql = "SELECT sanpham.id_sanpham, sanpham.ten_sanpham, sanpham.anh_sanpham, sanpham.id_diadiem, sanpham.gia, sanpham.so_luong, sanpham.id_user, sanpham.diadiem_chitiet, sanpham.chi_tiet, diadiem.ten_diadiem FROM sanpham INNER JOIN diadiem ON sanpham.id_diadiem = diadiem.id_diadiem  WHERE id_sanpham = ? AND trang_thai >= 1 ";
    return pdo_query_one($sql, $id_sanpham);
}
function sanpham_select_diadiem($id_diadiem)
{
    $sql = "SELECT * FROM sanpham  INNER JOIN diadiem ON diadiem.id_diadiem = sanpham.id_diadiem WHERE sanpham.id_diadiem = ?";
    return pdo_query($sql, $id_diadiem);
}
function sanpham_update($id_sanpham, $ten_sanpham, $avatar, $gia, $soluong, $id_diadiem, $chitiet)
{
    $sql = "UPDATE  sanpham SET ten_sanpham = '$ten_sanpham', anh_sanpham = '$avatar', gia = ' $gia', so_luong = ' $soluong', id_diadiem ='$id_diadiem', chi_tiet = ' $chitiet' WHERE id_sanpham = '$id_sanpham'";
    pdo_execute($sql);
}
function  sanpham_delete($id_sanpham)
{
    $sql = "DELETE FROM sanpham WHERE id_sanpham = ? AND trang_thai >= 1";
    pdo_execute($sql, $id_sanpham);
}

function sanpham_select_limit()
{
    $sql = "SELECT * FROM sanpham  LIMIT 5 WHERE trang_thai >= 1";
    return pdo_query($sql);
}
function sanpham_select_id_diadiem($id_sanpham)
{
    $sql = "SELECT * FROM (sanpham INNER JOIN diadiem ON sanpham.id_diadiem = diadiem.id_diadiem ) INNER JOIN user ON sanpham.id_user = user.id_user WHERE  sanpham.id_sanpham = ? AND sanpham.trang_thai >= 1";
    return pdo_query_one($sql, $id_sanpham);
}
function sanpham_tonkho()
{
    $sql = "SELECT sanpham.so_luong, sanpham.id_sanpham,sanpham.anh_sanpham, sanpham.ten_sanpham, sanpham.gia, diadiem.ten_diadiem  FROM sanpham INNER JOIN diadiem ON sanpham.id_diadiem = diadiem.id_diadiem ";
    return pdo_query($sql);
}
function sanpham_top8()
{
    $sql = "SELECT sanpham.id_sanpham, sanpham.ten_sanpham, sanpham.anh_sanpham, sanpham.gia, sanpham.diadiem_chitiet,sanpham.luot_xem, diadiem.ten_diadiem from sanpham inner join diadiem on diadiem.id_diadiem = sanpham.id_diadiem WHERE luot_xem >= 0 AND trang_thai = 2 ORDER BY luot_xem DESC LIMIT 0,8";
    return pdo_query($sql);
}
function sanpham_select_diadiem_all()
{
    $sql = "SELECT sanpham.id_sanpham, sanpham.ten_sanpham, sanpham.anh_sanpham, sanpham.gia, sanpham.diadiem_chitiet,sanpham.luot_xem, diadiem.ten_diadiem from sanpham inner join diadiem on diadiem.id_diadiem = sanpham.id_diadiem WHERE  trang_thai = 2 ";
    return pdo_query($sql);
}
function sanpham_new()
{
    $sql = "SELECT  sanpham.id_sanpham, sanpham.ten_sanpham, sanpham.anh_sanpham,sanpham.ngay_nhap, sanpham.gia, sanpham.diadiem_chitiet, diadiem.ten_diadiem FROM sanpham INNER JOIN diadiem  WHERE sanpham.id_diadiem = diadiem.id_diadiem AND trang_thai = 2 ORDER BY ngay_nhap DESC LIMIT 4";
    return pdo_query($sql);
}
function sanpham_lienquan($id_diadiem, $id_sanpham)
{
    $sql = "SELECT * FROM sanpham WHERE id_diadiem = ? and id_sanpham != ? LIMIT 5";
    return pdo_query($sql, $id_diadiem, $id_sanpham);
}
function sanpham_list()
{
    $sql = "SELECT sanpham.id_sanpham, sanpham.ten_sanpham, sanpham.anh_sanpham,sanpham.ngay_nhap, sanpham.trang_thai, sanpham.gia, sanpham.diadiem_chitiet, diadiem.ten_diadiem, user.name, user.avatar  FROM ( sanpham INNER JOIN diadiem on diadiem.id_diadiem = sanpham.id_diadiem ) INNER JOIN user ON user.id_user = sanpham.id_user WHERE trang_thai > 0 ORDER BY trang_thai ASC LIMIT 15 ";
    return pdo_query($sql);
}

function sanpham_count()
{
    $sql = "SELECT COUNT(trang_thai) as tt FROM `sanpham` WHERE trang_thai = 1";
    return pdo_query_one($sql);
}
function sanpham_doitac($id_user)
{
    $sql = "SELECT sanpham.id_sanpham,sanpham.id_user, sanpham.ten_sanpham, sanpham.anh_sanpham,sanpham.ngay_nhap, sanpham.trang_thai, sanpham.gia, sanpham.diadiem_chitiet, diadiem.ten_diadiem, sanpham.so_luong FROM sanpham INNER JOIN diadiem ON sanpham.id_diadiem = diadiem.id_diadiem WHERE id_user = ? ORDER BY trang_thai DESC";
    return pdo_query($sql, $id_user);
}

function duyet_od($id_user)
{
    $sql = "SELECT giohang.id_donhang,giohang.ngay_xemphong,giohang.so_dt, giohang.ngay_order,giohang.lydo, giohang.trang_thai, giohang.hoten, giohang.email, sanpham.ten_sanpham, sanpham.gia,sanpham.diadiem_chitiet, giohang.id_nguoithue, user.name FROM (giohang INNER JOIN sanpham ON giohang.id_sanpham = sanpham.id_sanpham) INNER JOIN user ON giohang.id_nguoithue = user.id_user WHERE giohang.id_nguoidang = ? ORDER BY giohang.trang_thai ASC ";
    return pdo_query($sql, $id_user);
}
function update_trangthai($a, $id_sanpham)
{
    if (isset($a)) {
        if ($a == 'TRUE') {
            $sql = "UPDATE sanpham SET trang_thai = trang_thai + 1 WHERE id_sanpham = ?";
            pdo_execute($sql, $id_sanpham);
        } elseif ($a == 'FALSE') {
            $sql = "UPDATE sanpham SET trang_thai = 0 WHERE id_sanpham = ?";
            pdo_execute($sql, $id_sanpham);
        } else {
            header("location:" . BASE_URL . "home");
        }
    }
}
function sanpham_luotxem($id_sanpham)
{
    $sql = "UPDATE sanpham SET luot_xem = luot_xem + 1 where id_sanpham = ?";
    pdo_execute($sql, $id_sanpham);
}

function sanpham_select_user_id($id_sanpham)
{
    $sql = "SELECT user.name, sanpham.id_user FROM sanpham INNER JOIN user ON sanpham.id_user = user.id_user WHERE id_sanpham = ?";
    return pdo_query_one($sql, $id_sanpham);
}
function sanpham_select_giohang($id_sanpham)
{
    $sql = "SELECT sanpham.ten_sanpham, sanpham.diadiem_chitiet,giohang.id_donhang, giohang.so_dt,giohang.trang_thai,giohang.id_nguoithue, user.id_user, user.name ,giohang.ngay_xemphong, giohang.ngay_order FROM ( giohang INNER JOIN sanpham ON giohang.id_sanpham = sanpham.id_sanpham ) INNER JOIN user ON giohang.id_nguoithue = user.id_user WHERE sanpham.id_sanpham = ?";
    return pdo_query($sql, $id_sanpham);
}

function update_trangthai_order($trangthai, $id_donhang, $datetime)
{
    $xx = select_trangthai_order($id_donhang);
    if ($xx['trang_thai'] == 4) {
        $sql = "UPDATE giohang SET trang_thai = ? , ngay_hoanthanh = ? WHERE id_donhang = ?";
        pdo_execute($sql, $trangthai, $datetime, $id_donhang);
    } else {
        $sql = "UPDATE giohang SET trang_thai = ? WHERE id_donhang = ?";
        pdo_execute($sql, $trangthai, $id_donhang);
    }
}
function delete_trangthai_order($id_donhang)
{
    $sql = "UPDATE giohang SET trang_thai = 0 WHERE id_donhang = ?";
    pdo_execute($sql, $id_donhang);
}

function select_trangthai_order($id_donhang)
{
    $sql = "SELECT trang_thai FROM giohang WHERE id_donhang = ?";
    return pdo_query_one($sql, $id_donhang);
}
function update_soluong_phong($id_sanpham)
{
    $sql = "UPDATE sanpham SET so_luong = so_luong - 1 WHERE id_sanpham = ? ";
    pdo_execute($sql, $id_sanpham);
}
function sanpham_id($id_donhang)
{
    $sql = "SELECT sanpham.id_sanpham FROM giohang INNER JOIN sanpham ON sanpham.id_sanpham = giohang.id_sanpham WHERE id_donhang = ?";
    return pdo_query_one($sql, $id_donhang);
}

function sanpham_listOrder_admin()
{
    $sql = "SELECT giohang.id_sanpham, sanpham.diadiem_chitiet,sanpham.anh_sanpham, user.name,sanpham.ten_sanpham,user.id_user, giohang.id_nguoithue, giohang.hoten,sanpham.ngay_nhap, giohang.trang_thai,sanpham.so_luong FROM (giohang INNER JOIN sanpham ON sanpham.id_sanpham = giohang.id_sanpham) INNER JOIN user ON giohang.id_nguoidang = user.id_user  ";
    return pdo_query($sql);
}
function comment_select_sp($id_sanpham)
{
    $sql = "SELECT user.name, user.avatar, binhluan.noi_dung, binhluan.ngay_binhluan  FROM binhluan INNER JOIN user ON user.id_user =  binhluan.id_user WHERE binhluan.id_sanpham = ? LIMIT 8";
    return pdo_query($sql, $id_sanpham);
}
function count_binhluan($id_sanpham)
{
    $sql = "SELECT COUNT(noi_dung) as sl FROM binhluan WHERE id_sanpham = ?";
    return pdo_query_one($sql, $id_sanpham);
}
function binhluan_insert($id_b, $id_sanpham, $id_user, $ngay_binhluan,  $noidung)
{
    $sql = "INSERT INTO binhluan VALUES (?,?,?,?,?)";
    pdo_execute($sql, $id_b, $id_sanpham, $id_user, $ngay_binhluan, $noidung);
}
function sanpham_select_keyword($keyword)
{
    $sql = "select * from sanpham join diadiem on diadiem.id_diadiem = sanpham.id_diadiem WHERE ten_sanpham LIKE ? or ten_diadiem LIKE ?";
    return pdo_query($sql, '%' . $keyword . '%', '%' . $keyword . '%');
}


function list_blog()
{
    $sql =  "SELECT * FROM blog";
    return pdo_query($sql);
}
function list_blog_user()
{
    $sql =  "SELECT * FROM blog INNER JOIN user ON blog.id_user = user.id_user";
    return pdo_query($sql);
}
function list_blog_limit()
{
    $sql = "SELECT * FROM blog ORDER BY day_add DESC LIMIT 2 ";
    return  pdo_query($sql);
}
function list_blog_id($id_blog)
{
    $sql = "SELECT * FROM blog WHERE id_blog = ?";
    return pdo_query_one($sql, $id_blog);
}









function aaaa($x, $id_user, $a, $b, $c, $time)
{
    $sql = "INSERT INTO blog VALUES (?,?,?,?,?,?)";
    pdo_execute($sql, $x, $id_user, $a, $b, $c, $time);
}


function sanpham_insert_check($id_sanpham, $ten_sanpham, $anh_sanpham, $gia, $so_luong, $ngay_nhap, $id_user, $id_diadiem, $diachi_chitiet, $luotxem, $trangthai, $chitiet)
{
    if (isset($_SESSION['user'])) {
        if ($_SESSION['user']['id_user'] == $id_user) {
            if ($_SESSION['user']['role'] == 0) {
                $trangthai = 1;
                $sql = "INSERT INTO sanpham VALUES(?,?,?,?,?,?,?,?,?,?,?,?)";
                pdo_execute($sql, $id_sanpham, $ten_sanpham, $anh_sanpham, $gia, $so_luong, $ngay_nhap, $id_user, $id_diadiem, $diachi_chitiet, $luotxem, $trangthai, $chitiet);
            } else {
                $trangthai = 2;
                $sql = "INSERT INTO sanpham VALUES (?,?,?,?,?,?,?,?,?,?,?,?)";
                pdo_execute($sql, $id_sanpham, $ten_sanpham, $anh_sanpham, $gia, $so_luong, $ngay_nhap, $id_user, $id_diadiem, $diachi_chitiet, $luotxem, $trangthai, $chitiet);
            }
        }
    }
}
