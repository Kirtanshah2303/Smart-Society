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
        
        if(isset($_POST["btnsubmit"]))
        {
            $rolename=$_POST["txtname"];
            $roleimg=$_POST["txtimg"];
            
            $conn=mysqli_connect("localhost","root","","elegance");
   
   $qry="insert into role(rolename,roleimg) values('$rolename','$roleimg')";
   $result=$conn->query($qry);

   
   
        }
        
    ?>
<form method="post">
        <table>
        <tr>
                <td>
                    Role Name
                </td>
                <td><input type="text" name="txtname" <?php echo $rolename; ?>></td>
            </tr>
            <tr>
                <td>
                    Role Image
                </td>
                <td><input type="text" name="txtimg" <?php echo $roleimg; ?>></td>
            </tr>
            <tr>
                <td><input type="submit" name="btnsubmit"></td>
            </tr>
        </table>
    </form>
</body>
</html>