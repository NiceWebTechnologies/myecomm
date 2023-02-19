<?php
session_start();
if(!isset($_SESSION["uid"])){
    
   header("location:index.php") ;
    
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
                    <li class="nav-item">
                        <input class="form-control me-2" type="text" placeholder="Search" aria-label="Search" id="search">
                    </li>
                    &nbsp;
                    <li class="nav-item"> <button class="btn btn-info" type="submit" id="search_btn">Search</button> </li>
                </ul>

                <ul class="navbar-nav mb-lg-0 d-flex" style="margin-right:50px;">
                    <li class="nav-item dropdown dropstart" id="cartcontainer">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa fa-shopping-cart" aria-hidden="true" style="color:white"></i>&nbsp; Cart<span class="badge badge-light">0</span>

                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <div class="card" style="width:400px;padding:0.2em">

                                <div class="card-header bg-success text-white ">
                                    <div class="row">

                                        <div class="col-md-3">Sl No.</div>
                                        <div class="col-md-3">Product Image</div>
                                        <div class="col-md-3">Product Name</div>
                                        <div class="col-md-3">Price In Rs.</div>
                                    </div>
                                </div>

                                <div id="cart_product"></div>
                                <!--
                                     <div class="row">

                                        <div class="col-md-3">Sl No.</div>
                                        <div class="col-md-3">Product Image</div>
                                        <div class="col-md-3">Product Name</div>
                                        <div class="col-md-3">Price In Rs.</div>
                                    </div>
-->

                                <div class="card-footer"></div>
                            </div>



                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa fa-user" style="color:white"></i>&nbsp;<?php echo "Hi ".$_SESSION['name'];?>
                        </a>
                        <ul class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">
                            <li>
                                <a class="nav-link" href="#"><i class="fa fa-user" aria-hidden="true" style="color:white;"></i>Cart</a>
                            </li>
                            <li class="devider"></li>
                            <li>
                                <a class="nav-link" href="#">Change Password</a>
                            </li>
                            <li>
                                <a class="nav-link" href="logout.php">Logout</a>
                            </li>

                        </ul>
                    </li>

                    <!--  <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fa fa-user" aria-hidden="true" style="color:white"></i>&nbsp;SignUp</a>
                    </li>-->
                </ul>

            </div>
        </div>

    </nav>

    <br>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-2">
                <div class="d-flex align-items-start">
                    <div id="get_category">

                    </div>
                </div>
                <div class="d-flex align-items-start">
                    <div id="get_brand">

                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-warning">
                        Products
                    </div>

                    <div class="card-body  ">

                        <div id="msg1"></div>

                        <div id="get_product">


                        </div>
                        <!--
<div class="row">
 <div class="col-md-4">
<div class="card">
                                    <div class="card-header bg-primary text-white">
                                        Samsung Galaxy
                                    </div>

                                    <div class="card-body">
                                        <img src="assets/mobile3.jpg">
                                    </div>

                                    <div class="card-footer bg-primary text-white">
                                        Rs.50000
                                        <button class="btn btn-danger" style="float:right">Add to Cart</button>
                                    </div>
                                </div>
</div>
</div>

<div class="row">
                            <div class="col-md-12">
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination" id="pageno">
                                   <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
-->


                    </div>


                </div>

                <div class="card-footer">
                    &copy; 2023 Nice Web Technologies
                    <div class="pull-right">

                   <div class="row">
                            <div class="col-md-12">
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination" id="pageno">
                                  <!-- <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                      <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#">Next</a></li>-->
                                    </ul>
                                </nav>
                            </div>
                        </div>

                    </div>
                </div>
            </div>



        </div>




    </div>
    <div class="col-md-1"></div>




    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="js/main.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>

</body>

</html>
