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
     * @param $to
     * @param $Subject
     * @param $mensaje
     * @param $vista
     * @param $FromMail
     */
    static function toHtml($toAddress, $subject='Prueba',$mensaje='Prueba',$vista='',  $fromMail="inf@elizabethgconstruction.com")
    {
        // Para enviar un correo HTML, debe establecerse la cabecera Content-type
        $para        = explode(",", $toAddress);
        $nD=sizeof($para);
        if($nD==1){
            $para=$para[0];
        }
        else
        {$n=1;$x='';
            foreach($para as $pa)
            {
                if($n==$nD){
                             $x.= $pa;
                            }
                else{
                    $x.= $pa.',';
                }
                $n++;
            }$para =$x;
        }
        $cabeceras[] = 'MIME-Version: 1.0';
        $cabeceras[] = 'Content-type: text/html; charset=utf-8';   
        $cabeceras[] = 'To: '.$para;
        $cabeceras[] = 'From: '.$fromMail; 
        if($vista!=''){
                $mensaje = view($vista, compact('subject', 'mensaje'));
            }
        else{
            $mensaje=$mensaje;
        }

        mail($para, $subject, $mensaje, implode("\r\n", $cabeceras));
    }
}