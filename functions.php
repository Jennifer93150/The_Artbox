<?php 
    // Call file
    include_once('artworks.php');

    // Check that id exists
    function isExistArtwork(array $artwork) : bool
    {
        if (array_key_exists('id', $artwork) && $_GET['id'] == $artwork['id']) {
            $isExisted = $artwork['id'];
        } else {
            $isExisted = false;
        }

        return $isExisted;
    }

    // Recovery of the work that corresponds to the id
    function getArtworks(array $artworks) : array
    {
        $valid_artworks = [];

        foreach($artworks as $detail_artwork) {
           // if id exists then add the work to the table
            if (isExistArtwork($detail_artwork)) {
                //the variable $detail_artwork is worth an info of a work
                $valid_artworks[] = $detail_artwork;
            }
        }
        return $valid_artworks;
    }
?>