<?php

require_once('./vendor/autoload.php');

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$client = new \Microcms\Client(
    $_ENV['MICROCMS_API_USERNAME'],
    $_ENV['MICROCMS_API_KEY']
);