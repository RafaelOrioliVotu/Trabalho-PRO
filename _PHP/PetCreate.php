<?php
$username = $_POST['petname'];
$server = $_POST['especie'];
$desc = $_POST['corp'];
$sexo = $_POST['cors'];
$spawn = $_POST['utilidade'];

$linha = date('d/m/Y H:i:s') . " CREATEPERSON: " . $petname . " | " . $server . " | " . $desc . " | " . $sexo . " | " . $spawn . PHP_EOL;
file_put_contents('../Dados.txt',$linha, FILE_APPEND);

header('location: ../_HTML/Login.html');
?>