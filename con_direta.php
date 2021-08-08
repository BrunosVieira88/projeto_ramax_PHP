<?php	
	
	require('layout_begin.php')
?>

<?php	





	$id = filter_input(INPUT_GET, 'id',FILTER_SANITIZE_NUMBER_INT);
	//recebendo id; 


	//requisição ao banco de dados produtos e precos 
	$resultado_id="SELECT * from tb_cadastro  where id_processo='$id'";
	$resultado=mysqli_query($mysqli,$resultado_id);
	$row_produto=mysqli_fetch_assoc($resultado);

		
	?>


	<?php 
			if(isset($_SESSION['msg'])){
				echo $_SESSION['msg'];
				unset ($_SESSION['msg']);
			}
	 ?>

	 
	 		<?php 

				$dia = date('d');
				$dia = $dia -1 ;
				$mes = date('m');
				$ano = date('Y');

	
				function semana_do_ano($dia,$mes,$ano){

						$var=intval( date('z', mktime(0,0,0,$mes,$dia,$ano) ) / 7 ) + 1;

						return $var;
				}
				
				$var = semana_do_ano($dia,$mes,$ano);

			

			?>

		<?php 
						if(isset($_SESSION['alterou'])){
							echo $_SESSION['alterou'];
							unset ($_SESSION['alterou']);
						}
					 ?>

<section class="container">	
		

			<form method="POST" action="alt_ramax.php">
				<div class="row mt-4">
					<div class="col-12">
						<div class="row justify-content-end">
							<div class="col-4" >
			  				<label>Responsavel</label><select class="form-control" name="txt_responsavel" id="txt_responsavel" required ><option value="Isabele">Isabele</option>
								<option value="nicole">Nicole</option><option value="vanessa">Vanessa</option></select>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
							<div class="col-12 col-md-3" >
								<label>Reference Ramax:</label>
								<input type="text" name="txt_id" id="txt_id" class="form-control" value="<?php echo $row_produto['id_processo']?>">
							</div>
							<div class="col-12 col-md-3" >
								<label>Packer reference:</label>
								<input type="text" maxlength="30" class="form-control" value="<?php echo $row_produto['referencia_fornecedor'] ?>" name="txt_fornecedor" id="txt_fornecedor" >
							</div>
							<div class="col-12 col-md-6" >
								<label>Customer:</label>
								<input type="text" class="form-control" required name="txt_customer" value="<?php echo $row_produto['customer'] ?>" maxlength="60" id="txt_customer" >
							</div>
				</div>

				<div class="row">

							<div class="col-12 col-md-2" >
								<label>Sales date:</label>
								<input type="text" class="form-control" required name="txt_sales" value="<?php echo $row_produto['sales_date'] ?>" id="txt_sales">
							</div>

							<div class="col-xs-12 col-md-2" >
								<label>Sales Week:</label>
								<input type="text" class="form-control"  value="<?php echo"$var" ?>" maxlength="4" name="txt_week" id="txt_week">
							</div>

							<div class="col-xs-12 col-md-2">
								<label>Financial</label>
								<input type="text" class="form-control" name="txt_financiadora" id="txt_financiadora" value="<?php echo $row_produto['financiadora'] ?>">
							</div>

							<div class="col-xs-12 col-md-2">
								<label>Seller</label>
								<input class="form-control"  name="txt_seller" id="txt_seller" value="<?php echo $row_produto['seller'] ?>">
							</div>

							<div class="col-xs-12 col-md-4" >
								<label>Packer</label>
								<input type="text" class="form-control" maxlength="50" value="<?php echo $row_produto['packer'] ?>"  name="txt_packer" id="txt_packer">
							</div>
					</div>

					<div class="row">
							<div class="col-12 col-md-2" >
								<label>Buyer</label>
								<input class="form-control" value="<?php echo $row_produto['buyer'] ?>" name="txt_buyer" id="txt_buyer" >
							</div>

							<div class="col-xs-12 col-md-4" >
								<label>Goods</label><input type="text" class="form-control" value="<?php echo $row_produto['goods'] ?>"  maxlength="60" name="txt_goods" id="txt_goods">
							</div>

							<div class="col-xs-12 col-md-3" >
								<label>Loading Port</label>
								<input type="text" required class="form-control" value="<?php echo $row_produto['loading_port'] ?>" maxlength="30" name="txt_loading" id="txt_loading">
							</div>
							<div class="col-xs-12 col-md-3" >
								<label>Market</label>
								<input type="text" class="form-control" value="<?php echo $row_produto['market'] ?>" required name="txt_market" id="txt_market">
							</div>
					</div>

					<div class="row">
							<div class="col-xs-12 col-md-3" >
								<label>Discharging Port</label>
								<input type="text" maxlength="30" class="form-control" value="<?php echo $row_produto['discharging_port'] ?>" name="txt_discharging" id="txt_discharging">
							</div>

							<div class="col-xs-12 col-md-3" >
								<label>Shipment(month)</label>
									<input type="text" value="<?php echo $row_produto['shipment'] ?>"  maxlength="30" class="form-control"  name="shipment" id="shipment">
							</div>

							<div class="col-xs-12 col-md-3" >
								<label>"LOAD-SCHEDULE AT PLANT"</label>
								<input  maxlength="30" value="<?php echo $row_produto['load_schedule'] ?>" type="text"  class="form-control" name="txt_load" id="txt_load">
							</div>

							<div class="col-xs-12 col-md-3" >
								<label>LOAD AT PLANT - STATUS</label>
								<input type="text"  maxlength="30" value="<?php echo $row_produto['load_plant'] ?>" class="form-control" name="txt_load_plant" id="txt_load_plant">
							</div>
					</div>

					<div class="row">
							<div class="col-xs-12 col-md-2" >
								<label>FREIGHT FORWARDER </label>
								<input type="text" class="form-control" value="<?php echo $row_produto['freight'] ?>" maxlength="30" name="txt_freight" id="txt_freight">
							</div>

							<div class="col-xs-12 col-md-3" >
								<label>SHIPPING LINE</label>
								<input type="text" class="form-control" value="<?php echo $row_produto['shipping_line'] ?>"  maxlength="30" name="txt_shipping" id="txt_shipping">
							</div>

							<div class="col-xs-12 col-md-3" >
								<label>"BOOKING"</label>
								<input type="text"  maxlength="30" value="<?php echo $row_produto['booking'] ?>" class="form-control" name="txt_booking" id="txt_booking" >
							</div>

							<div class="col-xs-12 col-md-4" ><label>VESSEL</label>
								<input   maxlength="30" type="text" value="<?php echo $row_produto['referencia_ramax'] ?>" class="form-control" name="txt_vessel" id="txt_vessel" >
							</div>
					</div>

						<div class="row">
					
							<div class="col-xs-12 col-md-2" >
								<label>CONTAINER</label>
								<input type="text"  maxlength="30" value="<?php echo $row_produto['container'] ?>" class="form-control" name="txt_container" id="txt_container" >
							</div>

							<div class="col-xs-12 col-md-2" ><label>ETD</label>
								<input type="text" value="<?php echo $row_produto['etd'] ?>"  class="form-control" name="txt_etd" id="txt_etd" >
							</div>

							<div class="col-xs-12 col-md-2" ><label>ETA</label>
								<input type="text" class="form-control" value="<?php echo $row_produto['eta'] ?>" name="txt_eta" id="txt_eta">
							</div>

							<div class="col-xs-12 col-md-4" >
								<label>Transhipment</label>
								<input type="text" value="<?php echo $row_produto['transhipment'] ?>" maxlength="30" class="form-control" name="txt_transhipment" id="txt_transhipment">
							</div>

							<div class="col-xs-12 col-md-2" ><label>TRANSHIPMENT text</label>
								<input type="text" value="<?php echo $row_produto['transhipment_date'] ?>" class="form-control" name="txt_transhipment_date" id="txt_transhipment_date" >
							</div>
					</div>

					<div class="row">
					
							<div class="col-xs-12 col-md-2" >
								<label>BALANCE PAYMENT</label>
								<input class="form-control" value="<?php echo $row_produto['balance_payment'] ?>" name="txt_balance" id="txt_balance">
							</div>

							<div class="col-xs-12 col-md-4" ><label>LOAD COMMENTS-CUSTOMER</label>
								<input type="text" value="<?php echo $row_produto['load_comments'] ?>" maxlength="60" class="form-control" name="txt_comments" id="txt_comments" >
							</div>

							<div class="col-xs-12 col-md-3" >
								<label>RAMAX STATUS </label>
								<input type="text"  maxlength="30" value="<?php echo $row_produto['ramax_status'] ?>" class="form-control"  name="txt_ramax_status" id="txt_ramax_status">
							</div>

							<div class="col-xs-12 col-md-3" >
								<label>PICKUP DEST</label>
								<input class="form-control" name="txt_dest" value="<?php echo $row_produto['pickup'] ?>" id="txt_dest">
							</div>	
					</div>

				<div class="row">
					<div class="col-12 " >
						<div class="row ">
							<div class="col-4 justify-content-end">
								
							</div>
						</div>
					</div>
				</div>

		<div class="row mt-4">
			<div class="col-12">
				<div class="row justify-content-end">
					<div class="col-4 mb-4" >
	  				<a href="con_ramax.php"><input type="button" class="btn btn-primary" name="botao" value="Back"></a>
						<button type="submit" class="btn btn-primary" >Update</button>
					</div>
				</div>
			</div>
		</div>
							
			</form>							
	</section>

</body>
</html>

   
