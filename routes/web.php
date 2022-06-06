<?php

use Illuminate\Support\Facades\Route;
use Reddatasrd\Send\Send;
use Reddatasrd\Send\SendFacade;

Route::get('/send', function(){
    $para='Rosarioedwinac@gmail.com,kmr105@hotmail.com';
    $titulo='Prueba Final';
    $vista='Send::index.index';//Send::
    $mensaje='Envio de Prueba de nueva libreria crada por Edwin Rosario';//Send::
    return Send::toHtml($para, $titulo, $mensaje,$vista);
});