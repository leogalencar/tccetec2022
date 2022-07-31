<?php

if (isset($_POST['email']) && !empty($_POST['email'])) {
    $nome = addslashes($_POST['nome']);
    $assunto = addslashes($_POST['assunto']);
    $email = addslashes($_POST['email']);
    $telefone = addslashes($_POST['telefone']);
    $mensagem = addslashes($_POST['mensagem']);

    $to = 'mamacosovietico@gmail.com';
    $subject = '[Contato] ' . $assunto;
    $body = "
        <html>
            <p><b>Nome: </b>{$nome}</p>
            <p><b>Email: </b>{$email}</p>
            <p><b>Telefone: </b>{$telefone}</p>
            <p><b>Mensagem:</b></p>
            <p>{$mensagem}</p>
        </html>
    ";

    $header = "From: $nome <$email> \r\n";
    $header .= "MIME-Version: 1.0\r\n";
    $header .= "Content-type: text/html; charset=iso-8859-1\r\n";

    if (mail($to, $subject, $body, $header)) {
        echo 'E-mail enviado com sucesso';
    } else {
        echo 'Erro';
    }
}
