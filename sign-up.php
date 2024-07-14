<?php
include "inc_header.php";
?>
<section class="auth-page-wrapper position-relative bg-light min-vh-100 d-flex align-items-center justify-content-between">
	<div class="w-100">
	    <div class="container">
	        <div class="row justify-content-center">
	            <div class="col-lg-6">
	                <div class="auth-card mx-lg-3">
	                    <div class="card border-0 mb-0">
	                        <div class="card-header bg-primary border-0">
	                            <div class="row">
	                                <div class="col-lg-4 col-3">
	                                    <img src="images/logo-light.png" alt="" class="img-fluid">
	                                </div>
	                                <div class="col-lg-8 col-9">
	                                    <h1 class="text-white text-capitalize lh-base fw-lighter">Let's get started with Toner Store</h1>
	                                </div>
	                            </div>
	                        </div>
	                        <div class="card-body">
	                            <p class="text-muted fs-15">Get your free Toner account now</p>
	                            <div class="p-2">
	                                <form class="needs-validation" novalidate action="">
	                            
	                                    <div class="mb-3">
	                                        <label for="useremail" class="form-label">Email <span class="text-danger">*</span></label>
	                                        <input type="email" class="form-control" id="useremail" placeholder="Enter email address" required>
	                                        <div class="invalid-feedback">
	                                            Please enter email
	                                        </div>
	                                    </div>
	                                    <div class="mb-3">
	                                        <label for="username" class="form-label">Username <span class="text-danger">*</span></label>
	                                        <input type="text" class="form-control" id="username" placeholder="Enter username" required>
	                                        <div class="invalid-feedback">
	                                            Please enter username
	                                        </div>
	                                    </div>
	                            
	                                    <div class="mb-3">
	                                        <label class="form-label" for="password-input">Password</label>
	                                        <div class="position-relative auth-pass-inputgroup">
	                                            <input type="password" class="form-control pe-5 password-input" placeholder="Enter password" id="password-input" aria-describedby="passwordInput" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
	                                            <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon" type="button" id="password-addon"><i class="ri-eye-fill align-middle"></i></button>
	                                            <div class="invalid-feedback">
	                                                Please enter password
	                                            </div>
	                                        </div>
	                                    </div>
	                            
	                                    <div class="mb-4">
	                                        <p class="mb-0 fs-12 text-muted fst-italic">By registering you agree to the Toner <a href="#" class="text-primary text-decoration-underline fst-normal fw-medium">Terms of Use</a></p>
	                                    </div>

	                                    <div class="mt-4">
	                                        <button class="btn btn-primary w-100" type="submit">Sign Up</button>
	                                    </div>
	                           
	                                </form>
	                            </div>
	                            <div class="mt-4 text-center">
	                                <p class="mb-0">Already have an account ? <a href="sign-in.php" class="fw-semibold text-primary text-decoration-underline"> Signin </a> </p>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div><!--end col-->
	        </div><!--end row-->
	    </div><!--end container-->
    </div>
</section>

<?php
include "inc_footer.php";
?>