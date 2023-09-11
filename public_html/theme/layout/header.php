<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php
            $title = 'Static';
            if (is_front_page()) $title = 'Home';
            if (is_page('contact')) $title = 'Contact Us!';
            echo $title;
        ?>
    </title>
</head>
<body>

<header>
    <h1 style="text-align: center; color: tomato;">Header</h1>
    <?php get_template_part('./theme/layout/nav'); ?>
</header>
<hr>

<main>