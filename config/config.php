<?php
    define('ROOT_URL', 'http://localhost:8080/jumpstart_regsystem1920/');
    define('DB_HOST', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASS', '');
    define('DB_NAME', 'jumpstart_regsystem');

    $conn = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
    if(mysqli_connect_errno()) {
        echo 'Failed to connect to MySQL' . mysqli_connect_errno();
    }