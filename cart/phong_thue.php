<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<div class="container mx-auto">
    <div class="flex border rounded-lg bg-red-500 justify-center items-center uppercase h-12 text-white w-64 text-center">
        <div>
            Phòng đã thuê
        </div>
    </div>
    <table class="min-w-full table-auto mt-5">
        <thead class="justify-between">
            <tr class="bg-gray-800">
                <th class="px-16 py-4">
                    <span class="text-gray-300">#id đơn</span>
                </th>
                <th class="px-20 py-4">
                    <span class="text-gray-300">Tên phòng</span>
                </th>
                <th class="px-16 py-4">
                    <span class="text-gray-300">Địa chỉ</span>
                </th>
                <th class="px-16 py-4">
                    <span class="text-gray-300">Người đăng</span>
                </th>

                <th class="px-16 py-4">
                    <span class="text-gray-300">Ngày xem phòng</span>
                </th>

                <th class="px-16 py-4">
                    <span class="text-gray-300">Giá</span>
                </th>
                <th class="px-16 py-4">
                    <span class="text-gray-300">Trạng thái</span>
                </th>

            </tr>
        </thead>
        <tbody class="bg-gray-200">
            <?php foreach ($tt as $key => $tt) {
                extract($tt);
            ?>
                <tr class="bg-white border-4 border-gray-200">
                    <td class="text-center
                 items-center">
                        <span><?= $tt['id_donhang'] ?></span>
                    </td>
                    <td class=" max-w-xs px-6 text-center">
                        <span class=" font-semibold "><?= $tt['ten_sanpham'] ?></span>
                    </td>
                    <td class="text-center py-4">
                        <p><?= $tt['ten_diadiem'] ?></p>
                    </td>
                    <td class="text-center py-4">
                        <?= $tt['name'] ?>
                    </td>
                    <td class="text-center py-4">
                        <span><?= $tt['ngay_xemphong'] ?></span>
                    </td>

                    <td class="text-center py-4">
                        <span class="text-green-500">
                            <p><?= number_format($tt['gia']) ?>đ</p>
                        </span>
                    </td>
                    <td class="px-22 py-2 text-center">
                        <?php
                        if ($tt['trang_thai'] == 0) {
                            echo "<span class='bg-red-200 text-red-600 py-1 px-3 rounded-full text-xs'>Đơn bị hủy</span> ";
                        } elseif ($tt['trang_thai'] == 1) {
                            echo "<div class='huydon_" . $key . "'><span class='bg-purple-200 text-purple-600 py-1 px-3 rounded-full text-xs'>Đang chờ xác nhận</span>
                            <p class='cursor-pointer huy_" . $key . "'>Hủy đơn</p></div>  ";
                        } elseif ($tt['trang_thai'] == 2) {
                            echo "<div class='huydon_" . $key . "'><span class='bg-yellow-200 text-yellow-600 py-1 px-3 rounded-full text-xs'>Đã liên hệ</span>
                            <p class='cursor-pointer  huy_" . $key . " '>Hủy đơn</p></div>";
                        } elseif ($tt['trang_thai'] == 3) {
                            echo "<div class='huydon_" . $key . "'><span class='bg-red-200 text-red-600 py-1 px-3 rounded-full text-xs'>Đã xem phòng</span> 
                            <p class='cursor-pointer  huy_" . $key . " '>Hủy đơn</p></div>";
                        } elseif ($tt['trang_thai'] == 4) {
                            echo "<div class='huydon_" . $key . "'><span class='bg-purple-200 text-purple-600 py-1 px-3 rounded-full text-xs'>Đang chờ ý kiến khách hàng</span>
                            <p class='cursor-pointer  huy_" . $key . "'>Hủy đơn</p></div>";
                        } else {
                            echo "<span class='bg-green-200 text-green-600 py-1 px-3 rounded-full text-xs'>Thành công</span> 
                       ";
                        }
                        ?> <div class='hidden lydo_<?= $key ?>'>
                            <form action="index.php?stoporder" method="POST">
                                <select name="lydo" id="">
                                    <option value="1">Đổi ý</option>
                                    <option value="2">Chưa liên hệ </option>
                                    <option value="1">Phòng khác ảnh</option>
                                    <option value="3">Lý do khác</option>
                                </select>
                                <input type="text" value="<?= $tt['id_donhang'] ?>" class="hidden" name="xx">
                                <button class="px-2 " type="submit"><svg class="w-4 " xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg></button>
                            </form>
                        </div>
                        <script>
                            $(document).ready(function() {
                                $('p.huy_<?= $key ?>').click(function() {
                                    $('div.huydon_<?= $key ?>').addClass('hidden');
                                    $('div.lydo_<?= $key ?>').removeClass('hidden');
                                })
                            })
                        </script>

                    </td>

                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>