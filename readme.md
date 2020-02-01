###Laravel ブログ
##DEMO
<img src = "demo blog.gif">

##動作環境確認
- Amazon Linux
- PHP 7.2.24
- Laravel 6.5.0
- MySQL 5.7.27

##初期設定
```
$git clone https://github.com/amanoworld/blog
$cp .env.example .env
$vi .env
$php artisan key:generate
$composer install
$npm install
$npm run dev
```

##DB設定
```
$php artisan migrate
$php artisan serve
```
