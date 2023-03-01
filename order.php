<?php
session_start();
if(!isset($_SESSION["uid"])){
    
   header("location:index.php") ;
    $uid=$_SESSION['uid'];
   $sql=mysqli_query($con,"select * from cart where user_id='$uid'");
      $no=1;
        $total_amt=0;
        while($row=mysqli_fetch_array($sql)){
        $id=$row["id"];
           $pro_id=$row["p_id"];
           $pro_title=$row["product_title"];
           $pro_price= $row["price"];
           $qty=$row["qty"];
           $pro_image= $row["product_image"];
           $total=$row["total_amount"];
            $price_array=array($total);
            $total_array=array_sum($price_array);
            $total_amt=$total_amt+$total_array;
            $txid=rand(10,10000);
    
}
}
?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nice Web Technologies</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>

<body>

    <nav class="navbar navbar-dark navbar-expand-lg bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">NiceWeb</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Product</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <br>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-primary h3 text-white">Customer Order Details</div>
                    <div class="card-body">
                        <div class="row cart_detail">
                           <!-- <div class="col-md-6">
                                <img src="assets/fur7.jpg" class="img-thumbnail pull-right">
                            </div>
                            <div class="col-md-6 " >
                                <table class="table-borderless">
                                    <tr>
                                        <td><b>Product Name :</b></td>
                                        <td><b>Product Name</b></td>
                                    </tr>
                                    <tr>
                                        <td> <b>Product Price :</b></td>
                                        <td> <b>Product Price</b></td>
                                    </tr>
                                    <tr>
                                        <td><b>Quantity :</b></td>
                                        <td><b>Quantity</b></td>
                                    </tr>
                                    <tr>
                                        <td><b>Payment :</b></td>
                                        <td><b>Payment</b></td>
                                    </tr>
                                    <tr>
                                        <td><b>Tansaction ID. :</b></td>
                                        <td><b>Tansaction ID.</b></td>
                                    </tr>

                                </table>
                            </div>
                        </div>-->
                    </div>

                    <div class="card-footer"> 
                        <button id="rzp-button1" class="btn btn-success pull-right">Check Out</button>
                        <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
                        <script>
                            var options = {
                                "key": "rzp_test_6Y7UlK16rLNFOh", // Enter the Key ID generated from the Dashboard
                                "amount": "100", // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
                                "currency": "INR",
                                "name": "Nice Web Technologies", //your business name
                                "description": "Test Transaction",
                                "image": "https://example.com/your_logo",
                                 //This is a sample Order ID. Pass the `id` obtained in the response of Step 1
                                "callback_url": "https://eneqd3r9zrjok.x.pipedream.net/",
                                "prefill": {
                                    "name": "Gaurav Kumar", //your customer's name
                                    "email": "gaurav.kumar@example.com",
                                    "contact": "9000090000"
                                },
                                "notes": {
                                    "address": "Razorpay Corporate Office"
                                },
                                "theme": {
                                    "color": "#3399cc"
                                }
                            };
                            var rzp1 = new Razorpay(options);
                            document.getElementById('rzp-button1').onclick = function(e) {
                                rzp1.open();
                                e.preventDefault();
                            }

                        </script>
                    </div>
                </div>
            </div>
            <div class="col-md-2"></div>

        </div>


    </div>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="js/main.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>

</body>

</html>
