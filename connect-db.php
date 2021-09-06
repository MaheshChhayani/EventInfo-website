<?php

/*

CONNECT-DB.PHP

Allows PHP to connect to your database

*/



// Database Variables (edit with your own server information)

$server = 'localhost';

$user = 'root';

$pass = '';

$db = 'eveinfo1';



// Connect to Database

$con = mysqli_connect($server, $user, $pass,$db)








?>