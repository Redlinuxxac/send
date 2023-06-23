<?php

use Reddatasrd\Send\Send;
use Reddatasrd\Send\SendFacade;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;

Route::get('/tmp-send', function(){
    $para='Rosarioedwinac@gmail.com,kmr105@hotmail.com';
    $titulo='Prueba Final';
    $vista='Send::index.index';//Send::
    $mensaje='Envio de Prueba de nueva libreria crada por Edwin Rosario';//Send::
    $attach= asset('favicon.ico');
    return Send::toHtml($para, $titulo, $mensaje,$vista,$attach);
});