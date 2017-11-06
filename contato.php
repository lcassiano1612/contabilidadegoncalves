<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Contabilidade Gonçalves</title>

		<link rel="stylesheet" href="assets/css/header.css">
		<link rel="stylesheet" href="assets/css/contato.css">
		<link rel="stylesheet" href="assets/css/footer.css">
		<script src="https://use.fontawesome.com/1d232ea5d2.js"></script>

		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet">
	</head>
	<body>
		<section id="main">
			<?php  include("templates/header.php") ?>
			<section class="formulario">
				<h2 class="text-center">Contato</h2>
				<p class="text-center">Para entrar em contato preencha o formulario ou entre em contato via telefone e e-mail.</p>
				<form method="post" action="#">
					<div class="input-contato">
						<label>
							<span>Nome:</span> <br>
							<input class="input-form" type="text" name="nome">
						</label>
					</div>
					<div class="input-contato">
						<label>
							<span>Telefone:</span> <br>
							<input class="input-form" type="text" name="telefone">
						</label>
					</div>
					<div class="input-contato">
						<label>
							<span>E-mail:</span> <br>
							<input class="input-form" type="text" name="nome">
						</label>
					</div>
					<div class="input-contato">
						<label>
							<span>Mensagem:</span> <br>
							<textarea class="input-form"></textarea>
						</label>
					</div>
					<div class="input-contato">
						<input class="submit-form" type="submit" value="Enviar">
					</div>
				</form>
					
				</form>
			</section>
			<section class="mapa">
				<!--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3675.211130610153!2d-47.08580148503437!3d-22.90558218501237!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c8c89a36a457c3%3A0xacf4e6e557ae87fe!2sAv.+Bar%C3%A3o+de+Monte+Alegre%2C+5+-+Jardim+Bonfim%2C+Campinas+-+SP%2C+13032-525!5e0!3m2!1spt-BR!2sbr!4v1506839118849" frameborder="0" style="border:0" allowfullscreen></iframe>-->
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3679.0029865775937!2d-47.15021778542298!3d-22.765270438559007!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c895586120dd35%3A0x7e9c00ff9a15f8d4!2sAv.+Armelinda+Padula+Pietrobon%2C+121+-+Parque+Irmaos+Pedroso%2C+Paul%C3%ADnia+-+SP%2C+13140-000!5e0!3m2!1spt-BR!2sbr!4v1509932504060" frameborder="0" style="border:0" allowfullscreen></iframe>	
			</section>
			<?php include("templates/footer.php") ?>
		</section>
		<div id="login" class="modal">

		</div>
	</body>
</html>