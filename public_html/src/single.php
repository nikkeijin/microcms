<?php include_once('api.php'); ?>

<?php

    if (isset($_GET['id'])) {
        $postId = $_GET['id'];
        $result = $client->get("news", $postId);

        $the_title = $result->title;
        $the_content = $result->content;
    } else {
        header("Location: 404.php");
        exit;
    }

?>

