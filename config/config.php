<?php


    //host
    define("HOST", "localhost");

    //dbname
    define("DBNAME", "pay");

    //user
    define("USER", "root");

    //password
    define("PASS", "");

    $conn = new PDO("mysql:host=".HOST.";dbname=".DBNAME.";", USER, PASS);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    if($conn == true){
        echo "connection is success";
    } else {
        echo "error";
    }

?>