<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // $to = 'contato@marianobaldiniadv.com.br';
    $to = 'lucas.lago.cont@gmail.com';
    $email = $_POST['email'];
    $assunto = $_POST['assunto'];
    $mensagem = $_POST['mensagem'];
    $subject = 'Novo email encaminhado pelo site';
  
    // Construct the email headers
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=utf-8\r\n";
  
    // Construct the email body
    $message = "<html><body>";
    $message .= "<h2>$assunto</h2>";
    $message .= "<p>$mensagem</p>";
    $message .= "</body></html>";
  
    // Send the email
    $success = mail($to, $subject, $message, $headers);
  
    if ($success) {
      echo "Email enviado com sucesso";
    } else {
      echo "Erro";
    }
}

?>