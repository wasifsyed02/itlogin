<?php 
    define("server","localhost");
    define("username","root");
    define("password","");
    define("database","itlogin");
    $connection=mysqli_connect(server,username,password,database) or die("could not connect some problem occured");

    function fetch_table($item,$table_name,$column_name,$item_name)
    {
       global $connection;
        $selectQuery="select $item from $table_name where $column_name ='$item_name'";
        $result=mysqli_query($connection,$selectQuery);
        if(mysqli_num_rows($result)>0)
        {
            return true;
        }
        else
            return false;
    }
    //check checking is that user verfied or not.
    function check_column($item,$table_name,$column_name,$item_name,$item_value)
    {
       global $connection;
        $selectQuery="select $item from $table_name where $column_name ='$item_name'";
        $result=mysqli_query($connection,$selectQuery);
        if(mysqli_num_rows($result)>0)
        {
           while($row=mysqli_fetch_assoc($result))
           {
               if($row["$item"]==$item_value)
                return true;
                else
                return false;
           }
        }
       
    }
?>