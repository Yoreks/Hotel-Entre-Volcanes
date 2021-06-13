<?php

$Email = "josuegarcia1300@gmail.com";

$Asunto = "Comentarios del Usuario";

$Nombre = $_POST["Fnombre"];
$Correo = $_POST["Fcorreo"];
$Asunto = $_POST["Fasunto"];
$Mensaje = $_POST["Fmensaje"];

/*Concatenado*/

$mensajecompleto = "Nombre del Usuario: "      .$Nombre  ."\n"
					."Correo Personal: "       .$Correo  ."\n"
					."Asunto: "                .$Asunto  ."\n"
					."Mensaje del Usuario: "   .$Mensaje;

$paginaredirigida = "agradecimiento.html";

if(mail ($Email,$Asunto,$mensajecompleto))Header("location: $paginaredirigida");
?>