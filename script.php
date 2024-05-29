<!-- 
smtp.serviciodecorreo.es
helpinpartes@aes-multimedia.com
bpBYwGe7y3 -->


<!-- Primero en la carpeta del proyecto descargar el composer con este comando composer require "swiftmailer/swiftmailer:^6.0" -->
<!-- Hacer un scipt -->

<?php

require_once 'vendor/autoload.php';

// Create the Transport
$transport = (new Swift_SmtpTransport('smtp.serviciodecorreo.es', 465, 'ssl'))
  ->setUsername('helpinpartes@aes-multimedia.com')
  ->setPassword('bpBYwGe7y3')
;



// Create the Mailer using your created Transport
$mailer = new Swift_Mailer($transport);

// Create a message
$message = (new Swift_Message('Prueba Asunto'))
  ->setFrom(['helpinpartes@aes-multimedia.com'])
  ->setTo(['matiasivanmartinez@gmail.com'])
  //->setTo(['receiver@domain.org', 'other@domain.org' => 'A name'])
  ->setBody('Prueba de correo')
  ;

// Send the message
$result = $mailer->send($message);

?>