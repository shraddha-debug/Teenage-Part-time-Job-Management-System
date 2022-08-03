<?php
$connection = mysqli_connect('localhost','root');
if($connection){
    echo "Registration is done!";
}
else {
    echo " Error ,check the details";
}
mysqli_select_db($connection ,'authentication');
$email = $_POST('email');
$pass = $_POST['password'];
$repeat_pass = $_POST['repeat_pass'];

$data =
?>