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
    <link rel="stylesheet" href="css/nugget.css?<?php echo time()?>">
</head>

<body>

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
                    <li class="nav-item"><a href="index.php" class="nav-link">Home</a> </li>
                    <li class="nav-item"><a href="devotional.php" class="nav-link">GMJ Devotional</a> </li>
                    <li class="nav-item"><a href="gallery.php" class="nav-link">Gallery</a> </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link" data-bs-toggle="modal" data-bs-target="#contactModal">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <section id='nugget' class="nuggets-section">
        <div class='container-fluid'>
            <h2 class='text-center mt-4 mb-5 fs-1 fw-bolder'>Wisdom Nuggets</h2>
            <div class='row'>
                <?php
            $sql = "SELECT * FROM nugget order by id DESC";
            $result = $cxn ->query($sql);
            if($result->num_rows > 0){
                foreach($result as $row ){
                    echo"
                    <div class='col-md-4 nugget-item-container'>
                        <div class='nugget-item'>
                            
                            <img src='".$row['image']."' class='w-100 img-fluid'>
                                

                            <div class='w-100  text-center'>
                              &quot;  ".$row['nugget']." &quot;
                            </div>
                            
                            <div class='nugget-actions'>
                                <a href='https://twitter.com/share?text=".$row['nugget']."%20~Pastor%20Peter%20Ilesanmi&url=https://peterilesanmi.com/nugget.php'>
                                    <i class='fab fa-twitter fa-2x'></i>
                                </a> 
                                <a href='https://facebook.com/sharer/sharer.php?u=https://peterilesanmi.com/nugget.php'>
                                    <i class='fab fa-facebook fa-2x'></i>
                                </a>
                                <a href='https://api.whatsapp.com/send?text=".$row['nugget']."%20~Pastor%20Peter%20Ilesanmi'>
                                    <i class='fab fa-whatsapp fa-2x'></i>
                                </a>
                                <a href='https://peterilesanmi.com".$row['image']."' download>
                                    <i class='fa fa-download fa-2x'></i>
                                </a>
                            </div>

                        </div>
                        <br> <br>
                    </div>
                    ";
                }}
                ?>


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

    <script src='js/bootstrap.js'>

    </script>
    <script>
    // Navbar Onscroll Change bg
    var myNav = document.getElementById("Navbar");
    window.onscroll = function() {
        "use strict";
        if (document.body.scrollTop >= 200) {
            myNav.classList.add("bg-light");
            myNav.classList.remove("nav-transparent");
        } else {
            myNav.classList.add("nav-transparent");
            myNav.classList.remove("bg-light");
        }
    };
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
    </script>
</body>

</html>