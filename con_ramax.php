
<body>
<?php

	require('layout_begin.php');
	//fazendo um select no banco de Dados

	$seleciona_usuarios= "select nome from tb_usuarios
								where id_usuario = '1'";
	$resultado_usuarios= mysqli_query($mysqli,$seleciona_usuarios);

	$row_usuario=mysqli_fetch_assoc($resultado_usuarios);

?>

	<style type="text/css">
		.hide{
				display: none;
		}
		#nova_consulta{
			display: none;
		}
	</style>
	

<div class="container">
			<section>
				<form method="POST" action="con_conulta.php">
					<div class="row">
						<div class="col-12">
							<div class="row justify-content-center mt-5">
								<div class=" col-xs-12 col-md-4">
									<label >Find Process:</label> 
									<input type="text" class=" form-control" name="txt_palavra" id="txt_palavra">
								</div>
								<div class="col-xs-12 col-md-4">
									<label>Filter by:</label>
									<select class="form-control" name="txt_opcoes" id="txt_opcoes"><option value="id_processo">Process</option><option value="customer">Customer</option><option value="seller">Seller</option><option value="buyer" checked>Buyer</option><option value="goods">Goods</option><option value="packer">PACKER</option></select> 
								</div>
							</div>
							<div class="row justify-content-end mt-3"  style="margin-left:100px;" >
								<div class="col-4">
									<input type="submit" class="btn btn-primary" value="Find" id="find01" />
								</div>	
							</div>
						</div>	
					</div>

			</section>
			<a id="action_btn" class="btn btn-primary" >More Filters</a>
			<section  id="nova_consulta" >
				<div class="row">
					<div class="col-12">
						<div class="row justify-content-center mt-2">
							<div class=" col-xs-12 col-md-4">
								<label >Find Process:</label> 
								<input type="text" class=" form-control" name="txt_palavra2" id="txt_palavra2">
							</div>
							<div class="col-xs-12 col-md-4">
								<label>Filter by:</label>
								<select class="form-control" name="txt_opcoes2" id="txt_opcoes2"><option value="customer">Customer</option><option value="seller">Seller</option><option value="buyer" checked>Buyer</option><option value="goods">Goods</option><option value="responsavel">Responsible</option><option value="packer">PACKER</option></select> 
							</div>
						</div>
						<div class="row justify-content-end mt-3" style="margin-left:100px">
							<div class="col-4">
								<input type="submit" class="btn btn-primary" value="Find" />
							</div>
							</form>		
						</div>
					</div>	
				</div>	
			</section>
			<div class="mt-5">
				<a href="primeira_pagina.php"><input type="button" class="btn btn-primary" name="botao" value="Back"></a>
			</div>
			
	</div>
	
</body>
</html>

<script type="text/javascript">
	
	
	var button = document.getElementById('action_btn');

	console.log(button);

	button.addEventListener("click",function(){

		var container = document.getElementById('nova_consulta');

		document.getElementById('nova_consulta').style.display="inline";
		var some = document.getElementById('action_btn');
		var find01 = document.getElementById('find01');
		some.classList.toggle("hide");
		find01.classList.toggle("hide");

	});

	

</script>