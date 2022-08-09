<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    use PHPMailer\PHPMailer\SMTP;

    require_once 'phpmailer/Exception.php';
    require_once 'phpmailer/PHPMailer.php';
    require_once 'phpmailer/SMTP.php';
    $mail = new PHPMailer(true);
    try{
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Port = 587;
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->CharSet = 'UTF-8';
        $mail->addAddress('raphaelkpogomou@gmail.com');
        $mail->addCC('rkpogomou@gmail.com');
        $mail->addBCC('raphuxvirus21@gmail.com');
        $mail->Username = 'raphaelkpogomou@gmail.com' ;
        $mail->Password = 'Dieu67038306';

            
        //$mail->name = $_POST['name'];
        //$mail->email = $_POST['email'];
        $mail->subject = 'Message from contact form';
        $mail->body = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus,
         provident id minus voluptatum mollitia at a accusamus aspernatur,
         quos culpa magnam sed nemo animi? A aspernatur soluta quae ducimus dicta.';

        $mail->send();
        echo 'Message Envoyer';

    } catch(Exception $e){
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }




/* 
$name = $_POST['name'];
$email = $_POST['email'];
$subject = str_replace("\n.", "\n..", $_POST['subject']);
$message = wordwrap($_POST['message'], 70, "\r\n");

//$mailheader = "From:".$name."<".$email.">\r\n";
$mailheader= [
    'From: '.$name.' <'.$email.'>',
    'Reply-To: '.$email,
    'Content-Type: text/plain; charset=utf-8',
    ''
];
$recipient = "rkpogomou@gmail.com";

mail($recipient, $subject, $message, $mailheader)
 or die("Error!");  */


/*  
$name = "Lorem ipsum";
$email = "raphaelkpogomou@gmail.com";
$subject = "Lorem ipsum";
$headers = [
    'From: '.$name.' <'.$email.'>',
    'Reply-To: '.$email,
    'Content-Type: text/plain; charset=utf-8',
    ''
];

mail($email, $subject, $message, $headers)
 or die("Error!"); */

?>
