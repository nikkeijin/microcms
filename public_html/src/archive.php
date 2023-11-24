<?php include_once('api.php'); ?>

<?php

    $perPage = 6;
    $page = isset($_GET['page']) ? max(1, intval($_GET['page'])) : 1;

    global $archive;
    $archive = $client->list("news", [
        'offset' => ($page - 1) * $perPage,
        'limit' => $perPage
    ]);

    $totalPages = ceil($archive->totalCount / $perPage);

    include(__DIR__ . '/../theme/archive/archive.php');
    
    function the_post() {

        global $archive;

        foreach ($archive->contents as $single_page) {

            /*
            echo '<pre>';
                print_r($archive);
            echo '</pre>';
            */

            $the_ID = $single_page->id;
            $the_title = $single_page->title;
            $the_content = $single_page->content;
            $the_permalink = "post?id=" . $the_ID;
            $the_category = isset($single_page->category->name) ? $single_page->category->name : '';
            $the_post_thumbnail_url = isset($single_page->thumbnail->url) ? $single_page->thumbnail->url : 'https://picsum.photos/1024';
            
            if (function_exists('have_posts')) have_posts($the_ID, $the_title, $the_category, $the_content, $the_permalink, $the_post_thumbnail_url);

        }
    }

?>

<?php

function have_posts($the_ID, $the_title, $the_category, $the_content, $the_permalink, $the_post_thumbnail_url) {
    include(__DIR__ . '/../theme/components/post.php');
}

?>


<?php
    function the_posts_pagination($page, $totalPages){ 
        if ($page > $totalPages && $totalPages > 0) { include_once('404.php'); } 
        else { ?>
            <!-- pagination-->
            <div class="nav-links">
            <?php if ($page > 1): ?>
            <a class="prev page-numbers" href="?page=<?php echo $page - 1; ?>">Previous</a>
            <?php endif; ?>

            <?php for ($i = 1; $i <= $totalPages; $i++): ?>
            <a class="page-numbers" href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
            <?php endfor; ?>

            <?php if ($page < $totalPages): ?>
            <a class="next page-numbers" href="?page=<?php echo $page + 1; ?>">Next</a>
            <?php endif; ?>

            </div>
        <?php } ?>
<?php } ?>
