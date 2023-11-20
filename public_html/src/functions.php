<?php
/*

################################################## 

Page Routting Methods

*/
function page_router()
{

    $url = $_SERVER['REQUEST_URI'];

    $page = [
        "/news" => "src/archive.php",
        "/post" => "src/single.php",
    ];

    $template = 'theme/pages' . $url . '.php';

    foreach($page as $page_name => $path ){
        if (str_starts_with($url, $page_name)) {
            $template = $path;
        }
    }

    if ($url == '/') $template = 'theme/pages/front-page.php';

    include_once(file_exists($template) ? $template : './theme/pages/404.php');

}


/*

################################################## 

Template Directory Methods

*/

$directory = dirname(__DIR__);

function get_template_directory_uri()
{
    return home_url();
}


function get_template_part($path)
{
    global $directory;
    include("$directory/$path.php");
}


function esc_url($url)
{
    return htmlspecialchars($url, ENT_QUOTES, 'UTF-8');
}


function home_url($page_slug = '')
{

    $base_url = ($_SERVER['HTTPS'] ?? 'off') === 'on' ? 'https://' : 'http://';
    $base_url .= $_SERVER['HTTP_HOST'];

    if (!empty($page_slug)) {
        $page_slug = ltrim($page_slug, '/');
        $base_url .= '/' . $page_slug;
    }

    return $base_url;
}


/*

################################################## 

Page Methods

*/
function is_front_page()
{
    return $_SERVER['REQUEST_URI'] === '/';
}


function is_page($page_slug)
{

    $requested_uri = $_SERVER['REQUEST_URI'];
    $page_slug = '/' . ltrim($page_slug, '/');

    return strpos($requested_uri, $page_slug) === 0;

}

?>