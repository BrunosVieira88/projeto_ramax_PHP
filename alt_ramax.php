<?php

session_start();

require_once('conexao.php');
//recebendo parametros 
	
	$id = filter_input(INPUT_POST, 'txt_id',FILTER_SANITIZE_NUMBER_INT);
	$fornecedor = filter_input(INPUT_POST, 'txt_fornecedor',FILTER_SANITIZE_STRING);
	$customer = filter_input(INPUT_POST, 'txt_customer',FILTER_SANITIZE_STRING);
	$sales = filter_input(INPUT_POST, 'txt_sales',FILTER_SANITIZE_STRING);
	$week = filter_input(INPUT_POST, 'txt_week',FILTER_SANITIZE_STRING);
	$financiadora = filter_input(INPUT_POST, 'txt_financiadora',FILTER_SANITIZE_STRING);
	$responsavel = filter_input(INPUT_POST, 'txt_responsavel',FILTER_SANITIZE_STRING);
	$seller = filter_input(INPUT_POST, 'txt_seller',FILTER_SANITIZE_STRING);
	$packer = filter_input(INPUT_POST, 'txt_packer',FILTER_SANITIZE_STRING);
	$buyer = filter_input(INPUT_POST, 'txt_buyer',FILTER_SANITIZE_STRING);
	$goods = filter_input(INPUT_POST, 'txt_goods',FILTER_SANITIZE_STRING);
	$loading = filter_input(INPUT_POST, 'txt_loading',FILTER_SANITIZE_STRING);
	$market = filter_input(INPUT_POST, 'txt_market',FILTER_SANITIZE_STRING);
	$discharging = filter_input(INPUT_POST, 'txt_discharging',FILTER_SANITIZE_STRING);
	$shipment = filter_input(INPUT_POST, 'txt_shipment',FILTER_SANITIZE_STRING);
	$load = filter_input(INPUT_POST, 'txt_load',FILTER_SANITIZE_STRING);
	$load_plant = filter_input(INPUT_POST, 'txt_load_plant',FILTER_SANITIZE_STRING);
	$freight = filter_input(INPUT_POST, 'txt_freight',FILTER_SANITIZE_STRING);
	$shipping = filter_input(INPUT_POST, 'txt_shipping',FILTER_SANITIZE_STRING);
	$booking = filter_input(INPUT_POST, 'txt_booking',FILTER_SANITIZE_STRING);
	$vessel = filter_input(INPUT_POST, 'txt_vessel',FILTER_SANITIZE_STRING);
	$container = filter_input(INPUT_POST, 'txt_container',FILTER_SANITIZE_STRING);
	$etd = filter_input(INPUT_POST, 'txt_etd',FILTER_SANITIZE_STRING);
	$eta = filter_input(INPUT_POST, 'txt_eta',FILTER_SANITIZE_STRING);
	$transhipment = filter_input(INPUT_POST, 'txt_transhipment',FILTER_SANITIZE_STRING);
	$transhipment_date = filter_input(INPUT_POST, 'txt_transhipment_date',FILTER_SANITIZE_STRING);
	$balance = filter_input(INPUT_POST, 'txt_balance',FILTER_SANITIZE_STRING);
	$comments = filter_input(INPUT_POST, 'txt_comments',FILTER_SANITIZE_STRING);
	$ramax_status = filter_input(INPUT_POST, 'txt_ramax_status',FILTER_SANITIZE_STRING);
	$dest = filter_input(INPUT_POST, 'txt_dest',FILTER_SANITIZE_STRING);


	$update  = "UPDATE tb_cadastro SET 
					

					responsavel = '$responsavel',
					referencia_fornecedor = '$fornecedor',
					customer = '$customer',
					sales_date = '$sales',
					financiadora= '$financiadora', 
					seller = '$seller',
					packer = '$packer',
					buyer ='$buyer',
					goods = '$goods',
					loading_port = '$loading',
					market= '$market',
					discharging_port= '$discharging',
					shipment= '$shipment',
					load_schedule= '$load',
					load_plant = '$load_plant',
					freight = '$freight',
					shipping_line ='$shipping',
					booking = '$booking',
					vessel = '$vessel',
					container = '$container',
					etd = '$etd',
					eta = '$eta',
					transhipment = '$transhipment',
					transhipment_date = '$transhipment_date',
					balance_payment = '$balance',
					load_comments = '$comments',
					ramax_status = '$ramax_status',
					pickup = '$dest'
					
					

							
						where id_processo='$id'	";

	// requisição ao banco de dados 

	$resultado1 = mysqli_query($mysqli,$update);


	// inserção no banco de dados 

	if(mysqli_affected_rows($mysqli)){
		$_SESSION['alterou']= "<p style='color:green';>Alterado com Sucesso!</p>";
		header("Location:con_direta.php?id=$id");

	}else{
		$_SESSION['alterou']= "<p style='color:red';>Não alterado!</p> ";
			header("Location:con_direta.php?id=$id");
	}