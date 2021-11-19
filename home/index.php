<?php
require "../global.php";
require "../dao/pdo.php";
require "../dao/diadiem.php";
require "../dao/user.php";
require "../dao/sanpham.php";
require "../dao/slider.php";
$diadiem = "";
$dd = diadiem_selectAll();
$sp_dd_all = sanpham_select_diadiem_all();
$list_dd_1 = list_dd_1();
$list_dd_2 = list_dd_2();
$list_dd_3 = list_dd_3();
$count = sanpham_count();

extract($_REQUEST);
if (exist_param("login")) {
    require "login.php";
    die();
} elseif (exist_param("profile")) {
    $id_user = $_GET['profile'];
    $kh = user_select_by_id($id_user);
    $check = check_register($id_user);
    $VIEW_NAME = "profile.php";
} elseif (exist_param("btn_login")) {
    $username = $_POST['user'];
    $password = mahoa($_POST['pass']);
    $a = login($username);
    if ($a == FALSE) {
        $mess = "<p style='color:yellow; font-size: 20px;'>Sai tài khoản đăng nhập</p>";
        require "../home/login.php";
        die();
    } else {
        if ($password == $a['password']) {
            if ($a['activated'] == 0) {
                $mess = "<p style='color:yellow; font-size: 15px;'>Tài khoản của bạn đang bị khóa <br> Vui lòng liên hệ admin</p>";
                require "../home/login.php";
                die();
            } else {
                $_SESSION['user'] = $a;
                header("location: ../home/index.php");
            }
        } else {
            $mess = "<p style='color:yellow; font-size: 20px;'>Sai mật khẩu</p>";
            require "../home/login.php";
            die();
        }
    }
} elseif (exist_param("btn_singup")) {
    $id_user = "";
    $username = $_POST['user'];
    $password = mahoa($_POST['pass']);
    $chec = mb_strlen($username);
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $check_phone =  is_numeric($phone);
    $cc = mb_strlen($phone);
    $avatar = $_FILES['avatar']['name'];
    $tmpAvatar = $_FILES['avatar']['tmp_name'];
    $role = 0;
    $activated = 1;
    $link = "../admin/user/images/";
    $a = login($username);
    if ($a == FALSE) {
        if ($chec <= 0 || $chec >= 15) {
            $error =  "<p class='ml-3 text-danger font-weight-bold'>Chưa nhập tài khoản hoặc tài khoản dài quá 15 ký tự</p>";
            require "../home/singup.php";
            die();
        } else {
            if (!preg_match("/^[A-Za-z0-9_\.]{4,20}$/", $username, $matchs)) {
                $error =  "<p class='ml-3 text-danger font-weight-bold'>Tài khoản không được chứ các ký tự đặc biệt & 4 - 20 ký tự</p>";
                require "../home/singup.php";
                die();
            } else {
                if (!preg_match("/[A-Za-z0-9]{6,15}$/", $pass)) {
                    $error =  "<p class='ml-3 text-danger font-weight-bold'>Mật khẩu quá ngắn hoặc chứa ký tự đặc biệt </p>";
                    require "../home/singup.php";
                    die();
                } else {
                    if ($check_phone = false) {
                        $error =  "<p class='ml-3 text-danger font-weight-bold'>Định dạng số điện thoại không hợp lệ</p>";
                        require "../home/singup.php";
                        die();
                    } else {
                        if ($cc <= 0 || $cc >= 12) {
                            $error =  "<p class='ml-3 text-danger font-weight-bold'>Số điện thoại phải từ 0 đến 11 số</p>";
                            require "../home/singup.php";
                            die();
                        } else {
                            if ($name == "") {
                                $error =  "<p class='ml-3 text-danger font-weight-bold'>Bạn chưa nhập họ tên</p>";
                                require "../home/singup.php";
                                die();
                            } else {


                                move_uploaded_file($tmpAvatar, $link . $avatar);
                                user_insert($id_user, $username, $password, $name, $avatar, $phone, $role, $activated);
                                header("location: ../home/done.php");
                                die();
                            }
                        }
                    }
                }
            }
        }
    } else {
        $error =  "<p class='ml-3 text-danger font-weight-bold'>Tài khoản của bạn đã có người dùng <br> Vui lòng chọn tài khoản khác</p>";
        require "../home/singup.php";
        die();
    }
} elseif (exist_param("id")) {
    $id_sanpham = $_GET['id'];
    $a = sanpham_select_by_id($id_sanpham);
    $id_diadiem = $a['id_diadiem'];
    $splq = sanpham_lienquan($id_diadiem, $id_sanpham);
    $sp = sanpham_select_id_diadiem($id_sanpham);
    sanpham_luotxem($id_sanpham);
    $comment =  comment_select_sp($id_sanpham);
    $sl = count_binhluan($id_sanpham);
    $blog = list_blog();
    $VIEW_NAME = "chitietphongtro5.php";
} elseif (exist_param("sb_profile")) {
    $id_user = $_POST['idus'];
    $name = $_POST['hoten'];
    $password = $_POST['pass_cu'];
    $check = $_SESSION['user']['password'];

    if ($password == "") {
        $password = $_SESSION['user']['password'];
        update_user_not_admin($id_user, $name, $password);
        sleep(3);
        header("location:" . BASE_URL . "user/index.php?logout");
        die();
    } else {
        $password = mahoa($_POST['pass_cu']);
        if ($check == $password) {
            if (!preg_match("/[A-Za-z0-9]{6,15}$/", $password)) {
                $error =  "<p class='font-bold p-4 text-blue-500'>Mật khẩu quá ngắn hoặc chứa ký tự đặc biệt </p>";
                $VIEW_NAME = "profile.php";
            } else {
                $password = mahoa($_POST['pass_moi']);
                update_user_not_admin($id_user, $name, $password);
                header("location:" . BASE_URL . "user/index.php?logout");
            }
        } else {
            $error =  "<p class='font-bold p-4 text-blue-500'>Mật khẩu cũ không đúng <br> Vui lòng nhập lại </p>";
            $VIEW_NAME = "profile.php";
        }
    }
} elseif (exist_param("danhsach")) {
    $list = sanpham_list();
    $VIEW_NAME = "list_tt.php";
} elseif (exist_param("thue")) {
    $id_user = $_SESSION['user']['id_user'];
    $list_tt = sanpham_doitac($id_user);
    $VIEW_NAME = "user_1.php";
} elseif (exist_param("update")) {
    $list = sanpham_list();
    $a = "TRUE";
    $id_sanpham = $_GET['update'];
    update_trangthai($a, $id_sanpham);
    header("location:" . BASE_URL . "home/index.php?danhsach");
} elseif (exist_param("delete")) {
    $list = sanpham_list();
    $a = "FALSE";
    $id_sanpham = $_GET['delete'];
    update_trangthai($a, $id_sanpham);
    header("location:" . BASE_URL . "home/index.php?danhsach");
} elseif (exist_param("update_order")) {
    $trangthai = $_POST['trang_thai'];
    $id_donhang = $_GET['update_order'];
    update_trangthai_order($trangthai, $id_donhang, $datetime);
    header("location:" . BASE_URL . "home/index.php?duyet_order");
} elseif (exist_param("delete_order")) {
    $id_donhang = $_GET['delete_order'];
    delete_trangthai_order($id_donhang);
    // header("location:" . BASE_URL . "home/index.php?danhsach");
} elseif (exist_param("duyet_order")) {
    $id_user = $_SESSION['user']['id_user'];
    $list_tt = duyet_od($id_user);
    $VIEW_NAME = "duyet_order.php";
} elseif (exist_param("gioithieu")) {
    $VIEW_NAME = "gioithieu.php";
} elseif (exist_param("baiviet")) {
    $VIEW_NAME = "baiviet.php";
} elseif (exist_param("dangbai")) {
    if (isset($_SESSION['user']['so_cmnd'])) {
        $VIEW_NAME = "upload.php";
    } else {
        $VIEW_NAME = "add_info.php";
    }
} elseif (exist_param("upload")) {
    $id_user = $_SESSION['user']['id_user'];
    $cmnd = $_POST['so_cmnd'];
    $anh_cmnd = $_FILES['anh_cmnd']['name'];
    $tmp =  $_FILES['anh_cmnd']['tmp_name'];
    $link = "../admin/user/images/";
    move_uploaded_file($tmp, $link . $anh_cmnd);
    user_update_cmnd($id_user, $cmnd, $anh_cmnd);
    $alert = "<script>alert('Đăng ký CMND thành công!'); var result = confirm('Bạn có muốn đăng xuất không?');
    if(result)  {
        location.replace(' " . BASE_URL . "user/index.php?logout" . "');
    } else {
        alert('Chưa đăng xuất sẽ không cập nhật được CMND');
        location.replace(' " . BASE_URL . "home/index.php" . "');
    }</script>";
} elseif (exist_param('xx')) {
    $VIEW_NAME = "add_info.php";
} elseif (exist_param("all")) {
    $list = sanpham_selectAll();
    $VIEW_NAME = "list_all_phong.php";
} elseif (exist_param("vitri")) {
    $id_diadiem = $_GET['vitri'];
    $sp_dd_id =  sanpham_select_diadiem($id_diadiem);
    $VIEW_NAME = "list_phong_id.php";
} elseif (exist_param("add_blog")) {
    $VIEW_NAME = "add_tt.php";
} elseif (exist_param("blogid")) {
    $id_blog = $_GET['blogid'];
    $items = list_blog_id($id_blog);
    $VIEW_NAME = "blog_view.php";
} elseif (exist_param("xxxx")) {
    $x = "";
    $a = $_POST['tieude'];
    $b = $_FILES['anh']['name'];
    $tmp = $_FILES['anh']['tmp_name'];
    $bb = "../admin/blog/images/";
    $time = $datetime;
    $id_user = $_SESSION['user']['id_user'];
    move_uploaded_file($tmp, $bb . $b);
    $c = $_POST['noidung'];
    aaaa($x, $id_user, $a, $b, $c, $time);
    header("location: index.php?tintuc");
} elseif (exist_param("ctv")) {
    $id_register = "";
    $id_user = $_SESSION['user']['id_user'];
    $trang_thai = 0;
    register_ctv($id_register, $id_user, $datetime, $trang_thai);
    header("location:" . BASE_URL . "home");
} elseif (exist_param("update_ctv")) {
    $id_user = $_GET['update_ctv'];
    $trang_thai = $_POST['status'];
    update_ctv($id_user, $trang_thai);
    $list = list_register();
    $VIEW_NAME = "user_ctv.php";
} elseif (exist_param("lienhe")) {
    $VIEW_NAME = "lienhe.php";
} elseif (exist_param("list_ctv")) {
    $VIEW_NAME = "user_ctv.php";
    $list = list_register();
} elseif (exist_param("gioithieu")) {
    $VIEW_NAME = "gioithieu.php";
} elseif (exist_param("tintuc")) {
    $blog = list_blog_user();
    $VIEW_NAME = "tintuc.php";
} elseif (exist_param("upcomment")) {
    $id_b = "";
    $id_sanpham = $_POST['id_sp'];
    $noidung = $_POST['bluan'];
    $id_user = $_SESSION['user']['id_user'];
    $ngay_binhluan = $datetime;
    if ($noidung == "") {
        header("location: " . BASE_URL . "home/index.php?id=" . $id_sanpham);
    } else {
        binhluan_insert($id_b, $id_sanpham, $id_user, $ngay_binhluan,  $noidung);
        header("location: " . BASE_URL . "home/index.php?id=" . $id_sanpham);
    }
} elseif (exist_param("kyw")) {
    $keyword = $_GET['kyw'];
    $sp_dd_all = sanpham_select_keyword($keyword);
    $VIEW_NAME = "list_all_phong.php";
} elseif (exist_param("upload_phongtro")) {
    $id_sanpham = "";
    $id_user = $_SESSION['user']['id_user'];
    $ten_sanpham = $_POST['tenphongtro'];
    $gia = $_POST['giaphongtro'];
    $anh_sanpham = $_FILES['anhphongtro']['name'];
    $tmp = $_FILES['anhphongtro']['tmp_name'];
    $so_luong = $_POST['soluongphong'];
    $ngay_nhap = $datetime;
    $diachi_chitiet = $_POST['diadiem_chitiet'];
    $id_diadiem = $_POST['diadiem'];
    $chitiet = $_POST['mota'];
    $luotxem = "0";
    $trangthai = "";
    move_uploaded_file($tmp, "../admin/san-pham/images/" . $anh_sanpham);
    sanpham_insert_check($id_sanpham, $ten_sanpham, $anh_sanpham, $gia, $so_luong, $ngay_nhap, $id_user, $id_diadiem, $diachi_chitiet, $luotxem, $trangthai, $chitiet);
    header("location:" . BASE_URL . "home/index.php?thue");
} else {
    $list_gg = list_blog_limit();
    $sss = $datetime;
    $sli = slider_listAll();
    $diadiem = "diadiem.php";
    $new = sanpham_new();
    $sp_top8 = sanpham_top8();
    $list = sanpham_tonkho();
    $VIEW_NAME = "home.php";
}
require "../site/layout.php";
