var validate;
$(document).ready(function(){
    var conpass=$("#confirmPassword");
    var pass=$("#password");
    var boolean,bool2;
   $("#submit").click(function(){
        var fname=$("#fname");
        var email=$("#email_reg");
        var phonenumber=$("#phonenumber_reg");
        
       bool2=boolean=true;
       boolean=isempty(fname);
       boolean=isempty(phonenumber);
       boolean=isempty(pass);
       boolean=isempty(conpass);
       boolean=checkpasswords(pass,conpass);
       bool2=emailvalidtion(email);
       if(boolean==true && bool2==true)
       {
           validate=true;
       }
       else
       validate=false;
    
   });
   conpass.keyup(function(){
    checkpasswords(pass,conpass);
   });

});

//function checking are these input valid or  not (empty)
function isempty(input)
{       
        var attribute=input.attr("id");
        var title=input.attr("placeholder");
        var value=$.trim(input.val());
        if(value=="" || value==null)
        {
            $("#error_"+attribute).html(title +" can't be empty");
            input.addClass('is-invalid');
            return false;
        }
        else
        {
            $("#error_"+attribute).html("");
            input.removeClass('is-invalid');
            return true;
        }

}
//validation email function checking is email valid or  not
function emailvalidtion(input)
{
    var validationemail= /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    var attribute=input.attr("id");
    var value=input.val();
    if(isempty(input)){
    if(!validationemail.test(value))
    {
        $("#error_"+attribute).html("your email id is not valid ");
        input.addClass('is-invalid');
        return false;
    }
    else   
    {
         $("#error_"+attribute).html("");
         input.add('is-valid');
        return true;

    }
    }
}

//function checking are both the passwords same or not using live

function checkpasswords(pass,conpass)
{   var attribute=conpass.attr("id");
       
        if(!isempty(pass))
        {
        $("#error_"+attribute).html("Please enter your password first.");
        conpass.addClass('is-invalid');
        return false;
    }
    else
    {
        if(pass.val()!=conpass.val())
        {
            $("#error_"+attribute).html("Passwords don't match.");
            conpass.addClass('is-invalid');
            return false;
        }
        else
        {
            $("#error_"+attribute).html("");
            conpass.removeClass('is-invalid');
           return true;
        }
    }
        
    


}

function checkcondtion()
{
    var value=validate;
    return value;
}