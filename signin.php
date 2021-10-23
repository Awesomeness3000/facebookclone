<?php
$con = mysqli_connect('localhost','root','','facebookclone');

$phoneoremail = $_POST['phoneoremail'];
$password = $_POST['password'];

$check_data = mysqli_query($con, "SELECT * FROM userdata WHERE phoneoremil = '$phoneoremail' and password = 'password");
$check = mysqli_num_rows($check_data);

if($check > 0){
echo "Login Successful"
}

else{
echo "Login Failed. please Try again later";
}
}
?>