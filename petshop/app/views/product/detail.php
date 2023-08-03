    <main class="page-main">
      <div class="section-banner section-banner--item">
        <div class="section-banner__bg" style="background-image: url(<?= BASEURL; ?>/frontend/assets/img/bg-banner-item.jpg)">
          <div class="uk-container uk-container-large">
            <div class="section-banner__content">
              <div class="uk-grid uk-child-width-auto@m uk-flex-bottom" data-uk-grid>
                <div class="uk-width-expand@m">
                  <div class="section-banner__breadcrumb">
                    <ul class="uk-breadcrumb">
                      <li><a href="#">Home</a></li>
                      <li> <a href="page-item-listing.html"><?= $data['product']['category']; ?></a></li>
                    </ul>
                  </div>
                  <div class="section-banner__title"><?= $data['product']['product_name']; ?></div>
                  <div class="section-banner__prices">
                    <div class="uk-grid uk-grid-medium uk-child-width-auto uk-grid-divider" data-uk-grid>
                      <div>
                        <div class="price-item">
                            <div class="price-item__time">Price</div>
                          <div class="price-item__value">$<?= number_format($data['product']['price'], 0); ?></div>
                        </div>
                      </div>
                      <div>
                        <div class="price-item">
                            <div class="price-item__time">Stock</div>
                          <div class="price-item__value"><?= $data['product']['stock']; ?></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- <div>
                  <div class="section-banner__rating"> <i class="far fa-star"></i><span>Rating</span><b>4.7</b><span>(5 Reviews)</span></div>
                  <div class="section-banner__links">
                    <ul>
                      <li><a class="link-share" href="#!"><i class="fas fa-share-alt"></i></a></li>
                      <li><a class="link-bookmark" href="#!"><i class="far fa-bookmark"></i></a></li>
                      <li><a class="link-comment" href="#!"><i class="far fa-comment-alt"></i></a></li>
                    </ul>
                  </div>
                </div> -->
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="page-content">
        <div class="uk-section-large uk-container">
          <div class="uk-grid" data-uk-grid>
            <div class="uk-width-2-3@m">
            
              <div data-uk-slideshow="min-height: 300; max-height: 430">
                  <div class="uk-position-relative uk-light">
                      <ul class="uk-slideshow-items uk-child-width-1-1" data-uk-lightbox="animation: scale">
                          <?php foreach ($data['product']['images'] as $image) : ?>
                              <li class="uk-border-rounded">
                                  <a href="<?= BASEURL; ?>/images/<?= $image; ?>">
                                      <img class="uk-width-1-1" src="<?= BASEURL; ?>/images/<?= $image; ?>" alt="img-gallery" data-uk-cover>
                                  </a>
                              </li>
                          <?php endforeach; ?>
                      </ul>
                      <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" data-uk-slidenav-previous data-uk-slideshow-item="previous"></a>
                      <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" data-uk-slidenav-next data-uk-slideshow-item="next"></a>
                  </div>
                  <div class="uk-margin-top" data-uk-slider>
                      <ul class="uk-thumbnav uk-slider-items uk-grid uk-grid-small uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-4@m uk-child-width-1-5@l">
                          <?php foreach ($data['product']['images'] as $image) : ?>
                              <li>
                                  <a href="#"><img class="uk-border-rounded" src="<?= BASEURL; ?>/images/<?= $image; ?>" alt="img-gallery"></a>
                              </li>
                          <?php endforeach; ?>
                      </ul>
                      <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin-top"></ul>
                  </div>
              </div>

              <hr class="uk-margin-medium">
              <h3> <span class="icon-folder icon-accent"></span>Description</h3>
              <p><?= $data['product']['description']; ?></p>

              <hr class="uk-margin-medium">
              <div class="uk-flex-middle uk-margin-medium-bottom" data-uk-grid>
                <div class="uk-width-expand@m">
                  <h3> <span class="icon-star icon-accent"></span>Reviews<small>(Rating <b><?= number_format($data['avg_rating'], 1); ?></b> Based <?= count($data['reviewsProduct']); ?> Reviews)</small></h3>
                </div>
              </div>
                <?php foreach ($data['reviewsProduct'] as $reviews) : ?>
                    <div class="uk-comment">
                        <div class="uk-comment-header">
                            <div class="uk-grid-medium uk-flex-middle" data-uk-grid>
                                <div class="uk-width-expand">
                                    <div data-uk-grid>
                                        <div>
                                            <h4 class="uk-comment-title uk-margin-small-bottom"><?= $reviews['username'] ?? 'Anonymous'; ?></h4>
                                            <div class="uk-comment-meta">
                                              <?php
                                                  $reviewDate = $reviews['review_date'] ?? null;
                                                  if ($reviewDate) {
                                                      $timeAgo = time() - strtotime($reviewDate);
                                                      $hoursAgo = floor($timeAgo / (60 * 60));
                                                      $minutesAgo = floor(($timeAgo - ($hoursAgo * 60 * 60)) / 60);

                                                      if ($hoursAgo > 0) {
                                                          echo $hoursAgo . ' hour' . ($hoursAgo > 1 ? 's' : '') . ' ';
                                                      }
                                                      echo $minutesAgo . ' minute' . ($minutesAgo > 1 ? 's' : '') . ' ago';
                                                  } else {
                                                      echo 'Unknown Date';
                                                  }
                                                ?>
                                            </div>
                                          </div>
                                          <div>
                                            <ul class="stars-list">
                                              <?php
                                                $rating = $reviews['rating'] ?? 0;
                                                $maxRating = 5;
                                                for ($i = 1; $i <= $maxRating; $i++) {
                                                  if ($i <= $rating) {
                                                    echo '<li><i class="fas fa-star"></i></li>';
                                                  } else {
                                                    echo '<li><i class="far fa-star"></i></li>';
                                                  }
                                                }
                                              ?>
                                            </ul>
                                          </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="uk-comment-body">
                            <p><?= $reviews['comment'] ?? 'No comment available'; ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>

              <hr class="uk-margin-medium">
              <h3> <span class="icon-star icon-accent"></span>Add Review & Rate</h3>
                <form action="<?= BASEURL; ?>/Product/addReview" method="post">
                    <div class="block-rating">
                        <span class="block-rating__text">Your Rating</span>
                        <div class="rating-inputs">
                            <input type="radio" id="star1" name="rating" value="1">
                            <label for="star1"></label>
                            <input type="radio" id="star2" name="rating" value="2">
                            <label for="star2"></label>
                            <input type="radio" id="star3" name="rating" value="3">
                            <label for="star3"></label>
                            <input type="radio" id="star4" name="rating" value="4">
                            <label for="star4"></label>
                            <input type="radio" id="star5" name="rating" value="5">
                            <label for="star5"></label>
                        </div>
                        <span class="block-rating__numb">0</span>
                    </div>
                    <div class="uk-grid uk-grid-medium uk-child-width-1-1" data-uk-grid>
                        <div><input class="uk-input" type="hidden" value="<?= $data['product']['id']; ?>" name="product_id"></div>
                        <div><input class="uk-input" type="hidden" value="<?= $_SESSION['id'] ?>" name="user_id"></div>
                        <div><textarea class="uk-textarea" name="comment" placeholder="Write your review..."></textarea></div>
                        <div><button class="uk-button uk-button-danger uk-button-large" name="submit_review" type="submit">Send comment</button></div>
                    </div>
                </form>
            </div>
            <div class="uk-width-1-3@m">
              <div class="rent-box">
                <div class="rent-box__info">
                  <div class="uk-grid-small uk-flex-middle" data-uk-grid>
                    <div class="uk-width-expand@s">
                      <div>
                        <div>
                          <div class="uk-grid-collapse" data-uk-grid>
                            <div>
                              <div class="uk-h5 uk-margin-small-bottom uk-margin-small-right"><?= $data['product']['seller_username']; ?></div>
                            </div>
                            <div><img src="<?= BASEURL; ?>/frontend/assets/img/ico-rating.svg" alt="ico-rating"></div>
                          </div>
                          <div class="uk-grid-collapse uk-margin-remove uk-flex-middle" data-uk-grid>
                            <div class="uk-padding-remove">
                              <ul class="stars-list">
                                <?php
                                  $rating = $reviews['rating'] ?? 0;
                                  $maxRating = 5;
                                  for ($i = 1; $i <= $maxRating; $i++) {
                                    if ($i <= $rating) {
                                      echo '<li><i class="fas fa-star"></i></li>';
                                    } else {
                                      echo '<li><i class="far fa-star"></i></li>';
                                    }
                                  }
                                ?>
                              </ul>
                            </div>
                            <div> <span class="uk-text-meta">(<?= count($data['reviewsProduct']); ?> Reviews)</span></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="rent-box__info">
                  <div class="uk-grid-small uk-flex-middle" data-uk-grid>
                    <div class="uk-width-expand@s">
                      <div>
                        <div>
                          <div class="uk-grid-collapse" data-uk-grid>
                            <div>
                              <div class="uk-h5 uk-margin-small-bottom uk-margin-small-right"><?= $data['product']['product_name']; ?></div>
                            </div>
                          </div>
                          <div class="uk-grid-collapse uk-margin-remove uk-flex-middle" data-uk-grid>
                            <div class="uk-padding-remove">
                              $ <?= number_format($data['product']['price'], 0); ?>
                            </div>
                            <div style="padding-left:10px;"> <span class="uk-text-meta">(<?= $data['product']['stock']; ?> Stock)</span></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="rent-box__form">
                  <div class="uk-h5">When do you want it?</div>
                  <div class="uk-margin">
                    <form action="<?= BASEURL; ?>/Product/addToCart" method="post">
                        <input type="hidden" name="product_id" value="<?= $data['product']['id']; ?>">
                        <div class="product-quantity" data-title="Quantity">
                            <input type="hidden" name="quantity" value="1" min="1" class="qty btn" id="quantity">
                        </div>
                        <button type="submit" title="Add To Cart" class="uk-button uk-button-danger uk-width-1-1">Add To Cart</button>
                    </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="section-items">
        <div class="uk-section-large uk-container">
          <div class="section-title uk-text-center">
            <h3 class="uk-h4">More Product From <?= $data['product']['category']; ?></h3>
          </div>
          <div class="section-content">
            <div data-uk-slider="sets: true">
              <div class="uk-position-relative" tabindex="-1">
                <ul class="uk-slider-items uk-grid uk-child-width-1-1 uk-child-width-1-2@s uk-child-width-1-2@m uk-child-width-1-3@l uk-child-width-1-3@xl">
                    <?php foreach ($data['relatedProducts'] as $relatedProduct) : ?>
                        <li>
                          <div class="rent-item">
                            <div class="rent-item__box">
                              <div class="rent-item__media"><a href="<?= BASEURL; ?>/product/detail/<?= $relatedProduct['id']; ?>"><img src="<?= BASEURL; ?>/images/<?= $relatedProduct['images'][0] ?>" alt="Canon 3D - MK III" /></a></div>
                              <div class="rent-item__body">
                                <div class="rent-item__title"> <a href="<?= BASEURL; ?>/product/detail/<?= $relatedProduct['id']; ?>"><?= $relatedProduct['product_name']; ?></a></div>
                                <div class="rent-item__intro"><?= $relatedProduct['description']; ?></div>
                                <div class="rent-item__price">Buy For <b>$<?= number_format( $relatedProduct['price'], 0); ?></b></div>
                              </div>
                            </div>
                          </div>
                        </li>
                    <?php endforeach; ?>
                </ul>
              </div>
              <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin-medium-top"></ul>
            </div>
          </div>
        </div>
      </div>
    </main>