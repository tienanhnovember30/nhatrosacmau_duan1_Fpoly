<!-- component -->
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                <form method="POST" enctype="multipart/form-data" action="<?= BASE_URL . "home/index.php?upload_phongtro" ?>">
                    <div class="mb-4">
                        <label class="text-xl font-mono uppercase">Tên phòng trọ</label></br>
                        <input type="text" class="border-2 border-gray-300 p-2 w-full" name="tenphongtro" id="title" value="" required></input>
                    </div>

                    <div>
                        <div class="flex">
                            <div class="mb-4 w-6/12">
                                <label class="text-xl font-mono uppercase">Giá phòng</label></br>
                                <input type="number" class="border-2 border-gray-300 p-2 w-full" name="giaphongtro" id="description" placeholder=""></input>
                            </div>
                            <div class="mb-4 pl-2 w-6/12">
                                <label class="text-xl font-mono uppercase">Ảnh đại diện phòng</label></br>
                                <input required type="file" class="border-2 border-gray-300 p-1 w-full" name="anhphongtro" id="description"></input>
                            </div>
                        </div>
                    </div>

                    <div class="">
                        <div class=" flex">
                            <div class="mr-2 w-2/12">
                                <label class="text-xl font-mono uppercase">Số lượng phòng</label></br>
                                <input type="number" min="1" class="text-center border-2 border-gray-300 p-2 w-full" name="soluongphong" value="1" id="description"></input>
                            </div>
                            <div class="w-7/12">
                                <label class="text-xl font-mono uppercase ml-2">Địa chỉ chi tiết</label></br>
                                <input type="text" class="border-2 border-gray-300 p-2 w-full" name="diadiem_chitiet" id="description" placeholder="Vd: Số nhà 18, ngách 3, ngõ 2 "></input>
                            </div>
                            <div class=" ml-2 w-3/12">
                                <label class="text-xl font-mono uppercase">Địa chỉ </label></br>
                                <select class="border-2 border-gray-300 p-2 w-full" name="diadiem" id="">
                                    <?php
                                    foreach ($dd as  $value) {
                                        extract($value);
                                    ?>
                                        <option value="<?= $value['id_diadiem'] ?>"><?= $value['ten_diadiem'] ?></option>
                                    <?php } ?>
                                </select>
                            </div>

                        </div>
                    </div>

                    <div class="mb-8 mt-3">
                        <label class="text-xl font-mono uppercase">Mô tả phòng trọ</label></br>
                        <textarea name="mota" class="border-2 border-gray-500">

                            </textarea>
                    </div>

                    <div class="flex ">
                        <button role="submit" class="p-3 bg-blue-500 text-white hover:bg-blue-400" required>Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>

<script>
    CKEDITOR.replace('mota');
</script>