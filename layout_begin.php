
<?php	
	session_start();
	include('conexao.php');

		//fazendo um select no banco de Dados

		$seleciona_usuarios= "select nome from tb_usuarios
									where id_usuario = '1'";
		$resultado_usuarios= mysqli_query($mysqli,$seleciona_usuarios);

		$row_usuario=mysqli_fetch_assoc($resultado_usuarios);




		//fazendo um select no banco de Dados

		$seleciona_referencia= "select * from tb_cadastro order by id_processo desc";
		$resultado_referencia= mysqli_query($mysqli,$seleciona_referencia);

		$row_referencia=mysqli_fetch_assoc($resultado_referencia);

		
	?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	 <!-- Bootstrap CSS -->
    <link href="node_modules/bootstrap/compiler/bootstrap.css" rel="stylesheet" >
 	<!-- estilo CSS -->
	<link rel="stylesheet" type="text/css" href="node_modules/style.css">
	<!-- Mascaras Jquery -->
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<script type="text/javascript" src="node_modules/jquery/dist/jquery.mask.min.js"></script>
</head>
<body>

	<header>
		<div>
	   		<nav class="navbar navbar-expand-lg navbar-light bg-light">
	   			<img  src="imagens/ramax.jfif" style="width: 10%; ">
		    	<a href="primeira_pagina.php" class="navbar-brand" style="margin-left: 50px;"> Ramax</a>
		    	<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSite">
		      	<span class="navbar-toggler-icon"></span>
		    	</button>
		    	<div class="collapse navbar-collapse" id="navbarSite">
		      	<ul class="navbar-nav">
			        <li class="nav-item">
			          <a  class="nav-link "href="#" ><?php echo $row_usuario['nome'] ?></a>
			        </li>
			        <li class="nav-item">
			          <a  class="nav-link "href="cad_processo.php" >Register</a>
			        </li>
			        <li class="nav-item">
			          <a  class="nav-link "href="con_ramax.php" >Search</a>
			        </li>
		      	</ul>
		      </div>
		    </nav>
	    </div>
	</header>