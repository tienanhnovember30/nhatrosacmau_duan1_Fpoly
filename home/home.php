<style>
    .product {
        background-color: #eff3f6;
    }

    .anh-pro {
        height: 270px;
    }
</style>

<section class="container mx-auto mt-5">

    <div class="flex border rounded-lg bg-red-500 justify-center items-center uppercase h-12 text-white w-96 text-center">
        <div class="thunho static float-left">

            <button class="jq-1">
                <svg class="w-5" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4" />
                </svg>
            </button>
        </div>

        <div class="phongto static float-left">
            <button class="jq-2 hidden">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                </svg>
            </button>
        </div>
        <div class="pl-3">
            Top 8 phòng được xem nhiều nhất
        </div>

    </div>

    <div class="thunho grid grid-cols-4 gap-5 mt-5">
        <?php foreach ($sp_top8 as $key => $sp) {
            extract($sp);
        ?>
            <a href="<?= BASE_URL . "home/index.php?id=" . $sp['id_sanpham'] ?>" class="grid col-span-1 w-full max-w-sm mx-auto rounded-md shadow-md overflow-hidden">
                <div class="flex items-end justify-end h-56 w-full bg-cover" style="background-image: url('<?php echo BASE_URL_ADMIN . "san-pham/images/" . $sp['anh_sanpham'] ?>')">
                    <button class="p-2 rounded-full bg-blue-600 text-white mx-2 -mb-4 hover:bg-blue-500 focus:outline-none focus:bg-blue-500">
                        <p>
                            <?= number_format($sp['gia']) ?>đ
                        </p>
                    </button>
                </div>
                <div class="px-5 py-7">
                    <h3 class="text-gray-700 uppercase text-lg mt-2 text-red-500 font-bold mb-2">
                        <?= $sp['ten_sanpham'] ?>
                    </h3>
                    <span class="text-gray-500 pt-2">Địa chỉ:
                        <?= $sp['diadiem_chitiet'] . " " . $sp['ten_diadiem'] ?>
                    </span>

                </div>
            </a>
        <?php } ?>


    </div>

</section>

<section class="container mx-auto mt-5">
    <div class="flex border rounded-lg bg-red-500 justify-center items-center uppercase h-12 text-white w-96 text-center">
        <div>
            Phòng mới cập nhật
        </div>
    </div>
    <div class="grid grid-cols-4 gap-5 mt-5">
        <?php foreach ($new as $new) {
            extract($new);
        ?>
            <a href="<?= BASE_URL . "home/index.php?id=" . $sp['id_sanpham'] ?>">
                <div class="grid col-span-1">
                    <div>
                        <img class="anh-pro w-full" src="../admin/san-pham/images/<?= $new['anh_sanpham'] ?>" alt="">
                        <div class="flex relative items-center bg-blue-400 w-full h-8 -mt-5 text-white flex-row-reverse pr-8 ">
                            <span>
                                <?= number_format($new['gia']) ?>đ/1 tháng
                            </span>
                        </div>
                    </div>

                    <div class="product text-center -mt-8">
                        <p class="pt-10 pb-2 text-red-500 font-bold text-lg">
                            <?= $new['ten_sanpham'] ?>
                        </p>
                        <p class="mt-1 mb-12">Đ/c:
                            <?php echo $new['diadiem_chitiet'] . ", " . $new['ten_diadiem'] . ", Hà Nội" ?>
                        </p>

                    </div>
                </div>
            </a>
        <?php } ?>


    </div>

</section>


<section class="container mx-auto mt-5">
    <div class="flex border rounded-lg bg-red-500 justify-center items-center uppercase h-12 text-white w-96 text-center mb-6">
        <div>
            Tin tức phòng trọ
        </div>
    </div>
    <!-- component -->
    <!-- This is an example component -->

    <div class="blogs__wraper bg-blue-200  py-20 px-20">

        <div class="grid grid-cols-2 justify-between ">
            <?php
            foreach ($list_gg as $a) {
                extract($a);

            ?>
                <div class=" bg-white mr-5 grid col-span-1">
                    <img class="w-full h-96" src="<?= BASE_URL_ADMIN . "blog/images/" . $a['anh'] ?>" class="">
                    <div class="p-5">
                        <h1 class="text-2xl font-bold text-green-800 py-2"><?= $a['tieu_de'] ?></h1>
                        <p class="bg-white text-sm text-black max-h-24 h-24 overflow-ellipsis overflow-hidden"><?= $a['noi_dung'] ?></p>
                        <a href="" class="py-2 px-3 mt-4 px-6 text-white bg-green-500 inline-block rounded">Xem thêm</a>
                    </div>
                </div>
            <?php } ?>


        </div>
    </div>
</section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {

        $("button.jq-1").click(function() {
            $("div.thunho").hide(1000);
            $("button.jq-2").removeClass("hidden");
        });
        $("button.jq-2").click(function() {
            $("div.thunho").show(1000);
            $("button.jq-2").addClass("hidden");
        });



    })
</script>