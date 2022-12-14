<?php


include('./partials/header.php');

?>


<div class="container-fluid" id="box1">
    <div class="clearfix">
        <div class="sticky-top">

                
            <div class="row py-2" id="box2">
                <div class="col-md-12">
                    <!-- navbar -->
                    <nav class="navbar navbar-expand-lg " id="nav">
                        <a href="" class="navbar-brand" id="logo">

                            <img class="mr-2 " src="../cars/Porsche_911-removebg-preview (1).png" alt="..." width="90px"
                                height="90px">

                            autobots</a>
                        <button class="navbar-toggler" data-toggle="collapse" data-target="#mynavbar">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="mynavbar">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item"><a href="" class="nav-link active">Home</a></li>
                                <li class="nav-item dropdown">
                                    <a href="" class="nav-link dropdown-toggle" data-toggle="dropdown">Gallery</a>
                                    <div class="dropdown-menu">
                                        <a href="upcoming.html" class="dropdown-item text-dark">Upcoming Cars</a>
                                        <a href="recommended.html" class="dropdown-item text-dark">Recommended
                                            Cars</a>
                                        <a href="sports.html" class="dropdown-item text-dark">Sports Cars</a>
                                        <a href="latest.html" class="dropdown-item text-dark">Latest Cars</a>
                                        <a href="affordable.html" class="dropdown-item text-dark">Affordable
                                            Cars</a>
                                        <a href="popular.html" class="dropdown-item text-dark">Popular Cars</a>
                                    </div>
                                </li>
                                <li class="nav-item"><a href="about.html" class="nav-link">About Us</a></li>
                                <li class="nav-item"><a href="contact us.html" class="nav-link">Contact Us</a></li>

                            </ul>
                            <form action="" class="form-inline ">
                                <input type="search" class="form-control mr-2" placeholder="search">
                                <button class="btn   btn-dark my-2">search</button>
                            </form>
                        </div>
                    </nav>



                </div>
            </div>

        </div>

        <!-- login and signup -->
        <div class="row w-100 " id="box3">
            <div class="col-md-2 p-4">
                <!-- logout -->

                

                <a href="../my world/carz.html"><button class="btn btn-outline-primary " 
                       >Log Out</button></a>






            </div>
            <div class="offset-7 col-md-2 p-4 text-light">
            <div class="dashboard">
            <i class="fa fa-user-circle-o" aria-hidden="true"></i>
           <span class="text-light">
            <?php
                   if(isset($_SESSION['loginMessage'])){
                 echo $_SESSION['loginMessage'];
                  unset($_SESSION['loginMessage']);
                  }
                    ?>

                      </span>
                       </div>
                              






            </div>

        </div>

        <!-- carousel -->
        <div class="row" id="box3">
            <div class="col-md-12">
                <div id="mycarousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#mycarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#mycarousel" data-slide-to="1"></li>
                        <li data-target="#mycarousel" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-interval="2000">
                            <img src="../cars/slider2.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>get your dream car</h5>

                            </div>
                        </div>
                        <div class="carousel-item" data-interval="2000">
                            <img src="../cars/slider3.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>find the right car</h5>

                            </div>
                        </div>
                        <div class="carousel-item" data-interval="2000">
                            <img src="../cars/slider4.jpg" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <a href="#mycarousel" class="carousel-control-prev" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a href="#mycarousel" class="carousel-control-next" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </a>
                </div>





            </div>
        </div>

        <!-- cards -->


        <h1 class="text-center bg-light p-3" id="topcars"
            style="font-size: 3rem;font-weight: bold; font-family: fantasy;">
            Top Cars in india
        </h1>

        <div class="container-fluid p-5">


            <div class="row  align-items-center p-4" id="box4">
                <div class="col-md-12">
                    <div class="card-deck ">

                        <div class="card" style="background:#292929;">
                            <img src="../cars/Toyota.jpg" class="img-fluid rounded-pill " alt="..">
                            <div class="card-body">
                                <h4 class="card-title text-light">
                                    Toyota Urban Cruiser Hyryder
                                </h4>
                                <p class="card-title text-light ">??? 10.00 Lakh</p>
                            </div>
                        </div>
                        <div class="card" style="background:#292929;">
                            <img src="../cars/Citroen C5 Aircross.webp" alt=".." class="img-fluid rounded-pill">
                            <div class="card-body">
                                <h4 class="card-title text-light">
                                    Citroen C5 Aircross
                                </h4>
                                <p class="card-title text-light">??? 33.00 Lakh</p>
                            </div>
                        </div>
                        <div class="card" style="background:#292929;">
                            <img src="./cars/Hyundai Venue.jpg" alt="" class="img-fluid rounded-pill">
                            <div class="card-body">
                                <h4 class="card-title text-light">
                                    Hyundai Venue
                                </h4>
                                <p class="card-title text-light">??? 7.00 Lakh</p>
                            </div>
                        </div>
                        <div class="card" style="background:#292929;">
                            <img src="../cars/Tata Nexon.jpg" alt=".." class="img-fluid rounded-pill">
                            <div class="card-body">
                                <h4 class="card-title text-light">
                                    Tata Nexon
                                </h4>
                                <p class="card-title text-light">??? 7.59 Lakh</p>
                            </div>
                        </div>
                        <div class="card" style="background:#292929;">
                            <img src="../cars/Hyundai Creta.jpg" alt=".." class="img-fluid rounded-pill">
                            <div class="card-body">
                                <h4 class="card-title text-light">
                                    Hyundai Creta
                                </h4>
                                <p class="card-title text-light">??? 10.44 Lakh</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!--  car challenge reviews -->
        <h1 class="text-center bg-light p-3" style="font-size: 3rem;font-weight: bold; font-family: fantasy;">
            Car challenge reviews
        </h1>
        <div class="container-fluid" id="box5">
            <div class="row">
                <div class="col-md-8  col-center m-auto">
                    <div id="mycarousel1" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="item carousel-item active" data-interval="2000">
                                <div class="img-box">
                                    <a href="../cars/v1.mp4">
                                        <img src="../cars/vs1.jpg" alt="">

                                    </a>

                                </div>
                                <h5 class="mt-2">Rolls-Royce Wraith vs Bentley GT: DRAG RACE!</h5>
                                <p class="testimonial">First up we have Mat in the all-new Bentley Continental GT.
                                    It costs an
                                    eye-watering ??168,000, but for all that money you'll find a 6-litre W12
                                    hiding
                                    under the bonnet that can deliver 635hp along with 900Nm of torque. Not only
                                    that, but it's also got all-wheel-drive and it comes with launch control!

                                    Sure it's expensive, but that's nothing compared to the ??288,000 contender
                                    lining up alongside it... the Rolls-Royce
                                    Wraith! We've got Yianni in the driver's seat, and it's powered by a
                                    6.6-litre
                                    twin-turbo V12 with 632hp and 846Nm of
                                    torque. However, it's only rear-wheel drive, and there's no launch control!
                                </p>
                                <p class="overview"></p>
                            </div>
                            <div class="item carousel-item" data-interval="2000">

                                <div class="img-box">
                                    <a href="../cars/v2.mp4">
                                        <img src="../cars/vs2.jpg" alt="">

                                    </a>

                                </div>

                                <h5 class="mt-2">2020 Hyundai Creta - Hyundai Venue - Hyundai Verna - Hyundai
                                    Nios |
                                    Ride and Handling Review India</h5>

                                <p class="testimonial">Over the years, Hyundai has worked on the dynamics of its
                                    cars and improved
                                    them
                                    considerably. Cars that handle well
                                    are both fun, and safe, and handling is one of the most important aspects on
                                    which we review a car. In this video,
                                    we talk about the handling and dynamics of Hyundai???s cars, specifically the
                                    Grand i10 Nios, Venue, Verna and Creta
                                    with inputs from the Ed from the first drive as well.
                                </p>
                                <p class="overview"></p>
                            </div>
                            <div class="item carousel-item" data-interval="2000">
                                <div class="img-box">
                                    <a href="../cars/v3.mp4">
                                        <img src="../cars/vs3.jpg" alt="">

                                    </a>

                                </div>
                                <h5 class="mt-2">Hyundai Grand i10 Nios vs Maruti Suzuki Swift | Comparison Test
                                    Review</h5>

                                <p class="testimonial">It's an age-old rivalry, updated for a new generation. The
                                    Hyundai Grand i10
                                    Nios
                                    in petrol manual guise takes on the
                                    Maruti Suzuki Swift. But which one should you put your money on? This was
                                    filmed
                                    some time ago, but better late than
                                    never, Gavin D'Souza drives the two back to back to pick a winner.
                                </p>
                                <p class="overview"></p>
                            </div>
                        </div>
                        <a href="#mycarousel1" class="carousel-control left carousel-control-prev" data-slide="prev">

                            <span class="carousel-control-prev-icon"></span>
                        </a>
                        <a href="#mycarousel1" class="carousel-control right carousel-control-next" data-slide="next">

                            <span class="carousel-control-next-icon"></span>
                        </a>

                    </div>

                </div>

            </div>
        </div>






        <!-- footer -->
        <footer class="site-footer">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <h3>about</h3>
                        <p class="text-justified">Autobots.com is India's leading car search venture that helps
                            users buy cars that are right
                            for them. Its website and app carry rich automotive content such as expert reviews,
                            comparisons as well as videos and pictures of all car brands and models available in
                            India. The company has tie-ups
                            with many auto manufacturers, more than 4000 car dealers and numerous financial
                            institutions to facilitate the
                            purchase of vehicles.</p>

                    </div>
                    <div class="col-6 col-md-3">
                        <h3>categories</h3>
                        <ul class="footer-links inline">
                            <li><a href="upcoming.html">Upcoming cars</a></li>
                            <li><a href="latest.html">Latest cars</a></li>
                            <li><a href="popular.html">Popular cars</a></li>
                            <li><a href="sports.html">Sports cars</a></li>
                            <li><a href="affordable.html">Affordable cars</a></li>
                            <li><a href="recommended.html">Recommended cars</a></li>
                            <li><a href="#topcars">Top cars</a></li>
                        </ul>

                    </div>
                    <div class="col-6 col-md-3">
                        <h3>quick links</h3>
                        <ul class="footer-links inline">
                            <li><a href="carz.html">Home</a></li>

                            <li><a href="about.html">About us</a></li>
                            <li><a href="contact us.html">Contact us</a></li>

                        </ul>

                    </div>
                </div>
                <hr>

            </div>
            <div class="container text-light">
                <h2 id="foot-head">Follow us</h2>
                <div class="row">

                    <div class="col-md-8 col-sm-6 col-12">
                        <ul class="social-icons">
                            <li><a class="facebook" href="#"><span class="fa fa-facebook-square fa-2x"></span></a>
                            </li>
                            <li><a class="instagram" href="#"><span class="fa fa-instagram fa-2x"></span></a></li>
                            <li><a class="linkedin" href="#"><span class="fa fa-linkedin-square fa-2x"></span></a>
                            </li>

                        </ul>

                    </div>
                    <div class="col-md-12 col-sm-6 col-xs-12 bg-light">
                        <p class="copyright-text ">Copyright &copy; 2022 all rights reserved by
                            <a href="#" id="link">Autobots</a>
                        </p>

                    </div>
                </div>
            </div>
        </footer>









    </div>




</div>

<?php


include('./partials/footer.php');

?>