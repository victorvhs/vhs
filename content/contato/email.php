<?php
/*
Importar a zend_mail

Verificar se o captcha foi validado.
Se validado:
  Pegar os valores do formulario
  Configurar o servidor SMTP

  Fazer set dos valores do formulario
  Enviar Msg para o destino.
  Enviar Msg de confirmação para o email do remetente.
  Retornar para a pagina de contato.
  Se msg enviado com sucesso:
    Exibir nota avisando que a msg foi enviada.
  Senão:
    Exibir msg dizendo que a msg não pode ser enviada.
Senão:
  Exibir msg de erro
  Retorar para a pagina de contato.

*/

require_once("../../vendor/autoload.php");
use Zend\Mail;
use Zend\Mail\Transport\Smtp as SmtpTransport;
use Zend\Mail\Transport\SmtpOptions;

$eu = 'victor.h.s.reis@gmail.com';
//$eu = 'victor@vhreis.net';
$nome = $_POST['name'];
$assunto = $_POST['assunto'];
$email_remet = $_POST['email_remet'];
$msg = $_POST['msg'];
echo "email: " .$email_remet ."<br>";
echo "Ass: " .$assunto."<br>";
echo "nome: " .$nome."<br>";
echo "msg: " .$msg."<br>";
//Configuração da mensagem
$mail = new Mail\Message();
$mail->setBody($msg);
$mail->setFrom($email_remet, $nome);
$mail->addTo($eu, 'Victor');
$mail->setSubject($assunto);

//Configuração do servidor SMTP
$transport = new SmtpTransport();
$options   = new SmtpOptions([
]);
$transport->setOptions($options);
$transport->send($mail);
/*
echo "<script>
             alert('Mensagem enviada!');
             window.history.go(-1);
     </script>";
     */
 ?>
