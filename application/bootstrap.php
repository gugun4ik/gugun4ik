<?php

// подключаем файлы ядра
//require_once 'core/model.php';
//require_once 'core/view.php';
//require_once 'core/controller.php';
//require_once 'core/route.php';

function __autoload($class){
	require_once __DIR__.'/core/'.$class.'.php';
}

Route::start(); // запускаем маршрутизатор
