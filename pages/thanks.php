<?php
use PHPMailer\PHPMailer\PHPMailer;
require '../vendor/autoload.php';

$to =  'buggycarwash1@gmail.com';
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
$mail->Password = 'ENTER PASSWORD';
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
    <link rel="shortcut icon" href="../assets/images/favicon.ico" type="image/x-icon" />

    <title>
        Buggy Car Wash and Barking Bath | 51 Middletown Ave, North Haven, CT -
        Thanks for contacting us!
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
                    <div class="col-12 d-flex align-items-center justify-content-between justify-content-sm-end">
                        <span class="open-hours text-uppercase font-weight-bold d-none d-md-inline-block mr-2 mr-sm-4">
                            Open 7 days a week!</span>
                        <span class="phone-link mr-2 mr-sm-4">
                            <span class="bg-white circle-icon rounded-circle mr-1"><i
                                    class="fa fas fa-phone-alt"></i></span>
                            203-495-9945
                        </span>
                        <span class="mr-2 mr-sm-4 d-none d-sm-inline-block">
                            <span class="bg-white circle-icon rounded-circle mr-1">
                                <i class="fa fas fa-map-marker-alt"></i></span>
                            51 Middletown Ave, North Haven, CT
                        </span>
                        <span class="pt-2 pb-2 pt-md-0 pb-md-0 ">
                            <a target="_blank"
                                class="hvr-pop icon-link circle-icon circle-link rounded-circle mr-2"
                                href="https://www.instagram.com/buggy_car_wash/" title="Buggy Instagram Page"><i
                                    class="fa fab fa-instagram"></i></a>
                            <a target="_blank" class="hvr-pop icon-link circle-icon circle-link rounded-circle"
                                href="https://www.facebook.com/pages/category/Car-Wash/Buggy-Car-Wash-and-The-Barking-Bath-335929286476531/"
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
                            <a class="nav-link mobile-link" title="Car Wash" href="/"><span class="hvr-icon">Car
                                    Wash</span>
                            </a>
                        </li>
                        <li class="nav-item pl-4 pr-4 p-lg-0 ml-lg-4">
                            <a class="nav-link mobile-link" title="Dog Wash" href="../pages/dogwash.html"><span class="hvr-icon">Dog
                                    Wash</span></a>
                        </li>
                        <li class="nav-item pl-4 pr-4 p-lg-0 ml-lg-4">
                            <a class="nav-link mobile-link" title="Gift Cards" href="../pages/giftcards.html"><span class="hvr-icon">Gift
                                    Cards</span></a>
                        </li>
                        <li class="nav-item pl-4 pr-4 p-lg-0 ml-lg-4">
                            <a class="nav-link mobile-link" title="About Us" href="../pages/aboutus.html"><span class="hvr-icon">About
                                    Us</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- Main -->
    <main class="content w-100 drop-shadow">

        <!-- Carousel Section -->
        <section class="carousel-container carousel-section pb-2 pb-sm-5">
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
                            <img class="desktop-show img w-100" src="../assets/images/slideshow/buggy-slide-1.jpg"
                                alt="First slide" />
                            <img class="mobile-show img w-100" src="../assets/images/slideshow/buggy-slide-1-mobile.jpg"
                                alt="First slide" />
                        </div>
                        <div class="carousel-item">
                            <img class="desktop-show img w-100" src="../assets/images/slideshow/buggy-slide-2.jpg"
                                alt="Second slide" />
                            <img class="mobile-show img w-100" src="../assets/images/slideshow/buggy-slide-2-mobile.jpg"
                                alt="Second slide" />
                        </div>
                        <div class="carousel-item">
                            <img class="desktop-show img w-100" src="../assets/images/slideshow/buggy-slide-3.jpg"
                                alt="Third slide" />
                            <img class="mobile-show img w-100" src="../assets/images/slideshow/buggy-slide-3-mobile.jpg"
                                alt="Third slide" />
                        </div>
                        <div class="carousel-item">
                            <img class="desktop-show img w-100" src="../assets/images/slideshow/buggy-slide-4.jpg"
                                alt="Fourth slide" />
                            <img class="mobile-show img w-100" src="../assets/images/slideshow/buggy-slide-4-mobile.jpg"
                                alt="Fourth slide" />
                        </div>
                        <div class="carousel-item">
                            <img class="desktop-show img w-100" src="../assets/images/slideshow/buggy-slide-5.jpg"
                                alt="Fifth slide" />
                            <img class="mobile-show img w-100" src="../assets/images/slideshow/buggy-slide-5-mobile.jpg"
                                alt="Fifth slide" />
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselMain" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon rounded-circle" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselMain" role="button" data-slide="next">
                        <span class="carousel-control-next-icon rounded-circle" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </section>

        <!-- Welcome Section -->
        <section class="welcome-section">
            <div class="container">
                <div class="row mt-lg-5 pb-5">
                    <div class="col-12">
                        <h1 class="text-left text-md-center pt-5 pb-3">Thank you for contacting us!</h1>
                        <p class="lead text-left text-md-center pb-5">
                            <?php echo $mailConfirmation; ?>
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Testimonials Section -->
        <section class="testimonials-section">
            <div class="container pt-5 pb-5">
                <div class="row">
                    <div id="testimonialCarousel" class="carousel slide w-100 pb-3" data-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active text-center pl-4 pr-4 pt-4">
                                <blockquote class="blockquote text-center">
                                    <p class="text-white mb-0"><i class="fa fa-quote-left"></i> &nbsp; Great
                                        prices! Great services offered! I did the soft touch and my car looked
                                        beautiful. The
                                        signs around the building are fun/funny. Seem like they have cool owners. &nbsp;
                                        <i class="fa fa-quote-right"></i>
                                    </p>
                                    <footer class="blockquote-footer text-white mb-3"><strong>Debbie Allen</strong>
                                        <cite title="Car">(Mercedes CLS 550)</cite></footer>
                                    <!-- Client review stars -->
                                    <!-- "fas fa-star" for a full star, "far fa-star" for an empty star, "far fa-star-half-alt" for a half star. -->
                                    <p class="client-review-stars text-warning">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </p>
                                </blockquote>
                            </div>
                            <div class="carousel-item text-center pl-4 pr-4 pt-4">
                                <blockquote class="blockquote text-center">
                                    <p class="text-white mb-0"><i class="fa fa-quote-left"></i> &nbsp; Best car wash in
                                        the area by far! Tons of amenities, and the staff is super friendly (shoutout to
                                        Vinny!) &nbsp; <i class="fa fa-quote-right"></i>
                                    </p>
                                    <footer class="blockquote-footer text-white mb-3"><strong>Zach Hahn</strong>
                                        <cite title="Car">(GMC Yukon XL)</cite></footer>
                                    <!-- Client review stars -->
                                    <!-- "fas fa-star" for a full star, "far fa-star" for an empty star, "far fa-star-half-alt" for a half star. -->
                                    <p class="client-review-stars text-warning">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </p>
                                </blockquote>
                            </div>
                            <div class="carousel-item text-center pl-4 pr-4 pt-4">
                                <blockquote class="blockquote text-center">
                                    <p class="text-white mb-0"><i class="fa fa-quote-left"></i> &nbsp; I love these
                                        types of car washes. It makes washing cars fun. You have plenty of options in
                                        terms of different types of cleaners, conditioners and it&rsquo;s all made pretty easy
                                        and quick. &nbsp; <i class="fa fa-quote-right"></i>
                                    </p>
                                    <footer class="blockquote-footer text-white mb-3">
                                        <strong>Dmitri Alvarado</strong>
                                        <cite title="Car">(Infiniti QX 56)</cite>
                                    </footer>
                                    <!-- Client review stars -->
                                    <!-- "fas fa-star" for a full star, "far fa-star" for an empty star, "far fa-star-half-alt" for a half star. -->
                                    <p class="client-review-stars text-warning">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </p>
                                </blockquote>
                            </div>
                            <div class="carousel-item text-center pl-4 pr-4 pt-4">
                                <blockquote class="blockquote text-center">
                                    <p class="text-white mb-0"><i class="fa fa-quote-left"></i> &nbsp; I had a positive
                                        experience with the 24 hour touchless car wash. I was greeted by friendly
                                        faces, my car came out clean and it was easy to select the option.
                                        Easy to follow instructions. I will definitely be back! &nbsp;
                                        <i class="fa fa-quote-right"></i>
                                    </p>
                                    <footer class="blockquote-footer text-white mb-3">
                                        <strong>Veronica Rodriguez</strong>
                                        <cite title="Car">(BMW 3 Series)</cite>
                                    </footer>
                                    <!-- Client review stars -->
                                    <!-- "fas fa-star" for a full star, "far fa-star" for an empty star, "far fa-star-half-alt" for a half star. -->
                                    <p class="client-review-stars text-warning">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </p>
                                </blockquote>
                            </div>
                        </div>
                        <ol class="carousel-indicators mb-3">
                            <li data-target="#testimonialCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#testimonialCarousel" data-slide-to="1"></li>
                            <li data-target="#testimonialCarousel" data-slide-to="2"></li>
                            <li data-target="#testimonialCarousel" data-slide-to="3"></li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <!-- Instagram Section -->
        <section class="ig-section pt-5 pb-5">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2><i class="fas fa-camera-retro"></i> &nbsp;Let&rsquo;s connect</h2>
                        <p class="mb-4">We love to see your before &amp; afters and fun
                            wash
                            photos. We encourage you to tag us in your posts and use our hashtag &lsquo;#buggycarwash&rsquo; on
                            any relevant
                            pictures. If you make us smile, we&rsquo;d love to share your post on our page! </p>

<!-- LightWidget WIDGET --><script src="https://cdn.lightwidget.com/widgets/lightwidget.js"></script><iframe src="https://cdn.lightwidget.com/widgets/9d280f9d99d2594e8a488b4ee9add447.html" scrolling="no" allowtransparency="true" class="lightwidget-widget" style="width:100%;border:0;overflow:hidden;"></iframe>
                            <a class="font-weight-bold text-uppercase float-right hvr-pop mobile-link"
                        href=" https://www.instagram.com/buggy_car_wash/" target="_blank">See more <i
                            class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Parallax Footer -->
    <footer id="pageFooter" class="pt-5 pb-5 page-footer">

        <!-- Footer Container -->
        <div class="container footer-container mt-md-5">
            <div class="row d-flex">
                <div class="col-sm-12 col-md-4 col-lg-3 mb-4">
                    <p class="phone-link text-white d-block d-md-flex align-items-center text-center text-md-left">
                        <span class="bg-white circle-icon rounded-circle
                             d-block d-md-inline mb-2 mr-auto ml-auto mt-1 mb-md-0 ml-md-0 mr-md-3"><i
                                class="fa fas fa-phone-alt"></i></span>
                        203-495-9945
                    </p>
                    <p class="text-white d-block d-md-flex justify-content-start text-center text-md-left">
                        <span class="bg-white circle-icon rounded-circle
                        d-block d-md-inline mb-2 mr-auto ml-auto mt-1 ml-md-0 mr-md-3">
                            <i class="fa fas fa-map-marker-alt"></i></span>
                        <span>
                            51 Middletown Ave,<br> North Haven, CT 06473
                        </span>
                    </p>
                    <p class="footer-address text-white d-block d-md-flex align-items-top text-center text-md-left">
                        <span class="bg-white circle-icon rounded-circle 
                            d-block d-md-inline mb-2 mr-auto ml-auto mt-1 ml-md-0 mr-md-3"><i
                                class="fa fas fa-clock"></i></span>
                        <span><strong>Auto Washes:</strong> 5am-2am<br>
                            <strong>Self-Service:</strong> 24 hours<br>
                            <strong>Dog Wash:</strong> 8am-5pm<br>
                            <i class="address-note">&ast;Weather permitting</i></span>
                    </p>
                </div>
                <div class="col-sm-12 col-md-4 col-xl-2 mb-4 mr-auto">
                    <h6 class="text-uppercase text-white font-weight-bold text-center text-md-left">
                        Explore our Site!</h6>
                    <nav class="nav d-block w-100">
                        <a class="d-inline-block w-49 w-md-100 text-center nav-link mobile-link display-4 text-md-left d-md-block hvr-pop pl-md-0 text-white"
                            title="Car Wash" href="/">Car
                            Wash</a>
                        <a class="d-inline-block w-49 w-md-100 text-center nav-link mobile-link display-4 text-md-left d-md-block hvr-pop pl-md-0 text-white"
                            title="Dog Wash" href="pages/dogwash.html">Dog Wash</a>
                        <a class="d-inline-block w-49 w-md-100 text-center nav-link mobile-link display-4 text-md-left d-md-block hvr-pop pl-md-0 text-white"
                            title="Gift Cards" href="pages/giftcards.html">Gift
                            Cards</a>
                        <a class="d-inline-block w-49 w-md-100 text-center nav-link mobile-link display-4 text-md-left d-md-block hvr-pop pl-md-0 text-white"
                            title="About Us" href="pages/aboutus.html">About Us</a>
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
                            <a target="_blank"
                                class="hvr-pop icon-link circle-icon circle-link rounded-circle mr-2"
                                href="https://www.instagram.com/buggy_car_wash/" title="Buggy Instagram Page"><i
                                    class="fa fab fa-instagram"></i></a>
                            <a target="_blank" class="hvr-pop icon-link circle-icon circle-link rounded-circle"
                                href="https://www.facebook.com/pages/category/Car-Wash/Buggy-Car-Wash-and-The-Barking-Bath-335929286476531/"
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

    <!-- Buggy Car Wash - Base JS -->
    <script src="../assets/js/base.min.js"></script>

</body>
</html>