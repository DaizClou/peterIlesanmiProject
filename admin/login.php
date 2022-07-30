<?php
session_start();
include('../config.php');
$msg = '';
  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    
    $correctusername = 'DaizClou';
    $correctpassword = '1234';

    function test_input($data){
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
    
    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username == $correctusername){
      if($password == $correctpassword){
        $_SESSION['ADMIN'] = 'true';
        header('location: index.php');
      }else{
        $msg='Incorrect Password';
      }
    }else{
      $msg ='Incorrect Username!';
    }

  }

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Login </title>

    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- favicon -->
    <link rel="icon" href="../img/favicon.jpg">
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="fontawesome-free-5.15.1-web/css/all.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav class="navbar container-fluid navbar-light navbar-expand-lg w-100">
        <a href="/" class="navbar-brand"><img src="#" alt="" title="logo">Pastor Peter Ilesanmi</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fa fa-bars" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto mr-5">
            <li class="nav-item"><a href="Javascript:void(0)" class="nav-link">Home</a> </li>
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
            <li class="nav-item"><a href="Javascript:void(0)" class="nav-link">Home</a> </li>
            </ul>
        </div>
    </div>


    <section id='login'>
        <div class='card'>
            <div class='card-body'>
                <header class='center'>
                    <img src='../img/favicon.jpg' class='logo2'>
                    <h2>Admin Login</h2> <br>
                    <p style='color: red; font-size: 9px'><?php echo $msg ?></p>
                </header>
                <form method='post'>
                    Username
                    <input type="text" class='form-control' name='username' required> <br>
                    Password
                    <input type="password" class='form-control' name='password' required>
                    <br> 
                    <div class='center'>
                        <button type='submit' class='btn btn-success'>Login</button>
                    </div>
                </form>
            </div>
        </div>
    </section>


  <script src='../js/bootstrap.js'></script>  
</body>
</html>