<?php

return array(
    // Для авторизации
    'user/login' => 'user/login',   // Вход пользователя
	'user/register' => 'user/register',
    'user/logout' => 'user/logout',   //выход из системы

    // Админпанель:
    'admin/student' => 'admin/addStudent',
    'admin/subject' => 'admin/addSubject',
    'admin/teacher' => 'admin/addTeacher',
    'admin' => 'admin/index',  //админпанель

    //главная страница
    'index.php' => 'site/index', // actionIndex в SiteController

    '' => 'site/index', // actionIndex в SiteController     - главная страница
);
