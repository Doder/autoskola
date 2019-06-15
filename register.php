<?php

include('pre-body.php');
?>
<main class="register-main">
    <div class="login-box" style = "color:black">
        <form action="register1.php">
            <label for="username">Korisnicko ime:</label>
            <br>
            <input type="text" id="username" placeholder="Unesite korisnicko ime..." name = "user">
            <br>
            <label for="password">Lozinka:</label>
            <br>
            <input type="password" id="password1" placeholder="Unesite lozinku..." name = "pass1">
            <br>
            <label for="password2">Ponovi lozinku:</label>
            <br>
            <input type="password" id="password2" placeholder="Ponovite lozinku..." name = "pass2">
            <br>
            <label for="username">Ime:</label>
            <br>
            <input type="text" id="ime" placeholder="Ime" name = "ime">
            <br>
            <label>Prezime:</label>
            <br>
            <input type="text" id="prezime" placeholder="Prezime" name = "prezime">
            <br>
            <label>Datum rođenja:</label>
            <br>
            <input type="date" id="datum" name = "datumr">
            <br>
            <label>Email:</label>
            <br>
            <input type="email" id="eadresa" placeholder="Email" name = "mail">
            <br>
            <label>Broj telefona:</label>
            <br>
            <input type="text" id="telefon" placeholder="Telefon" name = "brojtel">
            <br>
            <input type="submit" value="Registruj se">
        </form>
        <p class="info-small">Imate nalog? <a href="login.php">Uloguj se</a></p>
    </div>
</main>
<?php
include('post-body.php');
?>