<?php
	$nom = $_POST["nombre"];
	$app = $_POST["apellidos"];
	$mail = $_POST["correo"];
	$pais = $_POST["pais"];
	$tel = $_POST["telefono"];
	$land = $_POST["landing"];

	ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = "info@testinerzia.com";
    $to = "cvillarroelgonzalez@gmail.com";
    $subject = "Contacto Inerzia";
    $message = '<!DOCTYPE html><html lang="es"><head><title>Inerzia</title>';
    $message .= '<style type="text/css"></style>';
    $message .= '</head><body><h4>Nuevo contacto</h4><ul><li><b>Nombre</b>: ' . $nom . '</li>';
    $message .= '<li><b>Apellidos</b>: ' . $app . '</li>';
    $message .= '<li><b>Correo</b>: ' . $mail . '</li>';
    $message .= '<li><b>Teléfono</b>: (' . $pais . ') ' . $tel . '</li>';
    $message .= '<li><b>Página de origen</b>: ' . $land . '</li>';
    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
    $headers .= "From:" . $from;
    $flagmail = 0;
    if(mail($to,$subject,$message, $headers)){
    	$mensaje = "Correo enviado correctamente.";
    }
    else{
    	$flagmail = 1;
    	$mensaje = "Ha habido un error con el envío. Por favor, envíe un correo a info@inerzia.com. Disculpe las molestias.";
    }
    $flagmail = 1;
    include 'correoOk.php';
?>