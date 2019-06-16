<?php include('header.php') ?>
<main class="main-padding main-margins">
    <div class="new-post-container">
        <h1>Nova Objava</h1>
        <form method="post" action="add_post.php" enctype="multipart/form-data">
            <label for="post-image">Slika:</label>
            <br>
            <input type="file" id="post-image" name="post-image">
            <br>
            <label for="post-title">Naslov:</label>
            <br>
            <input type="text" id="post-title" name="post-title">
            <br>
            <label for="post-txt">Objava:</label>
            <br>
            <textarea placeholder="Tekst..." id="post-txt" name="post-text" cols="60" rows="5"></textarea>
            <br>
            <input type="submit" class="read-more" value="Objavi">
        </form>
    </div>
</main>
<?php include('footer.php') ?>
