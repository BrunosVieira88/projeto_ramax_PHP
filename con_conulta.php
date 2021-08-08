<?php	
	
	require('layout_begin.php')
?>

	<?php
			$palavra = filter_input(INPUT_POST, 'txt_palavra',FILTER_SANITIZE_STRING);
			$palavra2 = filter_input(INPUT_POST, 'txt_palavra2',FILTER_SANITIZE_STRING);
			$txt = filter_input(INPUT_POST, 'txt_opcoes',FILTER_SANITIZE_STRING);
			$txt2 = filter_input(INPUT_POST, 'txt_opcoes2',FILTER_SANITIZE_STRING);
		
			if ($palavra2 != null) {

					$select = "select * from tb_cadastro where $txt like '%$palavra%' AND load_comments != 'DONE' AND $txt2 like '%$palavra2%' ORDER BY id_processo desc ";
					$resultado = mysqli_query($mysqli,$select);
					$row_usuario=mysqli_fetch_assoc($resultado);

					$cont = 1; 
					while ($row_usuario=mysqli_fetch_assoc($resultado)){
				
					
						if ($cont == 1){
							$cor = '#DCDCDC'; 

						}else{
							if ($cor == '#C0C0C0') {
									$cor ='#DCDCDC';  
							}elseif($cor == '#DCDCDC'){
								$cor = '#C0C0C0';
							}
						}

						if ($row_usuario['etd'] == " " ) {

							$row_usuario['etd'] = "-";
						}


							echo"<section class='container'>";
							echo"<div class='row mt-5'>";
								echo"<div class='col-xs-12 col-md-12' style='font-size: 13px;'>";
									echo"<table class='table'>";
									  echo"<thead style='background-color:lightgrey'>";
									    echo"<tr style='text-align:center;'>";
									      echo"<th scope='col'>Ref. Ramax</th>";
									     echo"<th scope='col'>Ref forncedor</th>";
									      echo"<th scope='col'>Customer</th>";
									      echo"<th scope='col'>Sales Date</th>";
									      echo"<th scope='col'>Sales Week</th>";
									    echo"</tr>";
									  echo"</thead style='background-color:lightgrey'>";
								  		echo"<tbody>";
											echo"<tr style='text-align:center;>";
								      		echo"<th scope='row'></th>";
								  			echo"<td><a href='con_direta.php?id=".$row_usuario['id_processo']."'>".$row_usuario['id_processo']."</a></td>";
								  			echo"<td>".$row_usuario['referencia_fornecedor']."</td>";
								  			echo"<td>".$row_usuario['customer']."</td>";
								  			echo"<td>".$row_usuario['sales_date']."</td>";
								  			echo"<td>".$row_usuario['sales_week']."</td>";
									    	echo"</tr>";
										echo"</tbody>";

									echo"<thead style='background-color:lightgrey'>";
									    echo"<tr style='text-align:center;'>";
									      echo"<th scope='col'>Financiadora</th>";
									      echo"<th scope='col'>Seller</th>";
									      echo"<th scope='col'>Packer</th>";
									      echo"<th scope='col'>Buyer</th>";
									      echo"<th scope='col'>Goods</th>";
									    echo"</tr>";
								  	echo"</thead style='background-color:lightgrey'>";
								  		echo"<tbody>";
											echo"<tr style='text-align:center;>";
								      		echo"<th scope='row'></th>";
								  			echo"<td>".$row_usuario['financiadora']."</td>";
								  			echo"<td>".$row_usuario['seller']."</td>";
								  			echo"<td>".$row_usuario['packer']."</td>";
								  			echo"<td>".$row_usuario['buyer']."</td>";
								  			echo"<td>".$row_usuario['goods']."</td>";
									    	echo"</tr>";
										echo"</tbody>";

									  echo"<thead style='background-color:lightgrey'>";
									    echo"<tr style='text-align:center;'>";
									      echo"<th scope='col'>Loading Port</th>";
									      echo"<th scope='col'>Market</th>";
									      echo"<th scope='col'>Discharging Port</th>";
									      echo"<th scope='col'>Shipment month</th>";
									      echo"<th scope='col'>LOAD-SCHEDULE AT PLANT</th>";
									    echo"</tr>";
									  echo"</thead style='background-color:lightgrey'>";
								  		echo"<tbody>";
											echo"<tr style='text-align:center;>";
								      		echo"<th scope='row'></th>";
								  			echo"<td>".$row_usuario['loading_port']."</td>";
								  			echo"<td>".$row_usuario['market']."</td>";
								  			echo"<td>".$row_usuario['discharging_port']."</td>";
								  			echo"<td>".$row_usuario['shipment']."</td>";
								  			echo"<td>".$row_usuario['load_schedule']."</td>";
									    	echo"</tr>";
										echo"</tbody>";

							

									  echo"<thead style='background-color:lightgrey'>";
									    echo"<tr style='text-align:center;'>";
									      echo"<th scope='col'>LOAD AT PLANT - STATUS</th>";
									      echo"<th scope='col'>FREIGHT FORWARDER</th>";
									      echo"<th scope='col'>SHIPPING LINE</th>";
									      echo"<th scope='col'>BOOKING</th>";
									      echo"<th scope='col'>VESSEL</th>";
									    echo"</tr>";
									  echo"</thead style='background-color:lightgrey'>";
								  		echo"<tbody>";
											echo"<tr style='text-align:center;>";
								      		echo"<th scope='row'></th>";
								  			echo"<td>".$row_usuario['responsavel']."</td>";
								  			echo"<td>".$row_usuario['load_comments']."</td>";
								  			echo"<td>".$row_usuario['customer']."</td>";
								  			echo"<td>".$row_usuario['eta']."</td>";
									    	echo"</tr>";
										echo"</tbody>";

									  echo"<thead style='background-color:lightgrey'>";
									    echo"<tr style='text-align:center;'>";
									      echo"<th scope='col'>Container</th>";
									      echo"<th scope='col'>ETD</th>";
									      echo"<th scope='col'>ETA</th>";
									      echo"<th scope='col'>Transhipment</th>";
									      echo"<th scope='col'>Transhipment date</th>";
									    echo"</tr>";
									  echo"</thead style='background-color:lightgrey'>";
								  		echo"<tbody>";
											echo"<tr style='text-align:center;>";
								      		echo"<th scope='row'></th>";
								  			echo"<td>".$row_usuario['container']."</td>";
								  			echo"<td>".$row_usuario['etd']."</td>";
								  			echo"<td>".$row_usuario['eta']."</td>";
								  			echo"<td>".$row_usuario['transhipment']."</td>";
								  			echo"<td>".$row_usuario['transhipment_date']."</td>";
									    	echo"</tr>";
										echo"</tbody>";

									  echo"<thead style='background-color:lightgrey'>";
									   echo"<tr style='text-align:center;'>";
									      echo"<th scope='col-2'>Balance payment</th>";
									      echo"<th scope='col-2'>load comments</th>";
									      echo"<th scope='col-2'>Ramax Status</th>";
									      echo"<th scope='col-2'></th>";
									    echo"</tr>";
									  echo"</thead style='background-color:lightgrey'>";
								  		echo"<tbody>";
											echo"<tr style='text-align:center;>";
								      		echo"<th scope='row'></th>";
								  			echo"<td>".$row_usuario['balance_payment']."</td>";
								  			echo"<td>".$row_usuario['load_comments']."</td>";
								  			echo"<td>".$row_usuario['ramax_status']."</td>";
								  			echo"<td></td>";
									    	echo"</tr>";
										echo"</tbody>";
									echo"</table>";
									echo"</table>";
								echo"</div>";

							echo"</div>";
						echo"</section>";

						$cont = $cont +  1;
					}	
				

			}else{
					if ($txt == 'id_processo'){
					$palavra = (int)$palavra;
				
					$select = "select * from tb_cadastro where $txt = $palavra ";

					

					$resultado = mysqli_query($mysqli,$select);

					$row_usuario=mysqli_fetch_assoc($resultado);

					if($row_usuario == null){

						echo "usuario nao encontrado";

					}else{

						echo"<section class='container'>";
							echo"<div class='row mt-5'>";
								echo"<div class='col-xs-12 col-md-12' style='font-size: 13px;'>";
									echo"<table class='table'>";
									  echo"<thead style='background-color:lightgrey'>";
									    echo"<tr style='text-align:center;'>";
									      echo"<th scope='col'>Ref. Ramax</th>";
									     echo"<th scope='col'>Ref forncedor</th>";
									      echo"<th scope='col'>Customer</th>";
									      echo"<th scope='col'>Sales Date</th>";
									      echo"<th scope='col'>Sales Week</th>";
									    echo"</tr>";
									  echo"</thead style='background-color:lightgrey'>";
								  		echo"<tbody>";
											echo"<tr style='text-align:center;>";
								      		echo"<th scope='row'></th>";
								  			echo"<td><a href='con_direta.php?id=".$row_usuario['id_processo']."'>".$row_usuario['id_processo']."</a></td>";
								  			echo"<td>".$row_usuario['referencia_fornecedor']."</td>";
								  			echo"<td>".$row_usuario['customer']."</td>";
								  			echo"<td>".$row_usuario['sales_date']."</td>";
								  			echo"<td>".$row_usuario['sales_week']."</td>";
									    	echo"</tr>";
										echo"</tbody>";

									echo"<thead style='background-color:lightgrey'>";
									    echo"<tr style='text-align:center;'>";
									      echo"<th scope='col'>Financiadora</th>";
									      echo"<th scope='col'>Seller</th>";
									      echo"<th scope='col'>Packer</th>";
									      echo"<th scope='col'>Buyer</th>";
									      echo"<th scope='col'>Goods</th>";
									    echo"</tr>";
								  	echo"</thead style='background-color:lightgrey'>";
								  		echo"<tbody>";
											echo"<tr style='text-align:center;>";
								      		echo"<th scope='row'></th>";
								  			echo"<td>".$row_usuario['financiadora']."</td>";
								  			echo"<td>".$row_usuario['seller']."</td>";
								  			echo"<td>".$row_usuario['packer']."</td>";
								  			echo"<td>".$row_usuario['buyer']."</td>";
								  			echo"<td>".$row_usuario['goods']."</td>";
									    	echo"</tr>";
										echo"</tbody>";

									  echo"<thead style='background-color:lightgrey'>";
									    echo"<tr style='text-align:center;'>";
									      echo"<th scope='col'>Loading Port</th>";
									      echo"<th scope='col'>Market</th>";
									      echo"<th scope='col'>Discharging Port</th>";
									      echo"<th scope='col'>Shipment month</th>";
									      echo"<th scope='col'>LOAD-SCHEDULE AT PLANT</th>";
									    echo"</tr>";
									  echo"</thead style='background-color:lightgrey'>";
								  		echo"<tbody>";
											echo"<tr style='text-align:center;>";
								      		echo"<th scope='row'></th>";
								  			echo"<td>".$row_usuario['loading_port']."</td>";
								  			echo"<td>".$row_usuario['market']."</td>";
								  			echo"<td>".$row_usuario['discharging_port']."</td>";
								  			echo"<td>".$row_usuario['shipment']."</td>";
								  			echo"<td>".$row_usuario['load_schedule']."</td>";
									    	echo"</tr>";
										echo"</tbody>";

							

									  echo"<thead style='background-color:lightgrey'>";
									    echo"<tr style='text-align:center;'>";
									      echo"<th scope='col'>LOAD AT PLANT - STATUS</th>";
									      echo"<th scope='col'>FREIGHT FORWARDER</th>";
									      echo"<th scope='col'>SHIPPING LINE</th>";
									      echo"<th scope='col'>BOOKING</th>";
									      echo"<th scope='col'>VESSEL</th>";
									    echo"</tr>";
									  echo"</thead style='background-color:lightgrey'>";
								  		echo"<tbody>";
											echo"<tr style='text-align:center;>";
								      		echo"<th scope='row'></th>";
								  			echo"<td>".$row_usuario['responsavel']."</td>";
								  			echo"<td>".$row_usuario['load_comments']."</td>";
								  			echo"<td>".$row_usuario['customer']."</td>";
								  			echo"<td>".$row_usuario['eta']."</td>";
									    	echo"</tr>";
										echo"</tbody>";

									  echo"<thead style='background-color:lightgrey'>";
									    echo"<tr style='text-align:center;'>";
									      echo"<th scope='col'>Container</th>";
									      echo"<th scope='col'>ETD</th>";
									      echo"<th scope='col'>ETA</th>";
									      echo"<th scope='col'>Transhipment</th>";
									      echo"<th scope='col'>Transhipment date</th>";
									    echo"</tr>";
									  echo"</thead style='background-color:lightgrey'>";
								  		echo"<tbody>";
											echo"<tr style='text-align:center;>";
								      		echo"<th scope='row'></th>";
								  			echo"<td>".$row_usuario['container']."</td>";
								  			echo"<td>".$row_usuario['etd']."</td>";
								  			echo"<td>".$row_usuario['eta']."</td>";
								  			echo"<td>".$row_usuario['transhipment']."</td>";
								  			echo"<td>".$row_usuario['transhipment_date']."</td>";
									    	echo"</tr>";
										echo"</tbody>";

									  echo"<thead style='background-color:lightgrey'>";
									   echo"<tr style='text-align:center;'>";
									      echo"<th scope='col-2'>Balance payment</th>";
									      echo"<th scope='col-2'>load comments</th>";
									      echo"<th scope='col-2'>Ramax Status</th>";
									      echo"<th scope='col-2'></th>";
									    echo"</tr>";
									  echo"</thead style='background-color:lightgrey'>";
								  		echo"<tbody>";
											echo"<tr style='text-align:center;>";
								      		echo"<th scope='row'></th>";
								  			echo"<td>".$row_usuario['balance_payment']."</td>";
								  			echo"<td>".$row_usuario['load_comments']."</td>";
								  			echo"<td>".$row_usuario['ramax_status']."</td>";
								  			echo"<td></td>";
									    	echo"</tr>";
										echo"</tbody>";
									echo"</table>";
									echo"</table>";
								echo"</div>";

							echo"</div>";
						echo"</section>";
						
					}

				}else{
					
					$select = "select * from tb_cadastro where $txt like '%$palavra%' AND load_comments != 'DONE' ORDER BY id_processo desc ";
					$resultado = mysqli_query($mysqli,$select);
					$row_usuario=mysqli_fetch_assoc($resultado);

					$cont = 1; 
					while ($row_usuario=mysqli_fetch_assoc($resultado)){
				
					
						if ($cont == 1){
							$cor = '#DCDCDC'; 

						}else{
							if ($cor == '#C0C0C0') {
									$cor ='#DCDCDC';  
							}elseif($cor == '#DCDCDC'){
								$cor = '#C0C0C0';
							}
						}

						if ($row_usuario['etd'] == " " ) {

							$row_usuario['etd'] = "-";
						}


							echo"<section class='container'>";
							echo"<div class='row mt-5'>";
								echo"<div class='col-xs-12 col-md-12' style='font-size: 13px;'>";
									echo"<table class='table'>";
									  echo"<thead style='background-color:lightgrey'>";
									    echo"<tr style='text-align:center;'>";
									      echo"<th scope='col'>Ref. Ramax</th>";
									     echo"<th scope='col'>Ref forncedor</th>";
									      echo"<th scope='col'>Customer</th>";
									      echo"<th scope='col'>Sales Date</th>";
									      echo"<th scope='col'>Sales Week</th>";
									    echo"</tr>";
									  echo"</thead style='background-color:lightgrey'>";
								  		echo"<tbody>";
											echo"<tr style='text-align:center;>";
								      		echo"<th scope='row'></th>";
								  			echo"<td><a href='con_direta.php?id=".$row_usuario['id_processo']."'>".$row_usuario['id_processo']."</a></td>";
								  			echo"<td>".$row_usuario['referencia_fornecedor']."</td>";
								  			echo"<td>".$row_usuario['customer']."</td>";
								  			echo"<td>".$row_usuario['sales_date']."</td>";
								  			echo"<td>".$row_usuario['sales_week']."</td>";
									    	echo"</tr>";
										echo"</tbody>";

									echo"<thead style='background-color:lightgrey'>";
									    echo"<tr style='text-align:center;'>";
									      echo"<th scope='col'>Financiadora</th>";
									      echo"<th scope='col'>Seller</th>";
									      echo"<th scope='col'>Packer</th>";
									      echo"<th scope='col'>Buyer</th>";
									      echo"<th scope='col'>Goods</th>";
									    echo"</tr>";
								  	echo"</thead style='background-color:lightgrey'>";
								  		echo"<tbody>";
											echo"<tr style='text-align:center;>";
								      		echo"<th scope='row'></th>";
								  			echo"<td>".$row_usuario['financiadora']."</td>";
								  			echo"<td>".$row_usuario['seller']."</td>";
								  			echo"<td>".$row_usuario['packer']."</td>";
								  			echo"<td>".$row_usuario['buyer']."</td>";
								  			echo"<td>".$row_usuario['goods']."</td>";
									    	echo"</tr>";
										echo"</tbody>";

									  echo"<thead style='background-color:lightgrey'>";
									    echo"<tr style='text-align:center;'>";
									      echo"<th scope='col'>Loading Port</th>";
									      echo"<th scope='col'>Market</th>";
									      echo"<th scope='col'>Discharging Port</th>";
									      echo"<th scope='col'>Shipment month</th>";
									      echo"<th scope='col'>LOAD-SCHEDULE AT PLANT</th>";
									    echo"</tr>";
									  echo"</thead style='background-color:lightgrey'>";
								  		echo"<tbody>";
											echo"<tr style='text-align:center;>";
								      		echo"<th scope='row'></th>";
								  			echo"<td>".$row_usuario['loading_port']."</td>";
								  			echo"<td>".$row_usuario['market']."</td>";
								  			echo"<td>".$row_usuario['discharging_port']."</td>";
								  			echo"<td>".$row_usuario['shipment']."</td>";
								  			echo"<td>".$row_usuario['load_schedule']."</td>";
									    	echo"</tr>";
										echo"</tbody>";

							

									  echo"<thead style='background-color:lightgrey'>";
									    echo"<tr style='text-align:center;'>";
									      echo"<th scope='col'>LOAD AT PLANT - STATUS</th>";
									      echo"<th scope='col'>FREIGHT FORWARDER</th>";
									      echo"<th scope='col'>SHIPPING LINE</th>";
									      echo"<th scope='col'>BOOKING</th>";
									      echo"<th scope='col'>VESSEL</th>";
									    echo"</tr>";
									  echo"</thead style='background-color:lightgrey'>";
								  		echo"<tbody>";
											echo"<tr style='text-align:center;>";
								      		echo"<th scope='row'></th>";
								  			echo"<td>".$row_usuario['responsavel']."</td>";
								  			echo"<td>".$row_usuario['load_comments']."</td>";
								  			echo"<td>".$row_usuario['customer']."</td>";
								  			echo"<td>".$row_usuario['eta']."</td>";
									    	echo"</tr>";
										echo"</tbody>";

									  echo"<thead style='background-color:lightgrey'>";
									    echo"<tr style='text-align:center;'>";
									      echo"<th scope='col'>Container</th>";
									      echo"<th scope='col'>ETD</th>";
									      echo"<th scope='col'>ETA</th>";
									      echo"<th scope='col'>Transhipment</th>";
									      echo"<th scope='col'>Transhipment date</th>";
									    echo"</tr>";
									  echo"</thead style='background-color:lightgrey'>";
								  		echo"<tbody>";
											echo"<tr style='text-align:center;>";
								      		echo"<th scope='row'></th>";
								  			echo"<td>".$row_usuario['container']."</td>";
								  			echo"<td>".$row_usuario['etd']."</td>";
								  			echo"<td>".$row_usuario['eta']."</td>";
								  			echo"<td>".$row_usuario['transhipment']."</td>";
								  			echo"<td>".$row_usuario['transhipment_date']."</td>";
									    	echo"</tr>";
										echo"</tbody>";

									  echo"<thead style='background-color:lightgrey'>";
									   echo"<tr style='text-align:center;'>";
									      echo"<th scope='col-2'>Balance payment</th>";
									      echo"<th scope='col-2'>load comments</th>";
									      echo"<th scope='col-2'>Ramax Status</th>";
									      echo"<th scope='col-2'></th>";
									    echo"</tr>";
									  echo"</thead style='background-color:lightgrey'>";
								  		echo"<tbody>";
											echo"<tr style='text-align:center;>";
								      		echo"<th scope='row'></th>";
								  			echo"<td>".$row_usuario['balance_payment']."</td>";
								  			echo"<td>".$row_usuario['load_comments']."</td>";
								  			echo"<td>".$row_usuario['ramax_status']."</td>";
								  			echo"<td></td>";
									    	echo"</tr>";
										echo"</tbody>";
									echo"</table>";
									echo"</table>";
								echo"</div>";

							echo"</div>";
						echo"</section>";

						$cont = $cont +  1;
					}	
				}

			}

			
			
			
		?>



</body>
</html>
<script type="text/javascript">
	
function sendmail(){

	  window.alert("enviou e-mail");
  <?php

	  	require_once('src/PHPMailer.php');
	  	require_once('src/SMTP.php');
	  	require_once('src/Exception.php');

	  	use PHPMailer\PHPMailer\PHPMailer;
	  	use PHPMailer\PHPMailer\SMTP;
	  	use PHPMailer\PHPMailer\Exception;


	  	$mail =new PHPMailer(true);

	  	try{

	  		$mail->SMTPDebug = SMTP::DEBUG_SERVER;
	  		$mail->isSMTP();
	  		$mail->Host ='smtp.ramax-group.com';
	  		$mail->SMTPAuth= true;
	  		$mail->Username = 'brunosvtwo@gmail.com';
	  		$mail->Password = '1mag1ne01';
	  		$mail->port = 587;

	  		$mail->setFrom('brunosvtwo@gmail.com');
	  		$mail->addAdress('brunosvtwo@gmail.com');

	  		$mail->isHTML(true);
	  		$mail->Subject ='Teste';

	  		$mail->Body= '<h1>Primeiro teste</h1>
	  		vamos ver se o e-mail vai chegar!';

	  		$mail->AltBody ="sem html";

	  		if ($mail->send()){
	  			echo "e-mail enviado com sucesso!";
	  		}else{
	  			echo "falha ao enviar";
	  		}



	  	}catch (Exception $e){

	  		echo"Erro ao enviar mensagem:{$mail->ErrorInfo}";
	  	}


	?>
}
</script>