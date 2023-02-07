<?php 

include("conn.php");
$fname=$_POST["fname"];
$lname=$_POST["lname"];
$email=$_POST["email"];
$pass=$_POST["password"];
$pass1=$_POST["password1"];
$mobile=$_POST["mobile"];
$addr=$_POST["addr"];
$addr1=$_POST["addr1"];

$insert_sql=mysqli_query($con,"INSERT INTO `user_info` (`user_id`, `first_name`, `last_name`, `email`, `password`, `mobile`, `address1`, `address2`) VALUES (NULL, '$fname', '$lname', '$email', '$pass', '$mobile', '$addr', '$addr1'); ");



if(empty($fname)||(empty($lname)||(empty($email)||(empty($pass)||(empty($mobile)||(empty($addr)||(empty($addr1)){
    
    
    echo" <div class='alert alert-warning alert-dismissible fade show' role='alert' id='msg'>Please fill all the feilds</div>";

    
}
if($insert_sql){
    
    echo "You are successfully registered";
}
?>
