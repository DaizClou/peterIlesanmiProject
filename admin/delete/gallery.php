<?php
    session_start();
    include('../../config.php');
    $id = $_GET['id'];

    $sql = "DELETE from gallery where id = '$id'";
    $result = $cxn->query($sql);
    if($result == 'TRUE'){
        header('location: ../gallery.php');
    }