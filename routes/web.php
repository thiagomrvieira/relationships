<?php

Route::get('one-to-one', 'oneToOneController@oneToOne');

Route::get('/', function () {
    return view('welcome');
});

