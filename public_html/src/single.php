<?php include_once('api.php'); ?>

<?php

function single_page($client) {

    try {
        $single_page = $client->get("news", $_GET['id']);
    } catch (Exception $e) {
        $single_page = false;
    }

    if(!$single_page) { 
        include(__DIR__ . '/../theme/pages/404.php'); return; 
    }
    
    $postId = $_GET['id'];
    $single_page = $client->get("news", $postId);

    $the_title = $single_page->title;
    $the_content = $single_page->content;
    $the_category = isset($single_page->category->name) ? $single_page->category->name : '';
    $the_post_thumbnail_url = isset($single_page->thumbnail->url) ? $single_page->thumbnail->url : 'https://picsum.photos/1024';

    include(__DIR__ . '/../theme/archive/single.php');

}
single_page($client);

?>
