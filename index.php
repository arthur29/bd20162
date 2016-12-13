<html>
		<head>
			<title>STCP</title>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
			<link rel="stylesheet" href="files/css/animate.css"/>
			<link rel="stylesheet" href="files/css/index.css"/>
			<link rel="shortcut icon" type="image/png" href="files/images/icon.png"/>
		</head>
		<body>
			<nav class="navbar navbar-inverse " role="navigation">
			 <div class="container">
				<div class="navbar-header">
					<a class="navbar-brand" href="#">STCP</a>
					<ul class="nav navbar-nav">
						<li>
							<a href="#equipe">Equipe</a>
						</li>
					</ul>
					</div>
				</div>
			</nav>
			<div class="container-fluid banner">
				<div class="row">
					<div id="banner-texto" class="animated fadeIn">
						<h1> STCP - Sistema de Transporte Coletivo Público </h1>
					</div>
					<div id="banner-background" class="animated fadeIn">
						<img src="files/images/bg_vlt.jpg" >
					</div>
				</div>
			</div>

			<!--Home-->
			<div class="container-fluid pagina" id="home">
	      <div class="row row-subtitle text-center subtitle  wow fadeIn" data-wow-delay="0.5s" id="sqls-geradas">
	        <h2>Transporte sobre Trilhos no Rio de Janeiro</h2>
					<h4>O que quer saber?</h4>
	      </div>
				<!--Abre Selects-->
				<div class="row conteudo">
					<!--Esquerda-->
					<div class="col-sm-6 coluna">
	        	<div class="input-group wow fadeInLeft" data-wow-delay="0.5s">
	            <span class="input-group-addon">
	              <input type="radio" aria-label="teste1" id="sql1" name="sqls-geradas">
	            </span>
	          	<div class="form-control">
	                Nomes de todas as linhas do metro
	            </div>
	          </div>

	          <div class="input-group wow fadeInLeft" data-wow-delay="0.6s">
	            <span class="input-group-addon">
	              <input type="radio" aria-label="teste3" id="sql3" name="sqls-geradas">
	            </span>
	            <div class="form-control">
	            	Número de estações de VLT que possuem integração
							</div>
	          </div>

						<div class="input-group wow fadeInLeft" data-wow-delay="0.7s">
							<span class="input-group-addon">
								<input type="radio" aria-label="teste5" id="sql5" name="sqls-geradas">
							</span>
							<div class="form-control">
								Estações que possuem elevador e seus respectivos bairros
							</div>
						</div>

						<div class="input-group wow fadeInLeft" data-wow-delay="0.8s">
							<span class="input-group-addon">
								<input type="radio" aria-label="teste7" id="sql7" name="sqls-geradas">
							</span>
							<div class="form-control">
								Média de kilometros por estação de trem
							</div>
						</div>
						<div class="input-group wow fadeInLeft" data-wow-delay="0.9s">
							<span class="input-group-addon">
								<input type="radio" aria-label="teste9" id="sql9" name="sqls-geradas">
							</span>
							<div class="form-control">
								Estações de metrô que possuem mais de 2 elevadores
							</div>
						</div>
	        </div>
					<!--Direita-->
	        <div class="col-sm-6 coluna">
						<div class="input-group wow fadeInRight" data-wow-delay="0.5s">
	            <span class="input-group-addon">
	              <input type="radio" aria-label="teste2" id="sql2" name="sqls-geradas">
	            </span>
	            <div class="form-control">
	                Estações do ramal Japeri
	            </div>
	          </div>

						<div class="input-group wow fadeInRight" data-wow-delay="0.6s">
							<span class="input-group-addon">
								<input type="radio" aria-label="teste4" id="sql4" name="sqls-geradas">
							</span>
							<div class="form-control">
								Estações da linha vermelha do metrô
							</div>
						</div>

						<div class="input-group wow fadeInRight" data-wow-delay="0.7s">
							<span class="input-group-addon">
								<input type="radio" aria-label="teste6" id="sql6" name="sqls-geradas">
							</span>
							<div class="form-control">
								Quantidade de estações de cada tipo de transporte
							</div>
						</div>

						<div class="input-group wow fadeInRight" data-wow-delay="0.8s">
							<span class="input-group-addon">
								<input type="radio" aria-label="teste8" id="sql8" name="sqls-geradas">
							</span>
							<div class="form-control">
								Estação de trem que possui a maior kilometragem, e a sua kilometragem
							</div>
						</div>

						<div class="input-group wow fadeInRight" data-wow-delay="0.9s">
							<span class="input-group-addon">
								<input type="radio" aria-label="teste10" id="sql10" name="sqls-geradas">
							</span>
							<div class="form-control">
								Estação com menor tempo de volta e seu respectivo tempo
							</div>
						</div>

	        </div>
				<!--Fecha Selects-->
				</div>
				<!--Input que não sei para que serve-->
	      <div class="row">
	        <div class="col-sm-offset-2 col-sm-8">
	          <div class="input-group">
<!--	            <span  class="input-group-addon" id="basic-addon1">Dado para o sql</span>-->
	            <input type="hidden" class="form-control" placeholder="Dado para o sql" aria-describedby="basic-addon1" id="data" value="olar">
	          </div>
	        </div>
	      </div>
				<!--Área de resultados-->
	      <div class="row">
	        <div class="col-sm-offset-1 col-sm-10" id="response">

					</div>
	      </div>
				<div class="text-center subtitle  wow fadeIn" data-wow-delay="1.5s" id="equipe">
					<h2>Equipe</h2>

					<h4 class="wow fadeIn" data-wow-delay="1.7s">Arthur Gonçalves</h4>
					<h6 class="wow fadeIn" data-wow-delay="1.7s">Mineração de dados, Projeto Lógico e Desenvolvimento da Aplicação Web</h6>

					<h4 class="wow fadeIn" data-wow-delay="1.9s">Daniel Atkinson</h4>
					<h6 class="wow fadeIn" data-wow-delay="1.9s">Projeto Conceitual, Projeto Lógico e Autor do Artigo</h6>

					<h4 class="wow fadeIn" data-wow-delay="2.1s">Diego Rodrigues</h4>
					<h6 class="wow fadeIn" data-wow-delay="2.1s">Levantamento e organização de dados e Desenvolvimento da Aplicação Web</h6>

					<h4 class="wow fadeIn" data-wow-delay="2.3s">Diego Souza</h4>
					<h6 class="wow fadeIn" data-wow-delay="2.3s">Criação das Consultas em SQL</h6>

					<h4 class="wow fadeIn" data-wow-delay="2.5s">Karine Cardozo</h4>
					<h6 class="wow fadeIn" data-wow-delay="2.5s">Levantamento e organização de dados e Desenvolvimento da Aplicação Web</h6>
				</div>

				<div class="footer">

				</div>

				<!--Fecha a Home-->
			</div>



    		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
			<script type="text/javascript" src="files/js/wow.js"></script>
			<script>
				new WOW().init();
			</script>
			<script type="text/javascript" src="files/js/index.js"></script>
	</body>
</html>
