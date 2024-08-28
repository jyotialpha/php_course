<?php

use App\Services\Route;

Route::add('/','HomeController','index','GET'); 
Route::add('login','LoginController','index','GET');
Route::add('submit-login','LoginController','login','POST');
Route::add('logout','Dashboardcontroller','logout','GET');
Route::add('dashboard','Dashboardcontroller','index','GET');
Route::add('register','RegController','index','GET');
Route::add('submit-reg','RegController','register','POST');

