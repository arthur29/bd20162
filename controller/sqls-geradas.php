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
    $dao_sqls_geradas = new SqlsGeradas ();
  }catch (Exception $e){
    error_log ("Erro na conexao com o banco de dados",0);
    die();
  }
  switch ($request['funcao']){
    case 'sql1':
      $result = $dao_sqls_geradas->sql1();
      
      $retorno = "<table class='table table-striped'>";
      $retorno .= "<tr> <th>Média de roletas de entradas</th></tr>";
      //var_dump ($result);
      //foreach ($result as $resu){
        $retorno .= "<tr>";
        $retorno .= "<td>";
        $retorno .= $result;
        $retorno .="</td>";
        $retorno .="</tr>";
      //}
      $retorno .= "</table>";
      echo $retorno;
      break;
  }

