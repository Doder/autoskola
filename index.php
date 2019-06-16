<?php include('header.php') ?>
<main>
    <div class="slider">
        <img src="img/clio.jpg" alt="clio">
        <img src="img/golf.jpg" alt="golf">
        <img src="img/yaris.jpg" alt="yaris">
        <img src="img/suzuki.jpg" alt="suzuki">
        <img src="img/honda.jpg" alt="honda">
    </div>
    <div class="slider-text">
        <h1>Auto škola Zeleni Signal</h1>
        <p>Vršimo obuku vozača za A, B, C, D i E kategorije. </p>
        <p>Najbolji instruktori će Vas naučiti sve što treba za bezbjednu vožnju.</p>
    </div>
    <div class="info-container main-padding">
        <h1>Obavjestenja</h1>
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
    $upit = 'SELECT * FROM post';
    $response = $conn->query($upit);
    while($row = $response->fetch_assoc()){
        $kraciTekst = substr($row['tekst'], 0, 300);
        echo '<div class="post">';
        echo '<img src="' . $row['slika'] . '" alt="post-image" width="300px">';
        echo '<div style="width:100%;"><div class="post-title">';
        echo '<h2>' . $row['naslov'] . '</h2>';
        echo '<p class="post-date">' . $row['datum'] . '</p></div>';
        echo '<p>' . $kraciTekst . '</p>';
        echo '<a href="post.php?post_id=' . $row['id'] . '" class="read-more">Procitaj vise</a></div></div>';
    }

?>
    </div>
</main>
<?php include('footer.php') ?>