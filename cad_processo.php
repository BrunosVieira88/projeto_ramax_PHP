
<?php 
	require('layout_begin.php');
	
	if(isset($_SESSION['msg'])){
		echo $_SESSION['msg'];
		unset ($_SESSION['msg']);
	}


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



<section class="container">	
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




	  



			<form method="POST" action="processa.php">

				<div class="row">
							<div class="col-12 col-md-3" >
								<label>Ref Ramax:</label>
								<input type="text" class="form-control" value="<?php echo $row_referencia['id_processo'] + 1 ."/". $row_referencia['ano'] ?>">
							</div>
							<div class="col-12 col-md-3" >
								<label>Ref Fornecedor:</label>
								<input type="text" maxlength="30" class="form-control" name="txt_fornecedor" id="txt_fornecedor" >
							</div>
							<div class="col-12 col-md-6" >
								<label>Customer:</label>
								<input type="text" class="form-control" required name="txt_customer" maxlength="60" id="txt_customer" >
							</div>
				</div>

				<div class="row">

							<div class="col-12 col-md-2" >
								<label>Sales date:</label>
								<input type="text" class="form-control" required name="txt_sales" id="txt_sales">
							</div>

							<div class="col-xs-12 col-md-2" >
								<label>Sales Week:</label>
								<input type="text" class="form-control" disabled value="<?php echo"$var" ?>" maxlength="4" name="txt_week" id="txt_week">
							</div>

							<div class="col-xs-12 col-md-2">
								<label>Financiadora</label>
								<select class="form-control"  name="txt_financiadora" maxlength="10" id="txt_financiadora" ><option value="não há">Dont have</option><option value="ROI">ROI</option><option value="TW">TW</option></select>
							</div>

							<div class="col-xs-12 col-md-2">
								<label>Seller</label>
								<select class="form-control" required name="txt_seller" id="txt_seller"><option value="vendedor"></option><option value="milton">Milton</option><option value="gabriel">Gabriel</option><option value="fernando">Fernando</option><option value="queenie">Queenie</option><option value="patricia">Patricia</option><option value="rada" checked>Rada</option><option value="karin">Karin</option><option value="weber">Weber</option></select>
							</div>

							<div class="col-xs-12 col-md-4" >
								<label>Packer</label>
								<input type="text" class="form-control" maxlength="50" required name="txt_packer" id="txt_packer">
							</div>
					</div>

					<div class="row">
							<div class="col-12 col-md-2" >
								<label>Buyer</label><select class="form-control" name="txt_buyer" id="txt_buyer" ><option value="vendedor"></option><option value="milton">Milton</option><option value="gabriel">Gabriel</option><option value="fernando">Fernando</option><option value="queenie">Queenie</option><option value="patricia">Patricia</option><option value="rada" checked>Rada</option><option value="karin">Karin</option><option value="weber">Weber</option><option value="magno">Magno</option></select>
							</div>

							<div class="col-xs-12 col-md-4" >
								<label>Goods</label><input type="text" class="form-control" required maxlength="60" name="txt_goods" id="txt_goods">
							</div>

							<div class="col-xs-12 col-md-3" >
								<label>Loading Port</label>
								<input type="text" required class="form-control" maxlength="30" name="txt_loading" id="txt_loading">
							</div>
							<div class="col-xs-12 col-md-3" >
								<label>Market</label>
								<input type="text" class="form-control" required name="txt_market" id="txt_market">
							</div>
					</div>

					<div class="row">
							<div class="col-xs-12 col-md-3" >
								<label>Discharging Port</label>
								<input type="text" maxlength="30" class="form-control" required name="txt_discharging" id="txt_discharging">
							</div>

							<div class="col-xs-12 col-md-3" >
								<label>Shipment(month)</label>
									<input type="text"  maxlength="30" class="form-control"  name="shipment" id="shipment">
							</div>

							<div class="col-xs-12 col-md-3" >
								<label>"LOAD-SCHEDULE AT PLANT"</label>
								<input  maxlength="30" type="text"  class="form-control" name="txt_load" id="txt_load">
							</div>

							<div class="col-xs-12 col-md-3" >
								<label>LOAD AT PLANT - STATUS</label>
								<input type="text"  maxlength="30"  class="form-control" name="txt_load_plant" id="txt_load_plant">
							</div>
					</div>

					<div class="row">
							<div class="col-xs-12 col-md-2" >
								<label>FREIGHT FORWARDER </label>
								<input type="text" class="form-control"  maxlength="30" name="txt_freight" id="txt_freight">
							</div>

							<div class="col-xs-12 col-md-3" >
								<label>SHIPPING LINE</label>
								<input type="text" class="form-control"   maxlength="30" name="txt_shipping" id="txt_shipping">
							</div>

							<div class="col-xs-12 col-md-3" >
								<label>"BOOKING"</label>
								<input type="text"  maxlength="30"  class="form-control" name="txt_booking" id="txt_booking" >
							</div>

							<div class="col-xs-12 col-md-4" ><label>VESSEL</label>
								<input   maxlength="30" type="text"  class="form-control" name="txt_vessel" id="txt_vessel" >
							</div>
					</div>

						<div class="row">
					
							<div class="col-xs-12 col-md-2" >
								<label>CONTAINER</label>
								<input type="text"  maxlength="30" class="form-control" name="txt_container" id="txt_container" >
							</div>

							<div class="col-xs-12 col-md-2" ><label>ETD</label>
								<input type="text"  class="form-control" name="txt_etd" id="txt_etd" >
							</div>

							<div class="col-xs-12 col-md-2" ><label>ETA</label>
								<input type="text" class="form-control" name="txt_eta" id="txt_eta">
							</div>

							<div class="col-xs-12 col-md-4" >
								<label>Transhipment</label>
								<input type="text"  maxlength="30" class="form-control" name="txt_transhipment" id="txt_transhipment">
							</div>

							<div class="col-xs-12 col-md-2" ><label>TRANSHIPMENT text</label>
								<input type="text" class="form-control" name="txt_transhipment_date" id="txt_transhipment_date" >
							</div>
					</div>

					<div class="row">
					
							<div class="col-xs-12 col-md-2" >
								<label>BALANCE PAYMENT</label>
								<select class="form-control" name="txt_balance" id="txt_balance"><option>PAID</option><option>NOT PAID</option></select>
							</div>

							<div class="col-xs-12 col-md-4" ><label>LOAD COMMENTS-CUSTOMER</label>
								<input type="text"  maxlength="60" class="form-control" name="txt_comments" id="txt_comments" >
							</div>

							<div class="col-xs-12 col-md-3" >
								<label>RAMAX STATUS </label>
								<input type="text"  maxlength="30" class="form-control"  name="txt_ramax_status" id="txt_ramax_status">
							</div>

							<div class="col-xs-12 col-md-3" >
								<label>PICKUP DEST</label><select class="form-control" name="txt_dest" id="txt_dest"><option>withdrawn</option><option>not withdrawn</option></select>
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
	  				<a href="primeira_pagina.php"><input type="button" class="btn btn-primary" name="botao" value="Back"></a>
						<button type="submit" class="btn btn-primary" >Save</button>
					</div>
				</div>
			</div>
		</div>
							
			</form>							
	</section>

</body>
</html>

<script type="text/javascript" language="javascript">


	$(document).ready(function(){
         $('#txt_sales').mask("00/00/0000");
         $('#txt_etd').mask("00/00/0000");
         $('#txt_eta').mask("00/00/0000");
        
      }); 
</script> 

   
