FROM php:8.4-cli

RUN apt-get update && apt-get install -y \
    git unzip zip curl sqlite3 libsqlite3-dev \
    nodejs npm

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /app

COPY . .

RUN composer install --no-dev --optimize-autoloader

RUN npm install
RUN npm run build

RUN touch database/database.sqlite

EXPOSE 8080

CMD php artisan serve --host=0.0.0.0 --port=8080