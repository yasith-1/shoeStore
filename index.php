<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- For carosoul -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">
    <!-- <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous"> -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons">
    <!-- For carosoul -->

    <!--link Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <!--link Bootstrap -->

    <!-- link css file -->
    <link rel="stylesheet" href="style.css">
    <!-- link css file -->



    <title>Shoe Store</title>
</head>

<body class="body-bg-effect bgimage">

    <!-- Navbar start  ---------------------------------------------------------------------------------------------------------------------------->
    <section class="sticky-top  d-flex justify-content-center mt-3">


        <div class="glass shadow shadow-lg rounded-3 " style="width: 90%;">
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid d-flex justify-content-center gap-5">
                    <a class="navbar-brand" href="index.php">
                        <img src="./resources/skyline.png" class="rounded-pill" alt="Logo" width="45" class="d-inline-block align-text-top">
                        <span class="fw-bold ms-0" style="font-family: poppins; letter-spacing: 1px; font-size: 30px;">SKYLINE</span>
                        
                    </a>



                    <section>
                        <button class="navbar-toggler text-dark" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    </section>




                    <section>
                        <!-- Nav Items -->
                        <div class="collapse navbar-collapse " id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">

                                <li class="nav-item btn btn-outline-danger nav-item-width">
                                    <a class="nav-link active custom-font text-dark p-0" aria-current="page" href="#">Home</a>
                                </li>
                                &nbsp;&nbsp;&nbsp;&nbsp;

                                <!-- <li class="nav-item">
                            <a class="nav-link active custom-font " aria-current="page" href="#">Mens Shoes</a>
                        </li>
                        &nbsp;&nbsp;&nbsp;&nbsp;

                        <li class="nav-item">
                            <a class="nav-link active custom-font " aria-current="page" href="#">Women Shoes</a>
                        </li>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <li class="nav-item">
                            <a class="nav-link active custom-font" href="#">Kids Shoes</a>
                        </li> -->

                                <!-- Dropdown -->
                                <li class="nav-item dropdown btn btn-outline-info nav-item-width">
                                    <a class="nav-link dropdown-toggle custom-font text-dark p-0" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Category
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item custom-font" href="#">Men's Shoes</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item custom-font" href="#">Women's Shoes</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item custom-font" href="#">Kids Shoes</a></li>
                                    </ul>
                                </li>
                                <!-- Dropdown -->

                                &nbsp;&nbsp;&nbsp;&nbsp;
                                <li class="nav-item btn btn-outline-info nav-item-width">
                                    <a class="nav-link active custom-font text-dark p-0" href="#">Our Story</a>
                                </li>

                                &nbsp;&nbsp;&nbsp;&nbsp;
                                <li class="nav-item btn btn-outline-info nav-item-width">
                                    <a class="nav-link active custom-font text-dark p-0" href="#">Contact Us</a>
                                </li>

                            </ul>
                            <!-- Nav Items -->
                        </div>

                    </section>

                </div>
            </nav>
        </div>

    </section>
    <!-- Navbar end  ---------------------------------------------------------------------------------------------------------------------------->


    <!-- carosoul -->
    <section class="d-block justify-content- border border-dark">

        <div class="container-fluid carasoularea border border-danger col-12 col-lg-9">

            <!-- Carousel Card -->
            <div class="card card-raised card-carousel">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="3000">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1" class=""></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2" class=""></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="https://rawgit.com/creativetimofficial/material-kit/master/assets/img/bg.jpg"
                                alt="First slide">
                            <div class="carousel-caption d-none d-md-block">
                                <h4>
                                    <i class="material-icons">location_on</i>
                                    Yellowstone National Park, United States
                                </h4>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="https://rawgit.com/creativetimofficial/material-kit/master/assets/img/bg2.jpg" alt="Second slide">
                            <div class="carousel-caption d-none d-md-block">
                                <h4>
                                    <i class="material-icons">location_on</i>
                                    Somewhere Beyond, United States
                                </h4>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="https://rawgit.com/creativetimofficial/material-kit/master/assets/img/bg3.jpg" alt="Third slide">
                            <div class="carousel-caption d-none d-md-block">
                                <h4>
                                    <i class="material-icons">location_on</i>
                                    Yellowstone National Park, United States
                                </h4>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <i class="material-icons">keyboard_arrow_left</i>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <i class="material-icons">keyboard_arrow_right</i>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <!-- End Carousel Card -->

        </div>


    </section>
    <!-- carosoul -->
























    <!-- link script.js file -->
    <script src="script.js"></script>
    <!-- link script.js file -->

    <!-- Include js plugin -->
    <script src="assets/owl-carousel/owl.carousel.js"></script>
    <!-- Include js plugin -->

    <!-- You can use latest version of jQuery  -->
    <script src="jquery-1.9.1.min.js"></script>
    <!-- You can use latest version of jQuery  -->


    <!-- link js bootstrap cdn link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- link js bootstrap cdn link -->

    <!-- For carosoul -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js" integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js" integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous"></script>
    <!-- For carosoul -->

</body>

</html>