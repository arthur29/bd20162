<?php
  require_once ("connection_factory.php");

  class SqlsGeradas {
    private $connectionFactory = null;
    private $connection = null;


    function __construct (){
      try{
        $this->connectionFactory = new ConnectionFactory();
        $this->connection = $this->connectionFactory->connection;
      }catch (Exception $e){
        throw new Exception ($e->getMessage());
      }
    }
    /*
    function sql1 (){
      $sql = "select Estacao_Nome from Especificacao_Metro";
      $result = $this->connection->query ($sql);
      $result = $result->media_roleta;
      if ($result == null){
        $result = 0;
      }
      //$i=0
      //foreach $result as $linha_banco {
      //  $object[$i] = new ModelClass ();
      //  $object->property = $linha_banco["property"];
      //}
      //return $object;
      return $result;
    }
*/
    function sql1 (){
      $sql = "select Estacao_Nome from Especificacao_Metro";
      $result = $this->connection->query ($sql);
      return $result->fetch_all();
    }

      function sql2 (){
          $sql = "select Estacao_Nome from Especificacao_Trem e join ramal r on e.ramal_nome = r.nome where r.nome = 'japeri'";
          $result = $this->connection->query ($sql);
          return $result->fetch_all();
      }

      function sql3 (){
          $sql = "select count(Estacao_Nome) from Especificacao_VLT RIGHT join Integracao_VLT on especificacao_vlt_estacao_nome = Estacao_Nome;";
          $result = $this->connection->query ($sql);
          return $result->fetch_all();
          }

      function sql4 (){
          $sql = "select m.Estacao_Nome from Especificacao_Metro m join Especificacao_Metro_Linha ml on m.Estacao_Nome = ml.Especificacao_Metro_Estacao_Nome join Linha l on ml.Linha_Nome = l.Nome where l.nome = 'vermelha';";
          $result = $this->connection->query ($sql);
          return $result->fetch_all();
      }

      function sql5 (){
          $sql = "select m.Estacao_Nome, ende.Bairro from Especificacao_Metro m join Estacao est on m.Estacao_Nome = est.Nome join Endereco ende on est.Nome = ende.Estacao_Nome where Elevador is not null;";
          $result = $this->connection->query ($sql);
          return $result->fetch_all();
      }

      function sql6 (){
          $sql = "select count(*) from Especificacao_VLT union select count(*) from Especificacao_Metro union select count(*) from Especificacao_Trem;";
          $result = $this->connection->query ($sql);
          return $result->fetch_all();
      }

      function sql7 (){
          $sql = "select avg(Bicicletário), Estacao_Nome from Especificacao_Trem group by Estacao_Nome;";
          $result = $this->connection->query ($sql);
          return $result->fetch_all();
      }

      function sql8 (){
          $sql = "select Estacao_Nome, max(Kilometragem) from Especificacao_Trem group by Estacao_Nome;";
          $result = $this->connection->query ($sql);
          return $result->fetch_all();
      }

      function sql9 (){
          $sql = "select Estacao_Nome from Especificacao_Metro having count(Elevador) > 2;";
          $result = $this->connection->query ($sql);
          return $result->fetch_all();
      }

      function sql10 (){
          $sql = "select Estacao_Nome, Tempo_volta from Especificacao_VLT where Tempo_volta in (select min(Tempo_volta) from Especificacao_VLT);";
          $result = $this->connection->query ($sql);
          return $result->fetch_all();
      }
  }
