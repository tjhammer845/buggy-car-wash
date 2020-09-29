<?php
use PHPMailer\PHPMailer\PHPMailer;
require '../vendor/autoload.php';

$to =  'tjhammer845@gmail.com';
$from =  $_POST['email'];
$name =  $_POST['name'];
$subject =  $_POST['subject'];
$body =  $_POST['body'];
$txt = "You have received an e-mail from ".$name." - ".$from.".\n___\n\n\n".$body;


$mail = new PHPMailer;
// $mail->isSMTP(); for local testing
$mail->SMTPDebug = 2;
$mail->Host = 'smtp.bluehost.com';
$mail->Port = 587;
$mail->SMTPAuth = true;
$mail->Username = 'team@buggycarwash.com';
$mail->Password = 'Bigfrank18?';
$mail->setFrom($from, $name);
$mail->AddReplyTo($from, $name);
$mail->AddAddress($to);
$mail->FromName=$name;
$mail->Sender=$from;
$mail->Subject=$subject;
$mail->Body=$txt;
//$mail->addAttachment('test.txt');

if (!$mail->send()) {
    $mailConfirmation = "Please try again later, an error occured while processing your message..." . $mail->ErrorInfo;
    return $mailConfirmation; 
} else {
    $mailConfirmation = "Your email has been sent. We will get back to you shortly.";  
}
?>

<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon" />

        <title>
            Buggy Car Wash and Barking Bath | 51 Middletown Ave, North Haven, CT -
            Contact Us
        </title>

        <!-- A cleaned up combination of Eric Meyer's Reset CSS 2.0 and Nicolas Gallagher's normalize.css -->
        <link href="https://cdn.jsdelivr.net/npm/css-reset-and-normalize@2.1.0/css/reset-and-normalize.min.css"
            rel="stylesheet" />
        <!-- Bootstrap Core CSS -->
        <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
        <!-- Font Awesome Kit - CSS and JS -->
        <script src="https://kit.fontawesome.com/6d4d1f7e00.js" crossorigin="anonymous"></script>
        <!-- Google Font - Source Sans Pro-->
        <link
            href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,400;0,600;0,700;1,400;1,600;1,700&display=swap"
            rel="stylesheet" />

        <!-- Buggy Car Wash - Base CSS -->
        <link href="../assets/css/base.min.css" rel="stylesheet" />
    </head>

    <body>

        <!-- Header -->
        <header id="buggyHeader" class="w-100">
            <section id="topBar" class="d-flex text-white align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-12 d-flex justify-content-between justify-content-sm-end">
                            <span class="open-hours text-uppercase font-weight-bold d-none d-md-inline-block mr-2 mr-sm-4">
                                Open 24 Hours!</span>
                            <span class="mr-2 mr-sm-4">
                                <span class="bg-white circle-icon rounded-circle mr-1"><i
                                        class="fa fas fa-phone-alt"></i></span>
                                203-495-9945
                            </span>
                            <span class="mr-2 mr-sm-4 d-none d-sm-inline-block">
                                <span class="bg-white circle-icon rounded-circle mr-1">
                                    <i class="fa fas fa-map-marker-alt"></i></span>
                                51 Middletown Ave, North Haven, CT
                            </span>
                            <span>
                                <a class="hvr-pop icon-link circle-icon rounded-circle mr-1 mr-sm-2" href="#"
                                    title="Buggy Instagram Page"><i class="fa fab fa-instagram"></i></a>
                                <a class="hvr-pop icon-link circle-icon rounded-circle" href="#"
                                    title="Buggy Facebook Page"><i class="fa fab fa-facebook-f"></i></a>
                            </span>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Navigation -->
            <nav id="mainNav" class="navbar navbar-expand-lg navbar-dark static-top p-lg-0 pt-4 pb-4">
                <div class="container">
                    <a class="navbar-brand home p-0" href="/">
                        <img src="../assets/images/logos/main-logo.png" alt="Buggy Car Wash logo"
                            class="logo-lg img mt-md-n5 mb-md-n5" style="margin-top: 5px" />
                        <img src="../assets/images/logos/main-logo-small.png" alt="Buggy Car Wash logo"
                            class="logo-sm img img-fluid m-0" /><span class="sr-only">Buggy Car Wash - go to
                            Home</span>
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                        aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarResponsive">
                        <ul class="navbar-nav pt-4 p-lg-0 ml-auto">
                            <li class="nav-item pl-4 pr-4 p-lg-0 ml-lg-4">
                                <a class="nav-link hvr-icon-pop" title="Car Wash" href="/"><span class="hvr-icon">Car
                                        Wash</span>
                                </a>
                            </li>
                            <li class="nav-item pl-4 pr-4 p-lg-0 ml-lg-4">
                                <a class="nav-link hvr-icon-pop" title="Dog Wash" href="#"><span class="hvr-icon">Dog
                                        Wash</span></a>
                            </li>
                            <li class="nav-item pl-4 pr-4 p-lg-0 ml-lg-4">
                                <a class="nav-link hvr-icon-pop" title="Gift Cards" href="#"><span class="hvr-icon">Gift
                                        Cards</span></a>
                            </li>
                            <li class="nav-item pl-4 pr-4 p-lg-0 ml-lg-4">
                                <a class="nav-link hvr-icon-pop" title="About Us" href="#"><span class="hvr-icon">About
                                        Us</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>

        <!-- Main -->
        <main class="content w-100">
            <section class="carousel-container carousel-section pb-sm-5">
                <div class="container-fluid p-0">
                    <div id="carouselMain" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselMain" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselMain" data-slide-to="1"></li>
                            <li data-target="#carouselMain" data-slide-to="2"></li>
                            <li data-target="#carouselMain" data-slide-to="3"></li>
                            <li data-target="#carouselMain" data-slide-to="4"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block img w-100" src="../assets/images/slideshow/buggy-slide-1.jpg"
                                    alt="First slide" />
                            </div>
                            <div class="carousel-item">
                                <img class="d-block img w-100" src="../assets/images/slideshow/buggy-slide-2.jpg"
                                    alt="Second slide" />

                            </div>
                            <div class="carousel-item">
                                <img class="d-block img w-100" src="../assets/images/slideshow/buggy-slide-3.jpg"
                                    alt="Third slide" />
                            </div>
                            <div class="carousel-item">
                                <img class="d-block img w-100" src="../assets/images/slideshow/buggy-slide-4.jpg"
                                    alt="Fourth slide" />
                            </div>
                            <div class="carousel-item">
                                <img class="d-block img w-100" src="../assets/images/slideshow/buggy-slide-5.jpg"
                                    alt="Fifth slide" />
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselMain" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselMain" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </section>

            <!-- Welcome Section -->
            <section class="welcome-section">
                <div class="container">
                    <div class="row mb-4">
                        <div class="col-12">
                            <h1 class="mt-5">Thank you for contacting us!</h1>
                            <p class="lead">
                                <?php echo $mailConfirmation; ?>
                            </p>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <!-- Parallax Footer -->
        <footer id="parallaxFooter" class="pt-5 pb-5 page-footer">

            <!-- Footer CContainer -->
            <div class="container footer-container mt-5">
                <div class="row d-flex">
                    <div class="col-sm-12 col-md-4 col-lg-3 col-xl-3 mb-4">
                        <h6 class=" text-uppercase text-white font-weight-bold">
                            Open 24 Hours!</h6>
                        <p class="text-white d-flex align-items-center">
                            <span class="bg-white circle-icon rounded-circle mr-3"><i
                                    class="fa fas fa-phone-alt"></i></span>
                            203-495-9945
                        </p>
                        <p class="text-white d-flex justify-content-start">
                            <span class="bg-white circle-icon rounded-circle mr-3">
                                <i class="fa fas fa-map-marker-alt"></i></span>
                            <span class="mt-n1">
                                51 Middletown Ave,<br> North Haven, CT<br> 06473
                            </span>
                        </p>
                    </div>
                    <div class="col-sm-12 col-md-4 col-xl-2 mb-4 mr-auto">
                        <h6 class="text-uppercase text-white font-weight-bold">
                            Explore our Site!</h6>
                        <nav class="nav d-block w-100">
                            <a class="nav-link display-4 text-left d-md-block hvr-pop pl-0 text-white active"
                                title="Car Wash" href="#">Car
                                Wash</a>
                            <a class="nav-link display-4 text-left d-md-block hvr-pop pl-md-0 text-white" title="Dog Wash"
                                href="#">Dog Wash</a>
                            <a class="nav-link display-4 text-left d-md-block hvr-pop pl-md-0 text-white" title="Gift Cards"
                                href="#">Gift
                                Cards</a>
                            <a class="nav-link display-4 text-left d-md-block hvr-pop pl-md-0 text-white" title="About Us"
                                href="#">About Us</a>
                        </nav>
                    </div>
                    <div class="copyright-container col-md-4 col-lg-4 col-xl-3 mb-4 ml-md-auto">
                        <img src="../assets/images/logos/watermark.png" alt="Buggy Car Wash watermark"
                            class="img img-fluid mb-3" /><span class="sr-only">Buggy Car Wash - go to
                            Home</span>
                        <div class="d-flex justify-content-between">
                            <p class=" footer-copyright text-white">
                                &copy;
                                <script type="text/JavaScript">
                                document.write(new Date().getFullYear());</script>
                                Buggy Car Wash.<br> All Rights Reserved.
                            </p>
                            <span>
                                <a class="hvr-pop icon-link circle-icon rounded-circle mr-1 mr-sm-2" href="#"
                                    title="Buggy Instagram Page"><i class="fa fab fa-instagram"></i></a>
                                <a class="hvr-pop icon-link circle-icon rounded-circle" href="#"
                                    title="Buggy Facebook Page"><i class="fa fab fa-facebook-f"></i></a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <!-- Pure CSS Animated Bubbles -->
        <div id="background-wrap">
            <div class="bubble x1"></div>
            <div class="bubble x2"></div>
            <div class="bubble x3"></div>
            <div class="bubble x4"></div>
            <div class="bubble x5"></div>
            <div class="bubble x6"></div>
            <div class="bubble x7"></div>
            <div class="bubble x8"></div>
            <div class="bubble x9"></div>
            <div class="bubble x10"></div>
        </div>

        <!-- Return to Top -->
        <a href="javascript:" id="return-to-top"><i class="fas fa-chevron-up"></i></a>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"
            integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
            integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
            crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
            integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
            crossorigin="anonymous"></script>

        <!-- Buggy Car Wash - Base JS -->
        <script src="../assets/js/base.min.js"></script>

    </body>
</html>