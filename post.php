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
        $id = $row['id'];
    }
    
    $sql2 = "SELECT * FROM komentari WHERE id_posta = '$id'";
    $upit = $conn->query($sql2);
    
    
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
            <?php
                while($row2 = $upit->fetch_assoc()){
                    $id_korisnika = $row2["id_korsinika"];
                    $datum_posta = $row2["datum"];
                    $tekst = $row2["tekst"];
                    $sql3 = 'SELECT imelogin from korisnik WHERE id = ' . $id_korisnika;
                    $upit = $conn->query($sql3) or die($conn->error);
                    $username = $upit->fetch_assoc()['imelogin'];
                    echo "
                    <div class=\"single-comment container-box\">
                        <h3>$username, <small>$datum_posta</small></h3>
                        <p>$tekst</p>
                    </div> 
                    ";
                }
            ?>           
        </div>
        <?php 
        
        if (isset($_SESSION['user_type'])) {
            echo '
            <form method="post" action="add_comment.php">
                <textarea placeholder="Ostavi komentar ovdje..." name="comment" id="comment" cols="60" rows="2"></textarea>
                <br>
                <input type="hidden" name="id" value="$postID" />
                <input type="submit" class="read-more" value="Ostavi komentar">
            </form>';
        } ?>
        
    </div>
    
</main>
<?php include('footer.php') ?>