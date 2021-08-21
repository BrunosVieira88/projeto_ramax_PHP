<?php	
	session_start();
	include('conexao.php');
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
</head>
<body>

	<div>
   		<nav class="navbar navbar-expand-lg navbar-light bg-light">
   			<img  src="imagens/ramax.jfif" style="width: 10%; ">
	    	<a href="#" class="navbar-brand" style="margin-left: 50px;"> Ramax</a>

	    	<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSite">
	      	<span class="navbar-toggler-icon"></span>
	    	</button>

	    	<div class="collapse navbar-collapse" id="navbarSite">

	      	<ul class="navbar-nav">

		        <li class="nav-item">
		          <a  class="nav-link "href="#" style="margin-left: 1000px;">User</a>
		        </li>
		    
		    
	      	</ul>
	    </nav>
    </div>


    <section>
		<div class="row">
			<div class="col-xs-12">
				<div class="row">
					<div class="offset-md-4 col-md-4 offset-xs-2 col-xs-8 mt-6" id="formulario">
						<form 	method="POST"	action="login.php" >
							<label>User:</label>
							<input type="email" name="txt_usuario" id="txt_usuario" class="form-control" >
							<label>Password:</label>
							<input type="password" name="txt_senha" id="txt_senha" class="form-control">
							<button type="submit" class="btn btn-primary mt-4 ">Confirm</button>
						</form>
					</div>	
				</div>
			</div>
		</div>
	</section>

	<div class="text-center text-danger" style="margin-top:20px; font-size:18px;color:red;font-weight:bolder;text-shadow:1px 1px 2px black">
		<?php 
			if(isset($_SESSION['loginErro'])){
				echo $_SESSION['loginErro'];
				unset ($_SESSION['loginErro']);
			}
		 ?>
	</div>


</body>
	<script src="node_modules/jquery/dist/jquery.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>
</html>