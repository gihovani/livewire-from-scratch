# Aplicacao feita em Laravel 11 (PHP 8.2+)

## 1 - Instalar a aplicacao e suas dependencias

1. sudo apt update
2. sudo apt install -y php php-cli php-common php-fpm php-mysql php-zip php-gd php-mbstring php-curl php-xml php-bcmath openssl php-json php-tokenizer php-sqlite3 composer
3. sudo composer install
4. sudo npm install



## 2 - Configurar aplicacao

1. touch database/database.sqlite
2. cp .env.example .env
3. php artisan key:generate
4. php artisan migrate:install
5. php artisan db:seed



## 3 - Executar a aplicacao

1. npm run dev
2. php artisan serve



## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
