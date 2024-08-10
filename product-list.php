<?php
include "inc_header.php";
$tempStatus=0;
?>
<?php
if($tempStatus==1){
?>
<section class="section pb-0 mt-4">
    <div class="container-fluid">
        <div class="position-relative rounded-3" style="background-image: url('images/demo-images/section-page-banner.png');background-size: cover;background-position: center;">
            <div class="row justify-content-end">
                <div class="col-xxl-4">
                    <div class="text-end py-4 px-5 mx-xxl-5">
                        <h1 class="text-white display-5 lh-base text-capitalize ff-secondary mb-3 fst-italic"> Versatile Sarees for Every Occasion </h1>
                        <div>
                            <a href="#!" class="link-effect link-light text-white">Show Collections <i class="ri-arrow-right-line align-bottom ms-1"></i></a>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div>
    </div><!--end container-->
</section>
<?php
}
?>
<section class="page-wrapper bg-page-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="text-center d-flex align-items-center justify-content-between">
                    <h4 class="text-dark mb-0">Products</h4>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb breadcrumb-light justify-content-center mb-0 fs-15">
                            <li class="breadcrumb-item text-muted"><a href="#!">Shop</a></li>
                            <li class="breadcrumb-item text-muted active" aria-current="page">Products</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->
    </div>
    <!--end container-->
</section>

<div class="position-relative section">
    <div class="container-fluid">
        <div class="ecommerce-product gap-4">
            <div class="sidebar flex-shrink-0 hide-on-mob">
                <div class="card overflow-hidden">
                    <div class="card-header">
                        <div class="search-box">
                            <input type="text" class="form-control" id="searchProductList" autocomplete="off" placeholder="Search Products...">
                            <i class="ri-search-line search-icon"></i>
                        </div>
                    </div>
                    <div class="accordion accordion-flush filter-accordion">
                        <div class="card-body border-bottom">
                            <div>
                                <p class="text-muted text-uppercase fs-12 fw-medium mb-3">Products</p>
                                <ul class="list-unstyled mb-0 filter-list">
                                    <li>
                                        <a href="#" class="d-flex py-1 align-items-center">
                                            <div class="flex-grow-1">
                                                <h5 class="fs-13 mb-0 listname">Grocery</h5>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex py-1 align-items-center">
                                            <div class="flex-grow-1">
                                                <h5 class="fs-13 mb-0 listname">Fashion</h5>
                                            </div>
                                            <div class="flex-shrink-0 ms-2">
                                                <span class="badge bg-light text-muted">5</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex py-1 align-items-center">
                                            <div class="flex-grow-1">
                                                <h5 class="fs-13 mb-0 listname">Watches</h5>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex py-1 align-items-center">
                                            <div class="flex-grow-1">
                                                <h5 class="fs-13 mb-0 listname">Electronics</h5>
                                            </div>
                                            <div class="flex-shrink-0 ms-2">
                                                <span class="badge bg-light text-muted">5</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex py-1 align-items-center">
                                            <div class="flex-grow-1">
                                                <h5 class="fs-13 mb-0 listname">Furniture</h5>
                                            </div>
                                            <div class="flex-shrink-0 ms-2">
                                                <span class="badge bg-light text-muted">6</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex py-1 align-items-center">
                                            <div class="flex-grow-1">
                                                <h5 class="fs-13 mb-0 listname">Automotive Accessories</h5>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex py-1 align-items-center">
                                            <div class="flex-grow-1">
                                                <h5 class="fs-13 mb-0 listname">Appliances</h5>
                                            </div>
                                            <div class="flex-shrink-0 ms-2">
                                                <span class="badge bg-light text-muted">7</span>
                                            </div>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#" class="d-flex py-1 align-items-center">
                                            <div class="flex-grow-1">
                                                <h5 class="fs-13 mb-0 listname">Kids</h5>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <?php
                        if($tempStatus==1){
                        ?>
                        <div class="card-body border-bottom">
                            <p class="text-muted text-uppercase fs-12 fw-medium mb-4">Price</p>

                            <div id="product-price-range" data-slider-color="info"></div>
                            <div class="formCost d-flex gap-2 align-items-center mt-3">
                                <input class="form-control form-control-sm" type="text" id="minCost" value="0" /> <span class="fw-semibold text-muted">to</span> <input class="form-control form-control-sm" type="text" id="maxCost" value="1000" />
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingColors">
                                <button class="accordion-button bg-transparent shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseColors" aria-expanded="true" aria-controls="flush-collapseColors">
                                    <span class="text-muted text-uppercase fs-12 fw-medium">Colors</span> <span class="badge bg-success rounded-pill align-middle ms-1 filter-badge"></span>
                                </button>
                            </h2>
                        
                            <div id="flush-collapseColors" class="accordion-collapse collapse show" aria-labelledby="flush-headingColors">
                                <div class="accordion-body text-body pt-0">
                                    <ul class="clothe-colors list-unstyled hstack gap-3 mb-0 flex-wrap" id="color-filter">
                                        <li>
                                            <input type="radio" name="colors" value="success" id="color-1">
                                            <label class="avatar-xs btn btn-success p-0 d-flex align-items-center justify-content-center rounded-circle" for="color-1"></label>
                                        </li>
                                        <li>
                                            <input type="radio" name="colors" value="info" id="color-2">
                                            <label class="avatar-xs btn btn-info p-0 d-flex align-items-center justify-content-center rounded-circle" for="color-2"></label>
                                        </li>
                                        <li>
                                            <input type="radio" name="colors" value="warning" id="color-3">
                                            <label class="avatar-xs btn btn-warning p-0 d-flex align-items-center justify-content-center rounded-circle" for="color-3"></label>
                                        </li>
                                        <li>
                                            <input type="radio" name="colors" value="danger" id="color-4">
                                            <label class="avatar-xs btn btn-danger p-0 d-flex align-items-center justify-content-center rounded-circle" for="color-4"></label>
                                        </li>
                                        <li>
                                            <input type="radio" name="colors" value="primary" id="color-5">
                                            <label class="avatar-xs btn btn-primary p-0 d-flex align-items-center justify-content-center rounded-circle" for="color-5"></label>
                                        </li>
                                        <li>
                                            <input type="radio" name="colors" value="secondary" id="color-6">
                                            <label class="avatar-xs btn btn-secondary p-0 d-flex align-items-center justify-content-center rounded-circle" for="color-6"></label>
                                        </li>
                                        <li>
                                            <input type="radio" name="colors" value="dark" id="color-7">
                                            <label class="avatar-xs btn btn-dark p-0 d-flex align-items-center justify-content-center rounded-circle" for="color-7"></label>
                                        </li>
                                        <li>
                                            <input type="radio" name="colors" value="light" id="color-8">
                                            <label class="avatar-xs btn btn-light p-0 d-flex align-items-center justify-content-center rounded-circle" for="color-8"></label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- end accordion-item -->

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingSize">
                                <button class="accordion-button bg-transparent shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSize" aria-expanded="true" aria-controls="flush-collapseSize">
                                    <span class="text-muted text-uppercase fs-12 fw-medium">Sizes</span> <span class="badge bg-success rounded-pill align-middle ms-1 filter-badge"></span>
                                </button>
                            </h2>
                        
                            <div id="flush-collapseSize" class="accordion-collapse collapse show" aria-labelledby="flush-headingSize">
                                <div class="accordion-body text-body pt-0">
                                    <ul class="clothe-size list-unstyled hstack gap-3 mb-0 flex-wrap" id="size-filter">
                                        <li>
                                            <input type="radio" name="sizes" value="xs" id="sizeXs">
                                            <label class="avatar-xs btn btn-soft-primary p-0 d-flex align-items-center justify-content-center rounded-circle" for="sizeXs">XS</label>
                                        </li>
                                        <li>
                                            <input type="radio" name="sizes" value="s" id="sizeS">
                                            <label class="avatar-xs btn btn-soft-primary p-0 d-flex align-items-center justify-content-center rounded-circle" for="sizeS">S</label>
                                        </li>
                                        <li>
                                            <input type="radio" name="sizes" value="m" id="sizeM">
                                            <label class="avatar-xs btn btn-soft-primary p-0 d-flex align-items-center justify-content-center rounded-circle" for="sizeM">M</label>
                                        </li>
                                        <li>
                                            <input type="radio" name="sizes" value="l" id="sizeL">
                                            <label class="avatar-xs btn btn-soft-primary p-0 d-flex align-items-center justify-content-center rounded-circle" for="sizeL">L</label>
                                        </li>
                                        <li>
                                            <input type="radio" name="sizes" value="xl" id="sizeXl">
                                            <label class="avatar-xs btn btn-soft-primary p-0 d-flex align-items-center justify-content-center rounded-circle" for="sizeXl">XL</label>
                                        </li>
                                        <li>
                                            <input type="radio" name="sizes" value="2xl" id="size2xl">
                                            <label class="avatar-xs btn btn-soft-primary p-0 d-flex align-items-center justify-content-center rounded-circle" for="size2xl">2XL</label>
                                        </li>
                                        <li>
                                            <input type="radio" name="sizes" value="3xl" id="size3xl">
                                            <label class="avatar-xs btn btn-soft-primary p-0 d-flex align-items-center justify-content-center rounded-circle" for="size3xl">3XL</label>
                                        </li>
                                        <li>
                                            <input type="radio" name="sizes" value="4xl" id="size4xl">
                                            <label class="avatar-xs btn btn-soft-primary p-0 d-flex align-items-center justify-content-center rounded-circle" for="size4xl">4XL</label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- end accordion-item -->
                        <?php
                        }
                        ?>

                    </div>
                </div>
                <!-- end card -->
            </div>
            <div class="flex-grow-1" id="col-3-layout">
                <div class="d-flex align-items-center gap-2 mb-4">
                    <p class="text-muted flex-grow-1 mb-0">Showing 1-12 of 84 results</p>
                
                    <div class="flex-shrink-0">
                        <div class="d-flex gap-2">
                            <div class="flex-shrink-0">
                                <label for="sort-elem" class="col-form-label">Sort By:</label>
                            </div>
                            <div class="flex-shrink-0">
                                <select class="form-select w-md" id="sort-elem">
                                    <option value="">All</option>
                                    <option value="low_to_high">Low to High</option>
                                    <option value="high_to_low">High to Low</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row row-cols-xxl-5 row-cols-lg-4 row-cols-md-2 row-cols-1 product-list-view" id="product-grid">
                    <?php
                    for ($i = 1; $i <= 15; $i++) {
                    ?>
                    <div class="col mb-2">   
                        <div class="card product product-widget">
                            <div class="d-flex flex-column justify-content-between h-100">
                                <div class="product-header border-light border-bottom">
                                    <a class="product-item-link" href="product-details.php"></a>
                                    <img src="images/demo-images/product-02-700x700.png" alt="" class="img-fluid product-img-main">
                                    <img src="images/demo-images/product-03-700x700.png" alt="" class="img-fluid product-img-2">
                                </div>
                                <div class="product-body">
                                    <h5 class="product-item-name">
                                        Handpainted Peach Organza Silk Saree
                                    </h5>
                                </div>
                                <div class="product-footer">
                                    <div class="d-flex flex-column flex-sm-row align-items-center justify-content-between">
                                        <div class="product-item-price-wrap">
                                            <p class="product-price">₹ 87.99</p>
                                        </div>
                                        <div class="product-item-cart-wrap">
                                            <a href="#!" class="btn btn-primary btn-hover w-100 add-btn"><i class="mdi mdi-cart me-1"></i> Add To Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>                                    
                    </div>
                    <div class="col mb-2">   
                        <div class="card product product-widget">
                            <div class="d-flex flex-column justify-content-between h-100">
                                <div class="product-header border-light border-bottom">
                                    <a class="product-item-link" href="product-details.php"></a>
                                    <img src="images/demo-images/product-03-700x700.png" alt="" class="img-fluid product-img-main">
                                    <img src="images/demo-images/product-02-700x700.png" alt="" class="img-fluid product-img-2">
                                </div>
                                <div class="product-body">
                                    <h5 class="product-item-name">
                                        Regal in Ivory, Pita Handwork Organza Silk Saree
                                    </h5>
                                </div>
                                <div class="product-footer">
                                    <div class="d-flex flex-column flex-sm-row align-items-center justify-content-between">
                                        <div class="product-item-price-wrap">
                                            <p class="product-price">₹ 87.99</p>
                                        </div>
                                        <div class="product-item-cart-wrap">
                                            <a href="#!" class="btn btn-primary btn-hover w-100 add-btn"><i class="mdi mdi-cart me-1"></i> Add To Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>                                    
                    </div>
                    <?php
                        }
                    ?>
                </div>
                <div class="row" id="pagination-element">
                    <div class="col-lg-12">
                        <div class="pagination-block pagination pagination-separated justify-content-center justify-content-sm-end mb-sm-0">
                            <div class="page-item">
                                <a href="javascript:void(0);" class="page-link" id="page-prev">Previous</a>
                            </div>
                            <span id="page-num" class="pagination"></span>
                            <div class="page-item">
                                <a href="javascript:void(0);" class="page-link" id="page-next">Next</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row d-none" id="search-result-elem">
                    <div class="col-lg-12">
                        <div class="text-center py-5">
                            <div class="avatar-lg mx-auto mb-4">
                                <div class="avatar-title bg-primary-subtle text-primary rounded-circle fs-24">
                                    <i class="bi bi-search"></i>
                                </div>
                            </div>

                            <h4>No matching records found</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!--end conatiner-fluid-->
</div>
<?php
include "inc_footer.php";
?>