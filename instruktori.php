<?php
include('header.php');
?>
<main class="main-padding main-margins">
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
$sql1 = "SELECT instruktor.id, instruktor.ime, instruktor.prezime, instruktor.slika, kategorijainstruktor.naziv_kategorije
FROM instruktor
INNER JOIN kategorijainstruktor ON kategorijainstruktor.id_instruktora = instruktor.id";
$upit = $conn->query($sql1);
echo "<table>";
while($rows = $upit->fetch_assoc())
{ 
    echo "<tr>";
    echo "<td><img src = ".$rows['slika']. " wigth = '100px' height = '120px'></td>";
    echo "<td>" . $rows['ime'] . " " . $rows['prezime'] . " " . $rows['naziv_kategorije'] . "</td>";
    echo "</tr>";
}

echo "<table>";
$conn->close();

?>
</main>


<?php
include('footer.php');
?>