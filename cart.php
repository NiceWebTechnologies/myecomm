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
                   <div id="msgcart"></div>
                    <div class="card-header bg-primary text-white">Cart Checkout </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-2"><b>Action</b></div>
                            <div class="col-md-2"><b>Product Image</b></div>
                            <div class="col-md-2"><b>Product Name</b></div>
                            <div class="col-md-2"><b>Product Price </b></div>
                            <div class="col-md-2"><b>Quantity</b></div>
                            <div class="col-md-2"><b>Price In Rs.</b></div>
                        </div>
                        <div id="cart_checkout"></div>
                        <!-- <div class="row">
                            <div class="col-md-2">
                               <div class="btn-group">
                                <button class="btn btn-danger"><i class="fa fa-solid fa-trash"></i></button>
                                <button class="btn btn-success"><i class="fa fa-solid fa-check"></i></button>
                                </div>
                            </div>
                            <div class="col-md-2"><img src="assets/fe1.jpg" width="50" height="50"></div>
                            <div class="col-md-2">Product Name</div>
                            <div class="col-md-2"><input type="text" class="form-control" value="1"></div>
                            <div class="col-md-2"><input type="text" class="form-control" value="50" disabled></div>
                            <div class="col-md-2"><input type="text" class="form-control" value="5000" disabled></div>
                        </div>-->


                    </div>
                    <div class="card-footer"> </div>
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
