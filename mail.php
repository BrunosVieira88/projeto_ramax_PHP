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
	  		$mail->Host ='localhost';
	  		$mail->SMTPAuth= false;
	  		$mail->SMTPAutoTLS = false;
	  		$mail->Username = 'brunosvtwo@gmail.com';
	  		$mail->Password = '1mag1ne01';
	  		$mail->port = 25;

	  		$mail->setFrom('brunosvtwo@gmail.com');
	  		$mail->addAddress('brunosvtwo@gmail.com');

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