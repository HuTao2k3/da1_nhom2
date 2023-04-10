<form class="bg-white rounded max-h-[570px]" action="<?= ADMIN_URL . 'banner/luu-them-banner' ?>" method="post" class="form-horizontal">
    <div class="">
        <label class="text-[30px] flex justify-center py-3 font-bold text-[#666565]" for="">Add new Banner </label>
        <div class="box-product col bg-secondary rounded bg-opacity-10">
            <form action="<?= BASE_URL . '/banner-store' ?>" method="post" enctype="multipart/form-data" class="text-center">
                <input type="file" name="image" class="ms-3">
            </form>
        </div>
        <div class="card-footer">
            <button type="submit" class="border-2 mx-5 my-3 text-[17px] border-[#3c91e6] rounded bg-[#3c91e6] text-white px-3 py-2">Add</button></a>
            <a class="border-2 mt-3 text-[17px] border-gray-400 rounded bg-gray-400 text-white px-3 py-2" href="<?= ADMIN_URL . 'banner' ?>">Cancel</a>
        </div>
    </div>

</form>