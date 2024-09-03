<!doctype html>
<html lang="en" data-bs-theme="light" data-footer="dark">

<head>

    <meta charset="utf-8">
    <title>Mcollections | UI Design</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Toner - eCommerce + Admin HTML Template Build with HTML, React, Laravel, Nodejs" name="description">
    <meta content="Themesbrand" name="author">
    <!-- App favicon -->
    <link rel="shortcut icon" href="images/favicon.ico">

    <link rel="stylesheet" href="libs/swiper/swiper-bundle.min.css">

    <!-- Bootstrap Css -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <!-- Icons Css -->
    <link href="css/icons.min.css" rel="stylesheet" type="text/css">
    <!-- App Css-->
    <link href="css/app.min.css" rel="stylesheet" type="text/css">
    <!-- custom Css-->
    <link href="css/custom.min.css" rel="stylesheet" type="text/css">

</head>

<body>
    <?php
    $tempStatus=0;
    if($tempStatus==1){
    ?>
    <div class="top-tagbar">
        <div class="w-100">
            <div class="row justify-content-between align-items-center">
                <div class="col-md-4 col-6 d-none d-xxl-block">
                    <div class="d-flex align-items-center gap-3 fs-14 fw-medium">
                        <div>
                            <i class="bi bi-envelope align-middle me-2"></i> info@mcollectionsbymerrypaul.com
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-3">
                    <div class="d-flex align-items-center justify-content-end gap-3 fs-14">
                        <div class="text-reset fw-normal d-none d-lg-block">
                            <i class="bi bi-telephone-outbound align-middle me-2"></i> +91 1234567890
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    }
    ?>

    <nav class="navbar navbar-expand-lg ecommerce-navbar" id="navbar">
        <div class="container-fluid container-custom">
            <a class="navbar-brand d-none d-lg-block nav-bar-logo-custom" href="index.php">
                <div class="logo-dark">
                    <img class="img-responsive" src="images/logo-dark.png" alt="">
                </div>
                <div class="logo-light">
                    <img src="images/logo-light.png" alt="" height="25">
                </div>
            </a>
            <button class="btn btn-mobile-menu-toggle btn-icon d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="bi bi-list fs-20"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-lg-auto mb-2 mb-lg-0" id="navigation-menu">
                    <li class="nav-item d-block d-lg-none">
                        <a class="d-block p-3 h-auto text-center" href="index.php">
                            <img src="images/logo-dark.png" alt="" height="125" class="card-logo-dark mx-auto">
                            <img src="images/logo-light.png" alt="" height="125" class="card-logo-light mx-auto">
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php" data-key="t-contact">Home</a>
                    </li>
                    <li class="nav-item dropdown dropdown-hover dropdown-mega-full">
                        <a class="nav-link dropdown-toggle" data-key="t-catalog" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            New Arrivals
                        </a>
                        <div class="dropdown-menu p-0">
                            <div class="row g-0 g-lg-4">
                                <div class="col-lg-2 d-none d-lg-block">
                                    <div class="card rounded-start rounded-0 border-0 h-100 mb-0 overflow-hidden" style="background-image: url('images/demo-images/category-01.png');background-size: cover;">
                                        <div class="bg-overlay bg-light bg-opacity-25"></div>
                                        <div class="card-body d-flex align-items-center justify-content-center">
                                            <div class="text-center">
                                                <a href="product-list.php" class="btn btn-secondary btn-hover"><i class="ph-storefront align-middle me-1"></i> <span data-key="t-shop-now">Shop Now</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <ul class="dropdown-menu-list list-unstyled mb-0 py-3">
                                        <li>
                                            <p class="mb-2 text-uppercase fs-11 fw-medium text-muted menu-title" data-key="t-men">Saree</p>
                                        </li>
                                        <li class="nav-item">
                                            <a href="product-list.php" class="nav-link" data-key="t-clothing">Ethnic Wear</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="product-list.php" class="nav-link" data-key="t-watches">Fashion Sarees</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="product-list.php" class="nav-link" data-key="t-watches">Fashion</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="product-list.php" class="nav-link" data-key="t-watches">Ethnic Sarees</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="product-list.php" class="nav-link" data-key="t-watches">Fashion</a>
                                        </li>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-2">
                                    <ul class="dropdown-menu-list list-unstyled mb-0 py-3">
                                        <li>
                                            <p class="mb-2 text-uppercase fs-11 fw-medium text-muted menu-title" data-key="t-women">Salwar</p>
                                        </li>
                                        <li class="nav-item">
                                            <a href="product-list.php" class="nav-link" data-key="t-western-wear">Western Wear</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="product-list.php" class="nav-link" data-key="t-handbags-clutches">Ethnic Wear</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="product-list.php" class="nav-link" data-key="t-lingerie-nightwear">Lingerie & Nightwear</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="product-list.php" class="nav-link" data-key="t-footwear">Ethnic Wear</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="product-list.php" class="nav-link" data-key="t-fashion-silver-jewellery">Fashion Wear</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-2">
                                    <ul class="dropdown-menu-list list-unstyled mb-0 py-3">
                                        <li>
                                            <p class="mb-2 text-uppercase fs-11 fw-medium text-muted menu-title" data-key="t-accessories-others">Kurti</p>
                                        </li>
                                        <li class="nav-item">
                                            <a href="product-list.php" class="nav-link" data-key="t-western-wear">Western Wear</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="product-list.php" class="nav-link" data-key="t-handbags-clutches">Ethnic Wear</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="product-list.php" class="nav-link" data-key="t-lingerie-nightwear">Lingerie & Nightwear</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="product-list.php" class="nav-link" data-key="t-footwear">Ethnic Wear</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="product-list.php" class="nav-link" data-key="t-fashion-silver-jewellery">Fashion Wear</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-2">
                                    <ul class="dropdown-menu-list list-unstyled mb-0 py-3">
                                        <li>
                                            <p class="mb-2 text-uppercase fs-11 fw-medium text-muted menu-title" data-key="t-accessories-others">Kurti</p>
                                        </li>
                                        <li class="nav-item">
                                            <a href="product-list.php" class="nav-link" data-key="t-western-wear">Western Wear</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="product-list.php" class="nav-link" data-key="t-handbags-clutches">Ethnic Wear</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="product-list.php" class="nav-link" data-key="t-lingerie-nightwear">Lingerie & Nightwear</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="product-list.php" class="nav-link" data-key="t-footwear">Ethnic Wear</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="product-list.php" class="nav-link" data-key="t-fashion-silver-jewellery">Fashion Wear</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-2">
                                    <ul class="dropdown-menu-list list-unstyled mb-0 py-3">
                                        <li>
                                            <p class="mb-2 text-uppercase fs-11 fw-medium text-muted menu-title" data-key="t-women">Salwar</p>
                                        </li>
                                        <li class="nav-item">
                                            <a href="product-list.php" class="nav-link" data-key="t-western-wear">Western Wear</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="product-list.php" class="nav-link" data-key="t-handbags-clutches">Ethnic Wear</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="product-list.php" class="nav-link" data-key="t-lingerie-nightwear">Lingerie & Nightwear</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="product-list.php" class="nav-link" data-key="t-footwear">Ethnic Wear</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="product-list.php" class="nav-link" data-key="t-fashion-silver-jewellery">Fashion Wear</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown dropdown-hover dropdown-mega-full">
                        <a class="nav-link dropdown-toggle" data-key="t-catalog" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Shop By
                        </a>
                        <div class="dropdown-menu p-0">
                            <div class="row g-0 g-lg-4">
                                <div class="col-lg-2 d-none d-lg-block">
                                    <div class="card rounded-start rounded-0 border-0 h-100 mb-0 overflow-hidden" style="background-image: url('images/demo-images/category-01.png');background-size: cover;">
                                        <div class="bg-overlay bg-light bg-opacity-25"></div>
                                        <div class="card-body d-flex align-items-center justify-content-center">
                                            <div class="text-center">
                                                <a href="product-list.php" class="btn btn-secondary btn-hover"><i class="ph-storefront align-middle me-1"></i> <span data-key="t-shop-now">Shop Now</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <ul class="dropdown-menu-list list-unstyled mb-0 py-3">
                                        <li>
                                            <p class="mb-2 text-uppercase fs-11 fw-medium text-muted menu-title" data-key="t-men">Saree</p>
                                        </li>
                                        <li class="nav-item">
                                            <a href="product-list.php" class="nav-link" data-key="t-clothing">Ethnic Wear</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="product-list.php" class="nav-link" data-key="t-watches">Fashion Sarees</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="product-list.php" class="nav-link" data-key="t-watches">Fashion</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="product-list.php" class="nav-link" data-key="t-watches">Ethnic Sarees</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="product-list.php" class="nav-link" data-key="t-watches">Fashion</a>
                                        </li>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-2">
                                    <ul class="dropdown-menu-list list-unstyled mb-0 py-3">
                                        <li>
                                            <p class="mb-2 text-uppercase fs-11 fw-medium text-muted menu-title" data-key="t-women">Salwar</p>
                                        </li>
                                        <li class="nav-item">
                                            <a href="product-list.php" class="nav-link" data-key="t-western-wear">Western Wear</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="product-list.php" class="nav-link" data-key="t-handbags-clutches">Ethnic Wear</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="product-list.php" class="nav-link" data-key="t-lingerie-nightwear">Lingerie & Nightwear</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="product-list.php" class="nav-link" data-key="t-footwear">Ethnic Wear</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="product-list.php" class="nav-link" data-key="t-fashion-silver-jewellery">Fashion Wear</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-2">
                                    <ul class="dropdown-menu-list list-unstyled mb-0 py-3">
                                        <li>
                                            <p class="mb-2 text-uppercase fs-11 fw-medium text-muted menu-title" data-key="t-accessories-others">Kurti</p>
                                        </li>
                                        <li class="nav-item">
                                            <a href="product-list.php" class="nav-link" data-key="t-western-wear">Western Wear</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="product-list.php" class="nav-link" data-key="t-handbags-clutches">Ethnic Wear</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="product-list.php" class="nav-link" data-key="t-lingerie-nightwear">Lingerie & Nightwear</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="product-list.php" class="nav-link" data-key="t-footwear">Ethnic Wear</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="product-list.php" class="nav-link" data-key="t-fashion-silver-jewellery">Fashion Wear</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-2">
                                    <ul class="dropdown-menu-list list-unstyled mb-0 py-3">
                                        <li>
                                            <p class="mb-2 text-uppercase fs-11 fw-medium text-muted menu-title" data-key="t-accessories-others">Kurti</p>
                                        </li>
                                        <li class="nav-item">
                                            <a href="product-list.php" class="nav-link" data-key="t-western-wear">Western Wear</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="product-list.php" class="nav-link" data-key="t-handbags-clutches">Ethnic Wear</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="product-list.php" class="nav-link" data-key="t-lingerie-nightwear">Lingerie & Nightwear</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="product-list.php" class="nav-link" data-key="t-footwear">Ethnic Wear</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="product-list.php" class="nav-link" data-key="t-fashion-silver-jewellery">Fashion Wear</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-2">
                                    <ul class="dropdown-menu-list list-unstyled mb-0 py-3">
                                        <li>
                                            <p class="mb-2 text-uppercase fs-11 fw-medium text-muted menu-title" data-key="t-women">Salwar</p>
                                        </li>
                                        <li class="nav-item">
                                            <a href="product-list.php" class="nav-link" data-key="t-western-wear">Western Wear</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="product-list.php" class="nav-link" data-key="t-handbags-clutches">Ethnic Wear</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="product-list.php" class="nav-link" data-key="t-lingerie-nightwear">Lingerie & Nightwear</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="product-list.php" class="nav-link" data-key="t-footwear">Ethnic Wear</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="product-list.php" class="nav-link" data-key="t-fashion-silver-jewellery">Fashion Wear</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                
                    <li class="nav-item">
                        <a class="nav-link" href="about-us.php" data-key="t-contact">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact-us.php" data-key="t-contact">Contact Us</a>
                    </li>
                </ul>
            </div>
            <div class="bg-overlay navbar-overlay" data-bs-toggle="collapse"  data-bs-target="#navbarSupportedContent.show"></div>

            <div class="d-flex align-items-center">
                <button type="button" class="btn btn-icon btn-topbar btn-ghost-dark rounded-circle" data-bs-toggle="modal" data-bs-target="#searchModal">
                    <i class="bx bx-search fs-22"></i>
                </button>
                <div class="dropdown header-item dropdown-hover-end">
                    <button type="button" class="btn btn-icon btn-topbar btn-ghost-dark rounded-circle" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="ph-user-circle fs-22"></i>
                    </button> 
                    <div class="dropdown-menu dropdown-menu-end">
                        <!-- item-->
                        <h6 class="dropdown-header">Hi, User_test!</h6>
                        <a class="dropdown-item" href="my-account.php"><i class="bi bi-speedometer2 text-muted fs-16 align-middle me-1"></i> <span class="align-middle">My Account</span></a>
                        <a class="dropdown-item" href="my-account.php"><i class="bi bi-cart4 text-muted fs-16 align-middle me-1"></i> <span class="align-middle">My Orders</span></a>
                        <a class="dropdown-item" href="index.php"><i class="bi bi-box-arrow-right text-muted fs-16 align-middle me-1"></i> <span class="align-middle" data-key="t-logout">Logout</span></a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="sign-in.php"><i class="ph ph-sign-in-thin text-muted fs-16 align-middle me-1"></i> <span class="align-middle" data-key="t-logout">Sign In</span></a>
                        <a class="dropdown-item" href="sign-up.php"><i class="ph ph-sign-in-thin text-muted fs-16 align-middle me-1"></i> <span class="align-middle" data-key="t-logout">Sign Up</span></a>
                    </div>
                </div>

                <div class="topbar-head-dropdown ms-1 header-item">
                    <button type="button" class="btn btn-icon btn-topbar btn-ghost-dark rounded-circle" data-bs-toggle="offcanvas" data-bs-target="#ecommerceCart" aria-controls="ecommerceCart">
                        <i class="ph-shopping-cart fs-18"></i>
                        <span class="position-absolute topbar-badge cartitem-badge fs-10 translate-middle badge rounded-pill bg-danger">4</span>
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <!--cart -->
    <div class="offcanvas offcanvas-end product-list" tabindex="-1" id="ecommerceCart" aria-labelledby="ecommerceCartLabel">
        <div class="offcanvas-header border-bottom">
            <h5 class="offcanvas-title" id="ecommerceCartLabel">My Cart <span class="badge bg-danger align-middle ms-1 cartitem-badge">4</span></h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body px-0">
            <div data-simplebar  class="h-100">
                <ul class="list-group list-group-flush cartlist">
                    <li class="list-group-item product">
                        <div class="d-flex gap-3">
                            <div class="flex-shrink-0">
                                <div class="avatar-md" style="height: 100%;">
                                    <div class="avatar-title bg-warning-subtle rounded-3">
                                        <img src="images/demo-images/product-01.jpeg" alt="" class="avatar-sm">
                                    </div>
                                </div>
                            </div>
                            <div class="flex-grow-1">
                                <a href="#!">
                                    <h5 class="fs-15">Borosil Paper Cup</h5>
                                </a>
                                <div class="d-flex mb-3 gap-2">
                                    <div class="text-muted fw-medium mb-0">₹ <span class="product-price">24.00</span></div>
                                    <div class="vr"></div>
                                    <span class="text-success fw-medium">In Stock</span>
                                </div>
                                <div class="input-step">
                                    <button type="button" class="minus">–</button>
                                    <input type="number" class="product-quantity" value="2" min="0" max="100" readonly>
                                    <button type="button" class="plus">+</button>
                                </div>
                            </div>
                            <div class="flex-shrink-0 d-flex flex-column justify-content-between align-items-end">
                                <button type="button" class="btn btn-icon btn-sm btn-ghost-secondary remove-item-btn" data-bs-toggle="modal" data-bs-target="#removeItemModal"><i class="ri-close-fill fs-16"></i></button>
                                <div class="fw-medium mb-0 fs-16">₹ <span class="product-line-price">48.00</span></div>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item product">
                        <div class="d-flex gap-3">
                            <div class="flex-shrink-0">
                                <div class="avatar-md" style="height: 100%;">
                                    <div class="avatar-title bg-info-subtle rounded-3">
                                        <img src="images/demo-images/product-01.jpeg" alt="" class="avatar-sm">
                                    </div>
                                </div>
                            </div>
                            <div class="flex-grow-1">
                                <a href="#!">
                                    <h5 class="fs-15">Rockerz Ear Bluetooth Hea...</h5>
                                </a>
                                <div class="d-flex mb-3 gap-2">
                                    <div class="text-muted fw-medium mb-0">₹ <span class="product-price">160.00</span></div>
                                    <div class="vr"></div>
                                    <span class="text-success fw-medium">In Stock</span>
                                </div>
                                <div class="input-step">
                                    <button type="button" class="minus">–</button>
                                    <input type="number" class="product-quantity" value="1" min="0" max="100" readonly>
                                    <button type="button" class="plus">+</button>
                                </div>
                            </div>
                            <div class="flex-shrink-0 d-flex flex-column justify-content-between align-items-end">
                                <button type="button" class="btn btn-icon btn-sm btn-ghost-secondary remove-item-btn" data-bs-toggle="modal" data-bs-target="#removeItemModal"><i class="ri-close-fill fs-16"></i></button>
                                <div class="fw-medium mb-0 fs-16">₹ <span class="product-line-price">160.00</span></div>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item product">
                        <div class="d-flex gap-3">
                            <div class="flex-shrink-0">
                                <div class="avatar-md" style="height: 100%;">
                                    <div class="avatar-title bg-danger-subtle rounded-3">
                                        <img src="images/products/img-6.png" alt="" class="avatar-sm">
                                    </div>
                                </div>
                            </div>
                            <div class="flex-grow-1">
                                <a href="#!">
                                    <h5 class="fs-15">Monte Carlo Sweaters</h5>
                                </a>
                                <div class="d-flex mb-3 gap-2">
                                    <div class="text-muted fw-medium mb-0">₹  <span class="product-price">244.99</span></div>
                                    <div class="vr"></div>
                                    <span class="text-success fw-medium">In Stock</span>
                                </div>
                                <div class="input-step">
                                    <button type="button" class="minus">–</button>
                                    <input type="number" class="product-quantity" value="3" min="0" max="100" readonly>
                                    <button type="button" class="plus">+</button>
                                </div>
                            </div>
                            <div class="flex-shrink-0 d-flex flex-column justify-content-between align-items-end">
                                <button type="button" class="btn btn-icon btn-sm btn-ghost-secondary remove-item-btn" data-bs-toggle="modal" data-bs-target="#removeItemModal"><i class="ri-close-fill fs-16"></i></button>
                                <div class="fw-medium mb-0 fs-16">₹ <span class="product-line-price">734.97</span></div>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item product">
                        <div class="d-flex gap-3">
                            <div class="flex-shrink-0">
                                <div class="avatar-md" style="height: 100%;">
                                    <div class="avatar-title bg-primary-subtle rounded-3">
                                        <img src="images/demo-images/product-02.jpeg" alt="" class="avatar-sm">
                                    </div>
                                </div>
                            </div>
                            <div class="flex-grow-1">
                                <a href="#!">
                                    <h5 class="fs-15">Men's Running Shoes Act...</h5>
                                </a>
                                <div class="d-flex mb-3 gap-2">
                                    <div class="text-muted fw-medium mb-0">₹ <span class="product-price">120.30</span></div>
                                    <div class="vr"></div>
                                    <span class="text-success fw-medium">In Stock</span>
                                </div>
                                <div class="input-step">
                                    <button type="button" class="minus">–</button>
                                    <input type="number" class="product-quantity" value="2" min="0" max="100" readonly>
                                    <button type="button" class="plus">+</button>
                                </div>
                            </div>
                            <div class="flex-shrink-0 d-flex flex-column justify-content-between align-items-end">
                                <button type="button" class="btn btn-icon btn-sm btn-ghost-secondary remove-item-btn" data-bs-toggle="modal" data-bs-target="#removeItemModal"><i class="ri-close-fill fs-16"></i></button>
                                <div class="fw-medium mb-0 fs-16">₹ <span class="product-line-price">240.60</span></div>
                            </div>
                        </div>
                    </li>
                </ul>

                <div class="table-responsive mx-2 border-top border-top-dashed">
                    <table class="table table-borderless mb-0 fs-14 fw-semibold">
                        <tbody>
                            <tr>
                                <td>Sub Total :</td>
                                <td class="text-end cart-subtotal">₹ 1183.57</td>
                            </tr>
                            <tr>
                                <td>Discount <span class="text-muted">(Toner15)</span>:</td>
                                <td class="text-end cart-discount">- ₹ 177.54</td>
                            </tr>
                            <tr>
                                <td>Shipping Charge :</td>
                                <td class="text-end cart-shipping">₹ 65.00</td>
                            </tr>
                            <tr>
                                <td>Estimated Tax (12.5%) : </td>
                                <td class="text-end cart-tax">₹ 147.95</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="offcanvas-footer border-top p-3 text-center">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h6 class="m-0 fs-16 text-muted">Total:</h6>
                <div class="px-2">
                    <h6 class="m-0 fs-16 cart-total">₹ 1218.98</h6>
                </div>
            </div>
            <div class="row g-2">
                <div class="col-12">
                    <a href="checkout.php" class="btn btn-info w-100">Continue to Checkout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="searchModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content rounded">
                <div class="modal-header p-3">
                    <div class="position-relative w-100">
                        <input type="text" class="form-control form-control-lg border-2" placeholder="Search for latest collections..." autocomplete="off" id="search-options" value="">
                        <span class="bi bi-search search-widget-icon fs-17"></span>
                        <a href="javascript:void(0);" class="search-widget-icon fs-14 link-secondary text-decoration-underline search-widget-icon-close d-none" id="search-close-options">Clear</a>
                    </div>
                </div>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0 overflow-hidden" id="search-dropdown">

                    <div class="dropdown-head rounded-top">
                        <div class="p-3">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h6 class="m-0 fs-14 text-muted fw-semibold"> RECENT SEARCHES </h6>
                                </div>
                            </div>
                        </div>

                        <div class="dropdown-item bg-transparent text-wrap">
                            <a href="index.php" class="btn btn-soft-secondary btn-sm btn-rounded">how to setup <i class="mdi mdi-magnify ms-1 align-middle"></i></a>
                            <a href="index.php" class="btn btn-soft-secondary btn-sm btn-rounded">buttons <i class="mdi mdi-magnify ms-1 align-middle"></i></a>
                        </div>
                    </div>

                    <div data-simplebar style="max-height: 300px;" class="pe-2 ps-3 my-3">
                        <div class="list-group list-group-flush border-dashed">
                            <div class="notification-group-list">
                                <h5 class="text-overflow text-muted fs-13 mb-2 mt-3 text-uppercase notification-title">Apps Pages</h5>
                                <a href="javascript:void(0);" class="list-group-item dropdown-item notify-item"><i class="bi bi-speedometer2 me-2"></i> <span>Analytics Dashboard</span></a>
                                <a href="javascript:void(0);" class="list-group-item dropdown-item notify-item"><i class="bi bi-filetype-psd me-2"></i> <span>Toner.psd</span></a>
                                <a href="javascript:void(0);" class="list-group-item dropdown-item notify-item"><i class="bi bi-ticket-detailed me-2"></i> <span>Support Tickets</span></a>
                                <a href="javascript:void(0);" class="list-group-item dropdown-item notify-item"><i class="bi bi-file-earmark-zip me-2"></i> <span>Toner.zip</span></a>
                            </div>

                            <div class="notification-group-list">
                                <h5 class="text-overflow text-muted fs-13 mb-2 mt-3 text-uppercase notification-title">Links</h5>
                                <a href="javascript:void(0);" class="list-group-item dropdown-item notify-item"><i class="bi bi-link-45deg me-2 align-middle"></i> <span>www.themesbrand.com</span></a>
                            </div>

                            <div class="notification-group-list">
                                <h5 class="text-overflow text-muted fs-13 mb-2 mt-3 text-uppercase notification-title">People</h5>
                                <a href="javascript:void(0);" class="list-group-item dropdown-item notify-item">
                                    <div class="d-flex align-items-center">
                                        <img src="images/users/avatar-1.jpg" alt="" class="avatar-xs rounded-circle flex-shrink-0 me-2">
                                        <div>
                                            <h6 class="mb-0">Ayaan Bowen</h6>
                                            <span class="fs-12 text-muted">React Developer</span>
                                        </div>
                                    </div>
                                </a>
                                <a href="javascript:void(0);" class="list-group-item dropdown-item notify-item">
                                    <div class="d-flex align-items-center">
                                        <img src="images/users/avatar-7.jpg" alt="" class="avatar-xs rounded-circle flex-shrink-0 me-2">
                                        <div>
                                            <h6 class="mb-0">Alexander Kristi</h6>
                                            <span class="fs-12 text-muted">React Developer</span>
                                        </div>
                                    </div>
                                </a>
                                <a href="javascript:void(0);" class="list-group-item dropdown-item notify-item">
                                    <div class="d-flex align-items-center">
                                        <img src="images/users/avatar-5.jpg" alt="" class="avatar-xs rounded-circle flex-shrink-0 me-2">
                                        <div>
                                            <h6 class="mb-0">Alan Carla</h6>
                                            <span class="fs-12 text-muted">React Developer</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- removeItemModal -->
    <div id="removeItemModal" class="modal fade zoomIn" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
                </div>
                <div class="modal-body">
                    <div class="mt-2 text-center">
                        <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop" colors="primary:#f7b84b,secondary:#f06548" style="width:100px;height:100px"></lord-icon>
                        <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                            <h4>Are you sure ?</h4>
                            <p class="text-muted mx-4 mb-0">Are you sure you want to remove this product ?</p>
                        </div>
                    </div>
                    <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                        <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn w-sm btn-danger" id="remove-product">Yes, Delete It!</button>
                    </div>
                </div>

            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <div class="modal fade" id="subscribeModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content border-0">
                <div class="modal-body p-0 bg-info-subtle rounded">
                    <div class="row g-0 align-items-center">
                        <div class="col-lg-6">
                            <div class="p-4 h-100">
                                <span class="badge bg-info-subtle text-info  fs-13">GET 10% SALE OFF</span>
                                <h2 class="display-6 mt-2 mb-3">Subscribe & Get <b>50% Special</b> Discount On Email</h2>
                                <p class="mb-4 pb-lg-2 fs-16">Join our newsletter to receive the latest updates and promotion</p>
                                <form action="#!">
                                    <div class="position-relative ecommerce-subscript">
                                        <input type="email" class="form-control rounded-pill border-0" placeholder="Enter your email">
                                        <button type="submit" class="btn btn-info btn-hover rounded-pill">Subscript</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="p-4 pb-0">
                                <img src="images/subscribe.png" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end modal -->

    <!--start back-to-top-->
    <button onclick="topFunction()" class="btn btn-info btn-icon" style="bottom: 50px;" id="back-to-top">
        <i class="ri-arrow-up-line"></i>
    </button>
    <!--end back-to-top-->
