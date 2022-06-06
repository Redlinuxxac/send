<?php

namespace Reddatasrd\Send;


class Send 
{
    /**
     * $para
     * $titulo
     * $mensaje
     * $cabeceras
     */
    static function to($para, $titulo, $mensaje, $cabeceras)
    {
        mail($para, $titulo, $mensaje, $cabeceras);
    }
}