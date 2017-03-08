<H2>Mercadorias já cadastradas no sistema</H2>
<hr>

<?php
	// Conexão com o Banco de Dados
	mysql_connect("localhost", "root", "") or die (mysql_error ());

	// Seleciona o Banco de Dados
	mysql_select_db("mercadorias") or die(mysql_error());

	//query SQL
	$strSQL = "SELECT * FROM mercadoria";

	// Executa a query (o recordset $rs contém o resultado da query)
	$rs = mysql_query($strSQL);
	
	// Loop pelo recordset $rs
	// Cada linha vai para um array ($row) usando mysql_fetch_array
	while($row = mysql_fetch_array($rs)) {

     echo 
"<table border='1' align='center'>
<tr>
<Th>Código</Th>
<Th>Tipo de Mercadoria</Th>
<Th>Nome</Th>
<Th>Quantidade</Th>
<Th>Preço</Th>
<Th>Tipo do Negócio</Th>
</tr>";

echo "<tr>";
echo "<td>" . $row['cod'] . "</td>";
echo "<td>" . $row['tipom'] . "</td>";
echo "<td>" . $row['nome'] . "</td>";
echo "<td>" . $row['qtd'] . "</td>";
echo "<td> R$" . $row['preco'] . "</td>";
echo "<td>" . $row['tipon'] . "</td>";
echo "</tr>";

echo "</table>";

	  }

	// Encerra a conexão
	mysql_close();
	?>



<br>
