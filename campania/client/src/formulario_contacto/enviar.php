<?php
require "PHPMailer/Exception.php";
require "PHPMailer/PHPMailer.php";
require "PHPMailer/SMTP.php";
 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
 
$oMail= new PHPMailer();
$oMail->isSMTP();
$oMail->Host="smtp.gmail.com";
$oMail->Port=587;
$oMail->SMTPSecure="tls";
$oMail->SMTPAuth=true;
$oMail->Username="ecuarefills@gmail.com";
$oMail->Password="Proyecto1";

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];

$carta = "De: $nombre"."<br>"."";
$carta .= "Correo: $correo" ."<br>"."";
$carta .= "Telefono: $telefono " ."<br>"."";
$carta .= "Asunto: $asunto " ."<br>"."";
$carta .= "Mensaje: $mensaje ";

$oMail->setFrom( $correo, $nombre); //direccion cliente
$oMail->addAddress("ecuarefills@gmail.com"); //correo final
$oMail->Subject= $asunto;
$oMail->msgHTML($carta);
 
if(!$oMail->send($destinatario, $asunto, $carta))
  echo $oMail->ErrorInfo; 
// llamando a los campos

mail($destinatario, $asuntoC, $carta);
header('Location:mensaje_envio.html');

?>