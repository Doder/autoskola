<?php
    session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Auto Skola</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="./slick/slick.css">
  <link rel="stylesheet" type="text/css" href="./slick/slick-theme.css">
  
</head>
<body>
    <header>
        <nav class="header-nav">
            <ul class="nav-left">
                <li>
                    <a href="index.php">Pocetna</a>
                </li>
                <li>
                    <a href="about.php">O nama</a>
                </li>
                <li>
                    <a href="instruktori.php">Instruktori</a>
                </li>
                <li>
                    <a href="contact.php">Kontakt</a>
                </li>
                <?php 
                if(isset($_SESSION['user_type']) and $_SESSION['user_type'] == 'admin'){
                    echo '<li><a href="new_post.php">Dodaj objavu</a></li>';
                }
                ?>
            </ul>
            <?php
            
            if(isset($_SESSION['user_type'])){
                echo '<ul class="nav-right">';
                echo '<li><span>' . $_SESSION['username'] . '</span></li>';
                echo '<li><a href="logout.php">Izloguj se</a></li></ul>';
            }
            else{
                echo '
                <ul class="nav-right">
                    <li>
                        <a href="login.php">Uloguj se</a>
                    </li>
                    <li>
                        <a href="register.php">Registruj se</a>
                    </li>
                </ul>
                ';
            } ?>
            
        </nav>
    </header>