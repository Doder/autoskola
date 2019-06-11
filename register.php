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
            <label for="password2">Ponovi lozinku:</label>
            <br>
            <input type="password" id="password2" placeholder="Ponovite lozinku...">
            <br>
            <input type="submit" value="Registruj se">
        </form>
        <p class="info-small">Imate nalog? <a href="login.php">Uloguj se</a></p>
    </div>
</main>
<?php
include('post-body.php');
?>