<?php
$servername = "localhost";
$username = "root";
$password = "root";
$database = "db_guadcar";

$con = new mysqli($servername, $username, $password, $database);

if (mysqli_connect_errno())
{
	echo "Failed to connect to MySQL: " . mysqli_connect_error(), E_USER_ERROR;
}

