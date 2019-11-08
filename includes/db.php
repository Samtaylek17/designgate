<?php
    $con = mysqli_connect("localhost", "root", "", "designgate");

    if ($con->connect_error ) {
        die("Connection failed: " . $con->connect_error);
    }

?>