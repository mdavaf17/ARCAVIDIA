<!DOCTYPE html>
<html lang="en">
    <head>
        <title>ARCAVIDIA</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="icon" type="image/png" href="">
        <meta http-equiv='cache-control' content='no-cache'> 
        <meta http-equiv='expires' content='0'> 
        <meta http-equiv='pragma' content='no-cache'>

        <!-- bootstrap -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <!-- Main Style -->
        <link rel="stylesheet" href="css/main.css"/>
        <!-- animation -->
        <link rel="stylesheet" href="css/plugins/animate.css"/>
        <!-- Animated Headlines -->
        <link rel="stylesheet" href="css/plugins/animated-headlines.css">
        <!-- Owl Carousel -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css" rel="stylesheet">
        <!-- font-awesome icon -->
        <link
            href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
            rel="stylesheet">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <script src="https://kit.fontawesome.com/d858e22713.js" crossorigin="anonymous"></script>
        <!-- Google Font -->
        <link
            href="https://fonts.googleapis.com/css?family=Muli:200,300,400,600,700,800,900"
            rel="stylesheet">
        <!-- Animated Headlines -->
        <link rel="stylesheet" href="css/plugins/animated-headlines.css">
        <!-- magnific popup -->
        <link rel="stylesheet" href="css/plugins/magnific-popup.css"/>
    </head>

    <body>
        <!-- ===== Start Navbar ===== -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container">
                <a class="navbar-brand" href="#"><img src="../home/img/logo.png" width=100 height=100 alt=""></a>
                <button
                    class="navbar-toggler"
                    type="button"
                    data-toggle="collapse"
                    data-target="#navbarNav"
                    aria-controls="navbarNav"
                    aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#slider">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#game">Competition</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about">About</a>
                        </li>                       
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" target="_blank">Information</a>
                        </li>

                        <li class="nav-item" id="login">
                            <a class="nav-link" href="../login/index.php"><i class="fa fa-sign-in"> </i> Login</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- ===== End Navbar ===== -->

        <!-- ===== Start Slider ===== -->
        <section class="slider d-flex justify-content-center" id="slider">
            <div class="container text-center">
                    <div class="row all-content">
                        <div class="col-12">
                            <div class="left-content">
                                <!-- Animated Text-->
                                <div class="animated-headlines">
                                    <h1 class="cd-headline clip is-full-width">
                                        <p>Escape The Authenticity</p>
                                        <span class="cd-words-wrapper">
                                            <b class="is-visible">Drive in</b>
                                            <b>get lost</b>
                                            <b>redefine reality</b>
                                        </span>
                                    </h1>
                                </div>
                                <a href="register/index.php" class="btn">
                                    Daftar Sekarang!</a>
                            </div>
                        </div>
                    </div>
            </div>
            <div id="particles-js" class="particels"></div>
        </section>
        <!-- ===== End Slider ===== -->

        <!-- ===== Start Timer ===== -->
        <section class="timer">
            <div class="container text-center">
              <h1 id="headlinecount">Waktu Pendaftaran Tersisa :</h1>
              <div id="countdown">
                <ul>
                  <li><span id="days"></span>Hari</li>
                  <li><span id="hours"></span>Jam</li>
                  <li><span id="minutes"></span>Menit</li>
                  <li><span id="seconds"></span>Detik</li>
                </ul>
              </div>
              <div id="contentcount" class="emoji">
                <span>Nantikan Informasi Selanjutnya!</span>
              </div>
            </div>
        </section>
        <!-- ===== End Timer ===== -->

        <!-- ===== Start game ===== -->
        <section class="game" id="game">
            <div class="container">
                <h2 class="text-center">COMPETITION</h2>
                <div class="row grid">
                    <!-- Image-1 -->
                    <div class="col-lg-6 col-md-6 grid-item">
                        <div class="game-name">
                            <p>COMPETITIVE PROGRAMMING</p>
                        </div>
                        <div class="single-game-item">
                            <a href="register/index.php">
                            <img src="../home/img/competition/cp2.png" class="img-fluid">
                            </a>
                        </div>
                    </div>
                    <!-- Image-2 -->
                    <div class="col-lg-6 col-md-6 grid-item">
                        <div class="game-name">
                            <p>DATA SCIENCE</p>
                        </div>
                        <div class="single-game-item">
                            <a href="register/index.php">
                            <img src="../home/img/competition/ds2.png" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>
                    <!-- Image-3 -->
                    <div class="col-lg-6 col-md-6 grid-item">
                        <div class="game-name">
                            <p>CAPTURE THE FLAG</p>
                        </div>
                        <div class="single-game-item">
                            <a href="register/index.php">
                                <img src="../home/img/competition/flag2.png" class="img-fluid">
                            </a>                            
                        </div>
                    </div>
                    <!-- Image-4 -->
                    <div class="col-lg-6 col-md-6 grid-item">
                        <div class="game-name">
                            <p>UI/UX</p>
                        </div>
                        <div class="single-game-item">
                            <a href="register/index.php">
                                <img src="../home/img/competition/uiux2.png" class="img-fluid">
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- ===== End game ===== -->


        <!-- ===== Start About Us ===== -->
        <section class="about-us" id="about">
            <div class="container">
                <div class="row">
                    <div class="col-md-1">
                    </div>
                    <div class="col-md-3">
                        <img src="../home/img/logo.png" width=500 height=500 alt="" class="img-fluid">
                    </div>
                    <div class="col-md-8">
                        <h2>About</h2>
                        <p>
                            ARCAVIDIA<br><br>
                            ARCAVIDIA is an annual IT events and competitions held for college students who are interested in technology. This year, ARCAVIDIA held four IT competitions such as Competitive Programming, Capture the Flag, Data Science, and UI/UX Design. 
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- ===== End About Me ===== -->


        <!-- ===== Start SPONSOR ===== -->
        <section class="sponsor" id="sponsor">
            <h2 class="text-center">Media Partners</h2>
            <div class="container">
                <div class="brand-carousel section-padding owl-carousel">
                    <div class="single-logo">
                        <a href="https://www.instagram.com/infolombaevent.id/" target="_blank">
                            <img alt="" src="https://i.ibb.co/GC7VCZZ/infolombaevent.jpg">
                        </a>
                    </div>
                    <div class="single-logo">
                        <a href="https://www.instagram.com/eventpelajar/" target="_blank">
                            <img alt="" src="../home/img/medpar/eventpelajar.png">
                        </a>
                    </div>
                    <div class="single-logo">
                        <a href="https://www.instagram.com/mmtcradiojogja/" target="_blank">
                            <img alt="" src="https://i.ibb.co/kKyz2fS/mmtcradio.jpg">
                        </a>
                    </div>
                    <div class="single-logo">
                        <a href="https://www.instagram.com/bfastmedia/" target="_blank">
                            <img alt="" src="../home/img/medpar/bfast.png">
                        </a>
                    </div>
                    <div class="single-logo">
                        <a href="https://www.instagram.com/eventlomba.indo/" target="_blank">
                            <img alt="" src="https://i.ibb.co/1z3TRJK/eventlomba-indo.png">
                        </a>
                    </div>
                    <div class="single-logo">
                        <a href="https://sejutacita.id/" target="_blank">
                            <img alt="" src="https://i.ibb.co/tC6ksfG/Sejuta-Cita.png">
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- ===== End SPONSOR ===== -->


        <!-- ===== GALLERY ===== -->
        <section class="gallery" id="gallery">
                <div class="container text-center">
                    <h2>Gallery</h2>
                    <div class="row text-center">
                        <div class="col-md-12">
                            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel"  data-interval="2000">
                                <!-- Indicators-->
                                <ol class="carousel-indicators">
                                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                                </ol>
    
                                <div class="carousel-inner">
                                    <!-- Item-1 -->
                                    <div class="carousel-item active text-center">
                                            <img src="https://img.freepik.com/free-photo/professional-programmer-working-late-dark-office_1098-18705.jpg?size=626&ext=jpg&ga=GA1.2.362978063.1673022282&semt=sph" alt="image 1" class="gallery-pic">
                                    </div>
                                    <!-- Item-2 -->
                                    <div class="carousel-item text-center">
                                            <img src="https://img.freepik.com/free-photo/businesspeople-working-finance-accounting-analyze-financi_74952-1399.jpg?size=626&ext=jpg&ga=GA1.2.362978063.1673022282&semt=sph" alt="image 2" class="gallery-pic">
                                    </div>
                                    <!-- Item-3 -->
                                    <div class="carousel-item text-center">
                                            <img src="https://img.freepik.com/free-vector/realistic-ui-ux-background_52683-68896.jpg?size=626&ext=jpg&ga=GA1.2.362978063.1673022282&semt=sph" alt="image 3" class="gallery-pic">
                                    </div>
                                    <!-- Item-4 -->
                                    <div class="carousel-item text-center">
                                            <img src="https://img.freepik.com/free-vector/personal-digital-security_74855-4560.jpg?size=626&ext=jpg&ga=GA1.2.362978063.1673022282&semt=sph" alt="image 4" class="gallery-pic">
                                    </div>   
                                </div>

                                <a
                                    class="carousel-control-prev"
                                    href="#carouselExampleIndicators"
                                    role="button"
                                    data-slide="prev">
                                    <span class="fa fa-angle-left icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a
                                    class="carousel-control-next"
                                    href="#carouselExampleIndicators"
                                    role="button"
                                    data-slide="next">
                                    <span class="fa fa-angle-right icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <!-- ===== End GALLERY ===== -->


        <!-- ===== Start Contact ===== -->
        <section class="contact" id="contact"> 
            <h2 class="text-center">Contact Us</h2>
            <div class="container" >
                <div class="text-center">
                    <a href="https://www.instagram.com/arcavidia/">
                    <span class="fa fa-instagram"></span>
                    </a>
                    <a href="mailto:arcavidia@gmail.com?subject=Support%20Lomba%20ARCAVIDIA%202023">
                    <span class="fa fa-envelope"></span>
                    </a>
                </div>
            </div>
        </section>

        <!-- ===== End Contact ===== -->


        <!-- ===== Start Footer ===== -->
        <footer class="footer text-center">
            <p>Copyright <i class="fa fa-copyright"></i> ARCAVIDIA 2023</p>
            <p>Jl. Ganesha No.10, Lebak Siliwangi, Coblong, Lb. Siliwangi, Bandung, Kota Bandung, Jawa Barat 40132</p>
            <br>

        </footer>
        <!-- ===== End Footer ===== -->


        <script>
        // Countdown
          (function () {
              const second = 1000,
                    minute = second * 60,
                    hour = minute * 60,
                    day = hour * 24;

              let close = "Mar 30, 2023 00:00:00",
                  countDown = new Date(close).getTime(),
                  x = setInterval(function() {    

                    let now = new Date().getTime(),
                        distance = countDown - now;

                    document.getElementById("days").innerText = Math.floor(distance / (day)),
                      document.getElementById("hours").innerText = Math.floor((distance % (day)) / (hour)),
                      document.getElementById("minutes").innerText = Math.floor((distance % (hour)) / (minute)),
                      document.getElementById("seconds").innerText = Math.floor((distance % (minute)) / second);

                    if (distance < 0) {
                      let headline = document.getElementById("headlinecount"),
                          countdown = document.getElementById("countdown"),
                          content = document.getElementById("contentcount");

                      headlinecount.innerText = "Pendaftaran Telah Ditutup";
                      countdown.style.display = "none";
                      contentcount.style.display = "block";

                      clearInterval(x);
                    }
                  }, 0)
              }());
        </script>


        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js">
        </script> 
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
        </script> 

        <script>
        // Carousel Configuration
           $('.brand-carousel').owlCarousel({
            autoplayTimeout:3000,
            loop:true,
            margin:10,
            slideSpeed:9000,
            autoplay:100,
            responsive:{
                0:{
                    items:2
                },
                600:{
                    items:2
                },
                1000:{
                    items:3
                }
            }
            }) 
        </script>

        <!-- ==== javascript libraries ==== -->
        <!-- jQuery-->
        <script src="js/plugins/jquery-3.3.1.min.js"></script>
        <!-- Bootstrap 4.1.3 -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script src="js/plugins/popper.min.js"></script>
        <!-- Animated Headlines -->
        <script src="js/plugins/animatedheadlines.js"></script>
        <!-- Nav jQuery-->
        <script src="js/plugins/nav.jquery.js"></script>
        <!-- Nav jQuery-->
        <script src="js/plugins/jquery.stellar.js"></script>
        <!-- Isotope -->
        <script src="js/plugins/isotope.pkgd.min.js"></script>
        <!-- Image Loaded -->
        <script src="js/plugins/imagesloaded.pkgd.min.js"></script>
        <!-- Magnific Popup -->
        <script src="js/plugins/magnific-popup.min.js"></script>
        <!-- Smooth-Scroll -->
        <script src="js/smooth-scroll.js"></script>
        <!-- Counter Up -->
        <script src="js/plugins/jquery.waypoints.min.js"></script>
        <script src="js/plugins/jquery.counterup.min.js"></script>
        <!-- Particles Js -->
        <script src="js/plugins/particles.min.js"></script>
        <script src="js/plugins/app.js"></script>
        <script src="js/main.js"></script>

        <script>
            // Refresh image
            window.onload = function() {
            if(!window.location.hash) {
                window.location = window.location + '#slider';
                window.location.reload();
                }
            }
        </script>
    </body>
</html>