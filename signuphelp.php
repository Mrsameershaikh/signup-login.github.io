<?php
$connection =mysqli_connect('localhost','root');

if($connection){
    echo "Connection is established";
}
else{
    echo "Error connection fails";
}

mysqli_select_db($connection, 'authentication');

$firstname=$_POST['first_name'];
$lastname=$_POST['last_name'];
$email=$_POST['email'];
$pass=$_POST['password'];

$data="INSERT INTO credentials values('$firstname','$lastname','$email','$pass')";

// Query forwarding
mysqli_query($connection,$data);
header('location:signupsuccessful.php')

?>




