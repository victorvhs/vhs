---
Title: Fale comigo
Description: As Melhores formas de falar comigo
Date: 25 Abril 2017
Author: Victor Hugo
Profile: https://github.com/victorvhs
Img: https://unsplash.it/1200/628?image=1075
Template: contato
---
## Email
Sem dúvidas  que na pressa do dia a dia o melhor jeito de se comunicar é
através do e-mail.
Estou sempre disponível no victor@vhreis.net.<br>
Manda um olá. Se preferir use o formulário abaixo.
<!-- Criar formulario de contato -->
<form class="form-horizontal col-sm-8" role="email"  method="post">

  <div class="form-group">
    <label for="name">Nome:</label>
    <input type="text" name="nome" value="" id="name" class="form-control">
  </div>

  <div class="form-group" name="contact">
    <label for="assunto">Assunto:</label>
    <input type="text" name="assunto" value="" id="assunto" class="form-control">
  </div>

  <div class="form-group">
    <label for="email">E-mail:</label>
    <input type="email" name="email" value="" id="email" class="form-control">
  </div>

  <div class="form-group">
    <label for="msg">Mensagem:</label>
    <textarea class="form-control" rows="3" id="msg"></textarea>
  </div>

  <div class="form-group col-sm-offset-8">
    <button type="submit" class="btn btn-default btn-xs" name="email">Enviar</button>

  </div>
</form>
