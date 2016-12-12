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
      <div class="row">
        <div class="col-sm-offset-1 col-sm-10">
          <h3>Alterar Imgem Endereco</h3>
        </div>
      </div>
      <form enctype="multipart/form-data" action="save_file.php" method="post">
        <div class="row">
          <div class="col-sm-offset-1 col-sm-5 form-group">
            <input type="email" class="form-control" id="estacao_nome" name="estacao_nome"  placeholder="Estacao_Nome">
          </div>
          <div class="col-sm-5 form-group">
            <input type="email" class="form-control" id="tipo_transporte" placeholder="Tipo_transporte">
          </div>
        <div class="row">
          <div class="col-sm-offset-3 col-sm-6 form-group">
            <input type="file" name="foto">
          </div>
        </div>
        <div class="row">
          <div class="col-sm-offset-1 col-sm-10">
            <input type="submit" class="btn btn-default">
          </div>
        </div>
      </form>
    </div>
  </body>
</html>
