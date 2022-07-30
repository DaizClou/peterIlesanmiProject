<?php
    session_start();
    include('../../config.php');
    $id = $_GET['id'];

    $sql = "DELETE from nugget where id = '$id'";
    $result = $cxn->query($sql);
    if($result == 'TRUE'){
        header('location: ../index.php');
    }