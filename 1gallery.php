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
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <!-- Favicon -->
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
    <link rel="stylesheet" href="css/gallery.css?<?php echo time()?>">
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
                    <li class="nav-item"><a href="nugget.php" class="nav-link">Wisdom Nugget</a> </li>
                    <li class="nav-item"><a href="devotional.php" class="nav-link">GMJ Devotional</a> </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link" data-bs-toggle="modal" data-bs-target="#contactModal">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Gallery  -->
    <section id='gallery' class="gallery-section">
        <div class='container-fluid text-center'>
            <h2 class='text-center fw-bold fs-2 mb-3'>Gallery</h2>

            <div class='row text-center align-items-center'>

                <?php
      $sql = "SELECT * FROM gallery order by id DESC";
      $result = $cxn ->query($sql);
      if($result->num_rows > 0){
        foreach($result as $row ){
          echo"
          <div class='col-md-6 mb-4'>
            <div class='card'>
                <img src='".$row['image']."' class='card-img-top'>
              <div class='card-body'>
                <h5 class='card-title center'>".$row['title']."</h5>
                <p class='card-text'>
                  ".$row['subtext']."
                </p>
              </div>
            </div>
          </div>
          ";
                }}
            ?>

            </div>
        </div>
    </section>

    <!-- Footer  -->
    <footer id='main-footer' class="main-footer-footer">
        <div class='container-fluid pt-5 pb-5'>
            <h3>Quick Links</h3>
            <br>
            <a href="Javascript:void(0)">
                <p>Home</p>
            </a>
            <a href="nugget.php">
                <p>Wisdom Nugget</p>
            </a>
            <a href="devotional.php">
                <p>GMJ Devotional</p>
            </a>
            <a href="#" data-bs-toggle="modal" data-bs-target="#contactModal">
                <p>Get in Touch</p>
            </a>
            <hr>
            &copy; Copyright 2022. All Rights Reserved. <br>
            Designed and Developed by <a href="https://www.daizclou.com" target='_blank'>DaizClou</a>
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

    <script src='js/bootstrap.js'></script>
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