<?php
include("conn.php");
session_start();
if(isset($_POST['userLogin'])){
    $email=mysqli_real_escape_string($con,($_POST['email']));
    $pass=$_POST['pass'];
    $sql_select=mysqli_query($con,"select * from user_info where email='$email' and password='$pass'");
    
    $count=mysqli_num_rows($sql_select);
   
    if($count==1){
        $row=mysqli_fetch_array($sql_select);
           $_SESSION["uid"]=$row["user_id"]  ;
           $_SESSION["name"]=$row["first_name"];
          echo "done";
    }
    else {
        echo "false";
    }
        
    }





?>