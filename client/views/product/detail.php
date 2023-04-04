<div class="main-detail px-7 py-10">
    <div class="item flex justify-center">
        <img class="w-[450px]" src="<?= PUBLIC_URL . $pro['image'] ?>" alt="">
        <div class="detail pl-5">

            <h1 class="font-bold text-[27px] my-5 text-black "><?= $pro['name'] ?></h1>

            <div class="my-5 flex">Category : <?php
             $id = $pro['id_category'];
             $categori = loadOneCateDetail($id);
            echo $categori['categoryName'];
            ?> | Tình trạng : <?php echo $pro['status'] == 1 ? ' <span class="text-red-500 ml-1">Hết hàng</span>' : ' <span class="ml-1">Còn hàng</span>' ?></div>

            <div class="price flex  my-5">
                <span class="text-black font-bold text-[25px]"><?= number_format($pro['price']) ?>đ</span>
                <span class="pl-3 pt-2 line-through"><?= number_format($pro['discount']) ?>đ</span>
            </div>

            <p class=" my-5">NEEDS OF WISDOM® / Streetwear / Based in Saigon / Made in Vietnam</p>
            <form action="">
                <div class="form-group">
                    <label class="inline text-black font-bold text-[25px]" for="exampleInputFile">Size</label>
                    <select class=" ml-5 w-24 border-2 inline rounded outline-none" name="size">
                        <?php $size = size() ?>
                        <?php foreach ($size as $sz) : ?>
                            <option class="text-center"> <?= $sz['size'] ?> </option>
                        <?php endforeach ?>
                    </select>
                </div>
                
                <input type="number" value="1" placeholder="Quantity" class="inline w-[100px] border-black border-solid rounded border-[1px] my-5 px-1 py-2 text-[17px]" min="1" max="10">

                <?php echo $pro['status'] == 1 ? '<button class="inline pointer-events-none border-gray-500 bg-gray-500 text-white border-[1px] px-1 py-2 text-[17px] rounded-md my-5 hover:bg-white hover:text-black border-solid" type="submit"><i class="bx bx-cart-alt"></i>Add to cart</button>' : '<button class="inline border-black bg-black text-white border-[1px] px-1 py-2 text-[17px] rounded-md my-5 hover:bg-white hover:text-black border-solid" type="submit"><i class="bx bx-cart-alt"></i>Add to cart</button>'?>
            </form>
        </div>
    </div>
</div>
<span class="bg-red-600 px-5 py-2 inline text-white font-semibold">Description</span>
<div class="desc border-[1px] border-solid px-3 py-5 my-4">
    <p class="text-center min-h-full"><?= $pro['desc'] ?></p>
</div>
<!-- from binh luan -->

<!-- sản phẩm cùng danh mục -->
<?php if(empty($listgeneral)):?>
   <span></span>
    <?php else : ?>
        <h1 class="font-bold text-black text-[25px] py- px-6">Same Category</h1>
    <?php endif?>
<div class="">
<ul class="grid grid-cols-5 gap-7 mx-auto py-5 px-6">
    <?php foreach ($listgeneral as $pro) : ?>
      <li>
        <div class="product-card">
          <figure class="card-banner">
            <a href="<?= BASE_URL . 'chi-tiet-san-pham?id=' . $pro['id'] ?>">
              <img src="<?= PUBLIC_URL . $pro['image'] ?>" alt="Casmart Smart Glass" loading="lazy" width="800" height="1034" class="w-100">
            </a>
            <div class="card-actions">
              <!-- =======Nút xem chi tiết======== -->
              <button class="card-action-btn" aria-label="Quick view">
                <a href="<?= BASE_URL . 'chi-tiet-san-pham?id=' . $pro['id'] ?>">
                  <ion-icon name="eye-outline"></ion-icon>
                </a>
              </button>
              <!-- =======Nút giỏ hàng======== -->
              <?php if (isset($_SESSION['user']) && $_SESSION['user'] != null) : ?>
                <a class="card-action-btn cart-btn" href="<?= BASE_URL . 'add-to-cart?id=' . $pro['id'] ?>">
                <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>Add to Cart
                </a>
              <?php else : ?>
                <button class="card-action-btn cart-btn">
                  <a href="<?= BASE_URL . 'form-dangnhap' ?>">Please login</a>
                </button>
              <?php endif ?>
              <!-- =======Nút yêu thích======== -->
              <?php if (isset($_SESSION['user']) && $_SESSION['user'] != null) : ?>
                <button class="card-action-btn" aria-label="Add to Whishlist">
                  <a href="<?= BASE_URL . 'yeu-thich?id=' . $pro['id'] ?>"><ion-icon name="heart-outline"></ion-icon></a>
                </button>
              <?php else : ?>
                <button class="card-action-btn pointer-events-none bg-gray-500" aria-label="Add to Whishlist">
                  <a href="<?= BASE_URL . 'yeu-thich?id=' . $pro['id'] ?>"><ion-icon name="heart-outline"></ion-icon></a>
                </button>
              <?php endif ?>

            </div>
          </figure>
          <div class="card-content">
            <h3 class="h4 card-title short">
              <a href="<?= BASE_URL . 'chi-tiet-san-pham?id=' . $pro['id'] ?>"><?= $pro['name'] ?></a>
            </h3>
            <div class="card-price">
              <data value="25.00"><?= number_format($pro['price']) ?>đ</data>
              <data value="39.00"><?= number_format($pro['discount']) ?>đ</data>
            </div>
          </div>
        </div>
      </li>
    <?php endforeach ?>
  </ul>
</div>


