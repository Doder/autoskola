<?php

if (($_FILES['post-image']['name']!="")){
// Where the file is going to be stored
    $target_dir = "img/upload/";
    $file = $_FILES['post-image']['name'];
    $path = pathinfo($file);
    $filename = $path['filename'];
    $ext = $path['extension'];
    $temp_name = $_FILES['post-image']['tmp_name'];
    $path_filename_ext = $target_dir.$filename.".".$ext;
    
    // Check if file already exists
    if (!file_exists($path_filename_ext)) {
        move_uploaded_file($temp_name,$path_filename_ext);
    }

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

    $naslov = $_POST['post-title'];
    $datum = date('Y-m-d');
    $tekst = $_POST['post-text'];
    $slika = $path_filename_ext;

    session_start();
    if($_SESSION['user_type'] == 'admin'){
        $sql = "INSERT INTO post(naslov, datum, tekst, slika) VALUES ('$naslov', '$datum', '$tekst', '$slika')";
        if ($conn->query($sql) === TRUE) 
        {
            //header("Location: index.php");
        } 
    }

    $conn->close();
}

//header('Location: index.php');