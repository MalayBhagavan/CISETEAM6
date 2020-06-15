<?php

    // 1. ESTABLISHING CONNECTION
    $conn = mysqli_init(); //initialises MySQLi

    //details to access the database
    $hostname = "cisemysql.mysql.database.azure.com";
    $username = "cisegroup6mysql@cisemysql"; 
    $password = "Group6mysql"; 
    $db = "seerg6db"; //the name of the database to store name
    $port = 3306; 

    //creating a secure and encrypted connection to the database
    mysqli_ssl_set($conn, NULL, NULL, "/site/wwwroot/BaltimoreCyberTrustRoot.crt.pem", NULL, NUll); 

    //connecting to the database
    mysqli_real_connect($conn, $hostname, $username, $password, $db, 3306, MYSQLI_CLIENT_SSL); 

    //testing if the connection was successful
    if (mysqli_connect_errno($conn)) {
        die('Failed to connect to MySQL: ' . mysqli_connect_error()); //connection to the database failed
    }

    // 2. CREATING QUERY
    

    // 3. EXECUTING QUERY

    // 4. CLOSING CONNECTION

?>