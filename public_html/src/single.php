<?php include_once('api.php'); ?>

<?php

function single_page($client) {

    try {
        $single_page = $client->get("news", $_GET['id']);
    } catch (Exception $e) {
        $single_page = false;
    }

    if(!$single_page) { include(__DIR__ . '/../theme/pages/404.php'); return; }

    $postId = $_GET['id'];
    $single_page = $client->get("news", $postId);

    $the_title = $single_page->title;
    $the_content = $single_page->content;

    if (isset($single_page->thumbnail) && isset($single_page->thumbnail->url)) {
        $the_post_thumbnail_url = $single_page->thumbnail->url;
    } else {
        $the_post_thumbnail_url = 'https://images.unsplash.com/photo-1661956602116-aa6865609028?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1064&q=80';
    }

    include(__DIR__ . '/../theme/archive/single.php');

}
single_page($client);

?>

