<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<div class="overflow-x-auto">
    <div class="min-w-screen bg-gray-100 flex items-center justify-center bg-gray-100 font-sans overflow-hidden">

        <div class="w-full lg:w-5/6">
            <div class="bg-white shadow-md rounded my-6">
                <div class=" bg-gray-100 pb-3">
                    <p>Sắp xếp theo</p>

                </div>
                <table class="min-w-max w-full table-auto">
                    <thead>
                        <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                            <th class="py-3 px-6 text-left">ID đơn hàng</th>
                            <th class="py-3 px-6 text-left">Tên phòng trọ</th>
                            <th class="py-3 px-6 text-left">Họ tên người thuê</th>
                            <th class="py-3 px-6 text-left ">Ngày xem phòng</th>
                            <th class="py-3 px-6 text-center">Số điện thoại</th>
                            <th class="py-3 px-6 text-center">Trạng thái</th>

                        </tr>
                    </thead>
                    <tbody class="text-gray-600 text-sm font-light">
                        <?php foreach ($list_tt as $key => $value) {
                            extract($value);
                        ?>
                            <tr class="border-b border-gray-200 hover:bg-gray-100">
                                <td class="py-3 px-6 text-left whitespace-nowrap">
                                    <p><?= $value['id_donhang']  ?></p>
                                </td>
                                <td class="py-3 px-6 text-left whitespace-nowrap">
                                    <a href="">
                                        <div class="flex items-center">
                                            <div class="mr-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24" height="24" viewBox="0 0 48 48" style=" fill:#000000;">
                                                    <path fill="#80deea" d="M24,34C11.1,34,1,29.6,1,24c0-5.6,10.1-10,23-10c12.9,0,23,4.4,23,10C47,29.6,36.9,34,24,34z M24,16	c-12.6,0-21,4.1-21,8c0,3.9,8.4,8,21,8s21-4.1,21-8C45,20.1,36.6,16,24,16z"></path>
                                                    <path fill="#80deea" d="M15.1,44.6c-1,0-1.8-0.2-2.6-0.7C7.6,41.1,8.9,30.2,15.3,19l0,0c3-5.2,6.7-9.6,10.3-12.4c3.9-3,7.4-3.9,9.8-2.5	c2.5,1.4,3.4,4.9,2.8,9.8c-0.6,4.6-2.6,10-5.6,15.2c-3,5.2-6.7,9.6-10.3,12.4C19.7,43.5,17.2,44.6,15.1,44.6z M32.9,5.4	c-1.6,0-3.7,0.9-6,2.7c-3.4,2.7-6.9,6.9-9.8,11.9l0,0c-6.3,10.9-6.9,20.3-3.6,22.2c1.7,1,4.5,0.1,7.6-2.3c3.4-2.7,6.9-6.9,9.8-11.9	c2.9-5,4.8-10.1,5.4-14.4c0.5-4-0.1-6.8-1.8-7.8C34,5.6,33.5,5.4,32.9,5.4z"></path>
                                                    <path fill="#80deea" d="M33,44.6c-5,0-12.2-6.1-17.6-15.6C8.9,17.8,7.6,6.9,12.5,4.1l0,0C17.4,1.3,26.2,7.8,32.7,19	c3,5.2,5,10.6,5.6,15.2c0.7,4.9-0.3,8.3-2.8,9.8C34.7,44.4,33.9,44.6,33,44.6z M13.5,5.8c-3.3,1.9-2.7,11.3,3.6,22.2	c6.3,10.9,14.1,16.1,17.4,14.2c1.7-1,2.3-3.8,1.8-7.8c-0.6-4.3-2.5-9.4-5.4-14.4C24.6,9.1,16.8,3.9,13.5,5.8L13.5,5.8z"></path>
                                                    <circle cx="24" cy="24" r="4" fill="#80deea"></circle>
                                                </svg>
                                            </div>
                                            <span class="font-medium"><?= $value['ten_sanpham'] ?></span>
                                        </div>
                                    </a>
                                </td>
                                <td class="py-3 px-6 text-left">
                                    <div class="flex items-center">

                                        <span><?php echo $value['hoten'] ?></span>
                                    </div>
                                </td>
                                <td class="py-3 px-6 text-left">
                                    <div class="flex items-center">

                                        <span><?php echo $value['ngay_xemphong'] ?></span>
                                    </div>
                                </td>
                                <td class="py-3 px-6 text-center">
                                    <div class="flex items-center justify-center">
                                        <span>0<?php echo $value['so_dt'] ?></span>
                                    </div>
                                </td>
                                <td class="py-3 px-6 text-center">
                                    <?php
                                    if ($value['trang_thai'] == 5 || $value['trang_thai'] == 0) { ?>
                                        <div class="cursor-pointer"> <?php
                                                                        if ($value['trang_thai'] == 0) {
                                                                            echo "<span class='bg-red-200 text-red-600 py-1 px-3  rounded-full text-xs'>Đơn bị hủy</span>";
                                                                            if ($value['lydo'] == 1) {
                                                                                echo "<p class='mt-2'>Khách đổi ý</p>";
                                                                            } elseif ($value['lydo'] == 2) {
                                                                                echo "<p class='mt-2'>Chưa liên hệ</p>";
                                                                            } elseif ($value['lydo'] == 3) {
                                                                                echo "<p class='mt-2'>Phòng không giống ảnh</p>";
                                                                            } else {
                                                                                echo "<p class='mt-2'>Lý do khác</p>";
                                                                            }
                                                                        } elseif ($value['trang_thai'] == 1) {
                                                                            echo "<span class='bg-purple-200 text-purple-600 py-1 px-3 rounded-full text-xs'>Đang chờ xác nhận </span>";
                                                                        } elseif ($value['trang_thai'] == 2) {
                                                                            echo "<span class='bg-yellow-200 text-yellow-600 py-1 px-3 rounded-full text-xs'>Đã liên hệ </span>";
                                                                        } elseif ($value['trang_thai'] == 3) {
                                                                            echo "<span class='bg-red-200 text-red-600 py-1 px-3 rounded-full text-xs'>Đã xem phòng </span> ";
                                                                        } elseif ($value['trang_thai'] == 4) {
                                                                            echo "<span class='bg-purple-200 text-purple-600 py-1 px-3 rounded-full text-xs'>Đang chờ </span>";
                                                                        } else {
                                                                            echo "<span class='text-sm font-bold'>Người thuê: " . $value['name'] . " </span>";
                                                                        }
                                                                        ?></div>
                                    <?php } else {
                                    ?> <div class="trang_thai_order_<?= $key ?> cursor-pointer"> <?php
                                                                                                    if ($value['trang_thai'] == 0) {
                                                                                                        echo "<span class='bg-red-200 text-red-600 py-1 px-3 rounded-full text-xs'>Đơn bị hủy</span>
                                                                                                                  ";
                                                                                                    } elseif ($value['trang_thai'] == 1) {
                                                                                                        echo "<span class='bg-purple-200 text-purple-600 py-1 px-3 rounded-full text-xs'>Đang chờ xác nhận </span>";
                                                                                                    } elseif ($value['trang_thai'] == 2) {
                                                                                                        echo "<span class='bg-yellow-200 text-yellow-600 py-1 px-3 rounded-full text-xs'>Đã liên hệ </span>";
                                                                                                    } elseif ($value['trang_thai'] == 3) {
                                                                                                        echo "<span class='bg-red-200 text-red-600 py-1 px-3 rounded-full text-xs'>Đã xem phòng </span> ";
                                                                                                    } elseif ($value['trang_thai'] == 4) {
                                                                                                        echo "<span class='bg-purple-200 text-purple-600 py-1 px-3 rounded-full text-xs'>Đang chờ </span>";
                                                                                                    } else {
                                                                                                        echo "<span class='text-sm font-bold'>Người thuê: " . $value['name'] . " </span>";
                                                                                                    }
                                                                                                    ?></div><?php
                                                                                                        }
                                                                                                            ?>

                                    <form method="POST" action="<?= BASE_URL . "home/index.php?update_order=" . $value['id_donhang'] ?>" class="duyet_trangthai_<?= $key ?> hidden flex items-center justify-center">
                                        <select class="border" name="trang_thai">
                                            <option value="0">Hủy</option>
                                            <option value="1">Xác nhận</option>
                                            <option value="2">Đã liên hệ</option>
                                            <option value="3">Đã xem phòng</option>
                                            <option value="4">Đang chờ</option>
                                            <option value="5">Thành công</option>
                                        </select>
                                        <button class="px-2 " type="submit"><svg class="w-4 " xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg></button>

                                    </form>


                                </td>
                            </tr>

                            <script>
                                $(document).ready(function() {
                                    $(".trang_thai_order_<?= $key ?>").click(function() {

                                        $('div.trang_thai_order_<?= $key ?>').addClass('hidden');
                                        $('form.duyet_trangthai_<?= $key ?>').removeClass('hidden');
                                    });


                                });
                            </script>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>