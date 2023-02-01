<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'vendor/autoload.php';
class email
{
    function nova_senha($email_usuario, $senha, $usuario)
    {
        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->isSMTP(); //Send using SMTP
            $mail->Host = 'smtp.gmail.com'; //Set the SMTP server to send through
            $mail->SMTPAuth = true; //Enable SMTP authentication
            $mail->Username = 'mariano-bitelo@educar.rs.gov.br'; //SMTP username
            $mail->Password = 'ioxbfjwuqmsotmxs'; //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; //Enable implicit TLS encryption
            $mail->Port = 465; //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
            $mail->setFrom('mariano-bitelo@educar.rs.gov.br', 'Fecomércio Sesc Senac Tramandaí');
            $mail->addAddress($email_usuario, $usuario); //Add a recipient
            $mail->addReplyTo('mariano-bitelo@educar.rs.gov.br', '');


            $mail->isHTML(true); //Set email format to HTML
            $mail->Subject = 'Redefinição de Senha';
            $mail->Body = 'Olá, ' . $usuario . '!<br>
        Foi realizado um pedido de redefinição de senha, aqui está uma senha temporária para você.<br>
        Sua nova senha é: ' . $senha;
            $mail->AltBody = 'Olá, ' . $usuario . '!
        Foi realizado um pedido de redefinição de senha, aqui está uma senha temporária para você.
        Sua nova senha é:' . $senha;

            $mail->send();
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
    function reserva_sala($usuario, $sala, $email, $hora, $data)
    {
        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->isSMTP(); //Send using SMTP
            $mail->Host = 'smtp.gmail.com'; //Set the SMTP server to send through
            $mail->SMTPAuth = true; //Enable SMTP authentication
            $mail->Username = 'mariano-bitelo@educar.rs.gov.br'; //SMTP username
            $mail->Password = 'ioxbfjwuqmsotmxs'; //SMTP password                          
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; //Enable implicit TLS encryption
            $mail->Port = 465; //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
            $mail->setFrom('mariano-bitelo@educar.rs.gov.br', 'Fecomercio Sesc Senac Tramandaí');
            $mail->addAddress($email, $usuario); //Add a recipient
            $mail->addReplyTo('mariano-bitelo@educar.rs.gov.br', '');

            $mail->isHTML(true); //Set email format to HTML
            $mail->Subject = 'Reserva de Sala';
            $mail->Body = 'Olá, ' . $usuario . '!<br>
            Foi realizado uma reserva em seu nome!<br>
            Sala = ' . $sala . '<br>
            Horário = ' . $hora . '<br>
            Data = ' . $data . '<br>';
            $mail->AltBody =
                'Olá, ' . $usuario . '!
            Foi realizado uma reserva em seu nome!';
            'Sala: ' . $sala;
            'Horário: ' . $hora;
            'Data: ' . $data;

            $mail->send();
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }

    function confirma_cadastro($usuario, $email)
    {
        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->isSMTP(); //Send using SMTP
            $mail->Host = 'smtp.gmail.com'; //Set the SMTP server to send through
            $mail->SMTPAuth = true; //Enable SMTP authentication
            $mail->Username = 'mariano-bitelo@educar.rs.gov.br'; //SMTP username
            $mail->Password = 'ioxbfjwuqmsotmxs'; //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; //Enable implicit TLS encryption
            $mail->Port = 465; //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
            $mail->setFrom('mariano-bitelo@educar.rs.gov.br', 'Fecomercio Sesc Senac Tramandaí');
            $mail->addAddress($email, $usuario); //Add a recipient
            $mail->addReplyTo('mariano-bitelo@educar.rs.gov.br', '');

            $mail->isHTML(true); //Set email format to HTML
            $mail->Body ='Olá, ' . $usuario . '!<br>
            Seja Bem-Vindo ao sistema de Agendamento de Salas do Senac Tramandaí!<br>';
            $mail->AltBody = 'Olá, ' . $usuario . '!<br>
            Seja Bem-Vindo ao sistema de Agendamento de Salas do Senac Tramandaí!';

            $mail->send();
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
}
?>