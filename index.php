<?php include('header.php') ?>
<main>
    <div class="slider">
        <img src="https://www.autokievit.nl/content/uploads/2017/05/1-renault-clio-serie-signature-iconic-700x380.jpg" alt="">
        <img src="https://www.bazalinkova.com/wp-content/uploads/2014/05/rent-a-acr-Beograd.jpg" alt="">
        <img src="https://ct.yimg.com/xd/api/res/1.2/1yHYoIceowlsybJbWlh72w--/YXBwaWQ9eXR3YXVjdGlvbnNlcnZpY2U7aD0zODE7cT04NTtyb3RhdGU9YXV0bzt3PTcwMA--/https://s.yimg.com/ob/image/47194374-e728-482b-aa0e-8f266353f4e5.jpg" alt="">
        <img src="https://www.surf4cars.co.za/motoring-news/wp-content/uploads/2014/09/swift-1_1800x1800-700x380.jpg" alt="">
        <img src="https://65e81151f52e248c552b-fe74cd567ea2f1228f846834bd67571e.ssl.cf1.rackcdn.com/ldm-images/2019-honda-fit-platinum-white.jpg" alt="">
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
        echo '<div><div class="post-title">';
        echo '<h2>' . $row['naslov'] . '</h2>';
        echo '<p class="post-date">' . $row['datum'] . '</p></div>';
        echo '<p>' . $kraciTekst . '</p>';
        echo '<a href="post.php?post_id=' . $row['id'] . '" class="read-more">Procitaj vise</a></div></div>';
    }

?>
    </div>
</main>
<?php include('footer.php') ?>