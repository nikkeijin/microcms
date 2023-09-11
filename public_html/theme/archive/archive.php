<h1 style="text-align: center; color: tomato;">News</h1>

<?php include_once('./src/archive.php'); ?>

<?php function the_post($post_id, $the_title, $the_content, $the_permalink)
{ ?>
        <!-- article -->
        <article>
            <!-- title -->
            <h1>
                <a href="<?= $the_permalink; ?>"><?= $the_title; ?></a>
            </h1>
            <hr>
        </article>
<?php } ?>

<?php the_posts_pagination($page, $totalPages); ?>

