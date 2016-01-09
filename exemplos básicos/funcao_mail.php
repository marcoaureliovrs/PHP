<?php
$headers = "MIME-Version: 1.1\n";
$headers .= "Content-type: text/plain; charset=iso-8859-1\n";
$headers .= "From: envia@raidertech.tecnologia.ws\n"; // remetente
$headers .= "Return-Path: envia@raidertech.tecnologia.ws\n"; // return-path
$headers .= "Reply-To: envia@raidertech.tecnologia.ws\n";

mail("envia@raidertech.tecnologia.ws", "Assunto da mensagem", "Corpo do email", $headers);
echo "Mensagem enviada com sucesso";
?>
