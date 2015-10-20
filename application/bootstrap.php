<?php

// подключаем файлы ядра
<<<<<<< HEAD
//require_once 'core/model.php';
//require_once 'core/view.php';
//require_once 'core/controller.php';
//require_once 'core/route.php';

function __autoload($class){
	require_once __DIR__.'/core/'.$class.'.php';
=======

// require_once 'core/model.php';
// require_once 'core/view.php';
// require_once 'core/controller.php';
// require_once 'core/route.php';

session_start();
function __autoload($class)
{
   require_once __DIR__.'/core/'.$class.'.php';
>>>>>>> b84f6e15ee70604f245302eb71083521dbf8bc67
}

Route::start(); // запускаем маршрутизатор
