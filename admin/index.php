<?php
    session_start();
    if($_SESSION['ADMIN'] !== 'true'){
        header('location: login.php');
    }

    include('../config.php');

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        function test_input($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        

        $nugget = test_input($_POST['nugget']);
        $file = $_FILES['image'];


        $file_destination = $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'uploads' . DIRECTORY_SEPARATOR;
        $filename = $file['name'];
        if (!is_dir($file_destination)) {
            mkdir($file_destination);
        }
        
        if (move_uploaded_file($file['tmp_name'], $file_destination . $filename)) {
            $sql = "INSERT into nugget(nugget, image) VALUES('$nugget', '/uploads/$filename')";
            if($cxn->query($sql)){
              header('location: index.php');
            }else{
              die('File not registered in the database: '.$cxn->error);
            }          
                        
        } 
        else {
            die("File was not uploaded successfully" .$cxn->error);
        }
        print_r($_FILES);
             
    }

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Nuggets | Pastor Ilesanmi</title>

    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- favicon -->
    <link rel="icon" href="../img/favicon.jpg">
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="fontawesome-free-5.15.1-web/css/all.css">
    <link rel="stylesheet" href="style.css?<?php echo time() ?>">
</head>
<body>
    <nav class="navbar container-fluid navbar-light navbar-expand-lg w-100">
        <a href="/" class="navbar-brand"><img src="" alt="" title="logo">Pastor Peter Ilesanmi</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fa fa-bars" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto mr-5">
            <li class="nav-item"><a href="devotional.php" class="nav-link">GMJ Devotional</a> </li>
            <li class="nav-item"><a href="gallery.php" class="nav-link">Gallery</a> </li>
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
            <li class="nav-item"><a href="devotional.php" class="nav-link">GMJ Devotional</a> </li>
            <li class="nav-item"><a href="gallery.php" class="nav-link">Gallery</a> </li>
            </ul>
        </div>
    </div>

    <section id='nugget'>
        <div class='container-fluid'>
            <div class='right fef' data-bs-toggle="modal" data-bs-target="#addModal">
                Add new
            </div> <br>

            <h2 class='center'>Wisdom Nuggets</h2> <br>
            <div class='row'>

            <?php
                $sql = "SELECT * FROM nugget order by id DESC";
                $result = $cxn ->query($sql);
                if($result->num_rows > 0){
                    foreach($result as $row ){
                        echo"
                    <div class='col-xl-3 col-lg-3 col-md-6 col-sm-6 col-6'>
                        <div class='csn'>
                            
                            <div class='cstn'>
                                ".$row['nugget'].".
                                <br> <br>
                                <i>Pastor Peter Ilesanmi</i>
                            </div>
        
                            <div class='title'>
                                Wisdom Nugget
                            </div>
                            
                            <a href='delete/nugget.php?id=".$row['id']."'>
                                <div class='socials center'>
                                    <i class='fa fa-trash fa-2x'></i>
                                </div>
                            </a>
        
                        </div>
                    </div>
                    ";
                }}
                ?>



            </div>
        </div>
    </section>


    <!-- Modal for add new -->
<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addModalLabel">New Nugget</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method='post' enctype='multipart/form-data'>
                <div class="modal-body">
                    Nugget Text
                    <textarea name='nugget' class='form-control' required placeholder='500 chars'></textarea>
                    Nugget Image
                    <input type="file" class='form-control' required name='image'>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-secondary">Save</button>
                </div>
            </form>    
        </div>
    </div>
</div>

    <script src='../js/bootstrap.js'></script>  
</body>
</html>