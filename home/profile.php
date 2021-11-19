<div class="grid grid-cols-3">
    <div class="grid col-start-2 col-end-3">
        <form action="../home/index.php" method="POST" enctype="multipart/form-data">
            <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col my-2">

                <div class=" flex items-center justify-center">
                    <div class="border rounded-full  w-32 h-32">
                        <img class="rounded-full  w-32 h-32" src="../admin/user/images/<?= $_SESSION['user']['avatar'] ?>" alt="">
                    </div>

                </div>
                <?php
                if ($_SESSION['user']['role'] == 2) {
                    echo "";
                } elseif ($_SESSION['user']['role'] == 1) {
                    echo "";
                } else {
                    if ($check) { ?>
                        <div class="appearance-none block text-center w-full bg-grey-lighter text-white bg-green-500 mt-5 font-bold border border-grey-lighter rounded py-3 px-4 mb-3"> Bạn đã gửi yêu cầu đăng ký làm Cộng tác viên </div>
                        <?php } else {
                        if ($_SESSION['user']['role'] == 0) {
                        ?>
                            <div class="-mx-3 md:flex ">
                                <div class="md:w-full px-3 mt-5">
                                    <a href="<?= BASE_URL . "home/index.php?ctv" ?>">
                                        <div class="appearance-none block text-center w-full bg-grey-lighter text-white bg-blue-600 font-bold border border-grey-lighter rounded py-3 px-4 mb-3"> Đăng ký làm Cộng tác viên</div>
                                    </a>
                                </div>
                            </div>
                <?php
                        }
                    }
                }
                ?>
                <div class="-mx-3 md:flex mb-6 mt-5">
                    <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-first-name">
                            Id tài khoản
                        </label>
                        <input name="idus" readonly class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" id="grid-first-name" type="text" value="<?= $_SESSION['user']['id_user'] ?>" name="id">

                    </div>
                    <div class="md:w-1/2 px-3">
                        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-last-name">
                            Username
                        </label>
                        <input name="email" readonly class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4" id="grid-last-name" type="text" name="email" value="<?= $_SESSION['user']['username'] ?>">
                    </div>
                </div>
                <div class="-mx-3 md:flex mb-6">
                    <div class="md:w-full px-3">
                        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-password">
                            Mật khẩu cũ
                        </label>
                        <input value="" name="pass_cu" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 mb-3" id="grid-password" type="password">
                    </div>
                </div>
                <div class="-mx-3 md:flex mb-6">
                    <div class="md:w-full px-3">
                        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-password">
                            Mật khẩu mới
                        </label>
                        <input value="" name="pass_moi" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 mb-3" id="grid-password" type="password">
                    </div>
                </div>
                <div class="-mx-3 md:flex mb-2">
                    <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-city">
                            Họ & tên
                        </label>
                        <input name="hoten" value="<?= $_SESSION['user']['name'] ?>" class="text-center appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4" id="grid-city" type="text">
                    </div>
                    <div class="md:w-1/2 px-3">
                        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-state">
                            Thông tin tài khoản
                        </label>
                        <div class="relative">
                            <input readonly type="text" class="text-center block appearance-none w-full bg-grey-lighter border border-grey-lighter text-grey-darker py-3 text-red-500 font-bold rounded" id="grid-state" value="<?php
                                                                                                                                                                                                                                if ($_SESSION['user']['role'] == 2) {
                                                                                                                                                                                                                                    echo "ADMIN";
                                                                                                                                                                                                                                } elseif ($_SESSION['user']['role'] == 1) {
                                                                                                                                                                                                                                    echo "Đại lý cho thuê phòng";
                                                                                                                                                                                                                                } else {
                                                                                                                                                                                                                                    echo "Khách hàng";
                                                                                                                                                                                                                                }
                                                                                                                                                                                                                                ?>">
                            <div class="pointer-events-none absolute pin-y pin-r flex items-center px-2 text-grey-darker">
                            </div>
                        </div>
                    </div>


                </div> <?php if (isset($error) && !empty($error)) {
                            echo $error;
                        } ?>


                <div class="flex items-center justify-center">
                    <input name="sb_profile" type="submit" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3">
                </div>
            </div>
        </form>
    </div>
</div>