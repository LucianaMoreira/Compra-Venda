<H2>Anuncie</H2>
<hr>

<form name="form" method="post" action="index.php?valor=4" onSubmit="return validacao();">
  <fieldset>
     <legend align='left'>
        Dados da Mercadoria
     </legend>
     Nome da Mercadoria:<br>
      <input type="text" name="nome" maxlength="24"><br>
      
      Tipo de Mercadoria:<br>
      <input type="text" name="tipom" maxlength="24"><br>
       
       Quantidade:<br>
      <input type="number" name="qtd" maxlength="24"><br>
      
      Preço:<br>
      <input type="number" name="preco" step=0.01  maxlength="24">
     
  </fieldset>

    <fieldset>
     <legend align='left'>
        Dados do Negociante
     </legend>
     Nome do Negociante:<br>
      <input type="text" name="cli" maxlength="24"><br>
      
      E-mail:<br>
      <input type="email" name="email" maxlength="24"><br>
     
  </fieldset>

  <fieldset>
    <legend align='left'>
        Tipo de Negócio
    </legend>
    Compra<input type="radio" name="tipon" value="Compra"> 
      <br><br>
    Venda<input type="radio" name="tipon" value="Venda"> 
      <br>
  </fieldset>


<br>

<input type="reset" name="wpw" value="Limpar dados">
<input type="submit" name="enviar" value="Enviar">

</form>


<?php

$nome = @$_POST['nome'];
$tipom = @$_POST['tipom'];
$qtd = @$_POST['qtd'];
$preco = @$_POST['preco'];
$cli = @$_POST['cli'];
$email = @$_POST['email'];
$tipon = @$_POST['tipon'];
?>
  