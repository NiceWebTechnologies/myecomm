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
            <a class="navbar-brand" href="#">NiceWeb</a>
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

    <p><br></p>


    <div class="container-fluid">

        <div class="row">

            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div id="msg"></div>

                <div class="card">
                    <div class="card-header bg-primary text-white">SIGN UP</div>
                    <div class="card-body">
                        <form method="post">
                            <div class="row">

                                <div class="col-md-6">
                                    <label for="fname">First Name</label>
                                    <input class="form-control" id="fname" type="text" name="fname">
                                </div>
                                <div class="col-md-6">
                                    <label for="lname">Last Name</label>
                                    <input class="form-control" id="lname" type="text" name="lname">
                                </div>
                            </div>
                            <div class="row">

                                <div class="col-md-12">
                                    <label for="email">email</label>
                                    <input class="form-control" id="email" type="email" name="email">
                                </div>

                            </div>

                            <div class="row">

                                <div class="col-md-12">
                                    <label for="pass">Password</label>
                                    <input class="form-control" id="email" type="password" name="password">
                                </div>

                            </div>
                            <div class="row">

                                <div class="col-md-12">
                                    <label for="pass1">Repeat-Password</label>
                                    <input class="form-control" id="pass1" type="password" name="password1">
                                </div>

                            </div>

                            <div class="row">

                                <div class="col-md-12">
                                    <label for="mobile">Mobile</label>
                                    <input class="form-control" id="mobile" type="mobile" name="mobile">
                                </div>

                            </div>

                            <div class="row">

                                <div class="col-md-12">
                                    <label for="addr">Address line 1</label>
                                    <input class="form-control" id="address" type="text" name="addr">
                                </div>

                            </div>


                            <div class="row">

                                <div class="col-md-12">
                                    <label for="addr1">Address line 2</label>
                                    <input class="form-control" id="addr1" type="text" name="addr1">
                                </div>

                            </div>
                            <br>
                            <div class="row">

                                <div class="col-md-12">
                                    <input type="button" class=" btn btn-success btn-lg pull-right" id="sign_up" type="button" name="signup" value="SignUp">
                                </div>

                            </div>
                        </form>
                    </div>
                    <div class="card-footer">SIGN UP</div>


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
