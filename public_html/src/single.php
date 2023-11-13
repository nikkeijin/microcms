<?php include_once('api.php'); ?>

<?php

    if (isset($_GET['id'])) {
        $postId = $_GET['id'];
        $result = $client->get("news", $postId);

        $the_title = $result->title;
        $the_content = $result->content;

        if (isset($result->thumbnail) && isset($result->thumbnail->url)) {
            $the_post_thumbnail_url = $result->thumbnail->url;
        } else {
            $the_post_thumbnail_url = 'https://picsum.photos/1024';
        }
        
    } else {
        header("Location: 404.php");
        exit;
    }

?>

