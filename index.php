<?php
include "inc_header.php";
?>
<section class="position-relative">
    <div id="ecommerceHero" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="ecommerce-home bg-danger-subtle" style="background-image: url('images/demo-images/back1.jpg');">
                    <div class="container">
                        <div class="row justify-content-end">
                            <div class="col-lg-7">
                                <div class="text-sm-end">
                                    <p class="fs-15 fw-semibold text-uppercase"><i class="ri-flashlight-fill text-primary align-bottom me-1"></i> In this season, find the best</p>
                                    <h1 class="display-4 fw-bold lh-base text-capitalize mb-3">Exclusive collection for everyone</h1>
                                    <p class="fs-20 mb-4">Biggest offers on this season</p>
                                    <button class="btn btn-danger btn-hover"><i class="ph-shopping-cart align-middle me-1"></i> Shop Now</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="ecommerce-home bg-danger-subtle" style="background-image: url('images/demo-images/background2.jpg');">
                    <div class="container">
                        <div class="row justify-content-end">
                            <div class="col-lg-7">
                                <div class="text-sm-end">
                                    <p class="fs-15 fw-semibold text-uppercase"><i class="ri-flashlight-fill text-primary align-bottom me-1"></i> In this season, find the best</p>
                                    <h1 class="display-4 fw-bold lh-base text-capitalize mb-3">Exclusive collection for everyone</h1>
                                    <p class="fs-20 mb-4">Biggest offers on this season</p>
                                    <button class="btn btn-danger btn-hover"><i class="ph-shopping-cart align-middle me-1"></i> Shop Now</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="ecommerce-home bg-danger-subtle" style="background-image: url('images/demo-images/back2.webp');">
                    <div class="container">
                        <div class="row justify-content-end">
                            <div class="col-lg-7">
                                <div class="text-sm-end">
                                    <p class="fs-15 fw-semibold text-uppercase"><i class="ri-flashlight-fill text-primary align-bottom me-1"></i> In this season, find the best</p>
                                    <h1 class="display-4 fw-bold lh-base text-capitalize mb-3">Exclusive collection for everyone</h1>
                                    <p class="fs-20 mb-4">Biggest offers on this season</p>
                                    <button class="btn btn-danger btn-hover"><i class="ph-shopping-cart align-middle me-1"></i> Shop Now</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#ecommerceHero" data-bs-slide="prev">
            <i class="ph-caret-left"></i>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#ecommerceHero" data-bs-slide="next">
            <i class="ph-caret-right"></i>
        </button>
    </div>
</section>
<!--end home-->

<section class="section">
    <div class="container-fluid container-custom">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="section-content text-center mb-5">
                    <h2 class="title fw-normal text-capitalize">You are in <span class="fw-semibold">new arrivals</span></h2>
                    <p class="fs-20">Top sale in this week</p>
                </div>
            </div><!--end col-->
        </div><!--end row-->
        <div class="row row-cols-xxl-5 row-cols-lg-4 row-cols-md-2 row-cols-1" id="productList">
            <?php
            for ($i = 1; $i <= 5; $i++) {
            ?>
                <div class="col item">
                    <div class="card product-widget border-0 card-animate">
                        <div class="card-body p-2">
                            <div class="position-relative p-4 bg-light">
                                <img src="images/products/pdt1.webp" alt="" class="img-fluid product-img-main">
                                <img src="images/products/pdt1.webp" alt="" class="img-fluid product-img-2">
                                <ul class="product-menu list-unstyled">
                                    <li class="mb-2">
                                        <a href="#!" class="rounded-circle bookmark" data-bs-toggle="button"><i class="bi bi-star"></i></a>
                                    </li>
                                    <li>
                                        <a href="product-details.php" class="rounded-circle"><i class="bi bi-eye"></i></a>
                                    </li>
                                </ul>
                                <div class="product-btn mx-auto">
                                    <a href="#!" class="btn btn-info w-100"><i class="bi bi-bag align-baseline me-1"></i> Buy Now</a>
                                </div>
                            </div>
                            <div class="mt-3">
                                <a href="#!">
                                    <h6 class="text-capitalize fs-16 text-truncate">Regal in Ivory, Pita Handwork Organza Silk Saree</h6>
                                </a>
                                <h6 class="fw-normal mb-3 fs-16">₹ 87.99</h6>
                                <div class="d-flex flex-wrap gap-1">
                                    <div data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" aria-label="Blue" data-bs-original-title="Blue">
                                        <button type="button" class="btn avatar-xs p-0 d-flex align-items-center justify-content-center border rounded-circle fs-20 text-primary opacity-50">
                                            <i class="ri-checkbox-blank-circle-fill"></i>
                                        </button>
                                    </div>
                                    <div data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" aria-label="Yellow" data-bs-original-title="Yellow">
                                        <button type="button" class="btn avatar-xs p-0 d-flex align-items-center justify-content-center border rounded-circle fs-20 text-warning opacity-50">
                                            <i class="ri-checkbox-blank-circle-fill"></i>
                                        </button>
                                    </div>
                                    <div data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" aria-label="Success" data-bs-original-title="Success">
                                        <button type="button" class="btn avatar-xs p-0 d-flex align-items-center justify-content-center border rounded-circle fs-20 text-success opacity-50">
                                            <i class="ri-checkbox-blank-circle-fill"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->
                <!-- <div class="col item">
                    <div class="card product-widget border-0 card-animate">
                        <div class="card-body p-2">
                            <div class="position-relative p-4 bg-light">
                                <img src="images/products/pdt2.webp" alt="" class="img-fluid product-img-main">
                                <img src="images/products/pdt2.webp" alt="" class="img-fluid product-img-2">
                                <ul class="product-menu list-unstyled">
                                    <li class="mb-2">
                                        <a href="#!" class="rounded-circle bookmark" data-bs-toggle="button"><i class="bi bi-star"></i></a>
                                    </li>
                                    <li>
                                        <a href="product-details.php" class="rounded-circle"><i class="bi bi-eye"></i></a>
                                    </li>
                                </ul>
                                <div class="product-btn mx-auto">
                                    <a href="#!" class="btn btn-info w-100"><i class="bi bi-bag align-baseline me-1"></i> Buy Now</a>
                                </div>
                            </div>
                            <div class="mt-3">
                                <a href="#!">
                                    <h6 class="text-capitalize fs-16 text-truncate">Handpainted Peach Organza Silk Saree</h6>
                                </a>
                                <h6 class="fw-normal mb-3 fs-16">₹ 120.32 <small class="text-decoration-line-through fs-14 text-muted">₹ 348.24</small></h6>
                                <div class="d-flex flex-wrap gap-1">
                                    <div data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" aria-label="Gray" data-bs-original-title="Gray">
                                        <button type="button" class="btn avatar-xs p-0 d-flex align-items-center justify-content-center border rounded-circle fs-20 text-body opacity-50">
                                            <i class="ri-checkbox-blank-circle-fill"></i>
                                        </button>
                                    </div>
                                    <div data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" aria-label="Cyan" data-bs-original-title="Cyan">
                                        <button type="button" class="btn avatar-xs p-0 d-flex align-items-center justify-content-center border rounded-circle fs-20 text-secondary opacity-50">
                                            <i class="ri-checkbox-blank-circle-fill"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>end col -->
            <?php
            }
            ?>
        </div><!--end row-->
        <div class="text-center mt-4">
            <button type="button" class="btn btn-info rounded-0 btn-load" id="productLoadMore">
                <span class="d-flex align-items-center">
                    <span class="flex-grow-1 me-2">
                        Load More
                    </span>
                    <span class="spinner-border flex-shrink-0" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </span>
                </span>
            </button>
        </div>
    </div><!--end container-->
</section>
<!--end product-->

<section class="section pt-0">
    <div class="container-fluid container-custom">
        <div class="row">
            <div class="col-lg-4 mb-3">
                <a href="#!" class="product-banner-1 mt-4 mt-lg-0 rounded overflow-hidden position-relative d-block">
                    <img src="images/demo-images/feature-01.png" class="img-fluid rounded" alt="">
                    <div class="bg-overlay blue"></div>
                    <div class="product-content p-4">
                        <p class="text-uppercase text-white mb-2">NEW COLLECTIONS</p>
                        <h1 class="text-white lh-base fw-medium ff-secondary"> Versatile Sarees for Every Occasion </h1>
                        <div class="product-btn mt-4 text-white">
                            Shop Now <i class="bi bi-arrow-right ms-2"></i>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 mb-3">
                <a href="#!" class="product-banner-1 mt-4 mt-lg-0 rounded overflow-hidden position-relative d-block">
                    <img src="images/demo-images/feature-02.png" class="img-fluid rounded" alt="">
                    <div class="bg-overlay blue"></div>
                    <div class="product-content p-4">
                        <p class="text-uppercase text-white mb-2">NEW COLLECTIONS</p>
                        <h1 class="text-white lh-base fw-medium ff-secondary"> Unwrap Timeless Elegance </h1>
                        <div class="product-btn mt-4 text-white">
                            Shop Now <i class="bi bi-arrow-right ms-2"></i>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 mb-3">
                <a href="#!" class="product-banner-1 mt-4 mt-lg-0 rounded overflow-hidden position-relative d-block">
                    <img src="images/demo-images/feature-02.png" class="img-fluid rounded" alt="">
                    <div class="bg-overlay blue"></div>
                    <div class="product-content p-4">
                        <p class="text-uppercase text-white mb-2">NEW COLLECTIONS</p>
                        <h1 class="text-white lh-base fw-medium ff-secondary"> Versatile Sarees for Every Occasion </h1>
                        <div class="product-btn mt-4 text-white">
                            Shop Now <i class="bi bi-arrow-right ms-2"></i>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>


<section class="section">
    <div class="container-fluid container-custom">
        <div class="row align-items-center">
            <div class="col-lg-2">
                <h2 class="title text-capitalize fw-medium lh-base mb-3"><b>Premium Categories</b> For Fashion</h2>
                <a href="product-list.php" class="btn btn-outline-warning btn-hover">View All <i class="bi bi-arrow-right"></i></a>
            </div>
            <div class="col-lg-10">
                <!-- Swiper -->
                <div class="swiper category-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="category-widgets-main card border-0 shadow-none bg-light">
                                <div class="effect">
                                    <img src="images/demo-images/category-01.png" alt="" class="img-fluid">
                                    <div class="widgets-wrapper position-absolute text-center">
                                        <a href="product-list.php" class="btn btn-warning w-md rounded-0 stretched-link">SAREE</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="category-widgets-main card border-0 shadow-none bg-light">
                                <div class="effect">
                                    <img src="images/demo-images/category-02.png" alt="" class="img-fluid">
                                    <div class="widgets-wrapper position-absolute text-center">
                                        <a href="product-list.php" class="btn btn-warning w-md rounded-0 stretched-link">KURTI</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="category-widgets-main card border-0 shadow-none bg-light">
                                <div class="effect">
                                    <img src="images/demo-images/category-03.png" alt="" class="img-fluid">
                                    <div class="widgets-wrapper position-absolute text-center">
                                        <a href="product-list.php" class="btn btn-warning w-md rounded-0 stretched-link">SALWAR</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="category-widgets-main card border-0 shadow-none bg-light">
                                <div class="effect">
                                    <img src="images/demo-images/category-01.png" alt="" class="img-fluid">
                                    <div class="widgets-wrapper position-absolute text-center">
                                        <a href="product-list.php" class="btn btn-warning w-md rounded-0 stretched-link">FASHION</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="category-widgets-main card border-0 shadow-none bg-light">
                                <div class="effect">
                                    <img src="images/demo-images/category-02.png" alt="" class="img-fluid">
                                    <div class="widgets-wrapper position-absolute text-center">
                                        <a href="product-list.php" class="btn btn-warning w-md rounded-0 stretched-link">ETHNIC</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="category-widgets-main card border-0 shadow-none bg-light">
                                <div class="effect">
                                    <img src="images/demo-images/category-03.png" alt="" class="img-fluid">
                                    <div class="widgets-wrapper position-absolute text-center">
                                        <a href="product-list.php" class="btn btn-warning w-md rounded-0 stretched-link">FORMAL</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="trend-fashion-home">
    <div class="container-fluid container-custom">
        <div class="row g-0">
            <div class="col-lg-4">
                <div class="home-widgets card card-height-100 border-0 rounded-end-0" style="background-image: url('images/demo-images/section-image-01.png');background-size: cover;">
                    <div class="card-body"></div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card card-height-100 border-0 rounded-0 bg-info-subtle">
                    <div class="card-body px-4 px-lg-5 text-center d-flex align-items-center">
                        <div>
                            <h3 class="text-capitalize lh-base mb-2">The World Most suitable <span class="ff-secondary">Fashion</span> Collection</h3>
                            <p class="fs-16 mb-4">Fashion Academy recommends 10 to 12 styles for your first collection. As for how many items to produce within each style frame, test out the waters first.</p>
                            <button type="button" class="btn btn-info btn-hover rounded-0">Shop Now <i class="bi bi-bag align-baseline ms-1"></i></button>
                        </div>
                    </div>
                </div>
            </div><!--end col-->
            <div class="col-lg-4">
                <div class="card home-widgets card-height-100 border-0 rounded-start-0" style="background-image: url('images/demo-images/section-image-02.png');background-size: cover;">
                    <div class="card-body"></div>
                </div>
            </div>
        </div><!--end row-->
    </div><!--end container-fluid-->
</section>

<section class="section pt-0">
    <div class="container-fluid container-custom">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="section-content text-center mb-5">
                    <h2 class="title fw-normal text-capitalize mb-3"><b>Trending</b> Products</h2>
                </div>
            </div><!--end col-->
        </div><!--end row-->
        <div class="row row-cols-xxl-5 row-cols-lg-4 row-cols-md-2 row-cols-1" id="productList">
            <?php
            for ($i = 1; $i <= 5; $i++) {
            ?>
                <div class="col item">
                    <div class="card product-widget border-0 card-animate">
                        <div class="card-body p-2">
                            <div class="position-relative p-4 bg-light">
                                <img src="images/demo-images/product-04.jpeg" alt="" class="img-fluid product-img-main">
                                <img src="images/demo-images/product-03.jpeg" alt="" class="img-fluid product-img-2">
                                <ul class="product-menu list-unstyled">
                                    <li class="mb-2">
                                        <a href="#!" class="rounded-circle bookmark" data-bs-toggle="button"><i class="bi bi-star"></i></a>
                                    </li>
                                    <li>
                                        <a href="product-details.php" class="rounded-circle"><i class="bi bi-eye"></i></a>
                                    </li>
                                </ul>
                                <div class="product-btn mx-auto">
                                    <a href="cart.php" class="btn btn-warning w-100"><i class="bi bi-bag align-baseline me-1"></i> Buy Now</a>
                                </div>
                            </div>
                            <div class="mt-3">
                                <a href="product-details.php">
                                    <h6 class="text-capitalize fs-17 text-truncate">Regal in Ivory, Pita Handwork Organza Silk Saree</h6>
                                </a>
                                <h6 class="fw-normal mb-3">₹ 87.99</h6>
                                <div class="d-flex flex-wrap gap-1">
                                    <div data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" aria-label="Blue" data-bs-original-title="Blue">
                                        <button type="button" class="btn avatar-xs p-0 d-flex align-items-center justify-content-center border rounded-circle fs-20 text-primary opacity-50">
                                            <i class="ri-checkbox-blank-circle-fill"></i>
                                        </button>
                                    </div>
                                    <div data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" aria-label="Yellow" data-bs-original-title="Yellow">
                                        <button type="button" class="btn avatar-xs p-0 d-flex align-items-center justify-content-center border rounded-circle fs-20 text-warning opacity-50">
                                            <i class="ri-checkbox-blank-circle-fill"></i>
                                        </button>
                                    </div>
                                    <div data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" aria-label="Success" data-bs-original-title="Success">
                                        <button type="button" class="btn avatar-xs p-0 d-flex align-items-center justify-content-center border rounded-circle fs-20 text-success opacity-50">
                                            <i class="ri-checkbox-blank-circle-fill"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->
                <!-- <div class="col item">
                    <div class="card product-widget border-0 card-animate ribbon-box">
                        <div class="ribbon ribbon-danger round-shape fw-normal fs-14">10% Off</div>
                        <div class="card-body p-2">
                            <div class="position-relative p-4 bg-light">
                                <img src="images/demo-images/product-02.jpeg" alt="" class="img-fluid product-img-main">
                                <img src="images/fashion/product/img-01.png" alt="" class="img-fluid product-img-2">
                                <ul class="product-menu list-unstyled">
                                    <li class="mb-2">
                                        <a href="#!" class="rounded-circle bookmark" data-bs-toggle="button"><i class="bi bi-star"></i></a>
                                    </li>
                                    <li>
                                        <a href="product-details.php" class="rounded-circle"><i class="bi bi-eye"></i></a>
                                    </li>
                                </ul>
                                <div class="product-btn mx-auto">
                                    <a href="cart.php" class="btn btn-warning w-100"><i class="bi bi-bag align-baseline me-1"></i> Buy Now</a>
                                </div>
                            </div>
                            <div class="mt-3">
                                <a href="product-details.php">
                                    <h6 class="text-capitalize fs-17 text-truncate">Handpainted Peach Organza Silk Saree</h6>
                                </a>
                                <h6 class="fw-normal mb-3">₹ 120.32 <small class="text-decoration-line-through fs-14 text-muted">₹ 348.24</small></h6>
                                <div class="d-flex flex-wrap gap-1">
                                    <div data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" aria-label="Gray" data-bs-original-title="Gray">
                                        <button type="button" class="btn avatar-xs p-0 d-flex align-items-center justify-content-center border rounded-circle fs-20 text-body opacity-50">
                                            <i class="ri-checkbox-blank-circle-fill"></i>
                                        </button>
                                    </div>
                                    <div data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" aria-label="Cyan" data-bs-original-title="Cyan">
                                        <button type="button" class="btn avatar-xs p-0 d-flex align-items-center justify-content-center border rounded-circle fs-20 text-secondary opacity-50">
                                            <i class="ri-checkbox-blank-circle-fill"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>end col -->
            <?php
            }
            ?>
        </div><!--end row-->
        <div class="text-center mt-4">
            <a href="product-list.php" type="button" class="btn btn-warning btn-hover">
                View All Products <i class="bi bi-arrow-right"></i>
            </a>
        </div>
    </div><!--end container-->
</section>
<!--end product-->

<section class="py-5 border-bottom">
    <div class="container-fluid container-custom">
        <div class="row g-3">
            <div class="col-lg-3">
                <div class="card bg-success-subtle border-0 mb-0">
                    <div class="card-body d-flex align-items-center gap-3">
                        <div class="avatar-sm flex-shrink-0">
                            <div class="avatar-title bg-success bg-opacity-10 text-success rounded fs-22">
                                <i class="bi bi-truck"></i>
                            </div>
                        </div>
                        <div class="flex-grow-1">
                            <h6 class="fs-16">Fast Shipping</h6>
                            <p class="text-muted mb-0">Lorem Ipsum is simply dummy text of the</p>
                        </div>
                    </div>
                </div>
            </div><!--end col-->
            <div class="col-lg-3">
                <div class="card bg-primary-subtle border-0 mb-0">
                    <div class="card-body d-flex align-items-center gap-3">
                        <div class="avatar-sm flex-shrink-0">
                            <div class="avatar-title bg-primary bg-opacity-10 text-primary rounded fs-22">
                                <i class="bi bi-cash-coin"></i>
                            </div>
                        </div>
                        <div class="flex-grow-1">
                            <h6 class="fs-16">Payment Security</h6>
                            <p class="text-muted mb-0">Lorem Ipsum is simply dummy text of the</p>
                        </div>
                    </div>
                </div>
            </div><!--end col-->
            <div class="col-lg-3">
                <div class="card bg-danger-subtle border-0 mb-0">
                    <div class="card-body d-flex align-items-center gap-3">
                        <div class="avatar-sm flex-shrink-0">
                            <div class="avatar-title bg-danger bg-opacity-10 text-danger rounded fs-22">
                                <i class="bi bi-shield-check"></i>
                            </div>
                        </div>
                        <div class="flex-grow-1">
                            <h6 class="fs-16">Products Quality</h6>
                            <p class="text-muted mb-0">Lorem Ipsum is simply dummy text of the</p>
                        </div>
                    </div>
                </div>
            </div><!--end col-->
            <div class="col-lg-3">
                <div class="card bg-secondary-subtle border-0 mb-0">
                    <div class="card-body d-flex align-items-center gap-3">
                        <div class="avatar-sm flex-shrink-0">
                            <div class="avatar-title bg-secondary bg-opacity-10 text-secondary rounded fs-22">
                                <i class="bi bi-clock-history"></i>
                            </div>
                        </div>
                        <div class="flex-grow-1">
                            <h6 class="fs-16">24/7 Support</h6>
                            <p class="text-muted mb-0">Lorem Ipsum is simply dummy text of the</p>
                        </div>
                    </div>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->
</section>
<!--end section-->

<!-- START INSTAGRAM -->
<section class="section pb-0">
    <div class="container">
        <div class="row justify-content-center g-0">
            <div class="col-lg-7">
                <div class="text-center">
                    <h3 class="mb-3">Follow Us In Instagram</h3>
                    <p class="text-muted fs-15">The most common approach that peoples use to say follow me on Instagram is by sending a direct message.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="position-relative">
        <div class="row g-0 mt-5">
            <div class="col">
                <div class="insta-img">
                    <a href="#!" class="stretched-link">
                        <img src="images/demo-images/instgram-01.png" class="img-fluid" alt="">
                        <i class="ri-instagram-line"></i>
                    </a>
                </div>
            </div>

            <div class="col">
                <div class="insta-img">
                    <a href="#!" class="stretched-link">
                        <img src="images/demo-images/instgram-02.png" class="img-fluid" alt="">
                        <i class="ri-instagram-line"></i>
                    </a>
                </div>
            </div>

            <div class="col d-none d-md-block">
                <div class="insta-img">
                    <a href="#!" class="stretched-link">
                        <img src="images/demo-images/instgram-03.png" class="img-fluid" alt="">
                        <i class="ri-instagram-line"></i>
                    </a>
                </div>
            </div>

            <div class="col d-none d-md-block">
                <div class="insta-img">
                    <a href="#!" class="stretched-link">
                        <img src="images/demo-images/instgram-04.png" class="img-fluid" alt="">
                        <i class="ri-instagram-line"></i>
                    </a>
                </div>
            </div>
            <div class="col d-none d-lg-block">
                <div class="insta-img">
                    <a href="#!" class="stretched-link">
                        <img src="images/demo-images/instgram-01.png" class="img-fluid" alt="">
                        <i class="ri-instagram-line"></i>
                    </a>
                </div>
            </div>
            <div class="col d-none d-lg-block">
                <div class="insta-img">
                    <a href="#!" class="stretched-link">
                        <img src="images/demo-images/instgram-02.png" class="img-fluid" alt="">
                        <i class="ri-instagram-line"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="insta-lable text-center">
            <a href="#!" class="btn btn-primary btn-hover">
                <i class="ph-instagram-logo align-middle me-1"></i> Follow In Instagram
            </a>
        </div>
    </div>
</section>
<!-- END INSTAGRAM -->
<?php
include "inc_footer.php";
?>