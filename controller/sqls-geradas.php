<?php
  require_once ('../dao/sqls-geradas.php');
  $request = null;
  
  switch ($_SERVER['REQUEST_METHOD']){
    case 'GET':
      $request = $_GET;
      break;
    case 'POST':
      $request = $_POST;
      break;
  }
  try{
    $dao_sqls_geradas = new SQLS_GERADAS ();
  }catch (Exception $e){
    error_log ("Erro na conexao com o banco de dados",0);
    die();
  }
  switch ($request['funcao']){
    case 'sql1':
      $result = $dao_sqls_geradas->sql1();
      
      $string = "<table class='table table-striped'>";
      $string += "<tr> <th>Média de roletas de entradas</th></tr>";

      foreach ($result as $resu){
        $string += "<tr>";
        $string += "<td>";
        $string += $resu->media_roleta;
        $string +="</td>";
        $string +="</tr>";
      }
      $string += "</table>";
      break;
  }

