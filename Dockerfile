FROM php:8.2.4-apache

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    zip \
    unzip \
    libicu-dev \
    libonig-dev \
    libxml2-dev \
    mariadb-client \
    && docker-php-ext-install \
    intl \
    pdo_mysql \
    mbstring \
    xml \
    bcmath \
    gd \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

# Install composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Set working directory
WORKDIR /var/www/html

# Copy composer files
COPY composer.json composer.lock ./

# Install Laravel dependencies
RUN composer install --no-interaction --no-dev --optimize-autoloader

# Copy application code
COPY . .

# Generate application key
RUN php artisan key:generate

# Set Apache configurations
RUN a2enmod rewrite

# Expose port 80
EXPOSE 80

# Start Apache server
CMD ["apache2-foreground"]