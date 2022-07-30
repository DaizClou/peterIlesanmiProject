<?php

  session_start();
  include('config.php');

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pastor Ilesanmi</title>
    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <!-- favicon -->
    <link rel="icon" href="img/favicon.png">
    <!-- Swiper Css  -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <!-- Bootstrap Css  -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- Font awesome cSS  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Utility Css  -->
    <link rel="stylesheet" href="css/utils.css">
    <!-- Core Css  -->
    <link rel="stylesheet" href="css/style.css?<?php echo time()?>">
</head>

<body>

    <!-- Navbar and Showcase  -->
    <header class="main-header">

        <!-- Navbar  -->
        <nav class="navbar navbar-expand-lg" id="Navbar">
            <div class="container-fluid">
                <a href="/" class="navbar-brand"><img id="logo-img" width="40" height="40" src='img/favicon.png'>
                    Pastor Peter Ilesanmi</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar"
                    aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa-solid fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="mainNavbar">
                    <ul class="navbar-nav ml-auto mr-5">
                        <li class="nav-item"><a href="nugget.php" class="nav-link">Wisdom Nugget</a> </li>
                        <li class="nav-item"><a href="devotional.php" class="nav-link">GMJ Devotional</a> </li>
                        <li class="nav-item"><a href="gallery.php" class="nav-link">Gallery</a> </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link" data-bs-toggle="modal"
                                data-bs-target="#contactModal">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Showcase Section -->
        <section class="showcase-section">
            <div class='container-fluid'>
                <div class='row showcase-wrapper'>
                    <div class='col-lg-6 showcase-item-left'></div>

                    <div class='col-lg-6 showcase-item-right'>
                        <h1 class='main-title'>Good Morning Jesus <br> <span>Devotional</span></h1>
                        <br>
                        <h3>with pastor peter ilesanmi</h3>
                        <br>
                        <a href="https://wa.me/+2348036113135" target='_blank' class="btn btn-large btn-orange">
                            <i class="fa-brands fa-whatsapp"></i> &nbsp;Connect
                        </a>

                    </div>
                </div>
            </div>
        </section>

    </header>



    <!-- Welcome -->
    <section id='welcome' class="introduction-section">
        <div class='container-fluid'>
            <div class='row g-5 introduction-wrapper'>
                <div class='col-lg-6 text-center first introduction-item-left'>
                    <img src="./img/r.png" class="img-fluid w-75 ">
                </div>
                <div class='col-lg-6  introduction-item-right'>

                    <h3>You are welcome!</h3>
                    <p>
                        For over two decades Pastor Peter Ilesanmi has learned and occupied different leadership
                        positions; he has thus developed
                        unparalleled leadership strength and skills both in the religious and secular spheres. This is
                        further evident in the lives
                        of his mentees and protégées all over the world. Pastor Peter Ilesanmi, an ordained minister of
                        God, reaches out to various
                        people of different colours, tribes and background through his various works not limited to
                        music, preaching, writing, and
                        mentoring. He has acquired various globally recognized skills with international certifications.
                        He holds Masters Degree in
                        Publishing and Copyright Studies. Pastor Peter Ilesanmi consults for various people and
                        organizations. Pastor Peter Olalekan
                        Ilesanmi is the Setman of GOPEM Incorporated, the Senior Pastor of KONECC Center, an executive
                        board member of Charis Dominion
                        Ltd, and General Manager of New Horizons Nigeria, He currently lives in Nigeria with his family.
                    </p>
                    <a href="#" data-bs-toggle="modal" data-bs-target="#contactModal" class="btn btn-large btn-orange">
                        Get in Touch</a>

                </div>
            </div>
        </div>
    </section>

    <!-- Latest Podcast Section  -->
    <section id='latest' class="podcasts-section">
        <div class='container-fluid'>
            <h2 class='text-center mb-3'>
                Latest Nugget and GMJ Podcast
            </h2>
            <div class='row podcast-wrapper py-5 gap-5'>
                <div class='col-lg-5 py-4 podcast-item-left'>
                    <div class='message-container msg-style'>
                        <h4>WISDOM NUGGET</h4>
                        <figure>
                            <blockquote>
                                "
                                <?php
                                $sql = "SELECT * FROM nugget order by RAND( ) DESC LIMIT 1";
                                $result = $cxn ->query($sql);
                                if($result->num_rows > 0){
                                    foreach($result as $row ){
                                     echo"".$row['nugget']."";
                                    }}
                                ?>
                                "
                            </blockquote>
                            <figcaption>by
                                Pastor Peter Ilesanmi</figcaption>
                        </figure>
                    </div>
                </div>

                <div class='col-lg-6 podcast-item-right'>
                    <h3>
                        Good Morning Jesus (GMJ)
                        Message for Today
                    </h3>
                    <?php
                            $sql = "SELECT * FROM devotional order by id DESC LIMIT 1";
                            $result = $cxn ->query($sql);
                            if($result->num_rows > 0){
                                foreach($result as $row ){
                                    echo"
                        <p>Series: ".$row['series']."</p>
                        <p>Topic: ".$row['topic']."</p>
                        <p>Passage: ".$row['passage']."</p>
                        <div class='center' >
                            <audio loop controls id='audio-style' src='".$row['audio']."'></audio>
                        </div>";
                        }}
                        ?>
                </div>
            </div>

        </div>
    </section>


    <!-- Achievements  -->
    <section id='achieve' class="achievements-section">
        <div class='container-fluid-90'>
            <div class="achievements-slider swiper pt-5 pb-5">

                <h2 class="text-center mb-5">
                    Did you know ?
                </h2>
                <div class="swiper-wrapper">
                    <!-- Achievement Item Start  -->
                    <div class="swiper-slide">
                        <div class='col'>
                            <div class='achievement-item-container'>
                                <div class=" left">
                                    <img src='img/favicon.png' class="img-fluid w-50 ">
                                </div>
                                <span class="achieve-position fw-bold">ASSOCIATE PASTOR</span>
                                <span class="achieve-org">Glorious People's Chapel International Ministry.</span>
                                <span class="achieve-year">2003-2014</span>
                            </div>
                        </div>
                    </div>
                    <!-- Achievement Item End  -->
                    <!-- Achievement Item Start  -->
                    <div class="swiper-slide">
                        <div class='col'>
                            <div class='achievement-item-container'>
                                <div class="left">
                                    <img src='img/favicon.png' class="img-fluid w-50 ">
                                </div>
                                <span class="achieve-position fw-bold">SENIOR PASTOR</span>
                                <span class="achieve-org">Kingdom of New Creatures
                                    In Christ Center (KONECC).</span>
                                <span class="achieve-year">2014-Present.</span>
                            </div>
                        </div>
                    </div>
                    <!-- Achievement Item End  -->
                    <!-- Achievement Item Start  -->
                    <div class="swiper-slide">
                        <div class='col'>
                            <div class='achievement-item-container'>
                                <div class="left">
                                    <img src='img/favicon.png' class="img-fluid w-50 ">
                                </div>
                                <span class="achieve-position fw-bold">EXECUTIVE BOARD MEMBER</span>
                                <span class="achieve-org">Charis Dominion Limited</span>
                                <span class="achieve-year">2010 - Present</span>
                            </div>
                        </div>
                    </div>
                    <!-- Achievement Item End  -->
                    <!-- Achievement Item Start  -->
                    <div class="swiper-slide">
                        <div class='col'>
                            <div class='achievement-item-container'>
                                <div class="left">
                                    <img src='img/favicon.png' class="img-fluid w-50 ">
                                </div>
                                <span class="achieve-position fw-bold">GENERAL MANAGER <br>(South West Region) </span>
                                <span class="achieve-org">New Horizons Computer Learning Centers</span>
                                <span class="achieve-year">2010 - Present</span>
                            </div>
                        </div>
                    </div>
                    <!-- Achievement Item End  -->
                </div>
            </div>
    </section>

    <!-- Footer  -->
    <footer id='footer' class="main-footer-footer">
        <div class='container-fluid pt-5 pb-5'>

            <div class="row">
                <div class="col-lg-6 col-md-6 footer-links">
                    <h3>Quick Links</h3>
                    <ul>
                        <li>
                            <a href="Javascript:void(0)">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="nugget.php">
                                Wisdom Nugget
                            </a>
                        </li>
                        <li>
                            <a href="devotional.php">
                                GMJ Devotional
                            </a>
                        </li>
                        <li>

                            <a href="#" data-bs-toggle="modal" data-bs-target="#contactModal">
                                Get in Touch
                            </a>
                        </li>

                    </ul>
                </div>
                <!-- Begin Mailchimp Signup Form -->
                <div id="mc_embed_signup" class="col-lg-6 col-md-6 footer-newsletter">
                    <h3>Join Our Newsletter</h3>
                    <p>
                        Subscribe to our Newsletter to get new updates directly in your
                        mail
                    </p>
                    <form
                        action="https://peterilesanmi.us11.list-manage.com/subscribe/post?u=fe19596155f008c2a0ec5fa18&amp;id=93fe6a7814"
                        method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate"
                        target="_blank" novalidate>
                        <div id="mc_embed_signup_scroll">
                            <input type="email" value="" name="EMAIL" id="mce-EMAIL">
                            <div id="mce-responses" class="clear foot">
                                <div class="response" id="mce-error-response" style="display:none"></div>
                                <div class="response" id="mce-success-response" style="display:none"></div>
                            </div>
                            <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                            <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text"
                                    name="b_fe19596155f008c2a0ec5fa18_93fe6a7814" tabindex="-1" value=""></div>
                            <div class="optionalParent">
                                <div class="clear foot">
                                    <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe"
                                        class="button">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                <!--End mc_embed_signup-->
            </div>
            <hr>
            &copy; Copyright 2022. All Rights Reserved. <br>
            Designed and Developed by <a class="daizclou" href="https://www.daizclou.com" target='_blank'>DaizClou</a>
        </div>
    </footer>
    <!-- Preloader  -->
    <div id="preloader" class="preloader"></div>
    <!-- Modal for add new -->
    <div class="modal fade" id="contactModal" tabindex="-1" aria-labelledby="contactModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="contactModalLabel">Contact</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action='https://formsubmit.co/officialdaizmedia@gmail.com' method='post'>
                    <div class="modal-body">
                        Name
                        <input type="text" name='name' class='form-control' required>
                        Email
                        <input type="email" class='form-control' name='email' required>
                        Message
                        <textarea name='message' class='form-control' required></textarea>
                        Phone number
                        <input type="number" class='form-control' name='phonenumber' minlength='5' required>
                        <input type="hidden" name="_captcha" value="false">
                        <input type="hidden" name="_next" value="https://peterilesanmi.com/">
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-secondary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>
<!-- Jquery CDN  -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Swiper Js  -->
<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
<!-- Bootstrap Javascript  -->
<script src='js/bootstrap.js'></script>
<!-- Core Javascript  -->
<script>
// Navbar Onscroll Change bg
var myNav = document.getElementById("Navbar");
window.onscroll = () => {
    "use strict";
    if (document.body.scrollTop >= 200) {
        myNav.classList.add("bg-light");
        myNav.classList.remove("nav-transparent");
    } else {
        myNav.classList.add("nav-transparent");
        myNav.classList.remove("bg-light");
    }
};

// Swiper js Config
new Swiper(".achievements-slider", {
    speed: 600,
    loop: true,
    autoplay: {
        delay: 5000,
        disableOnInteraction: false,
    },
    slidesPerView: "auto",
    pagination: {
        el: ".swiper-pagination",
        type: "bullets",
        clickable: true,
    },
    breakpoints: {
        320: {
            slidesPerView: 1,
            spaceBetween: 40,
        },
        670: {
            slidesPerView: 2,
            spaceBetween: 40,
        },
        1200: {
            slidesPerView: 3,
            spaceBetween: 40,
        },
    },
});

// Navbar change Icon
let navToggler = document.querySelector(".navbar-toggler");

// Event Function
// Changes the icon depending on the class list
const changeNavbarTogglerIcon = () => {
    let isCollapsed = navToggler.classList.contains("collapsed");
    if (isCollapsed) {
        navToggler.innerHTML = `<i class="fa-solid fa-bars"></i>`;
    } else {
        navToggler.innerHTML = `<i class="fa-solid fa-xmark"></i>`;
    }
};

// Adding Event Listener to the Nav toggler
navToggler.addEventListener("click", changeNavbarTogglerIcon);
// Preloader 
let preloader = document.querySelector("#preloader");
if (preloader) {
    window.onload = () => {
        preloader.remove();
        console.log("done.");
    };
}
const formhandler = (e) => {
    e.preventDefault();
}
</script>

</html>