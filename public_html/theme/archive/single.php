<!-- Usable Variables
<?php //echo $the_ID ?>
    <?php //echo $the_title ?>
    <?php //echo $the_content ?>
    <?php //echo $the_permalink ?>
    <?php //echo $the_category ?>
    <?php //echo $the_post_thumbnail_url ?>
-->

<h1 style="text-align: center; color: tomato;">Content Page</h1>

<article>

    <h1 style="text-align: center;">
        <?= $the_title; ?>
    </h1>

    <div style="text-align: center;">
        <?= $the_content; ?>
        <hr>
    </div>

</article>