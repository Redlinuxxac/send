<?php

use Illuminate\Support\Facades\Route;
use Reddatasrd\Send\Send;
use Reddatasrd\Send\SendFacade;

Route::get('/send', function(){
    $nu=5;
    return Send::to($nu);
});