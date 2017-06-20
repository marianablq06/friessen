<?php
  $asunto = $_POST['mensaje'];
  $correo = $_POST['email'];
  $telefono = $_POST['telefono'];
  $cabeceras = "From: Friessen". "\r\n";
  $cabeceras.="MIME-Version: 1.0\r\n";
  $cabeceras.="Content-Type: text/html; charset=UTF-8\r\n";
  $nombre = $_POST['nombre'];
  $mensaje = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title></title>
    </head>
    <body>
        <table border="0" cellpadding="0" cellspacing="0" height="100%" width="100%" id="bodyTable">
            <tr>
                <td align="center" valign="top">
                    <table border="0" cellpadding="20" cellspacing="2" width="600" id="emailContainer">
                        <tr>
                            <td style="width: 100%;">
                                <img src="http://friessen.mx/img/friessen-dark.svg" style="display: block;margin:0 auto;    width: 200px;"/>
                            </td>
                        </tr>
                        <tr style="font-family: sans-serif;    letter-spacing: 1px;">
                            <td>
                            <div style="display: inline-block;">Nombre:</div>
                            <div style="display: inline-block;">'.$nombre.'</div>
                            </td>
                        </tr>
                        <tr style="font-family: sans-serif;    letter-spacing: 1px;">
                            <td>
                            <div style="display: inline-block;">Teléfono:</div>
                            <div style="display: inline-block;">'.$telefono.'</div>
                            </td>
                        </tr>
                        <tr style="font-family: sans-serif;    letter-spacing: 1px;">
                            <td>
                            <div style="display: inline-block;">Email:</div>
                            <div style="display: inline-block;">'.$correo.'</div>
                            </td>
                        </tr>
                        <tr style="font-family: sans-serif;    letter-spacing: 1px;">
                            <td>
                            <div style="display: inline-block;">Mensaje:</div>
                            <div style="display: inline-block;">'.$asunto.'</div>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </body>
</html>';
  /*$mensaje = 'Nombre:'.$nombre. "\r\n" .'Teléfono:'.$telefono. "\r\n".'Ciudad: '.$ciudad."\r\n";
  if($asunto != 'No soy cliente Megacable'){
    $mensaje .= 'Número de suscriptor: '.$suscriptor;

  }else{
    $mensaje .= 'Estado: '.$estado;
  }*/
  //$mensaje = 'Nombre: '.$nombre.'';
  mail('ventas@friessen.mx,marianablq06@gmail.com',$asunto,$mensaje,$cabeceras);
?>