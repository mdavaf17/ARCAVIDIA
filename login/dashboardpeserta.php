<?php 
session_start();

include '../database_connector.php';

if(!isset($_SESSION['competition']) && !isset($_SESSION['teamname'])) {
    header('Location: index.php');
}

$teamname = $_SESSION['teamname'];
$competition = $_SESSION['competition'];
$query = "SELECT status FROM peserta WHERE teamname = '$teamname' AND competition = '$competition'";
$result = mysqli_query($koneksi,$query);
if (mysqli_num_rows($result) > 0) {
    $data=mysqli_fetch_array($result);
    $status = $data['status'];
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Title -->
        <title>DASHBOARD PESERTA | ARCAVIDIA</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta http-equiv='cache-control' content='no-cache'> 
        <meta http-equiv='expires' content='0'> 
        <meta http-equiv='pragma' content='no-cache'>
       
        <!-- animation -->
        <link rel="stylesheet" href="css/plugins/animate.css"/>
        <!-- Animated Headlines -->
        <link rel="stylesheet" href="css/plugins/animated-headlines.css">
        <!-- bootstrap -->
        <link rel="stylesheet" href="css/bootstrap.min.css"/>
        <!-- Owl Carousel -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css" rel="stylesheet">
        <!-- font-awesome icon -->
        <link
            href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
            rel="stylesheet">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
        <!-- Google Font -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">
        <link
            href="https://fonts.googleapis.com/css?family=Muli:200,300,400,600,700,800,900"
            rel="stylesheet">
        <!-- Animated Headlines -->
        <link rel="stylesheet" href="css/plugins/animated-headlines.css">
        <!-- magnific popup -->
        <link rel="stylesheet" href="css/plugins/magnific-popup.css"/>
        <!-- Main Style -->
        <link rel="stylesheet" href="css/dashboardpeserta.css">
    </head>

    <body>
        <!-- ===== Start Navbar ===== -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top sticky-top">
            <div class="container">
                <a class="navbar-brand" href="#"><img src="img/logo.png" alt=""></a>
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
                            <a class="nav-link" href="../index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" target="_blank">Information</a>
                        </li> 
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">Contact</a>
                        </li>

                        <li class="nav-item" id="login">
                            <a class="nav-link" href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- ===== End Navbar ===== -->

        <!-- ===== Start Welcome ===== -->
        <section class="welcome">
            <div class="container text-center">
                <h2 >Hello <?=$_SESSION['teamname']; ?>!</h2>
            </div>
        </section>
        <!-- ===== End Welcome ===== -->

        <!-- ===== Start Pembayaran  ===== -->
        <section class="pembayaran">
            <div class="container d-flex justify-content-center">
                <table class="table table-striped">
                  <thead>
                    <tr class="selang1">
                      <th scope="col" colspan="2" class="text-center">STATUS PENDAFTARAN</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="selang2">
                      <th scope="row">Pendaftaran</th>
                      <td class="text-center">
                          <i class="fas fa-check-square"></i>
                      </td>
                    </tr>
                    <tr class="selang1">
                      <th scope="row" >Upload Bukti Pembayaran</th>
                      <td class="text-center">
                        <?php 
                        if ($status == 0) {
                            echo "
                            <a href='upload_bukti.php'>
                            <i class='fa fa-upload'></i>
                            </a>                
                            ";
                        }
                        else {
                            echo "
                            <i class='fas fa-check-square'></i>       
                            ";
                        }
                        ?>          
                      </td>
                    </tr>
                    <?php

                    if ($status == 0 && $competition == "Competitive Programming") {
                        echo "
                            <tr id='rekening' class='selang2' style='font-size : 14px'>
                              <th scope='row'>BCA atas nama ARC<br>012 3456 78</th>
                              <td class='text-center'>
                              </td>
                            </tr>
                        ";
                    }
                    if ($status == 0 && $competition == "Data Science") {
                        echo "
                            <tr id='rekening' class='selang2' style='font-size : 14px'>
                              <th scope='row'>BCA atas nama ARC<br>012 3456 78</th>
                              <td class='text-center'>
                              </td>
                            </tr>
                        ";
                    }
                    if ($status == 0 && $competition == "Capture The Flag") {
                        echo "
                            <tr id='rekening' class='selang2' style='font-size : 14px'>
                              <th scope='row' >BCA atas nama ARC<br>012 3456 78</th>
                              <td class='text-center'>
                              </td>
                            </tr>
                        ";
                    }
                    if ($status == 0 && $competition == "UI/UX Design") {
                        echo "
                            <tr id='rekening' class='selang2' style='font-size : 14px'>
                              <th scope='row' >BCA atas nama ARC<br>012 3456 78</th>
                              <td class='text-center'>
                              </td>
                            </tr>
                        ";
                    }

                    ?>
                    <tr class="selang2">
                      <th scope="row">Terverifikasi</th>
                      <td class="text-center">
                        <?php 
                        if ($status == 0) {
                            echo "
                            <i class='fas fa-times-circle'></i>    
                            ";
                        }
                        if ($status == 1) {
                            echo "
                            <i class='fas fa-hourglass-half' ></i>       
                            ";
                        }
                        if ($status == 2) {
                            echo "
                            <i class='fas fa-check-square'></i>       
                            ";
                        }
                        ?>          
                      </td>
                    </tr>
                    <?php 

                    if ($status == 2) {
                        if ($competition == "Competitive Programming") {
                           echo "
                            <tr class='selang1' >
                              <th scope='row'>SATU ORANG PERWAKILAN Join Grup Peserta ARCAVIDIA 2023</th>
                              <td class='text-center'>
                                <a href='#'>
                                    <i class='fab fa-whatsapp'></i>
                                </a>
                              </td>
                            </tr>
                        ";
                        }
                        if ($competition == "Data Science") {
                           echo "
                            <tr class='selang1'>
                              <th scope='row'>SATU ORANG PERWAKILAN Join Grup Peserta ARCAVIDIA 2023</th>
                              <td class='text-center'>
                                <a href='#'>
                                    <i class='fab fa-line'></i>
                                </a>
                              </td>
                            </tr>
                        ";
                        }
                        if ($competition == "Capture The Flag") {
                           echo "
                            <tr class='selang1' >
                              <th scope='row'>SATU ORANG PERWAKILAN Join Grup Peserta ARCAVIDIA 2023</th>
                              <td class='text-center'>
                                <a href='#'>
                                    <i class='fab fa-whatsapp'></i>
                                </a>
                              </td>
                            </tr>
                        ";
                        }
                        if ($competition == "UI/UX Design") {
                           echo "
                            <tr class='selang1'>
                              <th scope='row'>SATU ORANG PERWAKILAN Join Grup Peserta ARCAVIDIA 2023</th>
                              <td class='text-center'>
                                <a href='#'>
                                    <i class='fab fa-whatsapp'></i>
                                </a>
                              </td>
                            </tr>
                        ";
                        }
                        
                    }

                    ?>
                  </tbody>
                </table>
            </div>
        </section>
        <!-- ===== End Pembayaran ===== -->

        <!-- ===== Start Contact ===== -->
        <section class="contact" id="contact"> 
            <h2 class="text-center">Contact Us</h2>
            <div class="container" >
                <div class="text-center">
                    <a href="#">
                        <span class="fab fa-instagram"></span>
                    </a>
                    <a href="mailto:#">
                        <span class="fa fa-envelope"></span>
                    </a>                    
                </div>
            </div>
        </section>

        <!-- ===== End Contact ===== -->


        <!-- ===== Start Footer ===== -->
        <footer class="footer text-center">
            <p>Copyright <i class="fa fa-copyright" ></i> ARCAVIDIA 2023</p>
            <p>Jl. Ganesha No.10, Lebak Siliwangi, Coblong, Lb. Siliwangi, Bandung, Kota Bandung, Jawa Barat 40132</p>
            <br>

        </footer>
        <!-- ===== End Footer ===== -->


        
        <!-- ==== javascript libraries ==== -->
        <!-- jQuery-->
        <script src="js/plugins/jquery-3.3.1.min.js"></script>
        <!-- Bootstrap 4.1.3 -->
        <script src="js/bootstrap.min.js"></script>
        <script src="js/plugins/popper.min.js"></script>
        <!-- Magnific Popup -->
        <script src="js/plugins/magnific-popup.min.js"></script>
        <!-- Smooth-Scroll -->
        <script src="js/smooth-scroll.js"></script>
        <!-- Particles Js -->
        <script src="js/plugins/particles.min.js"></script>
        <script src="js/plugins/app.js"></script>
        <!-- Animated Headlines -->
        <script src="js/plugins/animated-headlines.js"></script>
        <script src="js/main.js"></script>

    </body>
</html>