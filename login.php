<?php 
	session_start();
	include('conexao.php');

		if((isset($_POST['txt_usuario'])) && (isset($_POST['txt_senha']))){

				$usuario = mysqli_real_escape_string($mysqli,$_POST['txt_usuario']);
				$senha = mysqli_real_escape_string($mysqli,$_POST['txt_senha']);
				

				//chamado 
				$select = "select * from tb_usuarios where nome = '$usuario' && senha ='$senha' LIMIT 1";
				$chamada = mysqli_query($mysqli,$select);
				$resultado=mysqli_fetch_assoc($chamada);
				

				if(empty($resultado)){

					$_SESSION['loginErro'] ="Usuario ou senha Invalida! ";
					header("Location:index.php");

				}elseif(!empty($resultado)){
					$senha = md5($senha);
					header("Location:primeira_pagina.php");
		
				}else{
					$_SESSION['loginErro'] ="Usuario ou senha invalida error 01";
					header("Location:index.php");
				}
		
		}else{
				$_SESSION['loginErro'] ="Usuario ou senha invalida error 03";
				header("Location:index.php");
		
		}

 ?>