<?php 
include('php_validation/db.php');

if(isset($_GET['email']))
{   $email=$_GET["email"];
    if(fetch_table("email","users","email",$email))
    {
        if(!check_column("verify","users","email",$email,0))
            header("Location:login.php");
    
    }
    else
        header("location:register.php");
}
else
header("location:register.php");


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Verify your Account first</title>
   
      <?php include('header.html'); ?>
      <div class="loading" style="display:none;">Loading&#8230;</div>


      <div class="hero-wrap hero-wrap-2" style="background-image: url('images/image_bg.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-start">
          <div class="col-md-8 ftco-animate text-center text-md-left mb-0">
          	<p class="breadcrumbs mb-0"><span class="mr-0"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Team</span></p>
            <h1 class="mb-3 bread">verify your Account</h1>
          </div>
        </div>
      </div>
    </div>
    <br>
    <br>
    <div class="container">
        <div class="row">
  <div class="card col-md-5 offset-md-3" style="width: 30rem;" >
  <div class="card-body">
  <div class="alert alert-success" role="alert" id="msg-label">
  Your Account is created successfully.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
</div>
   
    <div class="form-group">
    <input type="text" class="form-control" placeholder="Your Otp."  name="otp">
    <small id="respone_otp" class="text-danger"></small>
    </div>
    <div class="form-group">
    <div class="text-center"> 
    <input type="submit" class="btn btn-success text-center " value="verify" id="verify_otp" >    
    </div>  </div>  
    <div class="text-right">
    <small  class="text-primary" id="otp_again" style="cursor: pointer;" id=""> Didn't receive otp? Send opt Again.</small>    </div>
</div>
</div>
</div>
</div>
</div>
<br>
    <br>
      <?php include('footer.html'); ?>
      <script type="text/javascript">
        $(document).ready(function()
        {
            $("#verify_otp").click(function(){
                var otp_input=$('input[name="otp"]');
                var input={data:otp_input.val(),function:"verify_otp",email:"<?php echo $_GET['email']; ?>"};
                $.ajax({
                    url:"php_validation/verify_otp.php",
                    data:input,
                    method:'post',
                     dataType:'json',
                    success:function(res)
                    {   
                        if(res.type=="true")
                           {
                            window.location.replace("login.php?verified=new");
                           }
                        else  if(res.type=="false")
                            {
                                otp_input.addClass("is-invalid");
                                $("#respone_otp").html(res.message);
                               
                            }
                    }
                });
    
            });

            $("#otp_again").click(function(){
                var input={function:"send_otp",email:"<?php echo $_GET['email']; ?>"};
                  $.ajax({
                    url:"php_validation/verify_otp.php",
                    data:input,
                    method:'post',
                    dataType:'json',
                    beforeSend:function(){
                      $(".loading").css("display","block");
                    },

                    success:function(response)
                    {
                            if(response.type=="success")
                            {
                                $("#msg-label").html(response.message+'<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>');
                                $(".loading").css("display","none");
                            }
                    }
                  });
            });
        });
    </script>