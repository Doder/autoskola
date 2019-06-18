<?php

include('pre-body.php');

?>
<main class="login-main">
    <div class="login-box" style = "color:black">
        <form action="log_in.php">
            <label for="username">Korisnicko ime:</label>
            <br>
            <input type="text" id="user" placeholder="Unesite korisnicko ime..." name="user">
            <br>
            <label for="password">Lozinka:</label>
            <br>
            <input type="password" id="pass" placeholder="Unesite lozinku..." name = "pass">
            <?php if(isset($_GET['error']) and $_GET['error'] == 1){
                echo '<p class="error-message">Pogresno korisnicko ime ili lozinka</p>';
            }
            ?>
            <br>
            <input type="submit" value="Uloguj se" name = "dugme">
        </form>
        <p class="info-small">Nemate nalog? <a href="register.php">Registruj se</a></p>
    </div> 

</main>
<?php
include('post-body.php');

?>