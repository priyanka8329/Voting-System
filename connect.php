<?php

// Connecting to the database
$con = mysqli_connect("localhost", "root", "Neha129@", "votingsystem");
if(!$con){
    die (mysqli_error($con));
}


?>