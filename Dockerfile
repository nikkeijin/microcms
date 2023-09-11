FROM php:8.1.0-apache

# Enable mod_rewrite
RUN a2enmod rewrite
