<?php
// Inclui o arquivo com o sistema de segurança
require_once("seguranca.php");

session_destroy();
header("Location: ../../Jokah/index.html");
?>