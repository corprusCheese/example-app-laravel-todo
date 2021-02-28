<p>Это - заготовка блога на фреймворке Laravel</p>

Понадобится PHP 7 (Laravel 8), .sqlite файл, установить npm, composer.

<h2>Установка</h2>
<ul>
<li>composer install</li>
<li>создать базу данных sqlite или воспользоваться моей (скинул её в репозиторий в папку database)</li>
<li>в файле .env сунуть свой абсолютный путь к базе sqlite (DB_DATABASE=/home/corpruscheese/PhpstormProjects/example-app/example-app-laravel-todo/database/database.sqlite)
</li>
<li>php artisan migrate, если новая база</li>
<li>php artisan storage:link</li>
<li>npm install</li>
</ul>

<h2>Запуск</h2>
<ul>
<li>php artisan serve</li>
<li>npm run watch</li>
</ul>

<h3>Что сделано (пока что)</h3>
<ul>
<li>Регистрация и логин</li>
<li>Поиск пользователей по имени</li>
<li>Личный кабинет</li>
<li>Можно создавать, менять и удалять свои записи, на чужие можно только смотреть</li>
<li>Можно отправлять письма клиенту, если, например, ты хочешь поменять пароль</li>
</ul>
