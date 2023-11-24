<?php
    /*

    ################################################## 

    Fetching Data from API ($client)

    */

    include_once('api.php');

    $perPage = 6;
    $page = isset($_GET['page']) ? max(1, intval($_GET['page'])) : 1;

    global $archive;

    $archive = $client->list("news", [
        'offset' => ($page - 1) * $perPage,
        'limit' => $perPage
    ]);

    $totalPages = ceil($archive->totalCount / $perPage);
?>


<?php
    /*

    ################################################## 

    Archive Template

    */

    include(__DIR__ . '/../theme/archive/archive.php'); 
?>


<?php
    /*

    ################################################## 

    Setting Post Loop

    */
    function the_post() {
        global $archive;
        foreach ($archive->contents as $single_page) {
            $the_ID = $single_page->id;
            $the_title = $single_page->title;
            $the_content = $single_page->content;
            $the_permalink = "post?id=" . $the_ID;
            $the_category = isset($single_page->category->name) ? $single_page->category->name : '';
            $the_post_thumbnail_url = isset($single_page->thumbnail->url) ? $single_page->thumbnail->url : 'https://picsum.photos/1024';
            include(__DIR__ . '/../theme/components/post.php');
        }
    }
?>


<?php
    /*

    ################################################## 

    Setting Pagination

    */

    function the_posts_pagination($page, $totalPages) {

    if ($page > $totalPages && $totalPages > 0) return;
?>
    
    <!-- pagination-->
    <div class="nav-links">
        <?php if ($page > 1): ?>
        <a class="prev page-numbers" href="?page=<?php echo $page - 1; ?>">Previous</a>
        <?php endif; ?>

        <?php for ($i = 1; $i <= $totalPages; $i++): ?>
        <a class="page-numbers" href="?page=<?php echo $i; ?>">
            <?php echo $i; ?>
        </a>
        <?php endfor; ?>

        <?php if ($page < $totalPages): ?>
        <a class="next page-numbers" href="?page=<?php echo $page + 1; ?>">Next</a>
        <?php endif; ?>

    </div>
<?php } ?>
