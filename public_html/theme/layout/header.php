<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/theme/assets/css/style.css">
    <script defer src="<?= get_template_directory_uri(); ?>/theme/assets/js/app.js"></script>
    <title>
        <?php
            $title = 'Static';
            if (is_front_page())
                $title = 'Home Page';
            if (is_page('news'))
                $title = 'News Archive';
            if (is_page('post'))
                $title = 'News Single';
            if (is_page('contact'))
                $title = 'Contact Us!';
            echo $title;
            ?>
    </title>
</head>
<body>

<header>
    <h1 style="text-align: center; color: tomato;">Header</h1>
    <nav>
        <ul style="display: flex; justify-content: center; gap: 4%;">
            <li><a href="<?= esc_url(home_url()); ?>">Home</a></li>
            <li><a href="<?= esc_url(home_url('about')); ?>">About</a></li>
            <li><a href="<?= esc_url(home_url('service')); ?>">Service</a></li>
            <li><a href="<?= esc_url(home_url('news')); ?>">News</a></li>
            <li><a href="<?= esc_url(home_url('contact')); ?>">Contact</a></li>
        </ul>
    </nav>
</header>
<hr>

<main>