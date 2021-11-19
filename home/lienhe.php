<!--  -->

<!--  -->
<!-- Header-->
<div class="container mx-auto mt-8">
    <div class="grid grid-cols-12 gap-5">
        <div class="col-span-8">
            <h3 class="text-2xl font-bold">Thông tin liên hệ</h3>
            <p>Mọi chi tiết Quý khác vui lòng liên hệ Hottline : 0915.169.963</p>
            <p class="font-bold italic text-red-600 ">Khách hàng có thể điền thông tin theo mẫu để chúng tôi liên hệ với
                bạn</p>
            <div class="my-16">
                <form action="" method="POST">
                    <table class="w-full">
                        <tr class="pt-4">
                            <td class="text-center ">
                                <p class="mx-4 mt-5">Họ tên</p>
                            </td>
                            <td><input type="text" placeholder="Mời nhập tên" class="w-2/3 px-4  mt-5 border border-black" required></td>
                        </tr>
                        <tr class="pt-4">
                            <td class="text-center ">
                                <p class="mx-4 mt-5">Địa chỉ</p>
                            </td>
                            <td><input type="text" placeholder="Địa chỉ" class="w-2/3 px-4 mt-5 border border-black" required></td>
                        </tr>
                        <tr class="pt-4">
                            <td class="text-center ">
                                <p class="mx-4 mt-5">Điện thoại</p>
                            </td>
                            <td> <input type="text" placeholder="Số điện thoại" class="w-2/3 px-4 mt-5 border border-black" required></td>
                        </tr>
                        <tr class="pt-4">
                            <td class="text-center ">
                                <p class="mx-4 mt-5">Email</p>
                            </td>
                            <td><input type="email" placeholder="Email" class="w-2/3 px-4 mt-5 border border-black" required></td>
                        </tr>
                        <tr class="mt-4">
                            <td class="text-center ">
                                <p class="mx-4 mt-5">Nội dung liên hệ</p>
                            </td>
                            <td> <textarea class="border mt-5 px-4 " name="" id="" cols="40" rows="10"></textarea> </td>
                        </tr>
                    </table>
                    <div class="form flex justify-center my-5">
                        <input type="submit" class="bg-blue-700 rounded text-white text-center p-2 mx-1 " value="Gửi liên hệ">
                        <input type="reset" class="bg-gray-500 rounded text-white text-center p-2 mx-1" value="Làm lại">
                    </div>

                </form>
            </div>
        </div>
        <div class="col-span-4">
            <!-- Danh sách địa điểm -->
            <section class="container mx-auto mt-5">
                <div class="">
                    <div>
                        <div class="w-full text-white text-xl  bg-red-500 h-12 flex items-center justify-center rounded-t-md">
                            <p class="uppercase font-bold"> Danh sách địa điểm</p>
                        </div>
                        <div class="overflow-y-auto h-96">
                            <?php
                            foreach ($dd as $key => $value) {
                                extract($value);
                            ?>
                                <div class="w-full border border-dashed pb-3 pt-3 text-lg pl-5 hover:text-red-500 ">
                                    <a href="../home/index.php?diadiem=<?= $value['id_diadiem'] ?>">
                                        <?= $value['ten_diadiem'] ?>
                                    </a>
                                </div>
                            <?php } ?>

                        </div>
                        <form class="flex border border-gray-300 rounded-md mt-5" action="" method="GET">
                            <input type="text" name="kyw" class="w-full px-4">
                            <div class="flex">
                                <button class="bg-black w-12 text-white rounded-r-md">
                                    <svg class=" w-10 h-12 pl-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                            </div>
                        </form>

                    </div>
                </div>

            </section>
            <!-- Danh sách địa điểm -->
            <div class="mt-8">
                <h3 class="text-xl border-b-2 w-2/3 border-yellow-300 ">Bài viết được xem nhiều nhất</h3>
                <div class="grid grid-cols-12 gap-4 mt-9">
                    <div class="col-span-4">
                        <a href=""><img src="../img/nha-157-ngo-209-doi-can-4.jpg" alt=""> </a>
                    </div>
                    <div class="col-span-8">
                        <a href="">
                            <h3 class="text-base font-bold mb-4 hover:text-yellow-300">Kinh nghiệp tìm nhà trọ ở quận
                                Nam Từ Liêm đơn giản & hiệu quả</h3>
                        </a>
                        <span class="flex"><svg xmlns="http://www.w3.org/2000/svg" class="w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg> 10,tháng tư,2019</span>
                    </div>
                </div>
                <div class="grid grid-cols-12 gap-4 mt-9">
                    <div class="col-span-4">
                        <a href=""><img src="../img/nha-157-ngo-209-doi-can-4.jpg" alt=""> </a>
                    </div>
                    <div class="col-span-8">
                        <a href="">
                            <h3 class="text-base font-bold mb-4 hover:text-yellow-300">Kinh nghiệp tìm nhà trọ ở quận
                                Nam Từ Liêm đơn giản & hiệu quả</h3>
                        </a>
                        <span class="flex"><svg xmlns="http://www.w3.org/2000/svg" class="w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg> 10,tháng tư,2019</span>
                    </div>
                </div>
                <div class="grid grid-cols-12 gap-4 mt-9">
                    <div class="col-span-4">
                        <a href=""><img src="../img/nha-157-ngo-209-doi-can-4.jpg" alt=""> </a>
                    </div>
                    <div class="col-span-8">
                        <a href="">
                            <h3 class="text-base font-bold mb-4 hover:text-yellow-300">Kinh nghiệp tìm nhà trọ ở quận
                                Nam Từ Liêm đơn giản & hiệu quả</h3>
                        </a>
                        <span class="flex"><svg xmlns="http://www.w3.org/2000/svg" class="w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg> 10,tháng tư,2019</span>
                    </div>
                </div>
                <div class="grid grid-cols-12 gap-4 mt-9">
                    <div class="col-span-4">
                        <a href=""><img src="../img/nha-157-ngo-209-doi-can-4.jpg" alt=""> </a>
                    </div>
                    <div class="col-span-8">
                        <a href="">
                            <h3 class="text-base font-bold mb-4 hover:text-yellow-300">Kinh nghiệp tìm nhà trọ ở quận
                                Nam Từ Liêm đơn giản & hiệu quả</h3>
                        </a>
                        <span class="flex"><svg xmlns="http://www.w3.org/2000/svg" class="w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg> 10,tháng tư,2019</span>
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>
<!-- Footer-->