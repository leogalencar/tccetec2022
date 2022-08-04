<?php

date_default_timezone_set('America/Sao_Paulo');

require_once('../src/PHPMailer.php');
require_once('../src/SMTP.php');
require_once('../src/Exception.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;



if ((isset($_POST['email']) && !empty(trim($_POST['email']))) && (isset($_POST['mensagem']) && !empty(trim($_POST['mensagem'])))) {

    $nome = !empty($_POST['nome']) ? $_POST['nome'] : 'Não informado';
    $email = $_POST['email'];
    $telefone = !empty($_POST['telefone']) ? $_POST['telefone'] : 'Não informado';
    $assunto = !empty($_POST['assunto']) ? utf8_decode($_POST['assunto']) : 'Não informado';
    $mensagem = $_POST['mensagem'];
    $data = date('d/m/Y H:i:s');

    $mail = new PHPMailer();
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'mamacosovietico@gmail.com';
    $mail->Password = 'nikdaugzpswnqqeb';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; 
    $mail->Port = 465;

    $mail->setFrom($email, $nome);
    $mail->addAddress('mamacosovietico@gmail.com');

    $mail->isHTML(true);
    $mail->Subject = $assunto;
    $mail->Body = "<b>Nome:</b> {$nome}<br>
                    <b>Email: </b>{$email}<br>
                    <b>Telefone:</b> {$telefone}<br>
                    <b>Data/hora:</b> {$data}<br><br>
                    <b>Mensagem:</b><br>{$mensagem}";
    $mail->AltBody = 'Corpo do email';

    if ($mail->send()) {
        echo 'Email enviado com sucesso.';
    } else {
        echo "Email não enviado. Erro: {$mail->ErrorInfo}";
    }
} else {
    echo 'Email não enviado: informar o email e a mensagem.';
}
