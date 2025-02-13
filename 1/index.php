<?php
include_once "animal.php";
include_once "animalC.php";
$error = "";
$success = 0;
// create user
$animal = null;
$animalC = new animalC();

?>



<!DOCTYPE html>
<html lang="zxx">


<head>
    <title>Creature Animals Category Flat Bootstrap Responsive website Template | Home :: w3layouts</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8" />
    <meta name="keywords" content="Creature Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
    <script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- Custom Theme files -->
    <link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
    <!-- color switch -->
    <link href="css/blast.min.css" rel="stylesheet" />
    <!-- portfolio -->
    <link href="css/portfolio.css" type="text/css" rel="stylesheet" media="all">
    <link href="css/style.css" type="text/css" rel="stylesheet" media="all">
    <!-- font-awesome icons -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!-- online-fonts -->
    <link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
    <!-- banner -->
    <div id="home">
        <!-- color scheme -->
        <div class="blast-box">
            <div class="blast-frame">
                <p>color schemes</p>
                <div class="blast-colors d-flex justify-content-center">
                    <div class="blast-color">#23d48f</div>
                    <div class="blast-color">#d3b800</div>
                    <div class="blast-color">#18e7d3</div>
                    <div class="blast-color">#e5902a</div>
                    <div class="blast-color">#16d9e9</div>
                    <div class="blast-color">#FFC0CB</div>
                    <!-- you can add more colors here -->
                </div>
                <p class="blast-custom-colors">Choose Custom color</p>
                <input type="color" name="blastCustomColor" value="#FFC0CB">

            </div>
            <div class="blast-icon"><span class="fa fa-paint-brush" aria-hidden="true"></span></div>
        </div>
        <!-- //color scheme -->
        <!-- header -->
        <header>
            <nav class="navbar navbar-expand-lg navbar-light fixed-top navbar-expand-lg navbar-light navbar-fixed-top">
                <h1>
                    <a class="navbar-brand" href="index.html" data-blast="color">
                        Creature
                    </a>
                </h1>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-lg-auto text-center">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.html" data-blast="color">Home
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item  mt-lg-0 mt-3">
                            <a class="nav-link scroll" href="#about">about</a>
                        </li>
                        <li class="nav-item mt-lg-0 mt-3">
                            <a class="nav-link scroll" href="#services">features</a>
                        </li>
                        <li class="nav-item dropdown mt-lg-0 mt-3">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Dropdown
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item scroll nav-link" href="#plans">pricing</a>
                                <a class="dropdown-item scroll nav-link" href="#team">team</a>
                                <a class="dropdown-item scroll nav-link" href="#portfolio">portfolio</a>
                                <a class="dropdown-item scroll nav-link" href="#posts">latest posts</a>
                            </div>
                        </li>
                        <li class="nav-item  mt-lg-0 mt-3">
                            <a class="nav-link scroll" href="#contact">Contact</a>
                        </li>
                    </ul>
                    <button type="button" class="btn  wthree-link-bnr bg-theme rounded-circle text-center mt-lg-0 mt-3" data-toggle="modal" aria-pressed="false" data-target="#exampleModal" data-blast="bgColor"> <span
                            class="fa fa-user text-white"></span>
                    </button>
                </div>

            </nav>
        </header>
        <!-- //header -->
        <div class="callbacks_container">
            <ul class="rslides" id="slider3">
                <li class="banner banner1">
                    <div class="container">
                        <div class="banner-text">
                            <div class="slider-info">
                                <h3>Our animals</h3>
                                <span class="line"></span>
                                <p>shop</p>
                                <a class="btn bg-theme mt-4 w3_pvt-link-bnr scroll" data-blast="bgColor" href="#our_animals" role="button">View
                                    More</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="banner banner2">
                    <div class="container">
                        <div class="banner-text">
                            <div class="slider-info">
                                <h3>animals foundation</h3>
                                <span class="line"></span>
                                <p> </p>
                                <a class="btn bg-theme mt-4 w3_pvt-link-bnr scroll" data-blast="bgColor" href="#stats" role="button">View
                                    More</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="banner banner3">
                    <div class="container">
                        <div class="banner-text">
                            <div class="slider-info">
                                <h3>discover creature</h3>
                                <span class="line"></span>
                                <p>We move the world to protect animals</p>
                                <a class="btn bg-theme mt-4 w3_pvt-link-bnr scroll" data-blast="bgColor" href="#about" role="button">View
                                    More</a>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <!-- //banner -->


    <!--  about -->
    <section class="wthree-slide-btm pt-lg-5" id="about">
        <div class="container pt-sm-5 pt-4">
            <div class="row no-gutters">
                <div class="col-lg-5">
                    <div class="slide-banner">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="bg-abt light-bg">
                        <div class="container">
                            <div class="title-desc  pb-sm-3">
                                <h4 class="main-title-w3pvt">about creature</h4>
                                <p>helping animals & working on environmental issues.</p>
                            </div>
                            <div class="row flex-column mt-lg-4 mt-3">
                                <div class="abt-grid">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <div class="abt-icon" data-blast="bgColor">
                                                <span class="fa fa-ravelry"></span>
                                            </div>
                                        </div>
                                        <div class="col-sm-9 pl-sm-0">
                                            <div class="abt-txt ml-sm-0">
                                                <h4>sanctus takimata </h4>
                                                <p>Lo sea takimata sanctus est Lorem ipolor sit amet, no sea takimata
                                                    sanctus est Loremsum dolor sit amet.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="abt-grid mt-4 pt-lg-2">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <div class="abt-icon" data-blast="bgColor">
                                                <span class="fa fa-laptop"></span>
                                            </div>
                                        </div>
                                        <div class="col-sm-9 pl-sm-0">
                                            <div class="abt-txt ml-sm-0">
                                                <h4>takimata sanctus</h4>
                                                <p>Lo sea takimata sanctus est Lorem ipsum dolorsita.Lorem ipsum dolor
                                                    sit amet,sed diam nonumy eirmod tempor invidunt ut labore et dolore
                                                    magna aliquyam erat, At vero eos et accusam et justo duo dolores et
                                                    ea
                                                    rebum. Lorem ipsum dolor sit amet, no sea takimata sanctus est
                                                    Lorem
                                                    ipsum dolor sit amet. Stet clita kasd gubergren.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //about -->
    <!--  about bottom -->
    <section class="wthree-slide-btm pb-lg-5">
        <div class="container pb-md-5 pb-4">
            <div class="row flex-row-reverse no-gutters">
                <div class="col-lg-5">
                    <div class="ab-banner">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="bg-abt">
                        <div class="container">
                            <div class="title-desc  pb-sm-3">
                                <h4 class="main-title-w3pvt">saving animals</h4>
                                <p>helping animals & working on environmental issues.</p>
                            </div>
                            <div class="row flex-column mt-lg-4 mt-3">
                                <div class="abt-grid">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <div class="abt-icon" data-blast="bgColor">
                                                <span class="fa fa-ravelry"></span>
                                            </div>
                                        </div>
                                        <div class="col-sm-9 pl-sm-0">
                                            <div class="abt-txt ml-sm-0">
                                                <h4>sanctus takimata </h4>
                                                <p>Lo sea takimata sanctus est Lorem ipolor sit amet, no sea takimata
                                                    sanctus est Loremsum dolor sit amet.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="abt-grid mt-4 pt-lg-2">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <div class="abt-icon" data-blast="bgColor">
                                                <span class="fa fa-laptop"></span>
                                            </div>
                                        </div>
                                        <div class="col-sm-9 pl-sm-0">
                                            <div class="abt-txt ml-sm-0">
                                                <h4>takimata sanctus</h4>
                                                <p>Lo sea takimata sanctus est Lorem ipsum dolorsita.Lorem ipsum dolor
                                                    sit amet,sed diam nonumy eirmod tempor invidunt ut labore et dolore
                                                    magna aliquyam erat, At vero eos et accusam et justo duo dolores et
                                                    ea
                                                    rebum. Lorem ipsum dolor sit amet, no sea takimata sanctus est
                                                    Lorem
                                                    ipsum dolor sit amet. Stet clita kasd gubergren.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //about boottom -->
    <!-- stats -->
    <section class="w3_stats py-sm-5 py-4" id="stats">
        <div class="container">
            <div class="py-lg-5 w3-stats">
                <h2 class="w3pvt-title">We Move The World To Protect Animals
                </h2>
                <p class="my-4 text-white">
                    Vestibulum volutpat non eros ut vulputate. Nunc id risus accumsan Donec mi nulla, auctor
                    nec sem a, ornare auctor mi. Sed
                    mi tortor, commodo a felis in, fringilla tincidunt nulla.</p>
                <div class="row py-4">
                    <div class="col-md-4 col-6">
                        <div class="counter">
                            <span class="fa fa-smile-o"></span>
                            <div class="timer count-title count-number mt-2 text-white" data-to="297" data-speed="1500"></div>
                            <p class="count-text text-uppercase text-white">volunteers</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-6">
                        <div class="counter">
                            <span class="fa fa-users"></span>
                            <div class="timer count-title count-number mt-2 text-white" data-to="194" data-speed="1500"></div>
                            <p class="count-text text-uppercase text-white">projects completed</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-6 mt-md-0 mt-4">
                        <div class="counter">
                            <span class="fa fa-database"></span>
                            <div class="timer count-title count-number mt-2 text-white" data-to="2298" data-speed="1500"></div>
                            <p class="count-text text-uppercase text-white">donars</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- //stats -->
    <!-- services -->
    <div class="w3lspvt-about py-md-5 py-5" id="services">
        <div class="container pt-lg-5">
            <div class="title-desc text-center pb-sm-3">
                <h3 class="main-title-w3pvt">premium features</h3>
                <p>helping animals & working on environmental issues.</p>
            </div>
            <div class="w3lspvt-about-row row  text-center pt-md-0 pt-5 mt-lg-5">
                <div class="col-lg-4 col-sm-6 w3lspvt-about-grids">
                    <div class="p-md-5 p-sm-3">
                        <span class="fa fa-map-marker" data-blast="borderColor"></span>
                        <h4 class="mt-2 mb-3" data-blast="color">wind energy</h4>
                        <p>Itaque earum rerum hic tenetur a sapiente delectus reiciendis maiores alias consequatur aut</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 w3lspvt-about-grids  border-left border-right my-sm-0 my-5">
                    <div class="p-md-5 p-sm-3">
                        <span class="fa fa-check-circle-o" data-blast="borderColor"></span>
                        <h4 class="mt-2 mb-3" data-blast="color">pollution</h4>
                        <p>Itaque earum rerum hic tenetur a sapiente delectus reiciendis maiores alias consequatur aut</p>
                    </div>
                </div>
                <div class="col-lg-4 w3lspvt-about-grids">
                    <div class="p-md-5 p-sm-3">
                        <span class="fa fa-paw" data-blast="borderColor"></span>
                        <h4 class="mt-2 mb-3" data-blast="color">saving animals</h4>
                        <p>Itaque earum rerum hic tenetur a sapiente delectus reiciendis maiores alias consequatur aut</p>
                    </div>
                </div>
            </div>
            <div class="w3lspvt-about-row border-top row text-center pt-md-0 pt-5 mt-md-0 mt-5">
                <div class="col-lg-4 col-sm-6 w3lspvt-about-grids">
                    <div class="p-md-5 p-sm-3 col-label">
                        <span class="fa fa-tint" data-blast="borderColor"></span>
                        <h4 class="mt-2 mb-3" data-blast="color">water</h4>
                        <p>Itaque earum rerum hic tenetur a sapiente delectus reiciendis maiores alias consequatur aut</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 w3lspvt-about-grids mt-lg-0 mt-md-3 border-left border-right pt-sm-0 pt-5">
                    <div class="p-md-5 p-sm-3 col-label">
                        <span class="fa fa-handshake-o" data-blast="borderColor">
                        </span>
                        <h4 class="mt-2 mb-3" data-blast="color">protection</h4>
                        <p>Itaque earum rerum hic tenetur a sapiente delectus reiciendis maiores alias consequatur aut</p>
                    </div>
                </div>
                <div class="col-lg-4 w3lspvt-about-grids pt-md-0 pt-5">
                    <div class="p-md-5 p-sm-3 col-label">
                        <span class="fa fa-bar-chart" data-blast="borderColor"></span>
                        <h4 class="mt-2 mb-3" data-blast="color">nature</h4>
                        <p>Itaque earum rerum hic tenetur a sapiente delectus reiciendis maiores alias consequatur aut</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //services -->
    <!-- slide -->
    <div class="abt_bottom py-lg-5 bg-theme" data-blast="bgColor">
        <div class="container py-sm-4 py-3">
            <h4 class="abt-text text-capitalize text-sm-center">Over 70% of donations made to us directly impact animals
                in the wild</h4>
            <div class="d-sm-flex justify-content-center">
                <a class="btn light-bg mt-4 w3_pvt-link-bnr scroll bg-theme1" href="#contact" role="button">contact
                    us
                </a>
                <a href="#" role="button" data-toggle="modal" data-target="#exampleModal1" class="btn light-bg mt-4 ml-sm-3 w3_pvt-link-bnr">
                    make a contribution</a>
            </div>
        </div>
    </div>
    <!-- //slide -->
    <!-- pricing plans -->
    <section class="py-lg-5 py-4" id="plans">
        <div class="container py-md-5">
            <div class="title-desc text-center pb-sm-3">
                <h3 class="main-title-w3pvt">recent projects</h3>
                <p>helping animals & working on environmental issues.</p>
            </div>
            <div class="row price-row">
                <div class="col-lg-4 col-sm-6 column mb-lg-0 mb-4">
                    <div class="box" data-blast="borderColor">
                        <div class="title">
                            <span class="fa fa-gg" data-blast="color"></span>
                            <h5 data-blast="color">protecting forests</h5>
                        </div>
                        <div class="price">
                            <h6>funds needed - <sup>$</sup><span class="font-weight-bold">800</span></h6>
                        </div>
                        <div class="option">
                            <ul>
                                <li>50 Gb Space</li>
                                <li>5 Domain Names</li>
                                <li>20 Email Address</li>
                                <li>Live Support</li>
                            </ul>
                        </div>
                        <button type="button" class="btn w3ls-btn bg-theme  d-block" data-toggle="modal" aria-pressed="false" data-target="#exampleModal" data-blast="bgColor">
                            donate now
                        </button>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 column mb-lg-0 mb-4">
                    <div class="box" data-blast="borderColor">
                        <div class="title">
                            <span class="fa fa-money" data-blast="color"></span>
                            <h5 data-blast="color">rescue rehabilitation</h5>
                        </div>
                        <div class="price">
                            <h6>funds needed - <sup>$</sup><span class="font-weight-bold">1200</span></h6>
                        </div>
                        <div class="option">
                            <ul>
                                <li>50 Gb Space</li>
                                <li>5 Domain Names</li>
                                <li>20 Email Address</li>
                                <li>Live Support</li>
                            </ul>
                        </div>
                        <button type="button" class="btn w3ls-btn bg-theme  d-block" data-toggle="modal" aria-pressed="false" data-target="#exampleModal" data-blast="bgColor">
                            donate now
                        </button>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6  mx-auto mt-lg-0 mt-4 column">
                    <div class="box" data-blast="borderColor">
                        <div class="title">
                            <span class="fa fa-gg" data-blast="color"></span>
                            <h5 data-blast="color">environmental air</h5>
                        </div>
                        <div class="price">
                            <h6>funds needed - <sup>$</sup><span class="font-weight-bold">3000</span></h6>
                        </div>
                        <div class="option">
                            <ul>
                                <li>50 Gb Space</li>
                                <li>5 Domain Names</li>
                                <li>20 Email Address</li>
                                <li>Live Support</li>
                            </ul>
                        </div>
                        <button type="button" class="btn w3ls-btn bg-theme  d-block" data-toggle="modal" aria-pressed="false" data-target="#exampleModal" data-blast="bgColor">
                            donate now
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //pricing plans -->
    <!-- team -->
    <section class="team py-4 py-lg-5" id="team">
        <div class="container py-lg-5 py-sm-4">
            <div class="title-desc text-center pb-sm-3">
                <h3 class="main-title-w3pvt">our team</h3>
                <p>Helping animals & working on environmental issues.</p>
            </div>
            <div class="row py-4 mt-lg-5  team-grid">
                <div class="col-lg-4 col-sm-6">
                    <div class="box13">
                        <img src="images/youssef.jpg" class="img-fluid img-thumbnail" alt="" />
                        <div class="box-content">
                            <h3 class="title" data-blast="color">Youssef el mili </h3>
                            <span class="post">role in detail</span>
                            <ul class="social">
                                <li><a href="https://www.facebook.com/youssef.elmili.7/" target="_blank"><span class="fa fa-facebook"></span></a></li>
                                <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mt-sm-0 mt-4">
                    <div class="box13">
                        <img src="images/yassmine.jpg" class="img-fluid img-thumbnail" alt="" />
                        <div class="box-content">
                            <h3 class="title" data-blast="color">Yassmine Zariat</h3>
                            <span class="post">role in detail</span>
                            <ul class="social">
                                <li><a href="https://www.facebook.com/yasmine.zariat" target="_blank"><span class="fa fa-facebook"></span></a></li>
                                <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mt-lg-0 mt-4">
                    <div class="box13">
                        <img src="images/amal.jpg" class="img-fluid img-thumbnail" alt="" />
                        <div class="box-content">
                            <h3 class="title" data-blast="color">Amal souissi</h3>
                            <span class="post">role in detail</span>
                            <ul class="social">
                                <li><a href="https://www.facebook.com/amal.souissi.3152" target="_blank"><span class="fa fa-facebook"></span></a></li>
                                <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6  mt-4">
                    <div class="box13">
                        <img src="images/sirine.jpg" class="img-fluid img-thumbnail" alt="" />
                        <div class="box-content">
                            <h3 class="title" data-blast="color">Sirne Srat</h3>
                            <span class="post">role in detail</span>
                            <ul class="social">
                                <li><a href="https://www.facebook.com/sirine.srat" target="_blank"><span class="fa fa-facebook"></span></a></li>
                                <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mt-4">
                    <div class="box13">
                        <img src="images/imen.jpg" class="img-fluid img-thumbnail" alt="" />
                        <div class="box-content">
                            <h3 class="title" data-blast="color">Imen Gassoumi</h3>
                            <span class="post">role in detail</span>
                            <ul class="social">
                                <li><a href="https://www.facebook.com/imen.gassoumi.754" target="_blank"><span class="fa fa-facebook"></span></a></li>
                                <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- //team -->
    <section class="team py-4 py-lg-5" id="our_animals">
        <div class="container py-lg-5 py-sm-4">
            <div class="title-desc text-center pb-sm-3">
                <h3 class="main-title-w3pvt">Our animals</h3>
                <p>We have the best races of animals !</p>
            </div>

                <?php $animalC->afficheranimal();?>

            </div>
        </section>
    <!-- portfolio -->
    <section class="wthree-row w3-gallery cliptop-portfolio-wthree pt-lg-5" id="portfolio">
        <div class="container-fluid">
            <div class="title-desc text-center pb-3">
                <h3 class="main-title-w3pvt">portfolio</h3>
                <p>create your outstanding clean and high quality website.</p>
            </div>
            <ul class="demo row py-lg-5 py-sm-4 pb-4">
                <li class="col-lg-3 col-sm-6">
                    <div class="gallery-grid1">
                        <img src="images/g1.jpg" alt=" " class="img-fluid img-thumbnail" />
                    </div>
                </li>
                <li class="col-lg-3 col-sm-6">
                    <div class="gallery-grid1">
                        <img src="images/g4.jpg" alt=" " class="img-fluid img-thumbnail" />
                    </div>
                </li>
                <li class="col-lg-3 col-sm-6">
                    <div class="gallery-grid1">
                        <img src="images/g5.jpg" alt=" " class="img-fluid img-thumbnail" />
                    </div>
                </li>
                <li class="col-lg-3 col-sm-6">
                    <div class="gallery-grid1">
                        <img src="images/g3.jpg" alt=" " class="img-fluid img-thumbnail" />
                    </div>
                </li>
                <li class="col-lg-4 col-sm-6">
                    <div class="gallery-grid1">
                        <img src="images/g2.jpg" alt=" " class="img-fluid img-thumbnail" />
                    </div>
                </li>
                <li class="col-lg-4 col-sm-6">
                    <div class="gallery-grid1">
                        <img src="images/g1.jpg" alt=" " class="img-fluid img-thumbnail" />
                    </div>
                </li>
                <li class="col-lg-4 col-sm-6 mx-auto">
                    <div class="gallery-grid1">
                        <img src="images/g4.jpg" alt=" " class="img-fluid img-thumbnail" />
                    </div>
                </li>
                <li class="col-lg-3 col-sm-6">
                    <div class="gallery-grid1">
                        <img src="images/g5.jpg" alt=" " class="img-fluid img-thumbnail" />
                    </div>
                </li>
                <li class="col-lg-3 col-sm-6">
                    <div class="gallery-grid1">
                        <img src="images/g4.jpg" alt=" " class="img-fluid img-thumbnail" />
                    </div>
                </li>
                <li class="col-lg-3 col-sm-6">
                    <div class="gallery-grid1">
                        <img src="images/g6.jpg" alt=" " class="img-fluid img-thumbnail" />
                    </div>
                </li>
                <li class="col-lg-3 col-sm-6">
                    <div class="gallery-grid1">
                        <img src="images/g5.jpg" alt=" " class="img-fluid img-thumbnail" />
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <!-- //portfolio -->
    <!-- testimonials -->
    <div class="testimonials py-lg-5 py-4" id="testi">
        <div class="container">
            <div class="title-desc text-center pb-3">
                <h3 class="main-title-w3pvt">Our Volunteer</h3>
                <p>Helping animals & working on environmental issues.</p>
            </div>
            <div id="carouselExampleIndicators" class="carousel slide py-lg-5" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active" data-blast="borderColor"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1" data-blast="borderColor"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="testimonials_grid">
                                    <div class="testi-text text-center">
                                        <p><span class="fa fa-quote-left"></span>Stet clita kasd gubergren, no sea
                                            takimata sanctus est Lorem ipsum dolor sit amet<span class="fa fa-quote-right"></span>
                                        </p>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <div class="testi-desc">
                                            <span class="fa fa-user" data-blast="color"></span>
                                            <h5>Aliquyam</h5>
                                            <p>Member</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="testimonials_grid my-lg-0 my-4">
                                    <div class="testi-text text-center">
                                        <p><span class="fa fa-quote-left"></span>Stet clita kasd gubergren, no sea
                                            takimata sanctus est Lorem ipsum dolor sit amet<span class="fa fa-quote-right"></span>
                                        </p>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <div class="testi-desc">
                                            <span class="fa fa-user" data-blast="color"></span>
                                            <h5>Aliquyam</h5>
                                            <p>Member</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="testimonials_grid">
                                    <div class="testi-text text-center">
                                        <p><span class="fa fa-quote-left"></span>Stet clita kasd gubergren, no sea
                                            takimata sanctus est Lorem ipsum dolor sit amet<span class="fa fa-quote-right"></span>
                                        </p>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <div class="testi-desc">
                                            <span class="fa fa-user" data-blast="color"></span>
                                            <h5>Aliquyam</h5>
                                            <p>Member</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="testimonials_grid">
                                    <div class="testi-text text-center">
                                        <p><span class="fa fa-quote-left"></span>Stet clita kasd gubergren, no sea
                                            takimata sanctus est Lorem ipsum dolor sit amet<span class="fa fa-quote-right"></span>
                                        </p>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <div class="testi-desc">
                                            <span class="fa fa-user" data-blast="color"></span>
                                            <h5>Takimata</h5>
                                            <p>Member</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="testimonials_grid my-lg-0 my-4">
                                    <div class="testi-text text-center">
                                        <p><span class="fa fa-quote-left"></span>Stet clita kasd gubergren, no sea
                                            takimata sanctus est Lorem ipsum dolor sit amet<span class="fa fa-quote-right"></span>
                                        </p>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <div class="testi-desc">
                                            <span class="fa fa-user" data-blast="color"></span>
                                            <h5>Takimata</h5>
                                            <p>Member</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="testimonials_grid">
                                    <div class="testi-text text-center">
                                        <p><span class="fa fa-quote-left"></span>Stet clita kasd gubergren, no sea
                                            takimata sanctus est Lorem ipsum dolor sit amet<span class="fa fa-quote-right"></span>
                                        </p>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <div class="testi-desc">
                                            <span class="fa fa-user" data-blast="color"></span>
                                            <h5>Sanctus</h5>
                                            <p>Member</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- //testimonials -->
    <!-- blog -->
    <section class="blog_w3ls pb-lg-5 pb-4" id="posts">
        <div class="container py-sm-5 py-4">
            <div class="title-desc text-center pb-sm-3 mb-lg-5">
                <h3 class="main-title-w3pvt">recent blog</h3>
                <p>Helping animals & working on environmental issues.</p>
            </div>
            <div class="row mt-4">
                <!-- blog grid -->
                <div class="col-lg-4 col-md-6 mt-sm-0 mt-4">
                    <div class="card">
                        <div class="card-header p-0 position-relative">
                            <a href="#exampleModal2" data-toggle="modal" aria-pressed="false" data-target="#exampleModal2" role="button">
                                <img class="card-img-bottom" src="images/g1.jpg" alt="Card image cap">
                                <span class="fa fa-user post-icon bg-theme" aria-hidden="true" data-blast="bgColor"></span>

                            </a>
                        </div>
                        <div class="card-body">
                            <h5 class="blog-title card-title font-weight-bold">
                                <a href="#exampleModal2" data-toggle="modal" aria-pressed="false" data-target="#exampleModal2" role="button">Cras ultricies ligula sed.</a>
                            </h5>
                            <p>At vero eos et accusam et justo duo dolores et ea rebum. Lorem ipsum dolor sit
                                ametLorem ipsum dolor sit amet,sed diam nonumy.</p>
                            <label class="mt-2"> <span class="fa fa-calendar mr-3"></span>08.10.2018</label>
                            <button type="button" class="btn blog-btn wthree-bnr-btn" data-toggle="modal" aria-pressed="false" data-target="#exampleModal2">
                                Read more
                            </button>
                        </div>
                    </div>
                </div>
                <!-- //blog grid -->
                <!-- blog grid -->
                <div class="col-lg-4 col-md-6 mt-md-0 mt-sm-5 mt-4">
                    <div class="card">
                        <div class="card-header p-0 position-relative">
                            <a href="#exampleModal3" data-toggle="modal" aria-pressed="false" data-target="#exampleModal3" role="button">
                                <img class="card-img-bottom" src="images/g2.jpg" alt="Card image cap">
                                <span class="fa fa-user post-icon bg-theme" aria-hidden="true" data-blast="bgColor"></span>
                            </a>
                        </div>
                        <div class="card-body">
                            <h5 class="blog-title card-title font-weight-bold">
                                <a href="#exampleModal3" data-toggle="modal" aria-pressed="false" data-target="#exampleModal3" role="button">magna porta auris.</a>
                            </h5>
                            <p>At vero eos et accusam et justo duo dolores et ea rebum. Lorem ipsum dolor sit
                                ametLorem ipsum dolor sit amet,sed diam nonumy.</p>
                            <label class="mt-2"> <span class="fa fa-calendar mr-3"></span>02.11.2018</label>
                            <button type="button" class="btn blog-btn wthree-bnr-btn" data-toggle="modal" aria-pressed="false" data-target="#exampleModal3">
                                Read more
                            </button>
                        </div>
                    </div>
                </div>
                <!-- //blog grid -->
                <!-- blog grid -->
                <div class="col-lg-4 col-md-6 mt-lg-0 mt-4 mx-auto">
                    <div class="card">
                        <div class="card-header p-0  position-relative">
                            <a href="#exampleModal4" data-toggle="modal" aria-pressed="false" data-target="#exampleModal4" role="button">
                                <img class="card-img-bottom" src="images/g3.jpg" alt="Card image cap">
                                <span class="fa fa-user post-icon bg-theme" aria-hidden="true" data-blast="bgColor"></span>
                            </a>
                        </div>
                        <div class="card-body">
                            <h5 class="blog-title card-title font-weight-bold">
                                <a href="#exampleModal4" data-toggle="modal" aria-pressed="false" data-target="#exampleModal4" role="button">Cras ultricies ligula sed.</a>
                            </h5>
                            <p>At vero eos et accusam et justo duo dolores et ea rebum. Lorem ipsum dolor sit
                                ametLorem ipsum dolor sit amet,sed diam nonumy.</p>
                            <label class="mt-2"> <span class="fa fa-calendar mr-3"></span>10.11.2018</label>
                            <button type="button" class="btn blog-btn wthree-bnr-btn" data-toggle="modal" aria-pressed="false" data-target="#exampleModal4">
                                Read more
                            </button>
                        </div>
                    </div>
                </div>
                <!-- //blog grid -->
            </div>
        </div>
    </section>
    <!-- //blog -->
    <!-- slide -->
    <div class="abt_bottom py-lg-5 bg-theme" data-blast="bgColor">
        <div class="container py-sm-4 py-3">
            <h4 class="abt-text text-capitalize text-sm-center mb-0">Join the Mission to help World</h4>
            <p class="text-white text-sm-center ">We Move The World To Protect Animals</p>
            <div class="d-sm-flex justify-content-center">
                <a href="#" role="button" data-toggle="modal" data-target="#exampleModal" class="btn light-bg mt-sm-4 mt-3 ml-3 w3_pvt-link-bnr">
                    make a contribution</a>
                <a href="#" role="button" data-toggle="modal" data-target="#exampleModal1" class="btn light-bg mt-sm-4 mt-3 ml-3 ">
                    become volunteer</a>
            </div>
        </div>
    </div>
    <!-- //slide -->
    <!-- contact -->
    <section class="contact-wthree py-sm-5 py-4" id="contact">
        <div class="container pt-lg-5">
            <div class="title-desc text-center pb-sm-3">
                <h3 class="main-title-w3pvt">contact us</h3>
                <p>Helping animals & working on environmental issues.</p>
            </div>
            <div class="row mt-4">
                <div class="col-lg-5 text-center">
                    <h5 class="cont-form" data-blast="color">get in touch</h5>
                    <div class="row flex-column">
                        <div class="contact-w3">
                            <span class="fa fa-envelope-open  mb-3" data-blast="color"></span>
                            <div class="d-flex flex-column">
                                <a href="mailto:yassmine.zariat@esprit.tn" class="d-block">yassmine.zariat@esprit.tn</a>
                                <a href="mailto:youssef.elmili@esprit.tn" class="my-2 d-block">youssef.elmili@esprit.tn</a>
                                <a href="mailto:amal.souissi@esprit.tn ">amal.souissi@esprit.tn</a>
                                <a href="mailto:sirine.srat@esprit.tn">sirine.srat@esprit.tn</a>
                                <a href="mailto:imen.gassoumi@esprit.tn">imen.gassoumi@esprit.tn</a>
                            </div>
                        </div>
                        <div class="contact-w3 my-4">
                            <span class="fa fa-phone mb-3" data-blast="color"></span>
                            <div class="d-flex flex-column">
                                <p>+456 123 7890</p>
                                <p class="my-1">+456 123 7890</p>
                                <p>+856 123 7890</p>
                            </div>
                        </div>
                        <div class="contact-w3">
                            <span class="fa fa-home mb-3" data-blast="color"></span>
                            <address>71 Pilgrim Avenue <br>44 Shirley Ave.<br> Goldfield Rd. Broome St, Newyork.</address>
                        </div>
                    </div>

                </div>
                <div class="col-lg-7">
                    <h5 class="cont-form" data-blast="color">contact form</h5>
                    <div class="contact-form-wthreelayouts">
                        <form action="#" method="post" class="register-wthree">
                            <div class="form-group">
                                <label>
                                    Your Name
                                </label>
                                <input class="form-control" type="text" placeholder="Johnson" name="email" required="">
                            </div>
                            <div class="form-group">
                                <label>
                                    Mobile
                                </label>
                                <input class="form-control" type="text" placeholder="xxxx xxxxx" name="email" required="">
                            </div>
                            <div class="form-group">
                                <label>
                                    Email
                                </label>
                                <input class="form-control" type="email" placeholder="example@email.com" name="email" required="">
                            </div>
                            <div class="form-group">
                                <label>
                                    Your message
                                </label>
                                <textarea placeholder="Type your message here" class="form-control"></textarea>
                            </div>
                            <div class="form-group mb-0">
                                <button type="submit" class="btn btn-w3layouts btn-block  bg-theme text-white w-100 font-weight-bold text-uppercase" data-blast="bgColor">Send</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="mx-auto text-center mt-lg-0 mt-4">
                <iframe class="mt-lg-4 contact-form-wthreelayouts" data-blast="borderColor"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5147.5246453690315!2d10.18719787958353!3d36.89821681117129!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12e2cb75abbb1733%3A0x557a99cdf6c13b7b!2sSpirit%20School%20D&#39;ing%C3%A9nieurs!5e1!3m2!1sen!2stn!4v1618616430659!5m2!1sen!2stn"
                    allowfullscreen></iframe>
                <!-- //footer right -->
            </div>
        </div>

    </section>
    <!-- //contact -->
    <!-- footer -->
    <footer class="cpy-right bg-theme" data-blast="bgColor">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="wthree-social">
                        <ul>
                            <li>
                                <a href="#">
                                    <span class="fa fa-facebook-f icon_facebook"></span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="fa fa-twitter icon_twitter"></span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="fa fa-dribbble icon_dribbble"></span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="fa fa-google-plus icon_g_plus"></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 text-lg-right mt-lg-0 mt-4">
                    <p>© 2021 Creature. All rights reserved | Design by
                        <a href="https://www.facebook.com/yasmine.zariat" target="_blank"> Yasmine zariat</a>
                        <a href="https://www.facebook.com/youssef.elmili.7/" target="_blank"> Youssef el mili</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <!-- //footer -->
    <!-- login  -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Signin</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="#" method="post" class="p-sm-3">
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Username</label>
                            <input type="text" class="form-control" placeholder="" name=" name" id="recipient-name" required="">
                        </div>
                        <div class="form-group">
                            <label for="password" class="col-form-label">Password</label>
                            <input type="password" class="form-control" placeholder="" name="Password" id="password" required="">
                        </div>
                        <div class="right-w3l">
                            <input type="submit" class="form-control" value="Login">
                        </div>
                        <div class="row sub-w3l my-3">
                            <div class="col-sm-6 sub-w3_pvt">
                                <input type="checkbox" id="brand1" value="">
                                <label for="brand1">
                                    <span></span>Remember me?</label>
                            </div>
                            <div class="col-sm-6 forgot-w3l text-sm-right">
                                <a href="#" class="text-secondary">Forgot Password?</a>
                            </div>
                        </div>
                        <p class="text-center dont-do modal-footer1">Don't have an account?
                            <a href="#" data-toggle="modal" data-target="#exampleModal1" class="font-weight-bold" data-blast="color">
                                Register Now</a>

                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- //login -->
    <!-- register -->
    <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel1">Register</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="#" method="post" class="p-sm-3">
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Username</label>
                            <input type="text" class="form-control" placeholder="" name=" name" id="recipient-rname" required="">
                        </div>
                        <div class="form-group">
                            <label for="recipient-email" class="col-form-label">Email</label>
                            <input type="email" class="form-control" placeholder="" name="Email" id="recipient-email" required="">
                        </div>
                        <div class="form-group">
                            <label for="password1" class="col-form-label">Password</label>
                            <input type="password" class="form-control" placeholder="" name="Password" id="password1" required="">
                        </div>
                        <div class="form-group">
                            <label for="password2" class="col-form-label">Confirm Password</label>
                            <input type="password" class="form-control" placeholder="" name="Confirm Password" id="password2" required="">
                        </div>
                        <div class="sub-w3l">
                            <div class="sub-w3_pvt">
                                <input type="checkbox" id="brand2" value="">
                                <label for="brand2" class="mb-3">
                                    <span></span>I Accept to the Terms & Conditions</label>
                            </div>
                        </div>
                        <div class="right-w3l">
                            <input type="submit" class="form-control" value="Register">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- // register -->
    <!-- blog modal1 -->
    <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header bg-theme">
                    <h5 class="modal-title" id="exampleModalLabel2">Cras ultricies ligula sed.</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center">
                    <img src="images/g1.jpg" class="img-fluid" alt="" />
                    <p class="text-left my-4">
                        Quisque velit nisi, pretium ut lacinia in, elementum id enim. Curabitur non nulla sit amet
                        nisl
                        tempus convallis quis ac
                        lectus. Cras ultricies ligula sed magna dictum porta.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- //blog modal1 -->
    <!-- blog modal2 -->
    <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel3" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header bg-theme">
                    <h5 class="modal-title" id="exampleModalLabel3">Cras ultricies ligula sed.</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center">
                    <img src="images/g2.jpg" class="img-fluid" alt="" />
                    <p class="text-left my-4">
                        Quisque velit nisi, pretium ut lacinia in, elementum id enim. Curabitur non nulla sit amet
                        nisl
                        tempus convallis quis ac
                        lectus. Cras ultricies ligula sed magna dictum porta.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- //blog modal2 -->
    <!-- blog modal3 -->
    <div class="modal fade" id="exampleModal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel4" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header bg-theme">
                    <h5 class="modal-title" id="exampleModalLabel4">Cras ultricies ligula sed magna.</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center">
                    <img src="images/g3.jpg" class="img-fluid" alt="" />
                    <p class="text-left my-4">
                        Quisque velit nisi, pretium ut lacinia in, elementum id enim. Curabitur non nulla sit amet
                        nisl
                        tempus convallis quis ac
                        lectus. Cras ultricies ligula sed magna dictum porta.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- //blog modal3-->
    <!-- js -->
    <script src="js/jquery-2.2.3.min.js"></script>
    <!-- //js -->
    <!-- script for password match -->
    <script>
        window.onload = function() {
            document.getElementById("password1").onchange = validatePassword;
            document.getElementById("password2").onchange = validatePassword;
        }

        function validatePassword() {
            var pass2 = document.getElementById("password2").value;
            var pass1 = document.getElementById("password1").value;
            if (pass1 != pass2)
                document.getElementById("password2").setCustomValidity("Passwords Don't Match");
            else
                document.getElementById("password2").setCustomValidity('');
            //empty string means no validation error
        }
    </script>
    <!-- script for password match -->
    <!-- Banner  Responsiveslides -->
    <script src="js/responsiveslides.min.js"></script>
    <script>
        // You can also use"$(window).load(function() {"
        $(function() {
            // Slideshow 4
            $("#slider3").responsiveSlides({
                auto: true,
                pager: true,
                nav: false,
                speed: 500,
                namespace: "callbacks",
                before: function() {
                    $('.events').append("<li>before event fired.</li>");
                },
                after: function() {
                    $('.events').append("<li>after event fired.</li>");
                }
            });

        });
    </script>
    <!-- //Banner  Responsiveslides -->
    <!-- Scrolling Nav JavaScript -->
    <script src="js/scrolling-nav.js"></script>
    <script src="js/counter.js"></script>
    <!-- portfolio -->
    <script src="js/jquery.picEyes.js"></script>
    <script>
        $(function() {
            //picturesEyes($('.demo li'));
            $('.demo li').picEyes();
        });
    </script>
    <!-- //portfolio -->
    <!-- start-smooth-scrolling -->
    <script src="js/move-top.js"></script>
    <script src="js/easing.js"></script>
    <script>
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event) {
                event.preventDefault();

                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });
    </script>
    <!-- //end-smooth-scrolling -->
    <!-- smooth-scrolling-of-move-up -->
    <script>
        $(document).ready(function() {
            /*
            var defaults = {
                containerID: 'toTop', // fading element id
                containerHoverID: 'toTopHover', // fading element hover id
                scrollSpeed: 1200,
                easingType: 'linear'
            };
            */
            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>
    <script src="js/SmoothScroll.min.js"></script>
    <!-- //smooth-scrolling-of-move-up -->
    <!-- color switch -->
    <script src="js/blast.min.js"></script>
    <!-- Bootstrap core JavaScript
================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.js"></script>
</body>

</html>
