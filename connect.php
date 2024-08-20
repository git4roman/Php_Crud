<?php

// Create connection


// Check connection

try {
    $con = mysqli_connect('localhost', 'root', '', 'crudeop',3307);
} catch (mysqli_sql_exception) {
    
    die(mysqli_error($con)); 
}


?>