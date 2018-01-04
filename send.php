<?php
$nome = $_POST['nome'];
$email = $_POST['email'];
$message = $_POST['message'];

mail("fabioguimaraescorreia@gmail.com", "Contacto de site", $message,"From: $email\r\n");

?>