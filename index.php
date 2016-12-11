<html>
	<head>
		<title>STCP - home</title>
		<meta chaset="utf-8">
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
              <input type="radio" aria-label="teste1" id="selectavg" name="sqls-geradas">
            </span>
            <div class="form-control">
              select avg (roleta_entrada) from Especificacao_Metro;
            </div>
          </div>
        </div>
				<div class="col-sm-offset-2 col-sm-4">
          <div class="input-group">
            <span class="input-group-addon">
              <input type="radio" aria-label="teste2" name="sqls-geradas">
            </span>
            <div class="form-control">
              select * from VLT where nome_Estacao like "%nome%";
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-offset-2 col-sm-8">
          <div class="input-group">
            <span class="input-group-addon" id="basic-addon1">Dado para o sql</span>
              <input type="text" class="form-control" placeholder="Dado para o sql" aria-describedby="basic-addon1" id="data">
            </span>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-offset-1 col-sm-10" id="response">
        </div>
      </div>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
      <script type="text/javascript" src="files/js/index.js"></script>
	</body>
</html>
