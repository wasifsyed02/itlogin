<?php 
require '../assests/smtp_mailer.php';
include('db.php');
$array=array();
$flag=true;

if(isset($_POST['submit']))
{  
    $fname=$_POST["name"];
    $email=$_POST["email"];
    $phonenumber=$_POST["phnumber"];
    $password=$_POST["password"];
    if(empty(test_input($fname)))
    {
        $array[]="fname is empty";
        $flag=false;
    }
    if(empty(test_input($email)))
    {
        $array[]="email is empty";
        $flag=false;
    }
    if(empty(test_input($phonenumber)))
    {
        $array[]="phone number is empty";
        $flag=false;
    }
    if(empty(test_input($password)))
    {
        $array[]="password is empty";
        $flag=false;
    }
    if(!empty(test_input($email))){
   if(!email_validation(test_input($email)))
   {
       $array[]="Your email is not valid";
       $flag=false;
   }
    }

$table_name="users";
$column_name="email";
        if(!empty(test_input($email))){
        if(fetch_table($column_name,$table_name,$column_name,$email))
        {
            $array[]="email already exists sorry can't make again";
            $flag=false;
            }
        }
        if($flag==true)
        {
        global $connection;
        $otp=rand(100000,999999);
        $insertionQuery="insert into users(fname,email,phone_number,PASSWORD,otp) values('$fname','$email','$phonenumber','$password','$otp')";
            if(mysqli_query($connection,$insertionQuery))
            {
                
                if(send_otp_mail($email,$otp,$fname))
                {
                    header("Location:../verify.php?email=$email");
                }
                
            }
        }
        else
        echo $array;
  
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

  function email_validation($str) { 
    return (!preg_match( 
"^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^", $str)) 
        ? FALSE : TRUE; 
} 
?>