    <!-- Page Banner -->
    <link rel="stylesheet" type="text/css" href="<?= BASEURL; ?>/front-assets/revolution/css/settings.css">
    
        
    <link rel="stylesheet" type="text/css" href="<?= BASEURL; ?>/front-assets/revolution/css/layers.css">
    <link rel="stylesheet" type="text/css" href="<?= BASEURL; ?>/front-assets/revolution/css/navigation.css">
    
    
    <link rel="stylesheet" type="text/css" href="<?= BASEURL; ?>/front-assets/libraries/lib.css">
    
    
    <link rel="stylesheet" type="text/css" href="<?= BASEURL; ?>/front-assets/css/plugins.css">			
    <link rel="stylesheet" type="text/css" href="<?= BASEURL; ?>/front-assets/css/navigation-menu.css">
    <link rel="stylesheet" type="text/css" href="<?= BASEURL; ?>/front-assets/css/shortcode.css">
    <link rel="stylesheet" type="text/css" href="<?= BASEURL; ?>/front-assets/style.css">
    
    

    <div class="page-banner container-fluid no-padding">
				<!-- Container -->
				<div class="container">
					<div class="banner-content">
						<h3>History Payment</h3>
						<p>our vision is to be Earth's most customer centric company</p>
					</div>
					<ol class="breadcrumb">
						<li><a href="<?= BASEURL ?>/" title="Home">Home</a></li>							
						<li class="active">History Payment</li>
					</ol>
				</div><!-- Container /- -->
			</div><!-- Page Banner /- -->
			<!-- Cart -->
    <div class="woocommerce-cart container-fluid no-left-padding no-right-padding">
    <!-- Container -->
    <div class="container">
        <!-- Cart Table -->
        <div class="col-md-12 col-sm-12 col-xs-12 cart-table">
            <form>
                <table class="table table-bordered table-responsive">
                    <thead>
                        <tr>
                            <th class="product-name">Product Name</th>
                            <th class="product-unit-price">qty</th>
                            <th class="product-unit-price">Trancaction Date</th>
                            <th class="product-unit-price">Payment Method</th>
                            <th class="product-unit-price">Payment Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Iterate through cart items and display them -->
                        <?php foreach ($data['history'] as $history) : ?>
                            <tr class="cart_item">
                                <td data-title="Product Name" class="product-name">
                                    <?php if (isset($history['product_name'])) : ?>
                                        <a href="#" style="font-family: 'Montserrat', sans-serif; font-size: 16px;">
                                            <?= $history['product_name']; ?>
                                        </a>
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <?= $history['product_quantity']; ?>
                                </td>
                                <td>
                                    <?= $history['transaction_date']; ?>
                                </td>
                                <td>
                                    <?= $history['payment_method']; ?>
                                </td>
                                <td>
                                    <?= $history['payment_status']; ?>
                                </td>                                
                            </tr>
                        <?php endforeach; ?>
                        <!-- End of cart items loop -->
                    </tbody>
                </table>
            </form>
        </div><!-- Cart Table /- -->

    </div><!-- Container /- -->
</div><!-- Cart /- -->

    <script type="text/javascript" src="<?= BASEURL; ?>/front-assets/revolution/js/jquery.themepunch.tools.min.js?rev=5.0"></script>
	<script type="text/javascript" src="<?= BASEURL; ?>/front-assets/revolution/js/jquery.themepunch.revolution.min.js?rev=5.0"></script>
	<script type="text/javascript" src="<?= BASEURL; ?>/front-assets/revolution/js/extensions/revolution.extension.video.min.js"></script>
	<script type="text/javascript" src="<?= BASEURL; ?>/front-assets/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
	<script type="text/javascript" src="<?= BASEURL; ?>/front-assets/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
	<script type="text/javascript" src="<?= BASEURL; ?>/front-assets/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
	<script type="text/javascript" src="<?= BASEURL; ?>/front-assets/revolution/js/extensions/revolution.extension.actions.min.js"></script>
	
	<!-- Library - Theme JS -->
	<script src="<?= BASEURL; ?>/front-assets/js/functions.js"></script>