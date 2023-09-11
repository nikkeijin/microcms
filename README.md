# Headless microcms.io with PHP

```bash
docker-compose up -d
```

```
http://localhost
```
        
# Composer
        
```bash
composer init
composer require microcmsio/microcms-php-sdk
```
    
```bash
composer require vlucas/phpdotenv
```

# Setting up API KEY from microcms.io

public_html/src/.env
```bash
MICROCMS_API_USERNAME=david
MICROCMS_API_KEY=XXXXXXXXXX
```
