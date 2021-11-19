<div class=" lg: container mx-auto mt-8">
    <div class=" lg:grid grid-cols-12 gap-5">
        <div class="col-span-8 mx-auto">
            <!--Slider-->
            <div class="slider_img md:w-full">
                <img class="md:w-full lg:mx-auto" src="<?= BASE_URL_ADMIN . "san-pham/images/" . $sp['anh_sanpham'] ?>" alt="">
            </div>
            <!--Slider-->
            <div class="content relative">
                <div class="title mt-4 ">
                    <h2 class="text-xl uppercase font-bold"><?= $sp['ten_sanpham'] ?></h2>
                </div>
                <div class="address mt-1">
                    <p class="text-xl pt-2">Địa chỉ: <?= $sp['diadiem_chitiet'] . " - " .  $sp['ten_diadiem']  ?></p>
                </div>
                <div class="price mt-1">
                    <p class="text-2xl text-green-500 font-bold uppercase pt-2"><?= number_format($sp['gia']) ?> </p>
                </div>
                <div class="info-main">

                    <div class="box my-3 px-5">
                        <div class="flex">
                            <div class="left  w-1/2 px-2">
                                <div class="float-left  w-full mt-4">
                                    <span class="icon w-40 inline-block float-left text-left">Ngày đăng: </span>
                                    <span class="font-bold"><?= $sp['ngay_nhap'] ?></span>
                                </div>
                                <div class="float-left w-full mt-4">
                                    <span class="icon w-40 inline-block float-left text-left">Người đăng: </span>
                                    <span class="font-bold"><?= $sp['name'] ?></span>
                                </div>
                                <div class="float-left w-full mt-4">
                                    <span class="icon w-40 inline-block float-left text-left">Số phòng: </span>
                                    <span class="font-bold"><?= $sp['so_luong'] ?></span>
                                </div>

                            </div>


                        </div>
                    </div>
                    <div style="width:975px;" class="mt-10">
                        <div style="height: 1px;" class=" bg-gray-200 w-full"> </div>
                        <div class="flex mt-10">
                            <button class="uppercase p-2 w-32 bg-red-400 text-white mota">Mô tả</button>
                            <button class="uppercase p-2 w-32 text-white bg-green-400 danhgia">Đánh giá <span><?= $sl['sl'] ?></span></button>
                        </div>
                        <div class="border">
                            <div class="m-5 ">
                                <p class="uppercase font-bold text-2xl">thông tin chi tiết</p>

                                <span id="mota" class="text-2xl">
                                    <?= $sp['chi_tiet'] ?>
                                </span>

                                <span id="danhgia" class="text-2xl hidden">

                                    <?php
                                    foreach ($comment as $value) {
                                        extract($value);
                                    ?>
                                        <div class="bg-white w-full flex items-center p-2 rounded-xl shadow border-b mt-2">
                                            <div class="flex items-center space-x-4">
                                                <img class="rounded-full w-16 h-16" src="<?= BASE_URL_ADMIN . "user/images/" . $value['avatar'] ?>">
                                            </div>
                                            <div class="flex-grow p-3">
                                                <div class="font-semibold text-gray-500">
                                                    <?= $value['name'] ?> <span class="pl-5 text-lg"><?= $value['ngay_binhluan'] ?></span>
                                                </div>
                                                <div class="text-lg text-black font-bold">
                                                    <?= $value['noi_dung'] ?>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>


                                    <?php
                                    if (isset($_SESSION['user'])) {

                                    ?>
                                        <div class="bg-white w-full flex items-center p-2 rounded-xl shadow border-b">
                                            <div class="flex items-center space-x-4">
                                                <img class="rounded-full w-20 h-20" src="<?= BASE_URL_ADMIN . "user/images/" . $_SESSION['user']['avatar'] ?>">
                                            </div>
                                            <div class="flex-grow p-3">
                                                <div class="font-semibold text-gray-700">
                                                    <?= $_SESSION['user']['name'] ?>
                                                </div>
                                                <div class="text-sm text-gray-500">
                                                    <form method="POST" action="../home/index.php?upcomment">
                                                        <input type="text" name="id_sp" class="hidden" value="<?= $id_sanpham ?>">
                                                        <div class="flex">
                                                            <input class="p-2 w-full" type="text" name="bluan" placeholder="Nhập bình luận">
                                                            <?php if (isset($er)) {
                                                                echo $err;
                                                            } ?>
                                                            <input type="submit" name="comment" class="p-2 " value="Comment">
                                                        </div>




                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } else {
                                    ?>
                                        <div class="bg-white w-full flex items-center p-2 rounded-xl shadow border-b">Vui lòng đăng nhập để thêm bình luận</div>
                                    <?php } ?>
                                </span>
                            </div>
                        </div>
                        </span>
                    </div>


                </div>
                <div class="buy absolute top-36 right-1">
                    <?php
                    if ($sp['so_luong'] <= 0) {
                        echo "<div class='bg-red-500 text-white rounded-md pr-12 pl-12 p-4'>Hết phòng</div>";
                    } else {
                    ?>
                        <a href='../cart/index.php?id=<?= $sp['id_sanpham'] ?>'>
                            <input type='submit' class='bg-blue-500 text-white rounded-md p-4' value='Đặt lịch xem phòng ngay'>
                        </a>
                    <?php } ?>
                </div>
            </div>

        </div>

        <?php
        require "blog_tag.php";
        ?>



    </div>

    <div class="my-12">
        <h3 class="text-2xl">Phòng trọ có thể quan tâm</h3>
        <hr class="w-48 bg-yellow-400">
        <div class="grid grid-cols-12 gap-4">
            <?php
            foreach ($splq as  $value) {
                extract($value);
            ?>

                <a href="<?= BASE_URL . "home/index.php?id=" . $value['id_sanpham'] ?>" class="col-span-3 w-full max-w-sm mx-auto rounded-md shadow-md overflow-hidden">
                    <div class="flex items-end justify-end h-56 w-full bg-cover" style="background-image: url('<?php echo BASE_URL_ADMIN . "san-pham/images/" . $value['anh_sanpham'] ?>')">
                        <button class="p-2 rounded-full bg-blue-600 text-white mx-2 -mb-4 hover:bg-blue-500 focus:outline-none focus:bg-blue-500">
                            <p><?= number_format($value['gia']) ?>đ</p>
                        </button>
                    </div>
                    <div class="px-5 py-7">
                        <h3 class="text-gray-700 uppercase mt-2 text-red-500 font-bold mb-2"><?= $value['ten_sanpham'] ?></h3>
                        <span class="text-gray-500 pt-2">Địa chỉ: <?= $value['diadiem_chitiet']  ?></span>

                    </div>
                </a>

            <?php  } ?>

        </div>
    </div>
</div>
<!-- Footer-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        $("button.mota").click(function() {
            $("span#mota").removeClass("hidden");
            $("span#danhgia").addClass("hidden");

        });
        $("button.danhgia").click(function() {
            $("span#danhgia").removeClass("hidden");
            $("span#mota").addClass("hidden");
        });

    });
</script>