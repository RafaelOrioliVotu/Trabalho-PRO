<?php

$nome = $_POST['nome'];
$sobrenome = $_POST['Sobrenome'];
$senha = $_POST['Senha'];
$csenha = $_POST['cSenha'];
$email = $_POST['email'];
$cemail = $_POST['cemail'];

$linha = date('d/m/Y H:i:s') . " LOGIN: " . $nome . " | " . $sobrenome . " | " . $senha . " | " . $csenha . " | " . $email . " | " . $cemail . PHP_EOL;
file_put_contents('../Dados.txt',$linha, FILE_APPEND);

if ($csenha === $senha and $cemail === $email) {
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