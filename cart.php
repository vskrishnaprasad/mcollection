<?php
include "inc_header.php";
?>
<section class="page-wrapper bg-page-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="text-center d-flex align-items-center justify-content-between">
                    <h4 class="text-dark mb-0">Shopping Cart</h4>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb breadcrumb-light justify-content-center mb-0 fs-15">
                            <li class="breadcrumb-item text-muted"><a href="#!">Shop</a></li>
                            <li class="breadcrumb-item text-muted active" aria-current="page">Shopping Cart</li>
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
<section class="section">
    <div class="container">
        <div class="row product-list justify-content-center">
            <div class="col-lg-8">
                <div class="d-flex align-items-center mb-4">
                    <h5 class="mb-0 flex-grow-1 fw-medium">There are <span class="fw-bold product-count"></span> products in your cart</h5>
                    <div class="flex-shrink-0">
                        <a href="#!" class="text-decoration-underline link-secondary">Clear Cart</a>
                    </div>
                </div>
                <div class="card product">
                    <div class="card-body p-4">
                        <div class="row gy-3">
                            <div class="col-sm-auto">
                                <div class="avatar-lg h-100">
                                    <div class="avatar-title bg-danger-subtle rounded py-3">
                                        <img src="images/products/img-12.png" alt="" class="avatar-md">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm">
                                <a href="#!">
                                    <h5 class="fs-16 lh-base mb-1">Branded Smart Chair Red</h5>
                                </a>
                                <ul class="list-inline text-muted fs-13 mb-3">
                                    <li class="list-inline-item">Color : <span class="fw-medium">Red</span></li>
                                    <li class="list-inline-item">Size : <span class="fw-medium">M</span></li>
                                </ul>
                                <div class="input-step">
                                    <button type="button" class="minus">–</button>
                                    <input type="number" class="product-quantity" value="3" min="0" max="100" readonly>
                                    <button type="button" class="plus">+</button>
                                </div>
                            </div>
                            <div class="col-sm-auto">
                                <div class="text-lg-end">
                                    <p class="text-muted mb-1 fs-12">Item Price:</p>
                                    <h5 class="fs-16">$<span class="product-price">89.99</span></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="row align-items-center gy-3">
                            <div class="col-sm">
                                <div class="d-flex flex-wrap my-n1">
                                    <div>
                                        <a href="#!" class="d-block text-body p-1 px-2" data-bs-toggle="modal" data-bs-target="#removeItemModal"><i class="ri-delete-bin-fill text-muted align-bottom me-1"></i> Remove</a>
                                    </div>
                                    <div>
                                        <a href="#!" class="d-block text-body p-1 px-2"><i class="ri-star-fill text-muted align-bottom me-1"></i> Add Wishlist</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-auto">
                                <div class="d-flex align-items-center gap-2 text-muted">
                                    <div>Total :</div>
                                    <h5 class="fs-14 mb-0">$<span class="product-line-price">269.97</span></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end card footer -->
                </div>
                <!--end card-->
                
                <div class="card product">
                    <div class="card-body p-4">
                        <div class="row gy-3">
                            <div class="col-sm-auto">
                                <div class="avatar-lg h-100">
                                    <div class="avatar-title bg-secondary-subtle rounded py-3">
                                        <img src="images/products/img-15.png" alt="" class="avatar-md">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm">
                                <a href="#!">
                                    <h5 class="fs-16 lh-base mb-1">Like Style Women Black Handbag</h5>
                                </a>
                                <ul class="list-inline text-muted fs-13 mb-3">
                                    <li class="list-inline-item">Color : <span class="fw-medium">Brown</span></li>
                                </ul>
                                <div class="input-step">
                                    <button type="button" class="minus">–</button>
                                    <input type="number" class="product-quantity" value="1" min="0" max="100" readonly>
                                    <button type="button" class="plus">+</button>
                                </div>
                            </div>
                            <div class="col-sm-auto">
                                <div class="text-lg-end">
                                    <p class="text-muted mb-1 fs-12">Item Price:</p>
                                    <h5 class="fs-16">$<span class="product-price">742.00</span></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="row align-items-center gy-3">
                            <div class="col-sm">
                                <div class="d-flex flex-wrap my-n1">
                                    <div>
                                        <a href="#!" class="d-block text-body p-1 px-2" data-bs-toggle="modal" data-bs-target="#removeItemModal"><i class="ri-delete-bin-fill text-muted align-bottom me-1"></i> Remove</a>
                                    </div>
                                    <div>
                                        <a href="#!" class="d-block text-body p-1 px-2"><i class="ri-star-fill text-muted align-bottom me-1"></i> Add Wishlist</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-auto">
                                <div class="d-flex align-items-center gap-2 text-muted">
                                    <div>Total :</div>
                                    <h5 class="fs-14 mb-0">$<span class="product-line-price">742.00</span></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end card footer -->
                </div>
                <!--end card-->
                <div class="card product">
                    <div class="card-body p-4">
                        <div class="row gy-3">
                            <div class="col-sm-auto">
                                <div class="avatar-lg h-100">
                                    <div class="avatar-title bg-warning-subtle rounded py-3">
                                        <img src="images/products/img-6.png" alt="" class="avatar-md">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm">
                                <a href="#!">
                                    <h5 class="fs-16 lh-base mb-1">Striped High Neck Casual Men Orange Sweater</h5>
                                </a>
                                <ul class="list-inline text-muted fs-13 mb-3">
                                    <li class="list-inline-item">Color : <span class="fw-medium">Orange</span></li>
                                    <li class="list-inline-item">Size : <span class="fw-medium">XL</span></li>
                                </ul>
                                <div class="input-step">
                                    <button type="button" class="minus">–</button>
                                    <input type="number" class="product-quantity" value="5" min="0" max="100" readonly>
                                    <button type="button" class="plus">+</button>
                                </div>
                            </div>
                            <div class="col-sm-auto">
                                <div class="text-lg-end">
                                    <p class="text-muted mb-1 fs-12">Item Price:</p>
                                    <h5 class="fs-16">$<span class="product-price">62.40</span></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="row align-items-center gy-3">
                            <div class="col-sm">
                                <div class="d-flex flex-wrap my-n1">
                                    <div>
                                        <a href="#!" class="d-block text-body p-1 px-2" data-bs-toggle="modal" data-bs-target="#removeItemModal"><i class="ri-delete-bin-fill text-muted align-bottom me-1"></i> Remove</a>
                                    </div>
                                    <div>
                                        <a href="#!" class="d-block text-body p-1 px-2"><i class="ri-star-fill text-muted align-bottom me-1"></i> Add Wishlist</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-auto">
                                <div class="d-flex align-items-center gap-2 text-muted">
                                    <div>Total :</div>
                                    <h5 class="fs-14 mb-0">$<span class="product-line-price">312.00</span></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end card footer -->
                </div>
                <!--end card-->
                <div class="card product">
                    <div class="card-body p-4">
                        <div class="row gy-3">
                            <div class="col-sm-auto">
                                <div class="avatar-lg h-100">
                                    <div class="avatar-title bg-dark-subtle rounded py-3">
                                        <img src="images/demo-images/product-01.jpeg" alt="" class="avatar-md">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm">
                                <a href="#!">
                                    <h5 class="fs-16 lh-base mb-1">Regal in Ivory, Pita Handwork Organza Silk Saree</h5>
                                </a>
                                <ul class="list-inline text-muted fs-13 mb-3">
                                    <li class="list-inline-item">Color : <span class="fw-medium">White</span></li>
                                </ul>
                                <div class="input-step">
                                    <button type="button" class="minus">–</button>
                                    <input type="number" class="product-quantity" value="1" min="0" max="100" readonly>
                                    <button type="button" class="plus">+</button>
                                </div>
                            </div>
                            <div class="col-sm-auto">
                                <div class="text-lg-end">
                                    <p class="text-muted mb-1 fs-12">Item Price:</p>
                                    <h5 class="fs-16">$<span class="product-price">38.00</span></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="row align-items-center gy-3">
                            <div class="col-sm">
                                <div class="d-flex flex-wrap my-n1">
                                    <div>
                                        <a href="#!" class="d-block text-body p-1 px-2" data-bs-toggle="modal" data-bs-target="#removeItemModal"><i class="ri-delete-bin-fill text-muted align-bottom me-1"></i> Remove</a>
                                    </div>
                                    <div>
                                        <a href="#!" class="d-block text-body p-1 px-2"><i class="ri-star-fill text-muted align-bottom me-1"></i> Add Wishlist</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-auto">
                                <div class="d-flex align-items-center gap-2 text-muted">
                                    <div>Total :</div>
                                    <h5 class="fs-14 mb-0">$<span class="product-line-price">38.00</span></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end card footer -->
                </div>
                <!--end card-->
            </div>
            <!--end col-->
            <div class="col-lg-4">
                <div class="sticky-side-div">
                    <div class="card overflow-hidden">
                        <div class="card-header border-bottom-dashed">
                            <h5 class="card-title mb-0 fs-15">Order Summary</h5>
                        </div>
                        <div class="card-body pt-4">
                            <div class="table-responsive table-card">
                                <table class="table table-borderless mb-0 fs-15">
                                    <tbody>
                                        <tr>
                                            <td>Sub Total :</td>
                                            <td class="text-end cart-subtotal"></td>
                                        </tr>
                                        <tr>
                                            <td>Discount <span class="text-muted">(Toner15)</span>:</td>
                                            <td class="text-end cart-discount"></td>
                                        </tr>
                                        <tr>
                                            <td>Shipping Charge :</td>
                                            <td class="text-end cart-shipping"></td>
                                        </tr>
                                        <tr>
                                            <td>Estimated Tax (12.5%) : </td>
                                            <td class="text-end cart-tax"></td>
                                        </tr>
                                        <tr class="table-active">
                                            <th>Total (USD) :</th>
                                            <td class="text-end">
                                                <span class="fw-semibold cart-total"></span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- end table-responsive -->
                        </div>
                    </div>
                    <div class="hstack gap-2 justify-content-end">
                    	<a href="product-list.php" class="btn btn-danger w-100">Continue Shopping</a>
                    	<a href="checkout.php" class="btn btn-success w-100">Continue to Checkout</a>
                    </div>
                </div>
                <!-- end sticky -->
            </div>
        </div>
        <!--end row-->
    </div>
    <!--end container-->
</section>
<?php
include "inc_footer.php";
?>