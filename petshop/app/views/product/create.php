<main class="page-main">
      <div class="section-banner section-banner--item">
        <div class="section-banner__bg" style="background-image: url(<?= BASEURL; ?>/frontend/assets/img/bg-banner-item.jpg)">
          <div class="uk-container uk-container-large">
            <div class="section-banner__content">
              <div class="uk-grid uk-child-width-auto@m uk-flex-bottom" data-uk-grid>
                <div class="uk-width-expand@m">
                  <div class="section-banner__breadcrumb">
                    <ul class="uk-breadcrumb">
                    </ul>
                  </div>
                  <div class="section-banner__title">Add Your Product</div>
                  <div class="section-banner__prices">
                    
                  </div>
                </div>
               
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="page-content">
        <div class="uk-section-large uk-container">
          <div class="uk-grid" data-uk-grid>
            <div class="uk-width-2-3@m">

              <h3> <span class="icon-folder icon-accent"></span>Add Product</h3>

              <hr class="uk-margin-medium">
                <form action="<?= BASEURL; ?>/DashboardProduct/tambah" method="post" enctype="multipart/form-data">
                    <div class="uk-grid uk-grid-medium uk-child-width-1-1" data-uk-grid>
                        <div><input class="uk-input" type="hidden" value="<?= $_SESSION['id'] ?>" name="seller_id"></div>
                        <div><input class="uk-input" type="text" placeholder="Product Name" name="product_name"></div>
                        <div>
                          <select class="uk-select" name="category" required>
                            <?php foreach ($data['categories'] as $category) : ?>
                              <option class="uk-option" value="<?= $category['category_name']; ?>"><?= $category['category_name']; ?></option>
                              <?php endforeach; ?>
                            </select>
                          </div>
                        <div><input class="uk-input" type="number" placeholder="Price"  name="price"></div>
                        <div><input class="uk-input" placeholder="Stock" type="text" name="stock" required></div>
                        <div><input class="uk-input" placeholder="Posting date" type="date" name="posting_date" required></div>
                        <div>
                          <select class="uk-select" name="status" required>
                              <option selected>Choose Product Status</option>
                              <option value="Baru">Baru</option>
                              <option value="Bekas">Bekas</option>
                          </select>
                        </div>
                        <div><textarea class="uk-textarea" name="description" placeholder="Write your Description..."></textarea></div>
                        <div>
                            <label>Product Image *</label>
                            <input type="file" class="uk-file" id="images" name="images[]" multiple>
                            <span>hold select for selected your images product</span>
                        </div>
                        <div><button class="uk-button uk-button-danger uk-button-large" type="submit">Save</button></div>
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
                              <div class="uk-h5 uk-margin-small-bottom uk-margin-small-right">Preview Tumbnail image Product</div>
                            </div>
                            
                          </div>
                          <div class="uk-grid-collapse uk-margin-remove uk-flex-middle" data-uk-grid>
                            <div class="uk-padding-remove">
                              <ul class="stars-list">
                                
                              </ul>
                            </div>
                            
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="rent-box__form">
                  <div class="uk-h5"><img id="previewImage" src="" alt="Image Product Preview"></div>
                  <div class="uk-margin">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>