<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- For carosoul -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons">
    <!-- For carosoul -->

    <!--link Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <!--link Bootstrap -->

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Font Awesome -->

    <!-- Reurn to top icon -->
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <!-- Reurn to top icon -->

    <!-- link css file -->
    <link rel="stylesheet" href="style.css">
    <!-- link css file -->

    <link rel="shortcut icon" href="resources/skylinelogo.png" type="image/x-icon">

    <title>SKYLINE</title>
</head>

<body class="body-bg-effect bgimage">

    <!-- Navbar start  ---------------------------------------------------------------------------------------------------------------------------->
    <section class="sticky-top d-flex justify-content-center align-items-center mt-3">
        <div class="glass shadow shadow-lg rounded-3" style="width: 90%;">
            <nav class="navbar navbar-dark navbar-expand-lg px-0">
                <div class="container-fluid">
                    <!-- Logo and brand name section, aligned to the center on larger screens -->
                    <a class="navbar-brand d-flex align-items-center ms-4 mx-auto" href="#">
                        <img src="./resources/skylinelogo.png" class="rounded-pill" alt="Logo" width="60">
                        <!-- Uncomment this span for text logo -->
                        <!-- <span class="fw-bold text-light" style="font-family: poppins; letter-spacing: 1px; font-size: 30px;">SKYLINE</span> -->
                    </a>

                    <!-- Toggler button aligned to the end -->
                    <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <!-- Nav items section -->
                    <div class="collapse navbar-collapse justify-content-center align-items-center flex-row" id="navbarSupportedContent">
                        <ul class="navbar-nav mb-2 mb-lg-0">
                            <li class="nav-item mx-4 p-3 ">
                                <a class="nav-link active custom-font text-light fw-semibold p-0"
                                    style="font-size: 18px; font-family: poppins;" aria-current="page" href="#">Home</a>
                            </li>

                            <!-- Dropdown for Category -->
                            <li class="nav-item dropdown mx-4 p-3">
                                <a class="nav-link dropdown-toggle custom-font text-light fw-semibold p-0"
                                    style="font-size: 18px; font-family: poppins;" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
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

                            <li class="nav-item mx-4 p-3">
                                <a class="nav-link custom-font text-light fw-semibold p-0"
                                    style="font-size: 18px; font-family: poppins;" href="#">Our Story</a>
                            </li>

                            <li class="nav-item mx-4 p-3">
                                <a class="nav-link custom-font text-light fw-semibold p-0"
                                    style="font-size: 18px; font-family: poppins;" href="#">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </section>
    <!-- Navbar end  ------------------------------------------------------------------------------------------------------------------------------------>


    <!-- carosoul start---------------------------------------------------------------------------------------------------------------------------------->

    <div class="container-fluid carasoularea col-12 col-lg-9 justify-content-center d-none d-md-block mb-5">

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
                        <img class="d-block w-100" src="resources/pair.png"
                            alt="First slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h4>
                                Nike Premium Quality Vietnam Imported Shoe
                            </h4>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img class="d-block w-100" src="resources/highcutnike.png" alt="Second slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h4>
                                Nike Premium Quality Vietnam Imported Shoe

                            </h4>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img class="d-block w-100" src="resources/newbalance.png" alt="Third slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h4>
                                Newbalance Premium Quality Vietnam Imported Shoe

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

    <!-- carosoul end ------------------------------------------------------------------------------------------------------------------------------->



    <!-- Horizontal logo set start--------------------------------------------------------------------------------------------------------------------->

    <section>

        <div class="container d-flex flex-column justify-content-center mt-sm-0 mt-5">

            <div>
                <h3 class="fw- text-light text-center" style="font-family: poppins;">Our Features</h3>
                <hr class="text-light ">
            </div>

            <div class="row col-12 justify-content-center gap-3">

                <div class="col-12 col-md-6 hlw">
                    <div class="border border-secondary py-3 rounded-4 glass-look animate-effect text-center">
                        <img src="resources/delivery.png" alt="image">
                        <h4 class="text-light">Fast Delivery</h4>
                        <span class="text-light">Within 1-3 Days</span>
                    </div>
                </div>

                <div class="col-12 col-md-6 hlw">
                    <div class="border border-secondary py-3 rounded-4 glass-look animate-effect text-center">
                        <img src="resources/cod.png" alt="">
                        <h4 class="text-light">Trusted Payment</h4>
                        <span class="text-light">COD Available</span>
                    </div>
                </div>

                <div class="col-12 col-md-6 hlw">
                    <div class="border border-secondary py-3 rounded-4 glass-look animate-effect text-center">
                        <img src="resources/exchanging.png" alt="">
                        <h4 class="text-light">Return Option</h4>
                        <span class="text-light">Return Within 7 Days</span>
                    </div>
                </div>

                <div class="col-12 col-md-6 hlw">
                    <div class="border border-secondary py-3 rounded-4 glass-look animate-effect text-center">
                        <img src="resources/payment.png" alt="">
                        <h4 class="text-light">Payments</h4>
                        <span class="text-light">COD | Bank Deposit</span>
                    </div>
                </div>


            </div>

        </div>

    </section>

    <!-- Horizontal logo set end ------------------------------------------------------------------------------------------------------------->




    <!-- Product Cards Start ------------------------------------------------------------------------------------------------------------------>

    <section>
        <div class="container d-flex justify-content-center mt-5">
            <div class="row col-12 justify-content-center">
                <div>
                    <h3 class="fw-bold text-light text-center" style="font-family: poppins;">SHOP NOW</h3>
                    <hr class="text-light ">
                </div>

                <!-- Product Card row 1 -->

                <div class="col-10 col-md-6 col-lg-3 mb-5 d-flex justify-content-center">
                    <div class="card text-center bg-transparent rounded-4 glass-look animate-effect border border-secondary">
                        <img src="resources/zero.png" class="card-img img-fluid rounded-top-4" alt="...">
                        <div class="card-body">
                            <h4 class="card-title text-light fw-bold">Nike Airforce</h4>
                            <p class="card-text text-light">Vietnam Imported Nike Air Force 1 Premium Quality</p>
                            <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                        </div>
                        <div class="row justify-content-center p-3">
                            <div class="col-6 d-grid ">
                                <a href="#" class="btn btn-outline-warning">View</a>
                            </div>

                            <div class="col-6 d-grid ">
                                <a href="#" class="btn btn-outline-light">View</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-10 col-md-6 col-lg-3 mb-5 d-flex justify-content-center">
                    <div class="card text-center bg-transparent rounded-4 glass-look animate-effect border border-secondary">
                        <img src="resources/zero.png" class="card-img img-fluid rounded-top-4" alt="...">
                        <div class="card-body">
                            <h4 class="card-title text-light fw-bold">Nike Airforce</h4>
                            <p class="card-text text-light">Vietnam Imported Nike Air Force 1 Premium Quality</p>
                            <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                        </div>
                        <div class="row justify-content-center p-3">
                            <div class="col-6 d-grid ">
                                <a href="#" class="btn btn-outline-warning">View</a>
                            </div>

                            <div class="col-6 d-grid ">
                                <a href="#" class="btn btn-outline-light">View</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-10 col-md-6 col-lg-3 mb-5 d-flex justify-content-center">
                    <div class="card text-center bg-transparent rounded-4 glass-look animate-effect border border-secondary">
                        <img src="resources/zero.png" class="card-img img-fluid rounded-top-4" alt="...">
                        <div class="card-body">
                            <h4 class="card-title text-light fw-bold">Nike Airforce</h4>
                            <p class="card-text text-light">Vietnam Imported Nike Air Force 1 Premium Quality</p>
                            <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                        </div>
                        <div class="row justify-content-center p-3">
                            <div class="col-6 d-grid ">
                                <a href="#" class="btn btn-outline-warning">View</a>
                            </div>

                            <div class="col-6 d-grid ">
                                <a href="#" class="btn btn-outline-light">View</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-10 col-md-6 col-lg-3 mb-5 d-flex justify-content-center">
                    <div class="card text-center bg-transparent rounded-4 glass-look animate-effect border border-secondary">
                        <img src="resources/zero.png" class="card-img img-fluid rounded-top-4" alt="...">
                        <div class="card-body">
                            <h4 class="card-title text-light fw-bold">Nike Airforce</h4>
                            <p class="card-text text-light">Vietnam Imported Nike Air Force 1 Premium Quality</p>
                            <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                        </div>
                        <div class="row justify-content-center p-3">
                            <div class="col-6 d-grid ">
                                <a href="#" class="btn btn-outline-warning">View</a>
                            </div>

                            <div class="col-6 d-grid ">
                                <a href="#" class="btn btn-outline-light">View</a>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- Product Card row 1 -->



                <!-- Product Card row 2 -->

                <div class="col-10 col-md-6 col-lg-3 mb-5 d-flex justify-content-center">
                    <div class="card text-center bg-transparent rounded-4 glass-look animate-effect border border-secondary">
                        <img src="resources/zero.png" class="card-img img-fluid rounded-top-4" alt="...">
                        <div class="card-body">
                            <h4 class="card-title text-light fw-bold">Nike Airforce</h4>
                            <p class="card-text text-light">Vietnam Imported Nike Air Force 1 Premium Quality</p>
                            <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                        </div>
                        <div class="row justify-content-center p-3">
                            <div class="col-6 d-grid ">
                                <a href="#" class="btn btn-outline-warning">View</a>
                            </div>

                            <div class="col-6 d-grid ">
                                <a href="#" class="btn btn-outline-light">View</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-10 col-md-6 col-lg-3 mb-5 d-flex justify-content-center">
                    <div class="card text-center bg-transparent rounded-4 glass-look animate-effect border border-secondary">
                        <img src="resources/zero.png" class="card-img img-fluid rounded-top-4" alt="...">
                        <div class="card-body">
                            <h4 class="card-title text-light fw-bold">Nike Airforce</h4>
                            <p class="card-text text-light">Vietnam Imported Nike Air Force 1 Premium Quality</p>
                            <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                        </div>
                        <div class="row justify-content-center p-3">
                            <div class="col-6 d-grid ">
                                <a href="#" class="btn btn-outline-warning">View</a>
                            </div>

                            <div class="col-6 d-grid ">
                                <a href="#" class="btn btn-outline-light">View</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-10 col-md-6 col-lg-3 mb-5 d-flex justify-content-center">
                    <div class="card text-center bg-transparent rounded-4 glass-look animate-effect border border-secondary">
                        <img src="resources/zero.png" class="card-img img-fluid rounded-top-4" alt="...">
                        <div class="card-body">
                            <h4 class="card-title text-light fw-bold">Nike Airforce</h4>
                            <p class="card-text text-light">Vietnam Imported Nike Air Force 1 Premium Quality</p>
                            <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                        </div>
                        <div class="row justify-content-center p-3">
                            <div class="col-6 d-grid ">
                                <a href="#" class="btn btn-outline-warning">View</a>
                            </div>

                            <div class="col-6 d-grid ">
                                <a href="#" class="btn btn-outline-light">View</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-10 col-md-6 col-lg-3 mb-5 d-flex justify-content-center">
                    <div class="card text-center bg-transparent rounded-4 glass-look animate-effect border border-secondary">
                        <img src="resources/zero.png" class="card-img img-fluid rounded-top-4" alt="...">
                        <div class="card-body">
                            <h4 class="card-title text-light fw-bold">Nike Airforce</h4>
                            <p class="card-text text-light">Vietnam Imported Nike Air Force 1 Premium Quality</p>
                            <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                        </div>
                        <div class="row justify-content-center p-3">
                            <div class="col-6 d-grid ">
                                <a href="#" class="btn btn-outline-warning">View</a>
                            </div>

                            <div class="col-6 d-grid ">
                                <a href="#" class="btn btn-outline-light">View</a>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- Product Card row 2 -->




            </div>
        </div>
    </section>

    <!-- Product Cards End ------------------------------------------------------------------------------------------------------------------>































    <!-- Footer Start -->

    <?php

    include "footer.php";

    ?>

    <!-- Footer End -->


    <!-- Whatsapp contact widget -->
    <!-- <a href="https://wa.me/94751887145" class="float " target="_blank">
        <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp" />
    </a> -->

    <a href="https://wa.me/YOUR_PHONE_NUMBER" class="float" target="_blank">
        <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp" />
    </a>
    <!-- Whatsapp contact widget -->


    <!-- Return to top -->
    <a href="#" class="back-to-top"><i class="fa-solid fa-angle-up arrow"></i></a>
    <!-- Return to top -->



    <!-- link script.js file -->
    <script src="script.js"></script>
    <!-- link script.js file -->

    <!-- Include js plugin -->
    <script src="assets/owl-carousel/owl.carousel.js"></script>
    <!-- Include js plugin -->

    <!-- You can use latest version of jQuery  -->
    <script src="jquery-1.9.1.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

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