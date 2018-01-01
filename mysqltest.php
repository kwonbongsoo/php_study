<?php
$hostname = "localhost"; //zzz
$username= "root";   //zzz
$password = "11111111"; //zzz
$dbname = "test";   //zzzz
$mysqli = new mysqli($hostname, $username, $password, $dbname);

if(mysqli_connect_errno()){ 
    printf("에러"); 
    exit(); 
}else{ 
    printf("성공 "); 
} 
mysqli_close($mysqli);
?>