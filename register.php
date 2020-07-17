<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Register with us</title>
   
<?php  include('header.html');?>
<script src="js/registration_validtion.js" type="text/javascript"></script>

<div class="hero-wrap hero-wrap-2" style="background-image: url('images/image_bg.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-start">
          <div class="col-md-8 ftco-animate text-center text-md-left mb-0">
          	<p class="breadcrumbs mb-0"><span class="mr-0"><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Sign Up</span></p>
            <h1 class="mb-3 bread">Sign Up</h1>
          </div>
        </div>
      </div>
    </div>
    <div class="row block-9 m-4 ">
          <div class="col-md-6 offset-3 justify-content-start  ">
            <form   name="registration" method="POST" action="php_validation/registration_form.php" onsubmit="return checkcondtion();">
              <div class="form-group">
                <input type="text" class="form-control" id="fname" name="name" placeholder="Your Full Name"  >
                <small class="text-danger  i" id="error_fname"></small>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" id="email_reg" name="email" placeholder="Your Email" >
                <small class="text-danger  i" id="error_email_reg"></small>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" id="phonenumber_reg" name="phnumber" placeholder="Your phone Number"   >
                <small class="text-danger  i" id="error_phonenumber_reg"></small>
              </div>
          
              <div class="form-group">
                <input type="password" class="form-control" id="password" name="password" placeholder="Password" >
                <small class="text-danger  i" id="error_password"></small>
              </div>
              <div class="form-group">
                <input type="password" class="form-control" id="confirmPassword" placeholder="Confirm Password" >
                <small class="text-danger  i" id="error_confirmPassword"></small>
              </div>
              
              <div class="form-group">
                <input type="submit" value="Register Your Account"  name="submit" id="submit" class="btn btn-primary py-3 px-5">
              </div>
            </form>
          
          </div>
        </div>
<?php  include('footer.html');?>