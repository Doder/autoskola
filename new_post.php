<?php include('header.php') ?>
<main class="main-padding main-margins">
    <div class="new-post-container">
        <h1>Nova Objava</h1>
        <label for="post-image">Slika:</label>
        <br>
        <input type="file" id="post-image">
        <br>
        <label for="post-title">Naslov:</label>
        <br>
        <input type="text" id="post-title">
        <br>
        <label for="post-txt">Objava:</label>
        <br>
        <textarea placeholder="Tekst..." id="post-txt" name="post-text" cols="60" rows="5"></textarea>
        <br>
        <a class="read-more">Objavi</a>
    </div>
</main>
<?php include('footer.php') ?>
