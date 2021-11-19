<!-- component -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<div class="overflow-x-auto">
    <div class="min-w-screen min-h-screen bg-gray-100 flex  justify-center bg-gray-100 font-sans overflow-hidden">
        <div class="w-full lg:w-5/6">
            <div class="bg-white shadow-md rounded my-6">
                <table class="min-w-max w-full table-auto">
                    <thead>
                        <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                            <th class="py-3 px-6 text-left">#id user</th>
                            <th class="py-3 px-6 text-left">Họ và tên</th>
                            <th class="py-3 px-6 text-center">Vai trò hiện tại</th>
                            <th class="py-3 px-6 text-center">Đăng ký CTV ngày</th>
                            <th class="py-3 px-6 text-center">Trạng thái</th>
                        </tr>
                    </thead>

                    <?php
                    foreach ($list as $key => $value) {
                        extract($value);

                    ?>
                        <tbody class="text-gray-600 text-sm font-light">
                            <tr class="border-b border-gray-200 hover:bg-gray-100">
                                <td class="py-3 px-6 text-left whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="mr-2">

                                        </div>
                                        <span class="font-medium"><?= $value['id_user'] ?></span>
                                    </div>
                                </td>
                                <td class="py-3 px-6 text-left">
                                    <div class="flex items-center">
                                        <div class="mr-2">
                                            <img class="w-6 h-6 rounded-full" src="<?= BASE_URL_ADMIN . "user/images/" . $value['avatar'] ?>" />
                                        </div>
                                        <span><?= $value['name'] ?></span>
                                    </div>
                                </td>
                                <td class="py-3 px-6 text-center">
                                    <?php
                                    if ($value['role'] == 0) {
                                        echo "Khách hàng";
                                    } elseif ($value['role'] == 1) {
                                        echo "Cộng tác viên";
                                    }

                                    ?>
                                </td>
                                <td class="py-3 px-6 text-center">
                                    <span><?= $value['day_register'] ?></span>
                                </td>
                                <td class="py-3 px-6 text-center">
                                    <?php
                                    if ($value['status'] == 0) {
                                        echo " <span class='role_done_" . $key . " bg-purple-200 text-purple-600 py-1 px-3 rounded-full text-xs'>Đang chờ xác nhận </span>";
                                    } else {
                                        echo " <span class='role_done_" . $key . " bg-green-200 text-green-600 py-1 px-3 rounded-full text-xs'>Hoàn thành </span>";
                                    }
                                    ?>
                                    <form method="POST" action="<?= BASE_URL . "home/index.php?update_ctv=" . $id_user ?>" class="up_status_<?= $key ?> hidden flex items-center justify-center">
                                        <select class="border" name="status">
                                            <option value="0">Hủy</option>
                                            <option value="1">Phê duyệt </option>
                                        </select>
                                        <button class="px-2 " type="submit"><svg class="w-4 " xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg></button>

                                    </form>
                                </td>
                            </tr>
                            <script>
                                $(document).ready(function() {
                                    $("span.role_done_<?= $key ?>").click(function() {

                                        $('span.role_done_<?= $key ?>').addClass('hidden');
                                        $('form.up_status_<?= $key ?>').removeClass('hidden');
                                    });


                                });
                            </script>
                        <?php } ?>
                        </tbody>
                </table>
            </div>
        </div>
    </div>
</div>