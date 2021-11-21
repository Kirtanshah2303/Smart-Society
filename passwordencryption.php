<html>
    <head><title> Password Encryption </title></head>
    <body>
    <form name="form" method="post" align="center">
        <h2> Registration Form</h2>
        Username:
        <input type="text" name="uname" value="">
        <br><br>
        Password:
        <input type="text" name="pass" value="">
        <br><br>
        <input type="submit" name="submit" value="submit">
     </form>

<?php

if(isset($_POST["submit"]))
{
     $uname=$_POST["uname"];
     $pass=password_hash($_POST["pass"],PASSWORD_DEFAULT);

      echo $uname ." and ". $pass;
     
}

$pid=$_GET["id"];
?>   
    </body>
   </html>

