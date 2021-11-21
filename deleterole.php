<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
        $roleid="";
        if(isset($_POST["btnsubmit"]))
        {
            $roleid=$_POST["txtid"];
           
            
            $conn=mysqli_connect("localhost","root","","elegance");
   
   $qry="delete from role where roleid='$roleid'";
   $result=$conn->query($qry);

   
   
        }
        
    ?>
<form method="post">
        <table>
        <tr>
                <td>
                    Role ID
                </td>
                <td><input type="text" name="txtid" ></td>
            </tr>
            <tr>
                <td><input type="submit" name="btnsubmit"></td>
            </tr>
        </table>
    </form>
</body>
</html>