<?php

add_action('wp_ajax_nopriv_action_send_mail_contact', 'functionSendMailContactAjax');
add_action('wp_ajax_action_send_mail_contact', 'functionSendMailContactAjax');

function functionSendMailContactAjax() {
    header("Content-Type: application/json");
    $ten = $_POST['name'];
    $diachiemail = $_POST['email'];
    $noidung = $_POST['content'];

    $pattern = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';

    if (trim($ten) == "") {
        echo json_encode(array('status' => '1'));
        die();
    }

    if (trim($noidung) == "") {
        echo json_encode(array('status' => '2'));
        die();
    }

    // Create the SMTP configuration
    $transport = Swift_SmtpTransport::newInstance("ns89109.dotvndns.vn", 465 , 'ssl');
    $transport->setUsername("asia@inqua.vn");
    $transport->setPassword("giongnhucu");

    // Create the message
    $message = Swift_Message::newInstance();
    $message->setTo(array(
       "anhtuan.ssp@gmail.com" =>  $ten,
    ));

    $body = 'Email ' . $diachiemail . "\r\n"
            .'Name  ' . $ten . "\r\n"
            .'Content: ' . $noidung . "\r\n";

    $message->setSubject("This email is sent testing asia email project");
    $message->setBody($body);
    $message->setFrom("asia@inqua.vn", "Contact email notifycation email form website");

    // Send the email
    $mailer = Swift_Mailer::newInstance($transport);
    $mailer->send($message, $failedRecipients);

    echo json_encode(array('status' => '0'));
    die();
}

?>