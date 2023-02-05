<?php
    const servername = 'localhost';
    const username = 'root';
    const password = '12345678';
    const dbname = 'aup';

    $connect = mysqli_connect(servername,username,password,dbname);
    $dsn = 'mysql:host=' . servername . ';dbname=' . dbname . '';
    $conn = null;

    try {
        $conn = new PDO($dsn, username, password);
        $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    } catch(PDOException $e) {
        die("Error : " . $e->getMessage());
    }
    
?>