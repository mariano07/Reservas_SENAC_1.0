<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    use PHPMailer\PHPMailer\SMTP;

    function nova_senha($email_usuario, $senha){
        $mail= new PHPMailer(true);
        $mensagem = "";

        try {
            $mail->isSMTP();
            $mail->Host       = 'smtp.gmail.com';
            $mail->SMTPAuth   = true;
            $mail->Username   = 'senacreservas@gmail.com';
            $mail->Password   = 'zgynwxdeajftoxxh';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            $mail->Port       = 465;

            $mail->setFrom('senacreservas@gmail.com', 'Fecomércio Senac Tramandaí');
            $mail->addAddress($email_usuario, '');
            $mail->addReplyTo('');

            $mail->isHTML(true); 
            $mail->Subject = 'Redefinir Senha';
            $mail->Body    ="Texto" . $mensagem;
            $mail->AltBody = "texto caso n funcione o html".$mensagem;
            $mail->send();
            header("");
        } catch (Exception $e) {
            //email nao enviado
            header("");
        }
    }

    function reserva_sala($usuario,$sala, $email, $hora, $data){
        $mail= new PHPMailer(true);
        $mensagem = "";

        try {
            $mail->isSMTP();
            $mail->Host       = 'smtp.gmail.com';
            $mail->SMTPAuth   = true;
            $mail->Username   = 'senacreservas@gmail.com';
            $mail->Password   = 'zgynwxdeajftoxxh';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            $mail->Port       = 465;

            $mail->setFrom('senacreservas@gmail.com', 'Fecomércio Senac Tramandaí');
            $mail->addAddress($email, '');
            $mail->addReplyTo('');

            $mail->isHTML(true); 
            $mail->Subject = 'Você reservou a sala tal';
            $mail->Body    ="Texto" . $mensagem;
            $mail->AltBody = "texto caso n funcione o html".$mensagem;
            $mail->send();
            header("");
        } catch (Exception $e) {
            //email nao enviado
            header("");
        }
    }

    function delete_reserva($usuario, $sala, $data, $hora, $email){
        $mail= new PHPMailer(true);
        $mensagem = "";

        try {
            $mail->isSMTP();
            $mail->Host       = 'smtp.gmail.com';
            $mail->SMTPAuth   = true;
            $mail->Username   = 'senacreservas@gmail.com';
            $mail->Password   = 'zgynwxdeajftoxxh';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            $mail->Port       = 465;

            $mail->setFrom('senacreservas@gmail.com', 'Fecomércio Sesc Senac Tramandaí');
            $mail->addAddress($email, '');
            $mail->addReplyTo('');

            $mail->isHTML(true); 
            $mail->Subject = "reserva cancelada";
            $mail->Body    = "Texto" . $mensagem;
            $mail->AltBody = "texto caso n funcione o html".$mensagem;
            $mail->send();
            header("");
        } catch (Exception $e) {
            //email nao enviado
            header("");
        }
    }
?>