<form method="POST" enctype="multipart/form-data" class="container mx-auto" action="<?= BASE_URL . "home/index.php?xxxx" ?>">
    <!-- component -->
    <div class="bg-white shadow rounded-lg p-6">
        <div class="grid lg:grid-cols-2 gap-6">
            <div class="border focus-within:border-blue-500 focus-within:text-blue-500 transition-all duration-500 relative rounded p-1">
                <div class="-mt-4 absolute tracking-wider px-1 uppercase text-xs">
                    <p>
                        <label for="name" class="bg-white text-gray-600 px-1">Tiêu đề tin *</label>
                    </p>
                </div>
                <p>
                    <input id="tieude" name="tieude" type="text" class="py-1 px-1 text-gray-900 outline-none block h-full w-full">
                </p>
            </div>
            <div class="border focus-within:border-blue-500 focus-within:text-blue-500 transition-all duration-500 relative rounded p-1">
                <div class="-mt-4 absolute tracking-wider px-1 uppercase text-xs">
                    <p>
                        <label for="lastname" class="bg-white text-gray-600 px-1">Ảnh *</label>
                    </p>
                </div>
                <p>
                    <input id="lastname" name="anh" type="file" class="py-1 px-1 outline-none block h-full w-full">
                </p>
            </div>


        </div>
        <div class="border mt-8 p-2 focus-within:border-blue-500 focus-within:text-blue-500 transition-all duration-500 relative rounded p-1">
            <div class="-mt-4 absolute tracking-wider px-1 uppercase text-xs">
                <p>
                    <label for="name" class="bg-white text-gray-600 px-1">Nội dung *</label>
                </p>
            </div>
            <p>
                <input id="tieude" type="text" name="noidung" class="py-1 px-1 text-gray-900 outline-none block h-full w-full">
            </p>
        </div>
        <div class="border-t mt-6 pt-3">
            <button name="xxxx" type="submit" class="rounded text-gray-100 px-3 py-1 bg-blue-500 hover:shadow-inner hover:bg-blue-700 transition-all duration-300">
                Save
            </button>
        </div>
    </div>
</form>

<script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>

<script>
    CKEDITOR.replace('noidung');
</script>