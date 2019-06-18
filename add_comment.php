<?php
session_start();
$user_name = $_SESSION['username'];
$id_posta = $_POST['id'];
$komentar = $_POST['comment'];
$datum = date('Y-m-d');

$servername = "localhost";
$username = "root";
$password = "";
$db = "it_projekat";
// Create connection
$conn = new mysqli($servername, $username, $password,$db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql2 = "SELECT ime FROM login WHERE imelogin = '$user_name'";
$upit2 = $conn->query($sql2) or die($conn->error);
$imelogin = $upit2->fetch_assoc()['imelogin'];


$sql = "INSERT into komentari(imelogin,id_posta,tekst,datum) VALUES ('$imelogin', '$id_posta', '$komentar', '$datum')";

$upit = $conn->query($sql) or die($conn->error);

header('Location: ' . $_SERVER['HTTP_REFERER']);
