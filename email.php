<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    use PHPMailer\PHPMailer\SMTP;

    require 'vendor/autoload.php';
function nova_senha($email_usuario, $senha)
{
    $mail = new PHPMailer(true);
    $mensagem = "";

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
        $mail->setFrom('mariano-bitelo@educar.rs.gov.br', 'Mailer');
        $mail->addAddress('cristopherpiussi@gmail.com', 'Joe User'); //Add a recipient
        $mail->addReplyTo('mariano-bitelo@educar.rs.gov.br', 'Information');

        //Attachments
        // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
        // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

        $mail->isHTML(true); //Set email format to HTML
        $mail->Subject = 'Redefinir Senha';
        $mail->Body = 'Sua nova senha é:';
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();
        echo "foi";
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}

    function reserva_sala($usuario,$sala, $email, $hora, $data){
        $mail= new PHPMailer(true);
        $mensagem = "";

        try {
            //Server settings
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                                         //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
        
            //Recipients
            $mail->setFrom('mariano-bitelo@educar.rs.gov.br', 'Mailer');
            $mail->addAddress('cristopherpiussi@gmail.com', 'Joe User');     //Add a recipient
            $mail->addReplyTo('mariano-bitelo@educar.rs.gov.br', 'Information');
        
            //Attachments
            // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
            // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
                    
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'Redefinir Senha';
            $mail->Body    = 'Sua nova senha é:';
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
            
            $mail->send();
    echo "foi";
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }

    function delete_reserva($usuario, $sala, $data, $hora, $email){
        $mail= new PHPMailer(true);
        $mensagem = "";

        try {
            //Server settings
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'mariano-bitelo@educar.rs.gov.br';                     //SMTP username
            $mail->Password   = 'ioxbfjwuqmsotmxs';                               //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
        
            //Recipients
            $mail->setFrom('mariano-bitelo@educar.rs.gov.br', 'Mailer');
            $mail->addAddress('cristopherpiussi@gmail.com', 'Joe User');     //Add a recipient
            $mail->addReplyTo('mariano-bitelo@educar.rs.gov.br', 'Information');
        
            //Attachments
            // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
            // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
                    
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'Redefinir Senha';
            $mail->Body    = 'Sua nova senha é:';
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
            
            $mail->send();
    echo "foi";
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
?>