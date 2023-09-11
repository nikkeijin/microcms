# Headless microcms.io with PHP
    
```
https://microcms.io/
```
    
# Composer
    
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
    
# Setting up your API KEY from microcms.io
    
public_html/src/.env
```bash
MICROCMS_API_USERNAME=YOUR_DOMAIN
MICROCMS_API_KEY=YOUR_API_KEY
```
    
# Docker
    
```bash
docker-compose up -d
```
    
```
http://localhost
```
