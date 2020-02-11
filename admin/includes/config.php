<?php
    // define('BASEURL', $_SERVER['DOCUMENT_ROOT'].'/handyman/');
    $con = mysqli_connect("localhost", "root", "", "designgate");

    if ($con->connect_error ) {
        die("Connection failed: " . $con->connect_error);
    }

?>