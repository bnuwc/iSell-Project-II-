<?php



$hostname="localhost";
$username="root";
$password="";
$dbname="isell-project";


$link=mysqli_connect($hostname,$username,$password) or die ("cant connect1");

mysqli_select_db($link,$dbname) or die ("cant connect2");








?>
