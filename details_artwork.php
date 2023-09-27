<!doctype html>
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
    <!-- Call files -->
    <?php 
        include_once('artworks.php');
        include_once('functions.php');
        include('header.php');
    ?>
    <main>
        <!-- Redirect to home if $artworks is empty or if id does not exist, is not a number or is empty -->
        <?php 
            if(empty(getArtworks($artworks)) || !isset($_GET['id']) || !filter_var($_GET['id'], FILTER_VALIDATE_INT) || empty($_GET['id']))
            {
                header('Location:index.php');
            } 
        ?>
        <!-- Loop on the array of the work retained in the getArtworks() function -->
        <?php foreach(getArtworks($artworks) as $artwork) : ?>
            <article id="detail-oeuvre">
                <div id="img-oeuvre">
                    <img src=<?php echo $artwork['image']; ?> alt=<?php echo $artwork['title']; ?>>
                </div>
                <div id="contenu-oeuvre">
                    <h1><?php echo $artwork['title']; ?></h1>
                    <p class="description"><?php echo $artwork['author']; ?></p>
                    <p class="description-complete">
                        <?php echo $artwork['description']; ?>
                    </p>
                </div>
            </article> 
        <?php endforeach ?>
    </main>
    <?php include('footer.php'); ?>
</body>
</html>
