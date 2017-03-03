<?php

Route::get('/', 'HomeController@index');

Route::post('contact', 'ContactController@store');
