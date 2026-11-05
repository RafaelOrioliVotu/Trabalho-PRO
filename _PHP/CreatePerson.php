<?php
$username = $_POST['username'];
$server = $_POST['servidor'];
$desc = $_POST['descrição'];
$sexo = $_POST['sexo'];
$spawn = $_POST['spawn'];

$linha = date('d/m/Y H:i:s') . " CREATEPERSON: " . $username . " | " . $server . " | " . $desc . " | " . $sexo . " | " . $spawn . PHP_EOL;
file_put_contents('../Dados.txt',$linha, FILE_APPEND);

header('location: ../PersonDetail.html');
?>