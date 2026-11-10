<?php

$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$senha = $_POST['senha'];
$csenha = $_POST['csenha'];
$email = $_POST['email'];
$cemail = $_POST['cemail'];

if ($csenha === $senha and $cemail === $email) {
    $linha = date('d/m/Y H:i:s') . " LOGIN: " . $nome . " | " . $sobrenome . " | " . $senha . " | " . $csenha . " | " . $email . " | " . $cemail . PHP_EOL;
    file_put_contents('../Dados.txt',$linha, FILE_APPEND);
    header('Location: ../_HTML/CreatePerson.html');
    exit();
}elseif ($csenha !== $senha and $cemail === $email){
    echo "Senhas não correspondem uma com a outra!!!";
}elseif ($cemail !== $email and $csenha === $senha){
    echo "Emails não correspondem um com o outro!!!";
}else {
    echo "Senhas não correspondem uma com a outra!!! | ";
    echo "Emails não correspondem um com o outro!!!";
} 



?>