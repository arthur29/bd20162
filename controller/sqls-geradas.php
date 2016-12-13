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
      
      $retorno = "<table class='table table-striped wow fadeIn'  data-wow-delay='0.2s'>";
      $retorno .= "<tr> <th>Nome das Linhas de Metrô</th></tr>";
        $retorno .= "<tr>";
        $retorno .= "<td class='wow fadeIn'  data-wow-delay='0.4s'>";
        foreach ($result as $res){
            $retorno .= $res[0]."<br/>";
        }
        $retorno .="</td>";
        $retorno .="</tr>";
      $retorno .= "</table>";
      echo $retorno;
      break;

     case 'sql2':
      $result = $dao_sqls_geradas->sql2();

      $retorno = "<table class='table table-striped wow fadeIn'  data-wow-delay='0.2s'>";
      $retorno .= "<tr> <th>Estações do ramal Japeri</th></tr>";
        $retorno .= "<tr>";
        $retorno .= "<td class='wow fadeIn'  data-wow-delay='0.4s'>";
        foreach ($result as $res){
            $retorno .= $res[0]."<br/>";
        }
        $retorno .="</td>";
        $retorno .="</tr>";
      $retorno .= "</table>";
      echo $retorno;
      break;

     case 'sql3':
      $result = $dao_sqls_geradas->sql3();

      $retorno = "<table class='table table-striped wow fadeIn'  data-wow-delay='0.2s'>";
      $retorno .= "<tr> <th>Número de estações de VLT que possuem integração</th></tr>";
        $retorno .= "<tr>";
        $retorno .= "<td class='wow fadeIn'  data-wow-delay='0.4s'>";
         foreach ($result as $res){
             $retorno .= $res[0]."<br/>";
         }
        $retorno .="</td>";
        $retorno .="</tr>";
      $retorno .= "</table>";
      echo $retorno;
      break;

     case 'sql4':
      $result = $dao_sqls_geradas->sql4();

      $retorno = "<table class='table table-striped wow fadeIn'  data-wow-delay='0.2s'>";
      $retorno .= "<tr> <th>Estações da linha vermelha do metrô</th></tr>";
        $retorno .= "<tr>";
        $retorno .= "<td class='wow fadeIn'  data-wow-delay='0.4s'>";
         foreach ($result as $res){
             $retorno .= $res[0]."<br/>";
         }
        $retorno .="</td>";
        $retorno .="</tr>";
      $retorno .= "</table>";
      echo $retorno;
      break;

     case 'sql5':
      $result = $dao_sqls_geradas->sql5();

      $retorno = "<table class='table table-striped wow fadeIn'  data-wow-delay='0.2s'>";
      $retorno .= "<tr> <th colspan='2'>Estações que possuem elevador e seus respectivos bairros</th></tr>";
        $retorno .= "<tr>";
        $retorno .= "<td class='wow fadeInLeft'  data-wow-delay='0.4s'>";
         foreach ($result as $res){
             $retorno .= $res[0]."<br/>";
         }
        $retorno .="</td>";
        $retorno .="<td class='wow fadeInRight'  data-wow-delay='0.6s'>";
         foreach ($result as $res){
             $retorno .= $res[1]."<br/>";
         }
        $retorno .="</td>";
        $retorno .="</tr>";
      $retorno .= "</table>";
      echo $retorno;
      break;

      case 'sql6':
      $result = $dao_sqls_geradas->sql6();

      $retorno = "<table class='table table-striped wow fadeIn'  data-wow-delay='0.2s'>";
      $retorno .= "<tr> <th>Quantidade de estações de cada tipo de transporte (VLT, Metrô, Trem)</th></tr>";
        $retorno .= "<tr>";
        $retorno .= "<td class='wow fadeIn'  data-wow-delay='0.4s'>";
         foreach ($result as $res){
             $retorno .= $res[0]."<br/>";
         }
        $retorno .="</td>";
        $retorno .="</tr>";
      $retorno .= "</table>";
      echo $retorno;
      break;

      case 'sql7':
          $result = $dao_sqls_geradas->sql7();

          $retorno = "<table class='table table-striped wow fadeIn'  data-wow-delay='0.2s'>";
          $retorno .= "<tr> <th>Média de kilometros por estação de trem</th></tr>";
          $retorno .= "<tr>";
          $retorno .= "<td class='wow fadeIn'  data-wow-delay='0.4s'>";
          foreach ($result as $res){
              $retorno .= $res[0]."<br/>";
          }
          $retorno .="</td>";
          $retorno .="</tr>";
          $retorno .= "</table>";
          echo $retorno;

      break;


      case 'sql8':
          $result = $dao_sqls_geradas->sql8();

          $retorno = "<table class='table table-striped wow fadeIn'  data-wow-delay='0.2s'>";
          $retorno .= "<tr> <th colspan='2'>Estação de trem que possui a maior kilometragem, e a sua kilometragem:</th></tr>";
          $retorno .= "<tr>";
          $retorno .= "<td class='wow fadeInLeft'  data-wow-delay='0.4s'>";
          foreach ($result as $res){
              $retorno .= $res[0]."<br/>";
          }
          $retorno .="</td>";
          $retorno .= "<td class='wow fadeInRight'  data-wow-delay='0.6s'>";
          foreach ($result as $res){
              $retorno .= $res[1]."<br/>";
          }
          $retorno .="</td>";
          $retorno .="</tr>";
          $retorno .= "</table>";
          echo $retorno;
      break;


      case 'sql9':
      $result = $dao_sqls_geradas->sql9();

      $retorno = "<table class='table table-striped wow fadeIn'  data-wow-delay='0.2s'>";
      $retorno .= "<tr> <th>Estacoes de metrô que possuem mais de dois elevadores</th></tr>";
        $retorno .= "<tr>";
        $retorno .= "<td class='wow fadeIn'  data-wow-delay='0.4s'>";
         foreach ($result as $res){
             $retorno .= $res[0]."<br/>";
         }
        $retorno .="</td>";
        $retorno .="</tr>";
      $retorno .= "</table>";
      echo $retorno;
      break;


      case 'sql10':
      $result = $dao_sqls_geradas->sql10();

      $retorno = "<table class='table table-striped wow fadeIn'  data-wow-delay='0.2s'>";
      $retorno .= "<tr> <th colspan='2'>Estação que possui o menor tempo de volta, e seu respectivo tempo</th></tr>";
        $retorno .= "<tr>";
        $retorno .= "<td class='wow fadeInLeft'  data-wow-delay='0.4s'>";
         foreach ($result as $res){
             $retorno .= $res[0]."<br/>";
         }
        $retorno .="</td>";
          $retorno .= "<td class='wow fadeInRight'  data-wow-delay='0.6s'>";
          foreach ($result as $res){
              $retorno .= $res[1]."<br/>";
          }
          $retorno .="</td>";
        $retorno .="</tr>";
      $retorno .= "</table>";
      echo $retorno;
      break;

  }

