<?php
$nome = addslashes($_POST['nome']);
$email = addslashes($_POST['email']);
$telefone = addslashes($_POST['telefone']);

$para = "pinhom913@gmail.com";
$assunto = "Dúvidas e mensagens";

$corpo = "Nome:" . $nome . "\n" . "Email:" . $email . "\n" . "Telefone:" . $telefone;

$cabeca = "From: pinhom913@gmail.com" . "\n" . "Reply-to:" . $email . "\n" . "X=Mailer:PHP/" . phpversion();

if (mail($para, $assunto, $corpo, $cabeca)) {
    echo "Email enviado com sucesso!";
} else {
    echo "Houve um erro ao enviar email";
}
?>