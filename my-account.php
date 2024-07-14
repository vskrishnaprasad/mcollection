<?php
include "inc_header.php";
?>
<!-- start profile -->
<section class="position-relative">
    <div class="profile-basic position-relative" style="background-image: url('images/profile-bg.jpg');background-size: cover;background-position: center; height: 300px;">
        <div class="bg-overlay bg-primary" style="--bs-bg-opacity: 0.99;"></div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="pt-3">
                    <div class="mt-n5 d-flex gap-3 flex-wrap align-items-end">
                        <img src="images/users/avatar-1.jpg" alt="" class="avatar-xl rounded p-1 bg-light mt-n3">
                        <div>
                            <h5 class="fs-18">Raquel Murillo</h5>
                            <div class="text-muted">
                                <i class="bi bi-geo-alt"></i> Phoenix, USA
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end profile -->

<!-- start tab-->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <ul class="nav nav-pills flex-column gap-3" role="tablist">
                            <li class="nav-item " role="presentation">
                                <a class="nav-link fs-15 active" data-bs-toggle="tab" href="#custom-v-pills-profile" role="tab" aria-selected="true"><i class="bi bi-person-circle align-middle me-1"></i> Account Info</a>
                            </li>
                            <li class="nav-item " role="presentation">
                                <a class="nav-link fs-15" data-bs-toggle="tab" href="#custom-v-pills-order" role="tab" aria-selected="false" tabindex="-1"><i class="bi bi-bag align-middle me-1"></i> Order History</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fs-15" href="index.php"><i class="bi bi-box-arrow-right align-middle me-1"></i> Logout</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div><!--end col-->
            <div class="col-lg-9">
                <div class="tab-content text-muted">
                    <div class="tab-pane fade show active" id="custom-v-pills-profile" role="tabpanel">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        
                                        <div class="d-flex mb-4">
                                            <h6 class="fs-16 text-decoration-underline flex-grow-1 mb-0">Personal Info</h6>
                                            <div class="flex-shrink-0">
                                                <a href="#!" class="badge bg-dark-subtle text-dark ">Edit</a>
                                            </div>
                                        </div>

                                        <div class="table-responsive table-card px-1">
                                            <table class="table table-borderless table-sm">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            Customer Name
                                                        </td>
                                                        <td class="fw-medium">
                                                            Raquel Murillo
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            Mobile / Phone Number
                                                        </td>
                                                        <td class="fw-medium">
                                                            +(253) 01234 5678
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            Email Address
                                                        </td>
                                                        <td class="fw-medium">
                                                            raque@toner.com
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            Location
                                                        </td>
                                                        <td class="fw-medium">
                                                            Phoenix, USA
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            Since Member
                                                        </td>
                                                        <td class="fw-medium">
                                                            Aug, 2022
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                        <div class="mt-4">
                                            <h6 class="fs-16 text-decoration-underline">Billing & Shipping Address</h6>
                                        </div>
                                        <div class="row mt-4">
                                            <div class="col-md-6">
                                                <div class="card mb-md-0">
                                                    <div class="card-body"> 
                                                        <div class="float-end clearfix"> <a href="javascript:void(0)" class="badge bg-primary-subtle text-primary "><i class="ri-pencil-fill align-bottom me-1"></i> Edit</a> </div>
                                                        <div> 
                                                            <p class="mb-3 fw-semibold fs-12 d-block text-muted text-uppercase">Home Address</p> 
                                                            <h6 class="fs-14 mb-2 d-block">Raquel Murillo</h6> 
                                                            <span class="text-muted fw-normal text-wrap mb-1 d-block">144 Cavendish Avenue, Indianapolis, IN 46251</span> 
                                                            <span class="text-muted fw-normal d-block">Mo. +(253) 01234 5678</span> 
                                                        </div> 
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="card mb-0">
                                                    <div class="card-body">
                                                        <div class="float-end clearfix"> <a href="javascript:void(0)" class="badge bg-primary-subtle text-primary "><i class="ri-pencil-fill align-bottom me-1"></i> Edit</a> </div>
                                                        <div>
                                                            <p class="mb-3 fw-semibold fs-12 d-block text-muted text-uppercase">Shipping Address</p>
                                                            <h6 class="fs-14 mb-2 d-block">James Honda</h6>
                                                            <span class="text-muted fw-normal text-wrap mb-1 d-block">1246 Virgil Street Pensacola, FL 32501</span>
                                                            <span class="text-muted fw-normal d-block">Mo. +(253) 01234 5678</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end row -->
                                    </div>
                                </div>
                                <!--end card-->
                            </div>
                            <!--end col-->
                        </div>
                    </div>
                    <!--end tab-pane-->
                    <div class="tab-pane fade" id="custom-v-pills-order" role="tabpanel">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive table-card">
                                    <table class="table fs-15 align-middle table-nowrap">
                                        <thead>
                                            <tr>
                                                <th scope="col">Order ID</th>
                                                <th scope="col">Product</th>
                                                <th scope="col">Date</th>
                                                <th scope="col">Total Amount</th>
                                                <th scope="col">Status</th>
                                                <th scope="col"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
											<?php
											for ($i = 1; $i <= 3; $i++) {
											?>
                                            <tr>
                                                <td>
                                                    <a href="#" class="text-body">TBT15454841</a>
                                                </td>
                                                <td>
                                                    <a href="product-details.php">
                                                        <h6 class="fs-15 mb-1">World's Most Expensive T Shirt</h6>
                                                    </a>
                                                    <p class="mb-0 text-muted fs-13">Women's Clothes</p>
                                                </td>
                                                <td><span class="text-muted">01 Jul, 2022</span></td>
                                                <td class="fw-medium">₹ 287.53</td>
                                                <td>
                                                    <span class="badge bg-success-subtle text-success ">Delivered</span>
                                                </td>
                                                <td>
                                                    <a href="#invoiceModal" data-bs-toggle="modal" class="btn btn-secondary btn-sm">Invoice</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href="#" class="text-body">TBT1524563 </a>
                                                </td>
                                                <td>
                                                    <a href="product-details.php">
                                                        <h6 class="fs-15 mb-1">Slippers Open Toe</h6>
                                                    </a>
                                                    <p class="mb-0 text-muted fs-13">Footwear</p>
                                                </td>
                                                <td>
                                                    <span class="text-muted">09 Dec, 2022</span>
                                                </td>
                                                <td class="fw-medium">₹ 874.00</td>
                                                <td><span class="badge bg-danger-subtle text-danger ">On Process</span></td>
                                                <td>
                                                </td>
                                            </tr>
                                            <?php
                                        	}
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- end card-body -->
                        </div>
                        <!--end card-->
                    </div>
                    <!--end tab-pane-->
                </div>
            </div>
        </div> <!-- end row-->
    </div>
</section>
<!-- end tab-->
<?php
include "inc_footer.php";
?>