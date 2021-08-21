<?php	
	
	require('layout_begin.php')
?>
<!DOCTYPE html>

<section class="container">
	<div class="row">
		<div class="col-12">
			
	<div class="row mt-5">
		<div class="col-xs-12  col-md-2 md-offset-8 " style="border: 1px solid black; padding: 5px; box-shadow: 2px 2px 2px black;border-radius: 5px;">
				<div style="text-align:center;">
					<a class="selecione" href="cad_processo.php"><p>Register</p></a>
					<a class="selecione" href="con_ramax.php"><p style="padding:5px ;background: lightgrey;">Search</p></a>	
				</div>
		</div>
	</div>

	<div class="row">
		<div class="col-xs-12 col-md-12">
					<table class="table">
					  <thead>
					    <tr style='text-align:center;'>
					      <th scope="col">Process</th>
					      <th scope="col">Analyst</th>
					      <th scope="col">Load Comments</th>
					      <th scope="col">customer</th>
					      <th scope="col">ETA</th>
					    </tr>
					  </thead>
					  <tbody>
					<?php

							$pagina_atual=filter_input(INPUT_GET,'pagina',FILTER_SANITIZE_NUMBER_INT);
						 	$pagina =(!empty($pagina_atual)) ? $pagina_atual:1;


							//setar quantidade de intes por pagina

							$quantidade_paginas = 9;

							
							// calcular itens por pagina 

							$inicio = ($quantidade_paginas * $pagina)-$quantidade_paginas;
							$registros ="select * from tb_cadastro order by id_processo DESC LIMIT $quantidade_paginas";
							$resultado = mysqli_query($mysqli,$registros);

							$cont = 1; 
								while ($row_usuario=mysqli_fetch_assoc($resultado)){
							
								
									if ($cont == 1) {
										$cor = 'white'; 

									}else{
										if ($cor == 'white') {
												$cor ='#DCDCDC';  
										}elseif($cor == '#DCDCDC'){
											$cor = 'white';
										}
									}
						    		echo"<tr style='text-align:center;background-color:$cor'>";
							      	echo"<th scope='row'><a class='selecione' href='con_direta.php?id=".$row_usuario['id_processo']."'>".$row_usuario['id_processo']."</a></th>";
						      		echo"<td>".$row_usuario['responsavel']."</td>";
						      		echo"<td>".$row_usuario['load_comments']."</td>";
						      		echo"<td>".$row_usuario['customer']."</td>";
						      		echo"<td>".$row_usuario['eta']."</td>";
									    echo"</tr>";
							
								  		echo"</tbody>";
									$cont = $cont +  1;
								}
					?>
				</table>
			</div>				
		</div>
	</div>
		</div>
	</div>

</section>

	
	
</body>
</html>
<script type="text/javascript">
	function redireciona() {
		window.location.replace("cad_processo.php");
	}
</script>	