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
	                                    <h1 class="text-white lh-base fw-lighter">Join Our Toner Store</h1>
	                                </div>
	                            </div>
	                        </div>
	                        <div class="card-body">
	                            <p class="text-muted fs-15">Sign in to continue to Toner.</p>
	                            <div class="p-2">
	                                <form action="javascript:void(0)">
	    
	                                    <div class="mb-3">
	                                        <label for="username" class="form-label">Username</label>
	                                        <input type="text" class="form-control" id="username" placeholder="Enter username">
	                                    </div>
	    
	                                    <div class="mb-3">
	                                        <label class="form-label" for="password-input">Password</label>
	                                        <div class="position-relative auth-pass-inputgroup mb-3">
	                                            <input type="password" class="form-control pe-5 password-input" placeholder="Enter password" id="password-input">
	                                            <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon" type="button" id="password-addon"><i class="ri-eye-fill align-middle"></i></button>
	                                        </div>
	                                    </div>
										<div class="mb-0">
		                            		<div class="d-flex justify-content-between">
		                            			<div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="auth-remember-check">
                                                    <label class="form-check-label" for="auth-remember-check">Remember me</label>
                                                </div>
	                                            <a href="javascript:void(0)" class="text-muted">Forgot password?</a>
	                                        </div>
	                                    </div>
	                                    <div class="mt-3">
	                                        <button class="btn btn-primary w-100" type="submit">Sign In</button>
	                                    </div>
	    
	                                </form>
	    
	                                <div class="text-center mt-5">
	                                    <p class="mb-0">Don't have an account ? <a href="sign-up.php" class="fw-semibold text-secondary text-decoration-underline"> SignUp</a> </p>
	                                </div>
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