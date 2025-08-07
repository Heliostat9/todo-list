# To-Do List

Запуск приложения:

1. Установите зависимости, скопируйте env, создайте ключ
```bash
composer install
cp .env.example .env
php artisan key:generate
```

2. Запуск контейнеров 
```bash
./vendor/bin/sail up -d
```

3. Запуск миграций
```bash
./vendor/bin/sail artisan migrate
```
