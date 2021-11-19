    <section class="container mx-auto">
        <div class="grid grid-cols-3 gap-5 ">
            <article class="grid col-span-1">
                <div class="leading-loose">
                    <form class="max-w-xl m-4 p-10 bg-white rounded shadow-xl" method="POST" action="../cart/index.php?order=<?= $sp_by_id['id_sanpham'] ?>">
                        <p class="text-gray-800 font-medium text-center text-xl font-bold uppercase">Xác nhận đặt lịch</p>
                        <div class="">
                            <label class="block text-sm text-gray-00" for="cus_name">Họ tên</label>
                            <input class="w-full px-5 py-4 text-gray-700 bg-gray-200 rounded" id="cus_name" name="cus_name" type="text" required="" placeholder="Your Name" aria-label="Name" value="<?= $_SESSION['user']['name'] ?>">
                        </div>
                        <div class="mt-2">
                            <label class="block text-sm text-gray-600" for="cus_email">Email</label>
                            <input class="w-full px-5  py-4 text-gray-700 bg-gray-200 rounded" id="cus_email" name="cus_email" type=" email" placeholder="yourmail@example.com" aria-label="Email">
                            <span class="text-sm text-red-400">* Nhập email để nhận thêm nhiều thông tin khuyến mãi</span>
                        </div>

                        <div class="mt-2">
                            <label class="block text-sm text-gray-600" for="cus_name">Số điện thoại</label>
                            <input class="w-full px-4 py-4 text-gray-700 bg-gray-200 rounded" id="cus_name" name="cus_phone" type="text" required="" value="<?= $_SESSION['user']['phone'] ?>" aria-label="Name">
                        </div>
                        <div class="mt-2">
                            <label class="block text-sm text-gray-600" for="cus_name">Thời gian muốn tới xem phòng</label>
                            <input class="w-full px-4 py-4 text-gray-700 bg-gray-200 rounded" id="cus_name" name="cus_time" require type="datetime-local" required="" aria-label="Name">
                        </div>
                        <div class="mt-5 pl-28">
                            <input class="px-6 py-3 text-white font-light tracking-wider bg-gray-900 rounded" name="sb" type="submit" value="Đặt lịch ngay"></input>
                        </div>
                    </form>
                </div>
            </article>



            <aside class="grid col-span-2 items-center">

                <div class="">
                    <div class="grid grid-cols-2 mt-5 items-center border border-blue-500">
                        <div class="grid col-span-1 pl-10">

                            <div class="mt-5">
                                <table class="w-full  table-auto border">

                                    <tr>
                                        <td class="border-r-2 pl-5 p-2"> Tên phòng trọ</td>
                                        <td class="pl-5">
                                            <p class="w-full cursor-default"> <?= $sp_by_id['ten_sanpham'] ?></p>

                                        </td>
                                    </tr>
                                    <tr class="border ">
                                        <td class="border-r-2 pl-5 p-2">Giá thuê</td>
                                        <td class="pl-5">
                                            <p class="w-full cursor-default"><?= number_format($sp_by_id['gia']) ?> đ/ 1 tháng</p>
                                            <span class="hidden" id="price_shop"><?= $sp_by_id['gia'] ?></span>
                                        </td>
                                    </tr>
                                    <tr class="border ">
                                        <td class="border-r-2 pl-5 p-2">Số tầng</td>
                                        <td class="pl-5"> 1 tầng nổi + 2 hầm, 788m2/sàn</td>
                                    </tr>
                                    <tr class="border ">
                                        <td class="border-r-2 pl-5 p-2">Địa chỉ</td>
                                        <td class="pl-5">
                                            <p class="w-full cursor-default"><?= $sp_by_id['dd_chitiet'] . " " . $sp_by_id['ten_diadiem'] ?></p>
                                        </td>
                                    </tr>
                                    <tr class="border ">
                                        <td class="border-r-2 pl-5 p-2">Số phòng muốn thuê</td>
                                        <td class="pl-5">
                                            <p class="w-12"><?= $sp_by_id['so_luong'] ?></p>
                                        </td>
                                    </tr>


                                </table>
                            </div>
                        </div>
                        <div class="grid col-span-1">
                            <div class="h-72 pt-2 pb-2 flex justify-center ">
                                <img src="<?= BASE_URL_ADMIN ?>/san-pham/images/<?= $sp_by_id['anh_sanpham'] ?>" alt="">

                            </div>
                        </div>
                    </div>

                </div>
            </aside>
        </div>

    </section>