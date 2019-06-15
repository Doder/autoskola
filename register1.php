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

$kime = $_GET['user'];
$sifra1 = $_GET['pass1'];
$sifra2 = $_GET['pass2'];
if($sifra1 === $sifra2)
{
    $sql1 = "INSERT INTO login(ime,sifra) VALUES ('$kime','$sifra1')";
    if ($conn->query($sql1) === FALSE) 
    {
        header("Location: register.php"); //VRACE SE NA FORMU REGISTER I JAVLJA GRESKU ISPOD
        //TU DODAJ DA KORISNICKO IME VEC POSTOJI, JER JE U BAZI KORISNICKO IME(PRIMARY KEY) TAKO DA SAMO TU MOZE JAVLJATI GRESKU
    } 
}
else
{
    header("Location: register.php"); //VRACE SE NA FORMU REGISTER I JAVLJA GRESKU ISPOD
    //DODAJ PORUKU DA SE SIFRE NE PODUDARAJU
}
$imelogin = $_GET['user'];
$ime = $_GET['ime'];
$prezime = $_GET['prezime'];
$datum = $_GET['datumr'];
$email = $_GET['mail'];
$telefon = $_GET['brojtel'];
$sql2 = "INSERT INTO korisnik(ime, prezime, datum_rodjenja, email, telefon, testovi, voznja, imelogin) VALUES ('$ime','$prezime','$datum','$email','$telefon',0,0,'$imelogin')";
if ($conn->query($sql2) === TRUE) 
{
    header("Location: index.php");
} 

$conn->close();

?>