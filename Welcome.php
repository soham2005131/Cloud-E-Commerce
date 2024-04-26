<?php
$server="localhost";
$username="root";
$password="";
$dbname="cloud";

$con= mysqli_connect($server,$username,$dbname);
if(!$con){
    echo"not connected";
}
else{
    echo"connected";
}
?>