<?php

include('pre-body.php');
?>
<main class="login-main">
    <div class="login-box" style = "color:black">
        <form action="">
            <label for="username">Korisnicko ime:</label>
            <br>
            <input type="text" id="username" placeholder="Unesite korisnicko ime...">
            <br>
            <label for="password">Lozinka:</label>
            <br>
            <input type="password" id="password" placeholder="Unesite lozinku...">
            <br>
            <input type="submit" value="Uloguj se">
        </form>
        <p class="info-small">Nemate nalog? <a href="register.php">Registruj se</a></p>
    </div>
    
</main>
<?php
include('post-body.php');
?>