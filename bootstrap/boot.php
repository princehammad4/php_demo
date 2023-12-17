<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bootstrap_db</title>
</head>
<body>
<?php
$con=mysqli_connect('localhost','root','','bootstrap');
if (isset($_POST['sub'])) {
         $name =$_POST['name'];
         $email =$_POST['email'];
         $number =$_POST['number'];
         $massage =$_POST['massage'];
         $query="INSERT INTO `boot`(`NAME`,`email`,`mobile`,`Massage`) VALUES ('$name','$email','$number','$massage')";
        $run = mysqli_query($con,$query);
    }
    header("location:http://localhost/new/bootstrap/");
?>











</body>
</html>