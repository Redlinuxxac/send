<?php

namespace Reddatasrd\Send;


class Send 
{
    /**
     * @param $para
     * @param $titulo
     * @param $mensaje
     */
    static function to($para, $titulo='Prueba', $mensaje='Prueba')
    {
        
        mail($para, $titulo, $mensaje);
    }
    /**
     * @param $para
     * @param $titulo
     * @param $mensaje
     * @param $cabeceras
     */
    static function toHtml($para, $titulo='Prueba', $mensaje='Prueba')
    {
        // Para enviar un correo HTML, debe establecerse la cabecera Content-type
        $cabeceras  = 'MIME-Version: 1.0' . "\r\n";
        $cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        $mensaje = view("$mensaje");
        
        mail($para, $titulo, $mensaje, $cabeceras);
    }
}