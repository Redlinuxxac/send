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
    static function toHtml($toAddress, $subject='Prueba', $mensaje='Prueba', $fromMail="inf@elizabethgconstruction.com")
    {
        // Para enviar un correo HTML, debe establecerse la cabecera Content-type
        $para        = implode(",", $toAddress);
        $cabeceras[] = 'MIME-Version: 1.0';
        $cabeceras[] = 'Content-type: text/html; charset=utf-8';   
        $cabeceras[] = 'To: '.$para;
        $cabeceras[] = 'From: '.$fromMail; 
        $mensaje = view("$mensaje", compact('titulo', 'mensaje'));

        mail($para, $subject, $mensaje, implode("\r\n", $cabeceras));
    }
}