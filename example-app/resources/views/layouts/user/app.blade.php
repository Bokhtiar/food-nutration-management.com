<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <title>Nutrition Guide</title>
    <link rel="stylesheet" href="{{ asset('user') }}/style.css">
  </head>
  <body>

    <nav class="navbar navbar-expand-lg text-light bg-color">
        <section class="container">
            <a class="navbar-brand text-light" href="/index.html">Nutrition Guide</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto nav-list">
            <li class="nav-item active">
              <a class="nav-link" href="/index.html">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/contact.html">Contact</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/health.html">Health</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/food.html">Food Safety</a>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                Check Fitness
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="fitnes.html">Man</a>
                <a class="dropdown-item" href="fitnes.html">Women</a>
                <a class="dropdown-item" href="fitnes.html">Kid's</a>
              </div>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                  Profile
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="login.html">Login</a>
                  <a class="dropdown-item" href="reg.html">Registration</a>
                </div>
              </li>
          </ul>
        </div>
        </section>
    </nav> <!-- nabar end here-->

    <!--slider start here-->
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active slider-img">
            <img src="{{ asset('user') }}/imgs/b1.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item slider-img">
            <img src="{{ asset('user') }}/imgs/b2.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item slider-img">
            <img src="{{ asset('user') }}/imgs/b3.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
       <button class="carousel-control-prev" type="button" data-target="#carouselExampleControls" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-target="#carouselExampleControls" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </button>
      </div>
    <!--slider end here-->

    <!--latest news start here-->
      <section class="container">
        <div class="row my-5">
            <div class="col-sm-12 col-md-8 col-lg-8">
                <h3>HEALTH</h3>
                <img src="{{ asset('user') }}/imgs/la.PNG" height="350px" width="100%" alt="">
                <hr>

                <div class="row">
                    <div class="col-sm-12 col-md-4 col-lg-4 text-center">
                        <div class="card " style="width: 14rem;">
                            <div class="text-center news mt-3">
                                <img src="{{ asset('user') }}/imgs/b2.jpg"  class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                              <p class="card-text h4">Member.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-4 text-center">
                        <div class="card " style="width: 14rem;">
                            <div class="text-center news mt-3">
                                <img src="{{ asset('user') }}/imgs/b1.jpg"  class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                              <p class="card-text h4">Health Professional.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-4 text-center">
                        <div class="card " style="width: 14rem;">
                            <div class="text-center news mt-3">
                                <img src="{{ asset('user') }}/imgs/b3.jpg"  class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                              <p class="card-text h4">Student.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-4">
                <H3>LATEST NEWS</H3>
                <section>
                    <div class="row">
                            <div class="col-md-4 col-lg-4 col-sm-12">
                                <img src="imgs/b2.jpg" height="60px" width="100%" alt="">
                            </div>
                            <div class="col-md-8 col-lg-8 col-sm-12">
                                <p>A heath is a shrubland habitat found mainly on free-draining infertile,</p>
                            </div>
                    </div>
                    <hr>

                    <div class="row">
                        <div class="col-md-4 col-lg-4 col-sm-12">
                            <img src="imgs/b1.jpg" height="60px" width="100%" alt="">
                        </div>
                        <div class="col-md-8 col-lg-8 col-sm-12">
                            <p>A heath is a shrubland habitat found mainly on free-draining infertile,</p>
                        </div>
                    </div>
                    <hr>

                    <div class="row">
                        <div class="col-md-4 col-lg-4 col-sm-12">
                            <img src="imgs/b3.jpg" height="60px" width="100%" alt="">
                        </div>
                        <div class="col-md-8 col-lg-8 col-sm-12">
                            <p>A heath is a shrubland habitat found mainly on free-draining infertile,</p>
                        </div>
                </div>
                <hr>

                <div class="row">
                    <div class="col-md-4 col-lg-4 col-sm-12">
                        <img src="imgs/la.PNG" height="60px" width="100%" alt="">
                    </div>
                    <div class="col-md-8 col-lg-8 col-sm-12">
                        <p>A heath is a shrubland habitat found mainly on free-draining infertile,</p>
                    </div>
                </div>
                <hr>



                <div class="row">
                    <div class="col-md-4 col-lg-4 col-sm-12">
                        <img src="imgs/sf.jpg" height="60px" width="100%" alt="">
                    </div>
                    <div class="col-md-8 col-lg-8 col-sm-12">
                        <p>A heath is a shrubland habitat found mainly on free-draining infertile,</p>
                    </div>
            </div>
            <hr>

            <div class="row">
                <div class="col-md-4 col-lg-4 col-sm-12">
                    <img src="imgs/b2.jpg" height="60px" width="100%" alt="">
                </div>
                <div class="col-md-8 col-lg-8 col-sm-12">
                    <p>A heath is a shrubland habitat found mainly on free-draining infertile,</p>
                </div>
            </div>
            <hr>



                </section>
            </div>
        </div>
      </section>
    <!--latest news end here-->

    <!--food start here-->
    <section class="container">
        <h3>FOOD SEAFTY</h3>
        <div class="row">
            <div class="col-sm-12 col-md-3 col-lg-3">
                <div class="card" style="width: 14rem;">
                    <img class="card-img-top" src="imgs/b2.jpg"  height="170px" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Food Poisoning</h5>
                      <p class="card-text">What is food poisoning, and how long does it last? Use these resources to learn about food poisoning symptoms, common causes, and what to do if you get sick.</p>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-3 col-lg-3">
                <div class="card" style="width: 14rem;">
                    <img class="card-img-top" src="imgs/b1.jpg"  height="170px" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Food Safety On the Go</h5>
                      <p class="card-text">Learn how to safely choose and handle food when getting food delivery, eating out, shopping for groceries, and packing meals and snacks to go.</p>
                    </div>
                </div>
            </div>


            <div class="col-sm-12 col-md-3 col-lg-3">
                <div class="card" style="width: 14rem;">
                    <img class="card-img-top" src="imgs/b3.jpg" height="170px" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Safe Food Preparation</h5>
                      <p class="card-text">Prevent contamination when preparing and serving meals by following these guidelines for cooking temperatures, food handling, and cleaning.</p>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-3 col-lg-3">
                <div class="card" style="width: 14rem;">
                    <img class="card-img-top" src="imgs/about.jpg"  height="170px"  alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Safe Food Storage</h5>
                      <p class="card-text">Follow these tips for safely storing food in the freezer, refrigerator, and pantry to prevent foodborne germs from growing and keep it fresh for longer.</p>
                    </div>
                </div>
            </div>
        </div>


    </section>
    <!--food end here-->

    <!--footer desing start here -->
    <footer class="footer-section">
        <div class="container">
            <div class="footer-cta pt-5 pb-5">
                <div class="row">
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="cta-text">
                                <h4>Find us</h4>
                                <span>Ashulia saver Dhaka</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                            <i class="fas fa-phone"></i>
                            <div class="cta-text">
                                <h4>Call us</h4>
                                <span>+880 198734232</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                            <i class="far fa-envelope-open"></i>
                            <div class="cta-text">
                                <h4>Mail us</h4>
                                <span>hemel minhaj@info.com</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-content pt-5 pb-5">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 mb-50">
                        <div class="footer-widget">

                            <div class="footer-text">
                                <p>We are dedicated to addressing food insecurity for homebound seniors and other vulnerable neighbors. We provide food and pantry items to those in need, including thousands of nutritious meals prepared in our onsite kitchen each week..</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                        <div class="footer-widget">
                            <div class="footer-widget-heading">
                                <h3>Useful Links</h3>
                            </div>
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">about</a></li>
                                <li><a href="#">services</a></li>
                                <li><a href="#">portfolio</a></li>
                                <li><a href="#">Contact</a></li>
                                <li><a href="#">About us</a></li>
                                <li><a href="#">Our Services</a></li>
                                <li><a href="#">Expert Team</a></li>
                                <li><a href="#">Contact us</a></li>
                                <li><a href="#">Latest News</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-50">
                        <div class="footer-widget">
                            <div class="footer-widget-heading">
                                <h3>Subscribe</h3>
                            </div>
                            <div class="footer-text mb-25">
                                <p>Don’t miss to subscribe to our new feeds, kindly fill the form below.</p>
                            </div>
                            <div class="subscribe-form">
                                <form action="#">
                                    <input type="text" placeholder="Email Address">
                                    <button>submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </footer>
    <!--footer desing end here-->



    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
  </body>
</html>
