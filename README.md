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

# ERD
<img width="553" alt="erd" src="https://user-images.githubusercontent.com/66292801/139231458-8d8e9e0c-b162-4ce3-9057-fdeb4746af4e.png">

# Screen Transition Chart
![screen_transition_chart](https://user-images.githubusercontent.com/66292801/139380593-9f861c39-98af-4229-b7d7-413d50fa4fc9.png)
