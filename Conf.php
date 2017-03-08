<h1>Dados cadastrados</h1>
<hr>
<h2>

<?php

$nome = $_POST['nome'];
$tipom = $_POST['tipom'];
$qtd = $_POST['qtd'];
$preco = $_POST['preco'];
$cli = $_POST['cli'];
$email = $_POST['email'];
$tipon = $_POST['tipon'];
    
echo 
"<table border='1' align='center'>
<tr>
<Th>Nome da Mercadoria</Th>
<Th>Tipo de Mercadoria</Th>
<Th>Quantidade</Th>
<Th>Preço</Th>
<Th>Nome do Negociante</Th>
<Th>E-mail</Th>
<Th>Tipo do Negócio</Th>
</tr>";

echo "<tr>";
echo "<td>" . $nome . "</td>";
echo "<td>" . $tipom . "</td>";
echo "<td>" . $qtd . "</td>";
echo "<td> R$" . $preco . "</td>";
echo "<td>" . $cli . "</td>";
echo "<td>" . $email . "</td>";
echo "<td>" . $tipon . "</td>";
echo "</tr>";

echo "</table>";
   
    $conexao= mysql_connect("localhost","root","");
	  mysql_select_db("mercadorias");
	  
		  $sql= mysql_query ("INSERT INTO mercadoria (tipom, nome, qtd, preco, tipon, cli, email) VALUES ('$tipom', '$nome', '$qtd', '$preco', '$tipon' '$cli', '$email')");
			 	  
			  mysql_close($conexao);
?>  

</h2>
