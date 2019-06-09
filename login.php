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
            <input type="submit" value="Uloguj se">
        </form>
        <p class="info-small">Nemate nalog, <a href="register.php">napravite ga</a></p>
    </div>
    
</main>
<?php
include('post-body.php');
?>