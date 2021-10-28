# AppName
BBApp

# Requirement
Laravel 7.30.4
PHP ^7.25

# Features
BBAppは新規登録/ログインをするときにページ遷移をすることなく、モダールのフォームで入力するだけで新規登録/ログインできます。
Twitterの様にタイムラインがあり、投稿した内容や投稿の削除がリアルタイムに反映されます。

# Installation
```bash
composer require laravel/ui "2.*"
php artisan ui bootstrap --auth
```

# Usage
MySqlのデータベースが必要です。
データベース名はbbappにしてください。
```bash
git clone https://github.com/nabecima/bbapp.git
cd bbapp
composer update
composer install
php artisan key:generate
php artisan migrate
php artisan serve
```
[Preview](http://localhost:8000/)
