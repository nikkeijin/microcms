<?php include_once('api.php'); ?>

<?php

    $perPage = 5;
    $page = isset($_GET['page']) ? max(1, intval($_GET['page'])) : 1;

    $archive = $client->list("news", [
        'offset' => ($page - 1) * $perPage,
        'limit' => $perPage
    ]);

    $totalPages = ceil($archive->totalCount / $perPage);

    foreach ($archive->contents as $single_page) {

        $the_id = $single_page->id;
        $the_title = $single_page->title;
        $the_content = $single_page->content;
        $the_permalink = "post?id=" . $the_id;

        if (isset($single_page->thumbnail) && isset($single_page->thumbnail->url)) {
            $the_post_thumbnail_url = $single_page->thumbnail->url;
        } else {
            $the_post_thumbnail_url = 'https://picsum.photos/1024';
        }

        if (function_exists('the_post')) the_post($the_id, $the_title, $the_content, $the_permalink, $the_post_thumbnail_url);

    }

?>

<?php

    function the_posts_pagination($page, $totalPages){ 
        if ($page > $totalPages && $totalPages > 0) { include_once('404.php'); } 
        else { ?>
            <!-- pagination-->
            <div class="pagination">
                <?php if ($page > 1): ?>
                    <a href="?page=<?php echo $page - 1; ?>">Previous</a>
                <?php endif; ?>
            
                <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                    <a href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
                <?php endfor; ?>
            
                <?php if ($page < $totalPages): ?>
                    <a href="?page=<?php echo $page + 1; ?>">Next</a>
                <?php endif; ?>
            </div>
        <?php } ?>

<?php } ?>
