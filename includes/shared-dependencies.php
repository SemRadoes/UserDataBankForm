<?php
$serverName = "localhost";
$dBuserName = "root";
$dBPassName = "";
$dBName = "PHPLoginsystem";
$conn = mysqli_connect($serverName, $dBuserName, $dBPassName, $dBName);

if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">