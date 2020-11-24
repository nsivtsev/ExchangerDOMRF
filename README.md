# Конвертер валют
Laravel + VueJS

### 1. Настроить соединение с БД в .env
Пример для SQLite
```
DB_CONNECTION=sqlite
DB_HOST=/database/database.sqlite
```

### 2. Установка:
```
composer install
npm install
php artisan migrate
php artisan db:seed --class=CurrencySeeder
```

### 3. Запуск
```
php artisan serve
npm run dev
```
Сайт будет доступен по адресу
```
http://127.0.0.1:8000/
```
