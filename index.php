<?php
	require_once("Vinho.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PROJETO PW III</title>
	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />
	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/style.css" />
</head>
<body>
	<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="col-md-7 col-md-push-5">
						<div class="booking-cta">
							<h1>CADASTRO DE VINHO</h1>
							<p>Um pequeno e simples site criado em PHP,ultilizando Programação Orientada a Objetos (POO),para cadastro de vinho,então aproveite e venha cadastrar o seu &#128521</p>
						</div>
					</div>
					<div class="col-md-4 col-md-pull-7">
						<div class="booking-form">
							<form method="post">
								<div class="form-group">
									<span class="form-label">Nome do vinho</span>
									<input class="form-control" type="text" name="nome" placeholder="Digite o nome do vinho">
								</div>
                                <div class="form-group">
									<span class="form-label">Tipo do vinho</span>
									<input class="form-control" type="text" name="tipo" placeholder="Digite o tipo do vinho">
								</div>
								<div class="row">
									<div class="col-sm-6">
										<div class="form-group">
                                        <span class="form-label">Preço</span>
									<input class="form-control" type="number" name="preco" placeholder="preço do vinho">
								</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
                                        <span class="form-label">Safra</span>
									<input class="form-control" type="number" name="safra" placeholder="Safra do vinho">
								</div>
									</div>
								</div>
								<div class="form-btn">
									<input type="submit" name="btn" value="Cadastrar" class="submit-btn" style="text-align:center">
								</div><br>
								<div>
									<?php
										$cad = new Vinho();
										if(isset($_POST['btn'])){   
											if($_POST['nome'] == "" || $_POST['tipo'] == "" || $_POST['preco'] == ""  || $_POST['safra'] == ""){   
												echo "<span style='color:red;'>PREENCHA OS CAMPOS CORRETAMENTE!</span>";
											}else{
												$cad->setNome($_POST['nome'])."<br/>";
												$cad->setTipo($_POST['tipo'])."<br/>";
												$cad->setPreco($_POST['preco'])."<br/>";
												$cad->setSafra($_POST['safra'])."<br/>";	
												$result1 = $cad->mostrarVinho();
												$result2 = $cad->verificarPreco($_POST['preco']);
												echo $result1.$result2.'<br/>';
											}
										}
									?>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>