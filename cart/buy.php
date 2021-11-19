<section class="container mx-auto mt-10 mb-10">
    <form action="">
        <?php
        $buy_now =  (isset($_SESSION['cart']) ? $_SESSION['cart'] : []);
        foreach ($buy_now as $value) {
            extract($value);
        ?>
            <div class="grid grid-cols-10 mt-5 ">
                <div class="grid col-start-1 col-end-6">
                    <div class="mt-12 -mr-20 ml-20">
                        <table class="w-full  table-auto border">

                            <tr>
                                <td class="border-r-2 pl-5 p-2"> Tên phòng trọ</td>
                                <td class="pl-5">
                                    <input class="w-full cursor-default" type="text" readonly value="  <?= $value['ten_sanpham'] ?>">

                                </td>
                            </tr>
                            <tr class="border ">
                                <td class="border-r-2 pl-5 p-2">Giá thuê</td>
                                <td class="pl-5">
                                    <input class="w-full cursor-default" type="text" readonly value="<?= number_format($value['gia']) ?> đ/ 1 tháng">

                                </td>
                            </tr>
                            <tr class="border ">
                                <td class="border-r-2 pl-5 p-2">Số tầng</td>
                                <td class="pl-5"> 1 tầng nổi + 2 hầm, 788m2/sàn</td>
                            </tr>
                            <tr class="border ">
                                <td class="border-r-2 pl-5 p-2">Địa chỉ</td>
                                <td class="pl-5">
                                    <input class="w-full cursor-default" type="text" readonly value=" <?= $value['dd_chitiet'] . " " . $value['ten_diadiem'] ?>">
                                </td>
                            </tr>
                            <tr class="border ">
                                <td class="border-r-2 pl-5 p-2">Số phòng muốn thuê</td>
                                <td class="pl-5">
                                    <input type="number" class="w-12" value="<?= $value['so_luong'] ?>" readonly>
                                </td>
                            </tr>


                        </table>
                    </div>
                    <div class="flex justify-end">
                        <a href="<?= BASE_URL . "cart/index.php?product=" . $value['id_sanpham'] ?>" class="-mr-20 px-6 py-3 text-white font-light bg-blue-900 rounded hover:bg-green-500 mt-10 ">Đặt lịch ngay</a>
                    </div>
                </div>
                <div class="grid col-start-6 col-end-11">
                    <div class="h-72 flex justify-center ">
                        <img src="<?= BASE_URL_ADMIN ?>/san-pham/images/<?= $value['anh_sanpham'] ?>" alt="">
                        <a href="../cart/index.php?delete=<?= $value['id_sanpham'] ?>" class=" flex items-center ml-10 border-none" onclick="return confirm('Bạn có chắc chắn muốn xóa không?')">
                            <svg class="w-10 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            Xóa
                        </a>
                    </div>
                </div>
            </div>

        <?php } ?>

    </form>

</section>