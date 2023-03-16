<form class="py-24">
    <div class="item flex justify-center">
        <img class="w-[450px]" src="<?= PUBLIC_URL . $pro['image'] ?>" alt="">

        <div class="detail pl-5">
            <h1 class="font-bold text-[30px] text-black "><?= $pro['name'] ?></h1>
            <p class="py-3">Category : <?php
                                        $id = $pro['id_category'];
                                        $categori = loadOneCateDetail($id);
                                        echo $categori['categoryName'];
                                        ?> | Tình trạng : <?php echo $pro['status'] == 1 ? 'Hết hàng' : 'Còn hàng' ?></p>
            <div class="price flex pb-3">
                <span class="text-black font-bold text-[25px]"><?= number_format($pro['price']) ?>đ</span>
                <span class="pl-3 pt-2 line-through"><?= number_format($pro['discount']) ?>đ</span>
            </div>
            <p class="pb-3">NEEDS OF WISDOM® / Streetwear / Based in Saigon / Made in Vietnam</p>

            <div class="">
               <label class="text-black font-bold text-[17px] block pb-2" for="">Size</label> 
               <button class="inline border-gray-400 border-[1px] border-solid px-[15px] py-[5px] text-black  active:text-white active:bg-red-600 mr-2">S</button>
               <button class="inline border-gray-400 border-[1px] border-solid px-[13px] py-[5px] text-black active:text-white active:bg-red-600 mr-2">M</button>
               <button class="inline border-gray-400 border-[1px] border-solid px-[15px] py-[5px] text-black  active:text-white active:bg-red-600 mr-2">L</button>

            </div>

        </div>

    </div>
</form>