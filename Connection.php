<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "itms_database";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}