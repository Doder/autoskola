<?php

include('pre-body.php');
?>
<main class="login-main">
    <div class="login-box">
        <form action="">
            <label for="username">Korisnicko ime:</label>
            <br>
            <input type="text" id="username" placeholder="Unesite korisnicko ime...">
            <br>
            <label for="password">Pasvord:</label>
            <br>
            <input type="password" id="password" placeholder="Unesite pasvord...">
            <br>
            <label for="password2">Ponovi pasvord:</label>
            <br>
            <input type="password" id="password2" placeholder="Ponovi pasvord...">
            <br>
            <input type="submit" value="Registruj se">
        </form>
        <p class="info-small">Imate nalog, <a href="login.php">uloguj se</a></p>
    </div>
</main>
<?php
include('post-body.php');
?>