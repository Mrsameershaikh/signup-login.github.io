<?php
$connection =mysqli_connect('localhost','root');

if($connection){
    echo "Connection is established ";
}
else{
    echo "Error connection fails";
}

mysqli_select_db($connection, 'authentication');

$email=$_POST['email'];
$pass=$_POST['password'];

// $emailId="SELECT * FROM credentials where EMAIL='$email' ";
// $passw="SELECT * FROM credentials where PASSWD='$pass' ";


// first user////////////////////////////

$email1="amit@xelpmoc.com";
$passw1="amit@456";

if($email == $email1 && $pass==$passw1){
    echo "Login successful";
    header('location:loginsuccessful.html');
}
else{
    echo "Error while login";
}


// second user////////////////////////////


$email2="sameer@gmail.com";
$passw2="sameer@123"; 

if($email == $email2 && $pass==$passw2){
    echo "Login successful";
    header('location:loginsuccessful.html');
}
else{
    echo "Error while login";
}



// third user////////////////////////////

$email3="pooja@yahoo.com";
$passw3="pooja@123";
if($email == $email3 && $pass==$passw3){
    echo "Login successful";
    header('location:loginsuccessful.html');
}
else{
    echo "Error while login";
}


mysqli_query($connection,$email1,$passw1);
mysqli_query($connection,$email2,$passw2);
mysqli_query($connection,$email3,$passw3);

?>

