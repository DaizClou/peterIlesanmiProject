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
        <li class="nav-item"><a href="nugget.php" class="nav-link">Wisdom Nugget</a> </li>
        <li class="nav-item"><a href="devotional.php" class="nav-link">GMJ Devotional</a> </li>
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
        <li class="nav-item"><a href="nugget.php" class="nav-link">Wisdom Nugget</a> </li>
        <li class="nav-item"><a href="devotional.php" class="nav-link">GMJ Devotional</a> </li>
        <li class="nav-item"><a href="gallery.php" class="nav-link">Gallery</a> </li>
        <li class="nav-item">
          <a href="#" data-bs-toggle="modal" data-bs-target="#contactModal" class="nav-link">Contact</a> 
        </li>
      </ul>
    </div>
  </div>
  
  <!-- landing  -->
  <section id='landing'>
    <div class='container-fluid'>
      <div class='row'>        
        <div class='col-lg-6'></div>
        
        <div class='col-lg-6'>
          <h1 class='main-title'>Good Morning Jesus <br> <span>Devotional</span></h1>
          <br>
          <h3>WITH <br> PASTOR <br> PETER ILESANMI</h3>
          <br>
          <div class="whatsapp-container">
            <a href="https://wa.me/+2348036113135"  target='_blank'>
            <i class='fab fa-whatsapp fa-2x'> </i><span id="whatsapp-link">Connect</span>
          </a>
        </div>
          
        </div>
      </div>
    </div>
    
  </section>

  <!-- welcome -->
  <section id='welcome'>
    <div class='container-fluid'>
      <div class='row'>
        <div class='col-lg-6 center first'>
          <img src="img/petes.png">
        </div>
        <div class='col-lg-6'>

          <h3>You are welcome!</h3>
          <br>
          <p>
            For over two decades Pastor Peter Ilesanmi has learned and occupied different leadership positions; he has thus developed 
            unparalleled leadership strength and skills both in the religious and secular spheres. This is further evident in the lives 
            of his mentees and protégées all over the world. Pastor Peter Ilesanmi, an ordained minister of God, reaches out to various 
            people of different colours, tribes and background through his various works not limited to music, preaching, writing, and 
            mentoring. He has acquired various globally recognized skills with international certifications. He holds Masters Degree in 
            Publishing and Copyright Studies. Pastor Peter Ilesanmi consults for various people and organizations. Pastor Peter Olalekan 
            Ilesanmi is the Setman of GOPEM Incorporated, the Senior Pastor of KONECC Center, an executive board member of Charis Dominion 
            Ltd, and General Manager of New Horizons Nigeria, He currently lives in Nigeria with his family.
          </p>
          <br>
          <a href="#" class="nav-link btn-copy"  data-bs-toggle="modal" data-bs-target="#contactModal">Get in Touch</a>

        </div>
        <div class='col-lg-6 center second'>
          <img src="img/petes.png">
        </div>
      </div>
    </div>
  </section>

  <!-- latest podcast  -->
  <section id='latest'>
    <div class='container-fluid'>
      <div class='row'>
        <h2 class='center'>
          Latest by
          <br>
          Pastor Peter Ilesanmi 
          <br> <br>
        </h2>

        <div class='col-lg-6'>
          <div class='message-container'>
            <h4>TODAY'S WISDOM NUGGET</h4>
            <br> <br>
            <h5>
              "<br>
                <?php
                $sql = "SELECT * FROM nugget order by id DESC LIMIT 1";
                $result = $cxn ->query($sql);
                if($result->num_rows > 0){
                    foreach($result as $row ){
                        echo"".$row['nugget']."";
                      }}
                  ?>
              <br>"
              <br> <br>
              <i>Pastor Peter Ilesanmi</i>
            </h5> 
          </div>
        </div>

        <div class='col-lg-6'>
          <h3>
            <br>
            Good Morning Jesus (GMJ)
            <br>
            Message for Today
            <br> <br>
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
          <br>
          <div class='center'>
            <audio loop controls src='".$row['audio']."'></audio>
          </div>";
          }}
          ?>
        </div>
      </div>
      
    </div>    
  </section>
  
  <section id='achieve'>
    <div class='container-fluid'>
      <div class='row'>

      <div class='col-xl-2 col-lg-2 col-md-6 col-sm-6 col-6'>
          <div class='ctn center'>
            <span class="achieve-position">ASSOCIATE PASTOR</span>
            <span class="achieve-org">Glorious People's Chapel International Ministry.</span>
            <span class="achieve-year">2003-2014</span>
          </div>
        </div>

        <div class='col-xl-3 col-lg-3 col-md-6 col-sm-6 col-6'>
          <div class='ctn center'>
            <span class="achieve-position">SENIOR PASTOR</span>
            <span class="achieve-org">Kingdom of New Creatures 
            In Christ Center (KONECC).</span>
            <span class="achieve-year">2014-Present.</span>
          </div>
        </div>

        <div class='col-xl-2 col-lg-2 col-md-6 col-sm-6 col-6'>
          <div class='ctn center'>
            <span class="achieve-position">EXECUTIVE BOARD MEMBER</span>
            <span class="achieve-org">Charis Dominion Limited</span>
            <span class="achieve-year">2010 - Present</span>
          </div>
        </div>

        <div class='col-xl-3 col-lg-3 col-md-6 col-sm-6 col-6'>
          <div class='ctn center'>
            <span class="achieve-position">GENERAL MANAGER  <br>(South West Region) </span>
            <span class="achieve-org">New Horizons Computer Learning Centers</span>
            <span class="achieve-year">2010 - Present</span>
          </div>
        </div>

        <div class='col-xl-2 col-lg-2 col-md-0 col-sm-0 col-0 right'>
          <img src='img/pata.png'>
        </div>

      </div>
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