<div class="max-w-6xl mx-auto">
  <h1 class="py-5 font-bold text-[30px] text-[#312a21] text-center">List Product</h1>

<section>
    <div class="tab">
      <div class="tab-list">
        <a class="tab-item" href="<?= BASE_URL . 'san-pham'?>">All product</a>
        <?php foreach ($listCategory as $cate) : ?>
       <a class="tab-item" href="<?= BASE_URL . 'loc-san-pham?id=' . $cate['id'] ?>"><?= $cate['categoryName'] ?></a>
        <?php endforeach ?>
      </div>
    </div>
</section>

  <ul class="product-list">
    <?php foreach ($listProduct as $pro) : ?>
      <li>
        <div class="product-card">
          <figure class="card-banner">
            <a href="<?= BASE_URL . 'chi-tiet-san-pham?id=' . $pro['id'] ?>">
              <img src="<?= PUBLIC_URL . $pro['image'] ?>" alt="Casmart Smart Glass" loading="lazy" width="800" height="1034" class="w-100">
            </a>
            <div class="card-actions">
              <button class="card-action-btn" aria-label="Quick view">
                <a href="<?= BASE_URL . 'chi-tiet-san-pham?id=' . $pro['id'] ?>">
                  <ion-icon name="eye-outline"></ion-icon>
                </a>
              </button>
              <button class="card-action-btn cart-btn">
                <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
                <p>Add to Cart</p>
              </button>
              <button class="card-action-btn" aria-label="Add to Whishlist">
                <ion-icon name="heart-outline"></ion-icon>
              </button>
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

<nav>
  <ul class="text-center m-16">
    <?php
    for ($i = 1; $i <= ceil($countProduct[0]['SUM'] / 10); $i++) {
    ?>
      <li class="inline-block border-black border bg-white text-black rounded hover:bg-black hover:text-white">
        <a class="px-3 py-2" href="<?= BASE_URL . 'san-pham?page=' . $i ?>"><?= $i ?></a>
      </li>
    <?php
    } ?>
  </ul>
</nav>