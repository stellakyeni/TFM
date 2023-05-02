<?php 
$dbname = "tfm";
$dbuser = "root";
$dbpassword = "";
$dbhost = "localhost";
$conn=mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname);
if(!$conn)
{
	exit("error: database connection not established!");
}
?>