
<div class="max-w-6xl mx-auto">
<ul class="product-list">
    <?php foreach ($products as $pro):?>
      <li>
        <div class="product-card">
          <figure class="card-banner">
            <a href="#">
              <img src="<?= PUBLIC_URL . $pro['image']?>" alt="Casmart Smart Glass" loading="lazy" width="800" height="1034" class="w-100">
            </a>
            <div class="card-actions">
              <button class="card-action-btn" aria-label="Quick view">
                <ion-icon name="eye-outline"></ion-icon>
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
              <a href="#"><?= $pro['name']?></a>
            </h3>
            <div class="card-price">
              <data value="25.00"><?= number_format($pro['price'])?>đ</data>
              <data value="39.00"><?= number_format($pro['discount'])?>đ</data>
            </div>
          </div>
        </div>
      </li>
      <?php endforeach?>
    </ul>
</div>