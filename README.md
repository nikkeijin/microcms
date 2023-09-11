# Headless microcms.io with PHP
    
```
https://microcms.io/
```
    
# Composer, MicroCMS SDK and PHPDOTENV
    
```bash
cd public_html
```
    
```bash
composer init
```
    
```bash
composer require microcmsio/microcms-php-sdk
```
    
```bash
composer require vlucas/phpdotenv
```
    
# API KEY
    
public_html/src/.env
```bash
MICROCMS_API_USERNAME=YOUR_DOMAIN
MICROCMS_API_KEY=YOUR_API_KEY
```
    
# End Point
public_html/src/archive.php
```
$archive = $client->list("news");
```
    
# Docker
    
```bash
docker-compose up -d
```
    
```
http://localhost
```
