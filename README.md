# Headless CMS Setup with MicroCMS

## Overview

This README.md guide helps you set up a headless Content Management System (CMS) using MicroCMS, a popular API-based CMS solution. The setup involves configuring Composer, the MicroCMS SDK, PHPDotEnv for environment variables, and using Docker for deployment.
    
## Prerequisites

Before you start, make sure you have the following prerequisites:

- A MicroCMS account: You need an account with MicroCMS to access your content data. You can sign up at https://microcms.io/.

## Installation

1. Composer Initialization

```bash
cd public_html
composer init
```

This step initializes Composer in your project's public_html directory. Composer is a dependency management tool for PHP projects.

2. Install MicroCMS SDK

```bash
composer require microcmsio/microcms-php-sdk
```

This command installs the MicroCMS SDK for PHP, which allows your application to interact with the MicroCMS API.

3. Install PHPDotEnv

```
composer require vlucas/phpdotenv
```

PHPDotEnv is used to manage environment variables. This command installs the PHPDotEnv package, which will be used to store your MicroCMS API credentials securely.

4. Set API Key

To access the MicroCMS API, you need to set your API credentials in an environment file located at public_html/src/.env.

Create the .env file if it doesn't exist, and add the following content:

```bash
MICROCMS_API_USERNAME=YOUR_DOMAIN
MICROCMS_API_KEY=YOUR_API_KEY
```

Replace YOUR_DOMAIN and YOUR_API_KEY with your actual MicroCMS API credentials.

5. End Point Configuration

In your application code, specifically in the public_html/src/archive.php file, you can retrieve data from the MicroCMS API using the MicroCMS SDK. For example:

```bash
$archive = $client->list("news");
```

This code demonstrates how to use the MicroCMS SDK to fetch data from the "news" endpoint. You can customize this endpoint to match your content structure.

6. Docker Deployment

Docker can be used to containerize and deploy your headless CMS application. To run your application in a Docker container, follow these steps:

```
docker-compose up -d
```

This command starts the Docker containers and deploys your application. You can access your headless CMS via a web browser at http://localhost.

By following these instructions, you can set up a headless CMS powered by MicroCMS, Composer, PHPDotEnv, and Docker for a scalable and efficient content management solution!
