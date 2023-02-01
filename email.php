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
            $mail->setFrom('mariano-bitelo@educar.rs.gov.br', 'Fecomércio Sesc Senac Tramandai');
            $mail->addAddress($email_usuario, $usuario); //Add a recipient
            $mail->addReplyTo('mariano-bitelo@educar.rs.gov.br', '');


            $mail->isHTML(true); //Set email format to HTML
            $mail->Subject = 'Redefinição de Senha';
            $mail->Body = 'Ola, ' . $usuario . '!<br>
        Foi realizado um pedido de redefinicao de senha, aqui está uma senha temporária para voce.<br>
        Sua nova senha e: ' . $senha;
            $mail->AltBody = 'Ola, ' . $usuario . '!
        Foi realizado um pedido de redefinicao de senha, aqui está uma senha temporária para voce.
        Sua nova senha e:' . $senha;

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
            $mail->setFrom('mariano-bitelo@educar.rs.gov.br', 'Fecomercio Sesc Senac Tramandai');
            $mail->addAddress($email, $usuario); //Add a recipient
            $mail->addReplyTo('mariano-bitelo@educar.rs.gov.br', '');

            $mail->isHTML(true); //Set email format to HTML
            $mail->Subject = 'Reserva de Sala';
            $mail->Body = 'Ola, ' . $usuario . '!<br>
            Foi realizado uma reserva em seu nome!<br>
            Sala = ' . $sala . '<br>
            Horario = ' . $hora . '<br>
            Data = ' . $data . '<br>';
            $mail->AltBody =
                'Ola, ' . $usuario . '!
            Foi realizado uma reserva em seu nome!';
            'Sala: ' . $sala;
            'Horario: ' . $hora;
            'Data: ' . $data;

            $mail->send();
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }

    function confirma_cadastro_usuario($usuario, $email)
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
            $mail->setFrom('mariano-bitelo@educar.rs.gov.br', 'Fecomercio Sesc Senac Tramandai');
            $mail->addAddress($email, $usuario); //Add a recipient
            $mail->addReplyTo('mariano-bitelo@educar.rs.gov.br', '');

            $mail->isHTML(true); //Set email format to HTML
            $mail->Subject = 'Sistema de Agendamento de Salas';
            $mail->Body ='Ola, ' . $usuario . '!<br>
            Seja Bem-Vindo ao sistema de Agendamento de Salas do Senac Tramandai!<br>';
            $mail->AltBody = 'Ola, ' . $usuario . '!<br>
            Seja Bem-Vindo ao sistema de Agendamento de Salas do Senac Tramandai!';

            $mail->send();
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
    function confirma_cadastro_adm($adm, $email_adm, $usuario)
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
            $mail->setFrom('mariano-bitelo@educar.rs.gov.br', 'Fecomercio Sesc Senac Tramandai');
            $mail->addAddress($email_adm, $adm); //Add a recipient
            $mail->addReplyTo('mariano-bitelo@educar.rs.gov.br', '');

            $mail->isHTML(true); //Set email format to HTML
            $mail->Subject = 'Cadastro efetuado com sucesso';
            $mail->Body ='Ola, ' . $adm . '!<br>
            Voce acabou de cadastrar o usuario: '.$usuario.' no sistema de Agendamento de Salas do Senac Tramandai!<br>';
            $mail->AltBody = 'Ola, ' . $adm . '!
            Voce acabou de cadastrar o usuario: '.$usuario.' no sistema de Agendamento de Salas do Senac Tramandai!';

            $mail->send();
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
}
?>