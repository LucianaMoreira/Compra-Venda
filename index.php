<html>
<HEAD>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
<title> Compra & Venda </title>
     
<link rel=stylesheet href="estilo.css" type="text/css">
<link rel=stylesheet href="Menus/menu.css" type="text/css">
<script type="text/javascript" src="javascript.js"></script>
    
</HEAD>
    
<body>
    
<?php
 ini_set('default_charset','UTF-8');
?>
<center>
    
<div class = 'tudo'>
<br>
    
<div class="Topo">
<img src='Imagens/logo.png' align='left' width='800px' height='120'>   
</div>
    
<div class="menu">
<br>
<?php if (isset($_GET['valor'])) {
			$valor = $_GET['valor'];
			}else{
			$valor= 1; }
			 switch ($valor){
  case 1: include("Menus/menu1.php");
  break; 
  case 2: include ("Menus/menu2.php");
  break;
  case 3: include ("Menus/menu3.php");
  break;
  case 4: include ("Menus/menu4.php");
  break;
  default: include ("Menus/menu1.php");
}			
?>
</div>
    
<BR>
<div class="slides">
<img src='Imagens/slide.png' align='center' width='1024px' height='200' >  
</div>

<div class="corpo">
<?php if (isset($_GET['valor'])) {
			$valor = $_GET['valor'];
			}else{
			$valor= 1; }
			 switch ($valor){
  case 1: include("PagInicial.php");
  break;
  case 2: include ("Compra.php");
  break;
  case 3: include ("Venda.php");
  break;
  case 4: include ("Conf.php");
  break;
  default: include ("PagInicial.php");
}			
?>
</div>
<br>   
<hr>
<div class="rodape">
<font color='#707070' > Todos os direitos Reservados à Compra&Venda.com</font>
</div>
</center>
</body>
</html>
