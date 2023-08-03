<!DOCTYPE html>
<html lang="zxx">

<head>
  <meta charset="utf-8">
  <title>KLM Pet Shop</title>
  <meta content="Chernyh Mihail" name="author">
  <meta content="Dorami - Buy, Sell or Rent" name="description">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="HandheldFriendly" content="true">
  <meta name="format-detection" content="telephone=no">
  <meta content="IE=edge" http-equiv="X-UA-Compatible">
  <link rel="apple-touch-icon" sizes="57x57" href="<?= BASEURL; ?>/frontend/assets/img/favicon/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="<?= BASEURL; ?>/frontend/assets/img/favicon/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="<?= BASEURL; ?>/frontend/assets/img/favicon/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="<?= BASEURL; ?>/frontend/assets/img/favicon/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="<?= BASEURL; ?>/frontend/assets/img/favicon/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="<?= BASEURL; ?>/frontend/assets/img/favicon/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="<?= BASEURL; ?>/frontend/assets/img/favicon/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="<?= BASEURL; ?>/frontend/assets/img/favicon/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="<?= BASEURL; ?>/frontend/assets/img/favicon/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192" href="<?= BASEURL; ?>/frontend/assets/img/favicon/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?= BASEURL; ?>/frontend/assets/img/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="<?= BASEURL; ?>/frontend/assets/img/favicon/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?= BASEURL; ?>/frontend/assets/img/favicon/favicon-16x16.png">
  <link rel="manifest" href="<?= BASEURL; ?>/frontend/assets/img/favicon/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="<?= BASEURL; ?>/frontend/assets/img/favicon/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">
  <link rel="stylesheet" href="<?= BASEURL; ?>/frontend/assets/css/uikit.min.css">
  <link rel="stylesheet" href="<?= BASEURL; ?>/frontend/assets/css/all.min.css">
  <link rel="stylesheet" href="<?= BASEURL; ?>/frontend/assets/css/simple-line-icons.css">
  <link rel="stylesheet" href="<?= BASEURL; ?>/frontend/assets/css/main.css">
  <link rel="stylesheet" type="text/css" href="<?= BASEURL; ?>/sweetalert/sweetalert2.css">
  <script type="text/javascript" src="<?= BASEURL; ?>/sweetalert/sweetalert2.js"></script>
  <style>
    <style>
		.swal2-popup .swal2-title {
			font-size: 3.875em;
        }
		.swal2-popup .swal2-content {
			font-size: 2.175em;
        }
		.swal2-popup .swal2-styled.swal2-confirm{
			font-size: 1.0625em;
		}

		.swal2-popup {
			border-radius: 1.3em;
			width: 45em;
		}

		.cart-count {
			position: absolute;
			top: -5px;
			right: 330px;
			background-color: red;
			color: white;
			font-size: 12px;
			line-height: 1;
			padding: 4px 6px;
			border-radius: 50%;
		}
		.btn-add-to-cart1 {
			border: none;
			background-color: #bd866f;
			text-decoration: none;
			color: #fff;
			display: inline-block;
			font-family: "Montserrat",sans-serif;
			font-size: 14px;
			letter-spacing: 0.56px;
			margin-top: 20px;
			padding: 10px;
			left: 15px;
			right: 0;
			margin: 0 auto;
			text-transform: uppercase;
			-webkit-transition: all 1s ease 0s;
			-moz-transition: all 1s ease 0s;
			-o-transition: all 1s ease 0s;
			transition: all 1s ease 0s;
			width: 180px;
			top: 74%;
		}
		.btn-add-to-cart1:hover {
			background-color: #333;
		}
	
    .rating-inputs input[type="radio"] {
      display: none;
    }
    
    
    .rating-inputs label {
      display: inline-block;
      cursor: pointer;
      width: 20px;
      height: 20px;
      background-image: url('<?= BASEURL?>/frontend/assets/img/star.png');
      background-repeat: no-repeat;
      background-size: cover;
      vertical-align: middle;
      position: relative;
      margin-right: 5px;
    }
    .rating-inputs label::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-image: url('<?= BASEURL ?>/frontend/assets/images/star.svg');
      background-repeat: no-repeat;
      background-size: cover;
    }
    
    .rating-inputs input[type="radio"]:checked + label::before {
      background-position: 0 -30px;
    }

    /* Add dot to cart icon */
    .cart-badge {
      display: inline-block;
      width: 18px;
      height: 18px;
      background-color: red; /* You can change the color here */
      border-radius: 50%;
      text-align: center;
      color: white;
      font-size: 12px;
      line-height: 18px;
    }

    /* Responsive styles */
    @media screen and (max-width: 768px) {
      .cart-badge {
        top: 6px;
        right: 6px;
        font-size: 10px;
      }
    }

  </style>

</head>

<body class="page-item-listing">
  <div class="page-wrapper">
  <header class="page-header">
      <div class="page-header__scroll" data-uk-sticky>
        <div class="uk-container uk-container-xlarge">
          <div class="page-header__inner">
            <div class="page-header__left">
              <div class="page-header__logo"><a
                style="
                text-decoration: none;
                font-size: 20px;
                color: black;
                font-weight: bold;
                "
                class="logo__link" href="<?= BASEURL; ?>/">KLM Pet Shop</a></div>
            </div>
            <div class="page-header__right">
              <div class="page-header__mainmenu">
                <nav class="mainmenu" data-uk-navbar="">
                  <ul class="uk-navbar-nav">
                    <li><a href="<?= BASEURL; ?>/"> Home</a>
                    </li>
                    <li><a href="<?= BASEURL; ?>/Product">Shop</a>
                    </li>
                    </li>
                    <?php if (isset($_SESSION['isLoggedIn']) && $_SESSION['isLoggedIn'] === true): ?>
                      <li><a href="<?= BASEURL; ?>/Product/History">Payment History</a>
                        <?php if (isset($_SESSION['isAdmin']) && $_SESSION['isAdmin']): ?>
                          <li><a href="<?= BASEURL; ?>/Dashboard">Dashboard</a>
                        <?php endif; ?>
                    <?php endif; ?>
                    </li>
                  </ul>
                </nav>
              </div>
              <?php if (isset($_SESSION['isLoggedIn']) && $_SESSION['isLoggedIn'] === true): ?>
                    
                        <div class="page-header__sing-in">
                          <a class="sing-in" href="<?= BASEURL; ?>/Product/Cart">
                            <i class="fas fa-shopping-cart">
                              <?php
                                $cartCount = isset($_SESSION['cart']) ? count($_SESSION['cart']) : 0;
                              ?>
                              <?php if ($cartCount > 0): ?>
                                <span class="cart-badge"><?= $cartCount; ?></span>
                              <?php endif; ?>
                            </i>
                          </a>
                          
                          <a class="sing-in" href="<?= BASEURL; ?>/auth/logout" style="text-decoration: none;"> <i class="fas fa-sign-in-alt"></i><span><?= $_SESSION['username'] ?></span></a>
                        </div>
                        <div class="page-header__btn"> <a class="uk-button uk-button-primary" href="<?= BASEURL; ?>/Product/Create"> <span data-uk-icon="plus"></span><span>Add Item</span></a></div>
                <?php else: ?>
                    <div class="page-header__sing-in"><a class="sing-in" href="<?= BASEURL; ?>/auth"> <i class="fas fa-sign-in-alt"></i><span>Sign in</span></a></div>
                <?php endif; ?>
                
              <div class="page-header__btn-menu"><a href="#offcanvas" data-uk-toggle data-uk-icon="menu"></a></div>
            </div>
          </div>
        </div>
      </div>
    </header>
    