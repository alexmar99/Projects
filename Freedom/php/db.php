<?php
session_start(); // start a new session

$conn = mysqli_connect( // connect to the database

    'localhost:3306', //host
    'team3', //user with full privileges 
    'R4why408!', //password by default
	'team03' //database name
	
) or die(mysqli_error($mysqli))

?>


