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
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- favicon -->
    <link rel="icon" href="img/favicon.jpg">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/fontawesome-free-5.15.1-web/css/all.css">
    <link rel="stylesheet" href="css/style.css?<?php echo time()?>">
</head>
<body>
  <nav id="nav-bar" class="navbar container-fluid navbar-light navbar-expand-lg w-100">
    <a href="/" class="navbar-brand"><img src="#" alt="" title="logo">Pastor Peter Ilesanmi</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample" aria-expanded="false" aria-label="Toggle navigation">
      <i class="fa fa-bars" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto mr-5">
        <li class="nav-item"><a href="index.php" class="nav-link">Home</a> </li>
        <li class="nav-item"><a href="nugget.php" class="nav-link">Wisdom Nugget</a> </li>
        <li class="nav-item"><a href="gallery.php" class="nav-link">Gallery</a> </li>
        <li class="nav-item">
          <a href="#" class="nav-link"  data-bs-toggle="modal" data-bs-target="#contactModal">Contact</a> 
        </li>
      </ul>        
    </div>
  </nav>
      

  <!-- side bar  -->
  <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header">
      <div>
        <a href="" class="navbar-brand"><img src="#" class='navlogo' alt=""></a>
      </div>
      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      <ul class="navbar-nav ">
        <li class="nav-item"><a href="index.php" class="nav-link">Home</a> </li>
        <li class="nav-item"><a href="nugget.php" class="nav-link">Wisdom Nugget</a> </li>
        <li class="nav-item"><a href="gallery.php" class="nav-link">Gallery</a> </li>
      </ul>
    </div>
  </div>

  <section id='devotional'>
    <div class='container-fluid'>
      <h2 class='center'>Good Morning Jesus <br> Devotional</h2> <br> <br>
      <hr> <br>
      <?php
      $sql = "SELECT * FROM devotional order by id DESC";
      $result = $cxn ->query($sql);
      if($result->num_rows > 0){
        foreach($result as $row ){
          echo"
            <div class='row s'>
              <div class='col-lg-6'>
                <br>
                Series: ".$row['series']."<br>
                Topic: ".$row['topic']."<br>
                Passage: ".$row['passage']."<br> <br>
                <audio src='".$row['audio']."' controls loop></audio>
                <br> <br> <br> <br>
              </div>

              
              <div class='col-lg-6 '>
              ".date('M dS, Y', strtotime($row['date']) ).". <br> <br>

                <h3 class='intro-header'>".$row['text']."</h3>
                <p>".$row['subtext']."</p>
              </div>

            </div>";
          }}
          ?>


        
    </div>
  </section>

  <section id='footer'>
    <div class='container-fluid'>
      <h3>Quick Links</h3>
      <br>
      <a href="Javascript:void(0)"><p>Home</p></a>
      <a href="nugget.php"><p>Wisdom Nugget</p></a>
      <a href="devotional.php"><p>GMJ Devotional</p></a>
      <a href="#" data-bs-toggle="modal" data-bs-target="#contactModal"><p>Get in Touch</p></a>
      <br> <br>
      <hr>
      &copy; Copyright 2022. All Rights Reserved. <br>
      Made with 🧡 by <a href="https://wa.me/+2347013214897"  target='_blank'>DaizClou</a>
    </div>
  </section>
  
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
          <textarea name='message' class='form-control' required ></textarea>
          Phone number
          <input type="number" class='form-control' name='phonenumber'  minlength='5' required>
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

  <script src='js/index.js'></script>
  <script src='js/bootstrap.js'></script>  
</body>
</html>