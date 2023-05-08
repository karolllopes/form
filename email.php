<html>
    <head>
        <title>email.php</title>
</head>
<body>

<?php

if(isset($_POST['name']) && !empty($_POST['email']) && !empty($_POST['message'])) 

{
$nome = addslashes ($_POST['name']);
$email = addslashes ($_POST['email']);
$mensagem = addslashes ($_POST['message']);

$to = "karolinnalessa@hotmail.com";
$subject = "Contato - Programador Br";
$body = "Nome: " .$nome. "\r\n".
        "Email: " .$email. "\r\n".
        "Mensagem: " .$mensagem; 
        $header = "From: karolinnalessa@hotmail.com" . "\r\n".
        "Reply-To:" .$email. "\r\n".
        "X=Mailer:PHP/" .phpversion();

if(mail($to, $subject, $body, $header))
{
    echo "Email enviado com sucesso!";
}
else
{
    echo "Email não pode ser enviado.";
}
}
?>

</body>
</html>