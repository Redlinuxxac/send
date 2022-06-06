<?php

use Illuminate\Support\Facades\Route;
use Reddatasrd\Send\Send;
use Reddatasrd\Send\SendFacade;

Route::get('/send', function(){
    $para='Rosarioedwinac@gmail.com';
    $titulo='Prueba Final';
    $mensaje='Send::index.index';//Send::
    return Send::toHtml($para, $titulo, $mensaje);
});