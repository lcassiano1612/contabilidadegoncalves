<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Contabilidade Gonçalves</title>

		<link rel="stylesheet" href="assets/css/main.css">
		<link rel="stylesheet" href="assets/css/header.css">
		<link rel="stylesheet" href="assets/css/banner.css">
		<link rel="stylesheet" href="assets/css/servico.css">
		<link rel="stylesheet" href="assets/css/footer.css">
		<script src="https://use.fontawesome.com/1d232ea5d2.js"></script>

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
	</head>
	<body>
		<section id="main">
			<?php  include("templates/header.php") ?>
			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img height="500" class="d-block w-100" src="assets/img/banner.jpg" alt="First slide">
						<div class="banner carousel-caption d-none d-md-block">
							<h3>SUA CONTABILIDADE A QUALQUER<br> HORA E EM QUALQUER LUGAR</h3>
							<p>Somos uma empresa de serviços de contabilidade e assessoria especializada no atendimento online.</p>
						</div>
					</div>
					<div class="carousel-item">
						<img height="500" class="d-block w-100" src="assets/img/banner.jpg" alt="First slide">
						<div class="banner carousel-caption d-none d-md-block">
							<h3>SUA CONTABILIDADE A QUALQUER<br> HORA E EM QUALQUER LUGAR</h3>
							<p>Somos uma empresa de serviços de contabilidade e assessoria especializada no atendimento online.</p>
						</div>
					</div>
					<div class="carousel-item">
						<img height="500" class="d-block w-100" src="assets/img/banner.jpg" alt="First slide">
						<div class="banner carousel-caption d-none d-md-block">
							<h3>SUA CONTABILIDADE A QUALQUER<br> HORA E EM QUALQUER LUGAR</h3>
							<p>Somos uma empresa de serviços de contabilidade e assessoria especializada no atendimento online.</p>
						</div>
					</div>
				</div>
				<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
			<section class="empresa">
				<h3>Conheça a nossa empresa</h3>
				<hr>
				<p>Somos uma organização que tem por objetivo assessorar e atender às necessidades dos nossos clientes visando a redução direta de custos e maior lucratividade com os novos planejamentos gerenciais que permitam a tomada de decisões estratégicas.</p>
				<a href="empresa.php">saiba mais</a>
			</section>
			<section class="servico">
				<h3>Meus serviços</h3>
				<hr>
				<ul>
					<a href="servicos.php">
						<li>
							<i class="fa fa-bar-chart fa-5x" aria-hidden="true"></i>
							<h4>Área Contabil</h4>
							<!--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>-->
						</li>
					</a>
					<a href="servicos.php">
						<li>
							<i class="fa fa-area-chart fa-5x" aria-hidden="true"></i>
							<h4>Área Fiscal</h4>
							<!--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>-->
						</li>
					</a>
					<a href="servicos.php">
						<li>
							<i class="fa fa-bar-chart fa-5x" aria-hidden="true"></i>
							<h4>Imposto de renda</h4>
							<!--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>-->
						</li>
					</a>
					<a href="servicos.php">
						<li>
							<i class="fa fa-area-chart fa-5x" aria-hidden="true"></i>
							<h4>Área Trabalhista</h4>
							<!--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>-->
						</li>
					</a>
				</ul>
			</section>
			<?php include("templates/footer.php") ?>
		</section>
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
	</body>
</html>