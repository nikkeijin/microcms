<h1 style="text-align: center; color: tomato;">News</h1>

<section>
    <?php the_post(); ?>
</section>

<?php the_posts_pagination($page, $totalPages); ?>