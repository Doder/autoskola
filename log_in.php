<?php

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

$ime = $_GET['user'];
$sifra = $_GET['pass'];

$sql = "SELECT * FROM login WHERE ime='$ime' and sifra='$sifra' ";
$result = $conn->query($sql);
if ($result->num_rows > 0) 
{
    session_start();
    $row = $result->fetch_assoc();
    $_SESSION['username'] = $row['ime'];
    if($ime == 'admin'){
        $_SESSION['user_type'] = 'admin';
    }
    else{   
        $_SESSION['user_type'] = 'user';
    }
    
   header("Location: index.php");
}
else 
{
    header("Location: login.php");
    
}
$conn->close();

?>