<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'Api'], function () {

    require 'web/api/post.php';
});


