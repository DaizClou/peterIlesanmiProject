<?php
    session_start();
    include('../../config.php');
    $id = $_GET['id'];

    $sql = "DELETE from devotional where id = '$id'";
    $result = $cxn->query($sql);
    if($result == 'TRUE'){
        header('location: ../devotional.php');
    }