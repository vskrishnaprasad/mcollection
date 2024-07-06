<?php
include "inc_header.php";
?>

<section class="page-wrapper bg-primary">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="text-center d-flex align-items-center justify-content-between">
                    <h4 class="text-white mb-0">Checkout</h4>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb breadcrumb-light justify-content-center mb-0 fs-15">
                            <li class="breadcrumb-item"><a href="#!">Shop</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Checkout</li>
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
        <div class="row">
            <div class="col-lg-12">
                <div class="alert alert-danger alert-modern alert-dismissible fade show" role="alert">
                    <i class="bi bi-box-arrow-in-right icons"></i>Returning customer?<a href="" class="link-danger"><strong> Click here to login</strong>.</a>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div><!--end col-->
        </div><!--end row-->
        <div class="row">
            <div class="col-xl-8">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive table-card">
                            <table class="table align-middle table-borderless table-nowrap text-center mb-0">
                                <thead>
                                    <tr>
                                        <th scope="col">Product</th>
                                        <th scope="col">Rate</th>
                                        <th scope="col">Order ID</th>
                                        <th scope="col">Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-start">
                                            <div class="d-flex align-items-center gap-2">
                                                <div class="avatar-sm flex-shrink-0">
                                                    <div class="avatar-title bg-success-subtle rounded-3">
                                                        <img src="images/products/img-4.png" alt="" class="avatar-xs">
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6>Girls Mint Green & Off-White Solid Open</h6>
                                                    <p class="text-muted mb-0">Graphic Print Men & Women Footwear</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            ₹ 24.00
                                        </td>
                                        <td>
                                            02
                                        </td>
                                        <td class="text-end">₹ 48.00</td>
                                    </tr>
                                    <tr>
                                        <td class="text-start">
                                            <div class="d-flex align-items-center gap-2">
                                                <div class="avatar-sm flex-shrink-0">
                                                    <div class="avatar-title bg-dark-subtle rounded-3">
                                                        <img src="images/products/img-16.png" alt="" class="avatar-xs">
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6>Rockerz Ear Bluetooth Smart Watch</h6>
                                                    <p class="text-muted mb-0">32.5mm (1.28 Inch) TFT Color Touch Display</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>₹ 160.00</td>
                                        <td>01</td>
                                        <td class="text-end">₹ 160.00</td>
                                    </tr>
                                    <tr>
                                        <td class="text-start">
                                            <div class="d-flex align-items-center gap-2">
                                                <div class="avatar-sm flex-shrink-0">
                                                    <div class="avatar-title bg-warning-subtle rounded-3">
                                                        <img src="images/products/img-6.png" alt="" class="avatar-xs">
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6>Monte Carlo Sweaters</h6>
                                                    <p class="text-muted mb-0">Graphic Print Men & Women Fashion</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>₹ 244.99</td>
                                        <td>03</td>
                                        <td class="text-end">₹ 734.97</td>
                                    </tr>
                                    <tr>
                                        <td class="text-start">
                                            <div class="d-flex align-items-center gap-2">
                                                <div class="avatar-sm flex-shrink-0">
                                                    <div class="avatar-title bg-secondary-subtle rounded-3">
                                                        <img src="images/products/img-8.png" alt="" class="avatar-xs">
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6>World's most expensive t shirt</h6>
                                                    <p class="text-muted mb-0">Graphic Print Men & Women Fashion</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>₹ 120.30</td>
                                        <td>02</td>
                                        <td class="text-end">₹ 240.60</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="mt-4 pt-2">
                    <div class="d-flex align-items-center mb-4">
                        <div class="flex-grow-1">
                            <h5 class="mb-0">Shipping Address</h5>
                        </div>
                        <div class="flex-shrink-0">
                            <a href="#" class="badge bg-secondary-subtle text-secondary  link-secondary">
                                Add Address
                            </a>
                        </div>
                    </div>
                    <div class="row gy-3">
                        <div class="col-lg-6 col-12">
                            <div class="form-check card-radio">
                                <input id="shippingAddress01" name="shippingAddress" type="radio" class="form-check-input" checked="">
                                <label class="form-check-label" for="shippingAddress01">
                                    <span class="mb-3 text-uppercase fw-semibold d-block">Home Address</span>
                                    <span class="fs-14 mb-2 d-block fw-semibold">Witney Blessington</span>
                                    <span class="text-muted fw-normal text-wrap mb-1 d-block">144 Cavendish Avenue, Indianapolis, IN 46251</span>
                                    <span class="text-muted fw-normal d-block">Mo. 012-345-6789</span>
                                </label>
                            </div>
                            <div class="d-flex flex-wrap p-2 py-1 bg-light rounded-bottom border mt-n1">
                                <div>
                                    <a href="#" class="d-block text-body p-1 px-2"><i class="ri-pencil-fill text-muted align-bottom me-1"></i> Edit</a>
                                </div>
                                <div>
                                    <a href="#removeAddressModal" class="d-block text-body p-1 px-2" data-bs-toggle="modal"><i class="ri-delete-bin-fill text-muted align-bottom me-1"></i> Remove</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="form-check card-radio">
                                <input id="shippingAddress02" name="shippingAddress" type="radio" class="form-check-input">
                                <label class="form-check-label" for="shippingAddress02">
                                    <span class="mb-3 text-uppercase fw-semibold d-block">Office Address</span>
                                    <span class="fs-14 mb-2 d-block fw-semibold">Edwin Adenike</span>
                                    <span class="text-muted fw-normal text-wrap mb-1 d-block">2971 Westheimer Road, Santa Ana, IL 80214</span>
                                    <span class="text-muted fw-normal d-block">Mo. 012-345-6789</span>
                                </label>
                            </div>
                            <div class="d-flex flex-wrap p-2 py-1 bg-light rounded-bottom border mt-n1">
                                <div>
                                    <a href="#" class="d-block text-body p-1 px-2"><i class="ri-pencil-fill text-muted align-bottom me-1"></i> Edit</a>
                                </div>
                                <div>
                                    <a href="#removeAddressModal" class="d-block text-body p-1 px-2" data-bs-toggle="modal"><i class="ri-delete-bin-fill text-muted align-bottom me-1"></i> Remove</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-4 pt-2">
                    <div class="d-flex align-items-center mb-4">
                        <div class="flex-grow-1">
                            <h5 class="mb-0">Billing Address</h5>
                        </div>
                        <div class="flex-shrink-0">
                            <a href="#" class="badge bg-secondary-subtle text-secondary  link-secondary">
                                Add Address
                            </a>
                        </div>
                    </div>
                    <div class="row gy-3">
                        <div class="col-lg-6 col-12">
                            <div class="form-check card-radio">
                                <input id="shippingAddress03" name="shippingAddress" type="radio" class="form-check-input" checked="">
                                <label class="form-check-label" for="shippingAddress03">
                                    <span class="fs-14 mb-2 d-block fw-semibold">Witney Blessington</span>
                                    <span class="text-muted fw-normal text-wrap mb-1 d-block">144 Cavendish Avenue, Indianapolis, IN 46251</span>
                                    <span class="text-muted fw-normal d-block">Mo. 012-345-6789</span>
                                </label>
                            </div>
                            <div class="d-flex flex-wrap p-2 py-1 bg-light rounded-bottom border mt-n1">
                                <div>
                                    <a href="#" class="d-block text-body p-1 px-2"><i class="ri-pencil-fill text-muted align-bottom me-1"></i> Edit</a>
                                </div>
                                <div>
                                    <a href="#removeAddressModal" class="d-block text-body p-1 px-2" data-bs-toggle="modal"><i class="ri-delete-bin-fill text-muted align-bottom me-1"></i> Remove</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="form-check card-radio">
                                <input id="shippingAddress04" name="shippingAddress" type="radio" class="form-check-input">
                                <label class="form-check-label" for="shippingAddress04">
                                    <span class="fs-14 mb-2 d-block fw-semibold">Edwin Adenike</span>
                                    <span class="text-muted fw-normal text-wrap mb-1 d-block">2971 Westheimer Road, Santa Ana, IL 80214</span>
                                    <span class="text-muted fw-normal d-block">Mo. 012-345-6789</span>
                                </label>
                            </div>
                            <div class="d-flex flex-wrap p-2 py-1 bg-light rounded-bottom border mt-n1">
                                <div>
                                    <a href="#" class="d-block text-body p-1 px-2"><i class="ri-pencil-fill text-muted align-bottom me-1"></i> Edit</a>
                                </div>
                                <div>
                                    <a href="#removeAddressModal" class="d-block text-body p-1 px-2" data-bs-toggle="modal"><i class="ri-delete-bin-fill text-muted align-bottom me-1"></i> Remove</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end col -->
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
                                            <td class="text-end cart-subtotal">₹ 510.50</td>
                                        </tr>
                                        <tr>
                                            <td>Discount <span class="text-muted">(Toner15)</span>:</td>
                                            <td class="text-end cart-discount">₹ 18.00</td>
                                        </tr>
                                        <tr>
                                            <td>Shipping Charge :</td>
                                            <td class="text-end cart-shipping">₹ 2.4</td>
                                        </tr>
                                        <tr>
                                            <td>Estimated Tax (12.5%) : </td>
                                            <td class="text-end cart-tax">₹ 1.6</td>
                                        </tr>
                                        <tr class="table-active">
                                            <th>Total (USD) :</th>
                                            <td class="text-end">
                                                <span class="fw-semibold cart-total">₹ 630.25</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- end table-responsive -->
                        </div>
                    </div>
                    <div class="hstack gap-2 justify-content-between justify-content-end">
                        <a href="cart.php" class="btn btn-hover btn-soft-info w-100">Back To Cart <i class="ri-arrow-right-line label-icon align-middle ms-1"></i></a>
                        <a href="#" class="btn btn-hover btn-primary w-100">Continue Payment</a>
                    </div>
                    
                </div>
                <!-- end sticky -->
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->
</section>
<?php
include "inc_footer.php";
?>