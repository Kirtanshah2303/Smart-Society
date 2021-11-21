 <!----<html>
     <head><title> PHP Mail </title></head>
     <body>
    
     <form name="form" method="post" align="center">
     <h2 align="center"> Send mail via PHP </h2>
      Email:
    <input type="text" name="email">
    <br><br>
     Enter the subject:
    <input type="text" name="sub">
    <br><br>
    </form>


      
         
</body>
</html>
---->

 <?php
 /*$to="amitkadam3096@gmail.com";
 $subject="Jainil";
 $message="Hii jainil!";
 $headers= "From: amitkadam3096@gmail.com";

  mail($to,$subject,$message,$headers);

    echo "Mail sent Successfully";


   /* <?php
$to = "somebody@example.com";
$subject = "My subject";
$txt = "Hello world!";
$headers = "From: webmaster@example.com" . "\r\n" .
//"CC: somebodyelse@example.com";

mail($to,$subject,$txt,$headers);
*/


//the subject
$sub = "Your subject";
//the message
$msg = "Your message";
//recipient email here
$rec = "archeetparikh@gmail.com";
//send email
mail($rec,$sub,$msg);


?>