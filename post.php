<?php include('header.php') ?>
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
    $postID = $_GET['post_id'];
    $sql1 = "SELECT * FROM post WHERE post.id = " . $postID;
    
    $upit = $conn->query($sql1);
    $row = $upit->fetch_assoc();
    if($row){
        $naslov = $row['naslov'];
        $tekst = $row['tekst'];
        $slika = $row['slika'];
        $datum = $row['datum'];
    }
    
    
?>
<main class="main-padding main-margins">
    <div class="container-box post-container">
        <img width="300px" src="<?php echo $slika ?>" alt="post image">
        <div>
            <h1><?php echo $naslov ?></h1>
            <p><?php echo $tekst ?></p>
            <p class="post-d"><?php echo $datum ?></p>
        </div>
    </div>
    <div class="comment-section">
        <h1>Komentari</h1>
        <div class="comments">
            <div class="single-comment container-box">
                <h3>Anton 30.01.2019</h3>
                <p>Meni je ovo bas super :)</p>
            </div>            
        </div>
        <?php 
        
        if (isset($_SESSION['user_type'])) {
            echo '
            <textarea placeholder="Ostavi komentar ovdje..." name="comment" id="comment" cols="60" rows="2"></textarea>
            <br>
            <br>
            <a href="#" class="read-more">Ostavi komentar</a>';
        } ?>
        
    </div>
    
</main>
<?php include('footer.php') ?>