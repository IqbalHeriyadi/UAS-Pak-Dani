<main class="page-main">
      <div class="section-banner section-banner--item">
        <div class="section-banner__bg" style="background-image: url(<?= BASEURL; ?>/frontend/assets/img/bg-banner-items.jpg)">
          <div class="uk-container uk-text-center">
            <div class="section-banner__content">
              <div class="section-banner__breadcrumb">
                <ul class="uk-breadcrumb">
                  <li><a href="#">Home</a></li>
                </ul>
              </div>
              <div class="section-banner__title">Buy Product For Your Pet</div>
              <div class="section-banner__text">Buy Pet Product at lowest prices directly from<br> KLM Petshop and anything for you.</div>
            </div>
          </div>
        </div>
      </div>
      <div class="page-content">
        <div class="uk-section-large uk-container">
          <div class="uk-h2">
            <div class="uk-flex uk-flex-middle"><img class="uk-margin-small-right" src="<?= BASEURL; ?>/frontend/assets/img/ico-step-1.png" alt=""><span>Suggested Items</span></div>
          </div>
          <p>Producut premium untuk hewan peliharaanmu.<br> Dapatkan Apa saja yang peliharaan anda inginkan.</p>
          <div class="uk-grid uk-grid-medium uk-child-width-1-3@m uk-child-width-1-2@s uk-margin-medium-top" data-uk-grid>
          <?php foreach ($data['products'] as $product) : ?>
            <div>
                <div class="rent-item">
                <div class="rent-item__box">
                    <div class="rent-item__media"><a href="<?= BASEURL; ?>/Product/Detail/<?= $product['id']; ?>"><img src="<?= BASEURL; ?>/images/<?= $product['images'][0] ?>" alt="<?= $product['product_name'] ?>" /></a></div>
                    <div class="rent-item__body">
                    <div class="rent-item__title"><a href="<?= BASEURL; ?>/Product/Detail/<?= $product['id']; ?>"><?= $product['product_name']; ?></a></div>
                    <div class="rent-item__intro"><?= $product['description']; ?></div>
                    <div class="rent-item__price">Buy For <b>$<?= number_format($product['price'], 0); ?></b></div>
                    </div>
                </div>
                </div>
            </div>
            <?php endforeach; ?>
          </div>
          
          <?= $data['paginationLinks']; ?>
        </div>
      </div>
    </main>