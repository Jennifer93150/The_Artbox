<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>The ArtBox</title>
</head>
<body>
    <?php include('header.php'); ?>
    <main>
        <?php
            include_once('artworks.php');
        ?>
        <div id="liste-oeuvres">
            <?php foreach($artworks as $artwork) : ?>
                <article class="oeuvre">
                    <a href="details_artwork.php?id=<?php echo $artwork['id']; ?>">
                        <img src=<?php echo $artwork['image']; ?> alt=<?php echo $artwork['title']; ?>>
                        <h2><?php echo $artwork['title']; ?></h2>
                        <p class="description"><?php echo $artwork['author']; ?></p>
                    </a>
                </article>
            <?php endforeach ?>
        </div>
    </main>
    <?php include('footer.php'); ?>
</body>
</html>