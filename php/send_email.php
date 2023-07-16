<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $to = 'lucas.lago.cont@gmail.com';
    $email = $_POST['email'];
    $assunto = $_POST['assunto'];
    $mensagem = $_POST['mensagem'];
    $subject = 'Novo email encaminhado pelo site';
  
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=utf-8\r\n";
  
    $message = "<html><body>";
    $message .= "<h2>$assunto</h2>";
    $message .= "<p>$mensagem</p>";
    $message .= "</body></html>";
  
    $success = mail($to, $subject, $message, $headers);
  
    if ($success) {
      echo "Email enviado com sucesso";
    } else {
      echo "Erro";
    }
}

header("Location: index.html");
exit();

?>