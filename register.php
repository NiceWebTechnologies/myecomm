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
$name = "/^[a-zA-Z ]+$/";
$emailValidation = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9]+(\.[a-z]{2,4})$/";
$number = "/^[0-9]+$/";

if(empty($fname)||empty($lname)||empty($email)||empty($pass)||empty($mobile)||empty($addr)||empty($addr1)){
    
    
    echo "<div class='alert alert-warning alert-dismissible fade show' role='alert' id='msg'>Please fill all the feilds
    
     <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
    
    </div>";

    
}
else {
		if(!preg_match($name,$fname)){
		echo "
			<div class='alert alert-warning alert-dismissible fade show' role='alert' id='msg'>
				<b>this $fname is not valid..!</b>
                 <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
			</div>
		";
		exit();
	}
	if(!preg_match($name,$lname)){
		echo "
			<div class='alert alert-warning alert-dismissible fade show' role='alert' id='msg'>
				<b>this $lname is not valid..!</b>
                 <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
			</div>
		";
		exit();
	}
	if(!preg_match($emailValidation,$email)){
		echo "
			<div class='alert alert-warning alert-dismissible fade show' role='alert' id='msg'>
				<b>this $email is not valid..!</b>
                 <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
			</div>
		";
		exit();
	}
	if(strlen($pass) < 9 ){
		echo "
			<div class='alert alert-warning alert-dismissible fade show' role='alert' id='msg'>
				<b>Password is weak</b>
                 <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
			</div>
		";
		exit();
	}
	if(strlen($pass1) < 9 ){
		echo "
			<div class='alert alert-warning alert-dismissible fade show' role='alert' id='msg'>
				<b>Password is weak</b>
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
			</div>
		";
		exit();
	}
	if($pass != $pass1){
		echo "
			<div class='alert alert-warning alert-dismissible fade show' role='alert' id='msg'>
				<b>password is not same</b>
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
			</div>
		";
	}
	if(!preg_match($number,$mobile)){
		echo "
			<div class='alert alert-warning alert-dismissible fade show' role='alert' id='msg'>
				<b>Mobile number $mobile is not valid</b>
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
			</div>
		";
		exit();
	}
	if(!(strlen($mobile) == 10)){
		echo "
			<div class='alert alert-warning alert-dismissible fade show' role='alert' id='msg'>
				<b>Mobile number must be 10 digit</b>
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
			</div>
		";
		exit();
	}
	//existing email address in our database
	$sql = "SELECT user_id FROM user_info WHERE email = '$email' LIMIT 1" ;
	$check_query = mysqli_query($con,$sql);
	$count_email = mysqli_num_rows($check_query);
	if($count_email > 0){
		echo "
			<div class='alert alert-warning alert-dismissible fade show' role='alert' id='msg'>
				<b>Email Address is already available Try Another email address</b>
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
			</div>
		";
		exit();
	}
else
    
{
    
    $insert_sql=mysqli_query($con,"INSERT INTO `user_info` (`user_id`, `first_name`, `last_name`, `email`, `password`, `mobile`, `address1`, `address2`) VALUES (NULL, '$fname', '$lname', '$email', '$pass', '$mobile', '$addr', '$addr1'); "); 
    
    if($insert_sql){

    echo "<div class='alert alert-success alert-dismissible fade show' role='alert' id='msg'>You are sucessfully registered.
    
     <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
    
    </div>";
}
    
    else {
        
        echo "Somthing went wrong";
        
    }
    
}
}



?>
