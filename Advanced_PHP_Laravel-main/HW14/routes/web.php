<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

// Добавлен тестовый маршрут для проверки изменений
Route::get('/copilot-test', function () {
    return 'Изменение от Copilot';
});
