<?php

$user= 'id19508684_subemail';
$password = '~llbFNpsJ/erVx9q';
$host = 'localhost';
$dbase = 'id19508684_subsemails';
$table = 'subs';

// coneection to the database
$dbc = mysqli_connect($host, $user, $password, $dbase) or die('Error connecting to MySQL server.');