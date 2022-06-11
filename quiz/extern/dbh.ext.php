<?php


$servername = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "quizDB";

$conn = mysqli_connect($servername,$dBUsername,$dBPassword,$dBName);

//pour faire des tests:verofier la connection au base de données
if(!$conn){
    die("connection failed!".mysqli_connect_error());
}