<?php
$raca = $_POST['raca'];
$tamanho = $_POST['tamanho'];
$olho = $_POST['corolho'];
$pele = $_POST['pele'];
$cabelo = $_POST['corcabelo'];
$class = $_POST['classe'];

$linha = date('d/m/Y H:i:s') . " PERSONDETAIL: " . $raca . " | " . $tamanho . " | " . $olho . " | " . $pele . " | " . $cabelo . " | " . $class . PHP_EOL;
file_put_contents('../Dados.txt',$linha, FILE_APPEND);

header('location: ../_HTML/PetCreate.html');
exit();
?>