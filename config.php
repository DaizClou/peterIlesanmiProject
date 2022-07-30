<?php

    $SERVER = 'localhost';
    $DB_USER = 'peteuzpj_ekene';
    $DB_PASS = 'Ekene565';
    $DB_NAME = 'peteuzpj_pastor';
    $cxn = new mysqli($SERVER, $DB_USER, $DB_PASS,$DB_NAME) or die("Couldn't connect to database");