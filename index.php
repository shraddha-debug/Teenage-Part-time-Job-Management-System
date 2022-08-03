<?php
$connection = mysqli_connect('localhost' , 'root');

if ($connection)
{
echo "connection is Established";
}
else
{
echo "connection is not Established";
}
mysqli_select_db($connection,  'authentication');
$email = $_POST['email_id'];
$pass = $_POST['password'];
$repeat_pass = $_POST['repeat_pass'];
$data = "INSERT INTO credentials (EMAIL , PASSWD, RPASSWD)  VALUES ('$email', '$pass', '$rpass');

mysqli_query ($connection, $data);
header('location:signupsuccessful.php ');
?>