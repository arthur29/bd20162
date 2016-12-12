<html>
	<head>
		<title>STCP - home</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="files/css/index.css"/>
	</head>
	<body>
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-offset-1 col-sm-10 text-center">
					<h1> STC - Sistema de transporte coletivo público </h1>
				</div>
			</div>
			<div class="row" id="home">
				<ul class="nav nav-tabs">
  				<li role="presentation" class="active"><a href="#home">Home</a></li>
  				<li role="presentation"><a href="#sqls-geradas">SQL's geradas</a></li>
  				<li role="presentation"><a href="#">Sua pesquisa</a></li>
  				<li role="presentation"><a href="#">Quem somos</a></li>
				</ul>
			</div>
			<div class="row">
				<div class="col-sm-offset-1 col-sm-10">
					<img src="files/images/logo.jpg" class="img-responsive" alt="Responsive image">
				</div>
			</div>
      <div class="row row-subtitle" id="sqls-geradas">
        <div class="col-sm-offset-4 col-sm-4 text-center">
          <h2> SQL's geradas</h2>
        </div>
      </div>
			<div class="row row-subtitle">

				<div class="col-sm-offset-1 col-sm-4">

                    <div class="input-group">
            <span class="input-group-addon">
              <input type="radio" aria-label="teste1" id="sql1" name="sqls-geradas">
            </span>
            <div class="form-control">
                Nomes de todas as linhas do metro
            </div>
          </div>

                    <div class="input-group">
            <span class="input-group-addon">
              <input type="radio" aria-label="teste3" id="sql3" name="sqls-geradas">
            </span>
                        <div class="form-control">
                            Número de estações de VLT que possuem integração
                        </div>
                    </div>

                    <div class="input-group">
            <span class="input-group-addon">
              <input type="radio" aria-label="teste6" id="sql6" name="sqls-geradas">
            </span>
                        <div class="form-control">
                            Quantidade de estações de cada tipo de transporte
                        </div>
                    </div>
        </div>

        <div class="col-sm-offset-2 col-sm-4">

          <div class="input-group">
            <span class="input-group-addon">
              <input type="radio" aria-label="teste2" id="sql2" name="sqls-geradas">
            </span>
            <div class="form-control">
                Estações do ramal Japeri
            </div>
          </div>

            <div class="input-group">
            <span class="input-group-addon">
              <input type="radio" aria-label="teste4" id="sql4" name="sqls-geradas">
            </span>
                <div class="form-control">
                    Estações da linha vermelha do metrô
                </div>
            </div>

         <div class="input-group">
            <span class="input-group-addon">
              <input type="radio" aria-label="teste5" id="sql5" name="sqls-geradas">
            </span>
                <div class="form-control">
                    Estações que possuem elevador e seus respectivos bairros
                </div>
            </div>

        </div>

      </div>
      <div class="row">
        <div class="col-sm-offset-2 col-sm-8">
          <div class="input-group">
            <span class="input-group-addon" id="basic-addon1">Dado para o sql</span>
              <input type="text" class="form-control" placeholder="Dado para o sql" aria-describedby="basic-addon1" id="data" value="olar">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-offset-1 col-sm-10" id="response">
        </div>
      </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script type="text/javascript" src="files/js/index.js"></script>
	</body>
</html>
