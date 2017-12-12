<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Contabilidade Gonçalves</title>

    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/empresa.css">
    <link rel="stylesheet" href="assets/css/pagina-servicos.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <script src="https://use.fontawesome.com/1d232ea5d2.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
</head>
<body>
<section id="main">
    <?php  include("templates/header.php") ?>
    <section class="servicos">
        <div class="banner-servico">
            <div class="container">
                <h4>Conheça nossos serviços</h4>
                <p>Serviços realizados com excelência e competência.</p>
            </div>
        </div>
        <div class="container">
            <h4 class="text-center">Nossos serviços</h4>
            <ul class="lista-servicos">
                <a href="servicos/area-contabil.php">
                    <li>
                        <img src="assets/img/area-contabil.jpg">
                        <div>
                            <h5>Área Contabil</h5>
                            <p>Classificação e escrituração da Contabilidade de acordo com as normas e princípios contábeis vigentes;</p>
                            <p>Apuração de balancetes;</p>
                            <p>Elaboração do Balanço Anual e Demonstrativo de Resultados.</p>
                        </div>
                    </li>
                </a>
                <a href="servicos/area-fiscal.php">
                    <li>
                        <div>
                            <h5>Área Fiscal e Tributário</h5>
                            <p>Escrituração dos registros fiscais do IPI, ICMS, ISS e elaboração das guias de recolhimento dos tributos devidos;</p>
                        </div>
                        <img src="assets/img/area-fiscal.jpg">
                    </li>
                </a>
                <a href="#">
                    <li>
                        <img src="assets/img/imposto-renda.jpg">
                        <div>
                            <h5>Área trabalhista e previdenciária</h5>
                            <p>Orientação e controle de aplicação dos dispositivos legais vigentes;</p>
                            <p>Elaboração da Declaração Anual de Rendimentos e documentos correlatos;</p>
                        </div>
                    </li>
                </a>
                <a href="#">
                    <li>
                        <div>
                            <h5>Legislação societária e imposto de renda da pessoa jurídica</h5>
                            <p>Orientação e controle de aplicação dos preceitos da Consolidação das Leis do Trabalho, bem como aqueles pertinentes à Previdência Social, “PIS”, “FGTS” e outros aplicáveis em relação aos funcionários mantidos;</p>
                            <p>Manutenção dos registros de empregados e serviços correlatos;</p>
                            <p>Elaboração da folha de pagamento dos empregados e de pró-labore, bem como das guias de recolhimento dos encargos sociais e tributos afins;</p>
                        </div>
                        <img src="assets/img/area-trabalhista.jpg">
                    </li>
                </a>
            </ul>
        </div>
    </section>
    <?php include("templates/footer.php") ?>
</section>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>
</html>