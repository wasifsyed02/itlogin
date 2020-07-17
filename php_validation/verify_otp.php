<?php
require '../assests/smtp_mailer.php';
include('db.php');
            class verify_otp{
            
            public function  __construct()
            {   
                switch($_POST["function"])
                {
                  case "verify_otp":
                    $this->verify_otp();
                  break;
                  case "send_otp":
                    $this->send_otp();
                  break;
                }
                
            }
            public function verify_otp(){
                $otp=$_POST["data"];
                $email=$_POST["email"];
                global $connection;
                if(check_column("otp","users","email",$email,$otp))
                {
                    $updateQuery="update users set verify=1  where email='$email'";
                    if(mysqli_query($connection,$updateQuery))
                        echo json_encode(array("type"=>"true","message"=>"your account hass been verified"));
                 }
                else
                    echo json_encode(array("type"=>"false","message"=>"your otp does not match in our server."));
                }
            // function for sending and inerting data into database;
                function  send_otp()
                {
                    global $connection;
                    $otp=rand(100000,999999);
                    $email=$_POST["email"];
                    $sqlquery="update users set otp=$otp where email='$email'";
                    if(mysqli_query($connection,$sqlquery))
                    {
                        if(send_otp_mail($email,$otp))
                        {
                            echo json_encode(array("type"=>"success","message"=>"OTP sent to your email."));
                        }
                        
                    }
                    else
                    echo json_encode(array("type"=>"error","message"=>"Sorry! some error occured  sending otp."));

                }

        };
        $runverify_otp=new verify_otp();
?>