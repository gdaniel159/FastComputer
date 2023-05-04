<?php

    if (isset($_POST['btn_send'])) {

        $correo = $_POST['email'];
        $asunto = $_POST['asunto'];
        $msg = $_POST['msg'];

        use PHPMailer\PHPMailer\PHPMailer;
        use PHPMailer\PHPMailer\ Exception;

        require 'PHP-MAILER/Exception.php';
        require 'PHP-MAILER/PHPMailer.php';
        require 'PHP-MAILER/SMTP.php';

        //Create an instance; passing `true` enables exceptions
        $mail = new PHPMailer(true);

        try {
            //Configuracion del servidor
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Salida de los errores
            $mail->isSMTP();                                            //Enviamos usando el protocolo SMTP
            $mail->Host       = 'smtp.gmail.com';                       //Utilizamos el servidor que nos ayudara a enviar el email
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'example@example.com';                 //SMTP username (Correo del servicio)
            $mail->Password   = 'example_password';                            //SMTP password (Contraseña)
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
            $mail->setFrom('example@example.com', 'FastComputer');
            $mail->addAddress($correo, 'Joe User');             //A quien se lo voy a enviar
            //$mail->addAddress('ellen@example.com');                    //Todos los que siguen son para mandarle a otra persona mas o para generar una copia de lo que envio
            //$mail->addReplyTo('info@example.com', 'Information');
            //$mail->addCC('cc@example.com');
            //$mail->addBCC('bcc@example.com');

            //Attachments (Este apartado es para enviar archivos o cosas afines como imagenes)
            //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
            //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

            //Content
            $mail->isHTML(true);                                   //Esto esta habilitado por si quiero enviar HTML en el mensaje
            $mail->Subject = $asunto;
            $mail->Body    = $msg;
            //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients'; (Mensaje alternativo)

            $mail->send();
            header("location: confirmacion.php");
        } catch (Exception $e) {
            echo "Ocurrio un error al enviar el mensaje: {$mail->ErrorInfo}";
        }
    }

?>