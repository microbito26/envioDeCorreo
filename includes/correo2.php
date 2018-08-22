<?php
    ###
    #   Antes del include, proporcionar:
    #
    /*
        $NOMBRE_DESTINO
        $CORREO_DESTINO
        $TITULO_CORREO
        $msg_correo
    */
    #     
    ###
    


    include_once 'class.phpmailer.php';
    include_once 'class.smtp.php';

    $msg_correo = utf8_decode($msg_correo);
    $mail = new PHPMailer(true);

    $mail->isSMTP();                              // Set mailer to use SMTP
    $mail->Host = 'smtp.office365.com';           // Specify main and backup SMTP servers
    $mail->Port = 587;                            // TCP port to connect to
    $mail->SMTPSecure = 'tls';                    // Enable TLS encryption, `ssl` also accepted
    $mail->SMTPAuth = true;                       // Enable SMTP authentication
    $mail->Username = 'correo@para-envio';        // SMTP username
    $mail->Password = '********';                 // SMTP password
    $mail->SMTPDebug  = 2;
    
    $mail->setFrom("correo@a-nombre-de", utf8_decode("Titulo"));
    $mail->addAddress(utf8_decode("$CORREO_DESTINO"), utf8_decode("$NOMBRE_DESTINO"));
    
    $mail->isHTML(true);                          // Set email format to HTML
    
    $mail->Subject = utf8_decode("$TITULO_CORREO");
    $mail->Body    = $msg_correo;
    $mail->AltBody = "Usa vista en HTML";
    $error = '';
    if($mail->send()) {
      $msg_correo .= utf8_decode("¡Envío exitoso!");
    }
    else{
      $error .= 'Message could not be sent. ';
      $error .= 'Mailer Error: ' . $mail->ErrorInfo;
      $msg_correo .= $error;
    }

?>
