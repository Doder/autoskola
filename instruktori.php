<?php
include('header.php');
?>
<main class="main-padding main-margins">
<div class="container-box">
    
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
$sql1 = "SELECT instruktor.id, instruktor.ime, instruktor.prezime, instruktor.slika
FROM instruktor";

$upit = $conn->query($sql1) or die($conn->error);

echo "<table class=\"instruktori-table\">";
echo "<tr>
<th>Slika</th>
<th>Ime</th>
<th>Kategorije</th>
</tr>";

while($rows = $upit->fetch_assoc() )
{ 
    $sql2 = "SELECT kategorijainstruktor.naziv_kategorije FROM kategorijainstruktor WHERE kategorijainstruktor.id_instruktora = " . $rows['id'];
    $upit2 = $conn->query($sql2);
    $sveKategorije = '';
    while($rows2 = $upit2->fetch_assoc())
    {
        $sveKategorije .= $rows2['naziv_kategorije'] . ' ';
    }

    echo "<tr>";
    echo "<td><img src = ".$rows['slika']. " wigth = '100px' height = '120px'></td>";
    echo "<td>" . $rows['ime'] . " " . $rows['prezime'] . "</td>";
    echo "<td>" . $sveKategorije . "</td>";
    echo "</tr>";
}

echo "</table>";
$conn->close();

?>
    
    </div>
</main>


<?php
include('footer.php');
?>